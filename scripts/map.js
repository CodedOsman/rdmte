const MapSimulation = {
    carPosition: { x: 65, y: 50 }, targetPosition: { x: 45, y: 52 }, isMoving: true,
    init() { this.updateMarker(); if (this.isMoving) this.startSimulation(); },
    startSimulation() {
        const moveStep = 0.05;
        const animate = () => {
            if (!this.isMoving) return;
            const dx = this.targetPosition.x - this.carPosition.x, dy = this.targetPosition.y - this.carPosition.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            if (distance > 0.5) {
                this.carPosition.x += (dx / distance) * moveStep; this.carPosition.y += (dy / distance) * moveStep;
                this.updateMarker(); requestAnimationFrame(animate);
            } else { this.isMoving = false; }
        };
        requestAnimationFrame(animate);
    },
    updateMarker() {
        const marker = document.querySelector('.provider-marker');
        if (marker) { marker.style.left = `${this.carPosition.x}%`; marker.style.top = `${this.carPosition.y}%`; }
    }
};
document.addEventListener('DOMContentLoaded', () => { if (document.querySelector('#hero')) MapSimulation.init(); });