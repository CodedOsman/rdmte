const MotionSystem = {
    init() { this.setupScrollReveals(); },
    setupScrollReveals() {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('reveal-active'); revealObserver.unobserve(entry.target); } });
        }, { threshold: 0.15 });
        document.querySelectorAll('.reveal-on-scroll').forEach(target => {
            target.style.opacity = "0"; target.style.transform = "translateY(30px)";
            target.style.transition = "all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1)";
            revealObserver.observe(target);
        });
    }
};
const style = document.createElement('style');
style.innerHTML = `.reveal-active { opacity: 1 !important; transform: translateY(0) !important; }
@keyframes breathing { 0%, 100% { box-shadow: 0 0 20px rgba(253, 192, 3, 0.2); transform: scale(1); } 50% { box-shadow: 0 0 40px rgba(253, 192, 3, 0.5); transform: scale(1.02); } }
.animate-breathing { animation: breathing 3s ease-in-out infinite; }`;
document.head.appendChild(style);
document.addEventListener('DOMContentLoaded', () => MotionSystem.init());