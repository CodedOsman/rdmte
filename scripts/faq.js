/**
 * Roadmate FAQ Accordion
 */
const FAQAccordion = {
    init() {
        this.items = document.querySelectorAll('.faq-item');
        if (this.items.length > 0) {
            this.bindEvents();
        }
    },

    bindEvents() {
        this.items.forEach(item => {
            const toggle = item.querySelector('.faq-toggle');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');

            toggle.addEventListener('click', () => {
                const isOpen = item.classList.contains('faq-open');
                
                // Close others
                this.items.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('faq-open');
                        other.querySelector('.faq-answer').style.maxHeight = '0';
                        other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                        other.querySelector('.faq-icon').style.backgroundColor = '';
                    }
                });

                // Toggle current
                if (isOpen) {
                    item.classList.remove('faq-open');
                    answer.style.maxHeight = '0';
                    icon.style.transform = 'rotate(0deg)';
                    icon.style.backgroundColor = '';
                } else {
                    item.classList.add('faq-open');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                    icon.style.backgroundColor = '#FDC003';
                }
            });
        });
    }
};

document.addEventListener('DOMContentLoaded', () => FAQAccordion.init());