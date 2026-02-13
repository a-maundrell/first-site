'use strict';

// FOR COPYING EMAIL TO CLIPBOARD ON CONTACT PAGE
document.addEventListener('DOMContentLoaded', function() {
    const copyEmailBtn = document.getElementById('copy-email');
    if (copyEmailBtn) {
        copyEmailBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const email = 'info@alex-maundrell.dev';
            navigator.clipboard.writeText(email)
                .then(function() {
                    alert('Email copied to clipboard: ' + email);
                })
                .catch(function(err) {
                    console.error('Could not copy text: ', err);
                });
        });
    }

    // FOR CLOSING THE OVERLAY ON CONTACT PAGE
    const overlay = document.querySelector('.overlay');
    if (overlay) {
        overlay.addEventListener('click', function() {
            overlay.classList.add('hidden');
        });
    }
    
    // FORM RADIO BUTTON VALIDATION
    const humanCheckElements = document.querySelectorAll('input[name="human_check"]');
    if (humanCheckElements.length > 0) {
        const form = humanCheckElements[0].closest('form');
        if (form) {
            form.addEventListener('submit', function(event) {
                const selected = document.querySelector('input[name="human_check"]:checked');
                if (!selected || selected.value !== 'motorcycle') {
                    event.preventDefault();
                    alert('Please pick the motorcycle to verify you are human.');
                }
            });
        }
    }
});