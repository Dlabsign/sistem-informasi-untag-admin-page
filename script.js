function generateNIM() {
  // Ambil input terakhir dari field NIM
  var lastNIM = document.getElementById("nim").value;

  // Pisahkan NIM berdasarkan spasi
  var parts = lastNIM.split(" ");

  // Ambil angka terakhir dari NIM
  var lastNumber = parseInt(parts[0]);

  // Tambah 1 pada angka terakhir
  var newNumber = lastNumber + 1;

  // Format ulang angka dengan padding nol di depan (misal: 146222071)
  var newNIM = newNumber.toString().padStart(parts[0].length, "0");

  // Isi kembali field NIM dengan NIM yang baru
  document.getElementById("nim").value = newNIM + " " + parts[1];
}
