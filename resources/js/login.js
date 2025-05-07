// Simulasi data login
const validUsername = "admin";
const validPassword = "admin";

// Mendapatkan elemen form dan input
const loginForm = document.getElementById('loginForm');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');

// Menangani proses login ketika form disubmit
loginForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan form untuk melakukan refresh halaman

    // Mengambil nilai username dan password dari input
    const username = usernameInput.value;
    const password = passwordInput.value;

    // Verifikasi username dan password
    if (username === validUsername && password === validPassword) {
        // Jika login berhasil, arahkan ke halaman dashboard
        window.location.href = 'dashboard.html'; // Arahkan ke halaman dashboard
    } else {
        // Jika login gagal, tampilkan alert
        alert("Username atau password salah!");
    }
});
