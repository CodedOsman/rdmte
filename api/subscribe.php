<?php
/**
 * Roadmate Lead Capture API
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $honeypot = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_STRING);
    $isAjax = filter_input(INPUT_POST, 'ajax', FILTER_SANITIZE_STRING) === '1';

    $respond = function($status, $message) use ($isAjax) {
        if ($isAjax) {
            header('Content-Type: application/json');
            if ($status === 'error') http_response_code(400);
            echo json_encode(['status' => $status, 'message' => $message]);
        } else {
            header("Location: ../index.php?subscribe=" . ($status === 'success' ? 'success' : 'error') . "&msg=" . urlencode($message));
        }
        exit;
    };

    // 1. Bot Protection (Honeypot)
    if (!empty($honeypot)) {
        $respond('success', 'Thank you! Email received.');
    }

    // 2. Rate Limiting (Advanced Anti-Spam)
    $ip = $_SERVER['REMOTE_ADDR'];
    $limitFile = "../data/ratelimits/" . md5($ip) . ".txt";
    $currentTime = time();
    $limitWindow = 3600; // 1 hour
    $maxSubmissions = 5; // Max 5 per hour per IP

    $attempts = [];
    if (file_exists($limitFile)) {
        $attempts = explode("\n", file_get_contents($limitFile));
        // Filter out old attempts
        $attempts = array_filter($attempts, function($t) use ($currentTime, $limitWindow) {
            return ($currentTime - (int)$t) < $limitWindow;
        });
    }

    if (count($attempts) >= $maxSubmissions) {
        $respond('error', 'Too many attempts. Please try again later.');
    }

    if ($email) {
        $file = '../data/leads.csv';
        
        // 3. Duplicate Check
        if (file_exists($file)) {
            $handle = fopen($file, 'r');
            if ($handle) {
                while (($row = fgetcsv($handle)) !== false) {
                    if (isset($row[1]) && strtolower($row[1]) === strtolower($email)) {
                        fclose($handle);
                        $respond('success', 'You are already on our waitlist!');
                    }
                }
                fclose($handle);
            }
        }

        // 4. Save Data
        $timestamp = date('Y-m-d H:i:s');
        $data = [$timestamp, $email, $ip];
        
        $handle = fopen($file, 'a');
        if ($handle) {
            fputcsv($handle, $data);
            fclose($handle);
            
            // 5. Update Rate Limit file
            $attempts[] = $currentTime;
            file_put_content($limitFile, implode("\n", $attempts));
            
            $respond('success', 'Thank you! Email received.');
        } else {
            $respond('error', 'Could not save data.');
        }
    } else {
        $respond('error', 'Invalid email address.');
    }
} else {
    header('Content-Type: application/json');
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
}
