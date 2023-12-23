//  Input Select
$(document).ready(function () {
    $("#nama_mitra").select2({
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