import '@tabler/core/dist/js/tabler.min.js';
import IMask from 'imask';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-phone-mask]').forEach((el) => {
        IMask(el, {
            mask: [
                { mask: '(00) 0000-0000' },
                { mask: '(00) 00000-0000' },
            ],
        });
    });
});