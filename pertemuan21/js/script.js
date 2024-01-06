$(document).ready(function () {
  // Menghilangkan Tombol Cari
  $("#tombol-cari").hide();
  // Membuat Event Ketika Keyword ditulis
  $("#keyword").on("keyup", function () {
    // Memunculkan loading
    $(".loader").show();
    // AJAX Menggunkan Load
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
    // AJAX Menggunakan GET
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
