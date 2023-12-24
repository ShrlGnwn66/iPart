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


// Pop Up Form
const DataOpenBtn = document.querySelector("#data_open");
const DataPopup = document.querySelector(".data_popup");
const DataKeluhan = document.querySelector(".data_keluhan");
const DataCloseBtn = document.querySelector(".data_close");

DataOpenBtn.addEventListener("click", () => {
    DataPopup.classList.add("show");
    overlay.style.display = "block";
});
DataCloseBtn.addEventListener("click", () => {
    DataPopup.classList.remove("show");
    overlay.style.display = "none";
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
