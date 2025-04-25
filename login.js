document.getElementById('login-form').addEventListener('submit', function (e) {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const error = document.getElementById('login-error');

    if (!email || !password) {
        e.preventDefault();
        error.textContent = 'Por favor, completa todos los campos.';
    }
});
