document
  .getElementById("tanggal_checkin")
  .addEventListener("input", calculateTotal);
document
  .getElementById("tanggal_checkout")
  .addEventListener("input", calculateTotal);
document
  .getElementById("tipe_kamar")
  .addEventListener("change", calculateTotal);

function calculateTotal() {
  var checkinDate = new Date(document.getElementById("tanggal_checkin").value);
  var checkoutDate = new Date(
    document.getElementById("tanggal_checkout").value
  );
  var hargaPerMalam = 0;

  switch (document.getElementById("tipe_kamar").value) {
    case "Deluxe Suite":
      hargaPerMalam = 500000;
      break;
    case "Premier Suite":
      hargaPerMalam = 1000000;
      break;
    case "Executive Suite":
      hargaPerMalam = 1500000;
      break;
  }

  var totalHarga =
    hargaPerMalam * ((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
  document.getElementById("totalDisplay").innerText =
    "Rp. " + totalHarga.toLocaleString();
}

function redirectToBook(roomType) {
  window.location.href = "user.php?room=" + roomType;
}
function redirectToLogin(roomType) {
  window.location.href = "authentication.php?room=";
}
