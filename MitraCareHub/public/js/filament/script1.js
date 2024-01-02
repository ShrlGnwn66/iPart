//  Input Select
$(document).ready(function () {
    $("#nama_mitra, #pilih_mitra").select2({
        dropdownPosition: "below",
        minimumInputLength: 1,
    });
});

// Pop Up Form
const formOpenBtn = document.querySelector("#form_open");
const popup = document.querySelector(".popup");
const formKeluhan = document.querySelector(".form_keluhan");
const formCloseBtn = document.querySelector(".form_close");
const overlay = document.querySelector(".overlay");

formOpenBtn.addEventListener("click", () => {
    popup.classList.add("show");
    overlay.style.display = "block";
});
formCloseBtn.addEventListener("click", () => {
    popup.classList.remove("show");
    overlay.style.display = "none";
});


// Pop Up Data Keluhan
const DataOpenBtn = document.querySelector("#data_open");
const DataPopup = document.querySelector(".data_popup");
const DataKeluhan = document.querySelector(".data_keluhan");
const DataCloseBtn = document.querySelector(".data_close");

// Cek apakah status pop-up disimpan di localStorage
const isPopupOpen = localStorage.getItem("isPopupOpen");

// Jika status pop-up ada dan bernilai "true", tampilkan pop-up saat halaman dimuat
if (isPopupOpen && isPopupOpen === "true") {
    DataPopup.classList.add("show");
    overlay.style.display = "block";
}

DataOpenBtn.addEventListener("click", () => {
    // Saat tombol dibuka, simpan status "true" di localStorage
    localStorage.setItem("isPopupOpen", "true");

    DataPopup.classList.add("show");
    overlay.style.display = "block";
});

DataCloseBtn.addEventListener("click", () => {
    // Saat tombol ditutup, hapus status dari localStorage
    localStorage.removeItem("isPopupOpen");

    DataPopup.classList.remove("show");
    overlay.style.display = "none";
    window.location.href = '/';
});



// Show Filter
document.addEventListener('DOMContentLoaded', function () {
    var filterButton = document.getElementById('toggleFilter');
    var inputFilter = document.querySelector('.input_filter');
    var arrowDown = document.querySelector('.arrow_down');
    var arrowUp = document.querySelector('.arrow_up');



    inputFilter.style.display = 'none';
    arrowUp.style.display = 'none';

    filterButton.addEventListener('click', function () {
        if (inputFilter.style.display === 'none' || inputFilter.style.display === '') {
            inputFilter.style.display = 'block';
            arrowDown.style.display = 'none';
            arrowUp.style.display = 'inline-block';
        } else {
            inputFilter.style.display = 'none';
            arrowDown.style.display = 'inline-block';
            arrowUp.style.display = 'none';
        }
    });
});
