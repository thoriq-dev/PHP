// Ambil Elemen-elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambahkan Event Ketika Keyword Pencarian ditulis
keyword.addEventListener("keyup", function () {
  //   Membuat Object AJAX
  var xhr = new XMLHttpRequest();
  // Check Kesiapan AJAX
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };
  // Eksekusi AJAX
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});
