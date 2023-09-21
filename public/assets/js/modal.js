function openModal() {
    var modalContainer = document.querySelector(".modal-container");
    modalContainer.classList.remove("hidden");
}

function closeModal() {
    var modalContainer = document.querySelector(".modal-container");
    modalContainer.classList.add("hidden");
}

window.addEventListener("click", function(event) {
    var modalContainer = document.querySelector(".modal-container");
    if (event.target === modalContainer) {
        closeModal();
    }
});

document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        closeModal();
    }
});

