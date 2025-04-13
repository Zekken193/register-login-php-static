document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector('form');

    form.addEventListener('submit', e => {
        let isValid = true;
        const fields = form.querySelectorAll('input, select, textarea');

        fields.forEach(field => {
            field.classList.remove('is-invalid');
            const oldError = field.parentNode.querySelector('.invalid-feedback');
            if (oldError) oldError.remove();

            const value = field.value.trim();
            let errorMsg = '';

            if (['fname', 'mdname', 'lname'].includes(field.name) && value && !/^[A-Za-z\s]+$/.test(value)) {
                errorMsg = 'Only letters and spaces are allowed.';
            }
            if (field.name === 'contact' && value && !/^(09\d{9}|63\d{10})$/.test(value)) {
                errorMsg = 'Contact must be 09xxxxxxxxx or 63xxxxxxxxxx format.';
            }
            if (field.name === 'email' && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                errorMsg = 'Please enter a valid email address.';
            }
            if (!field.checkValidity()) {
                errorMsg = field.validationMessage;
            }

            if (errorMsg) {
                isValid = false;
                field.classList.add('is-invalid');
                const errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.innerText = errorMsg;
                field.parentNode.appendChild(errorDiv);
            }
        });

        if (!isValid) {
            e.preventDefault();
            e.stopPropagation();
        }
    });
});
