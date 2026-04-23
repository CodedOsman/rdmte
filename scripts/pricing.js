/**
 * Roadmate Pricing Estimator
 */
const PricingEstimator = {
    init() {
        this.serviceSelect = document.getElementById('service-select');
        this.vehicleSelect = document.getElementById('vehicle-select');
        this.display = document.getElementById('price-display');

        if (this.serviceSelect && this.vehicleSelect && this.display) {
            this.bindEvents();
            this.calculate();
        }
    },

    bindEvents() {
        [this.serviceSelect, this.vehicleSelect].forEach(el => {
            el.addEventListener('change', () => this.calculate());
        });
    },

    calculate() {
        const base = parseFloat(this.serviceSelect.value);
        const multiplier = parseFloat(this.vehicleSelect.value);
        const total = Math.round(base * multiplier);
        
        // Stoic counter animation
        this.animateValue(this.display, parseInt(this.display.innerText), total, 500);
    },

    animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
};

document.addEventListener('DOMContentLoaded', () => PricingEstimator.init());