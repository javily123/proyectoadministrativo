document.getElementById('register-form').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const errorMessage = document.getElementById('error-message');

    if (password !== confirmPassword) {
        errorMessage.textContent = "Las contraseñas no coinciden.";
        return;
    }
    this.submit();
});
