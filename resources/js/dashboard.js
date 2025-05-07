// JavaScript for dashboard functionality
function logout() {
    alert("Anda telah keluar.");
    window.location.href = '{{ route('login') }}'; // Redirect to login page
}