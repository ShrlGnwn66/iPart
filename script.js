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

formOpenBtn.addEventListener("click", () => popup.classList.add("show"));
formCloseBtn.addEventListener("click", () => popup.classList.remove("show"));