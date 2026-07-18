const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');
const logoutBtn = document.querySelector('.logout-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

// Cek apakah login berhasil dari PHP
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('login') === 'success') {
    container.classList.add('logged-in');
}

// Logout
logoutBtn.addEventListener('click', () => {
    container.classList.remove('logged-in');
    window.history.replaceState({}, document.title, 'form_login.php');
});