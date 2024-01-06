var item = prompt(
  "masukkan nama makanan atau minuman : \n (cth: nasi, daging, susu, hamburger, soda)"
);

switch (item) {
  case "nasi":
  case "daging":
  case "susu":
    alert("makanan / minuman SEHAT !");
    break;
  case "hamburger":
  case "soda":
    alert("makanan /minuman TIDAK SEHAT !");
    break;
  default:
    alert("anda memasukkan makanan / minuman yang salah !");
    break;
}
