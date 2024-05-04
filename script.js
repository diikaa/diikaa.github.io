// Contoh menggunakan Firebase Authentication
const auth = firebase.auth();

// Contoh fungsi untuk mendaftar pengguna baru
function registerUser(email, password) {
  auth.createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
      // Berhasil mendaftarkan pengguna baru
      const user = userCredential.user;
      console.log("Pengguna berhasil didaftarkan:", user);
    })
    .catch((error) => {
      // Terjadi kesalahan saat mendaftarkan pengguna baru
      const errorCode = error.code;
      const errorMessage = error.message;
      console.error("Kesalahan saat mendaftarkan pengguna:", errorCode, errorMessage);
    });
}

// Panggil fungsi registerUser
registerUser("contoh@email.com", "password");