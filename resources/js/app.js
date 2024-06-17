import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";

import.meta.glob(["../img/**"]);

document.addEventListener(function () {
    // Listener per i pulsanti di eliminazione
    document.querySelectorAll(".delete-button").forEach((button) => {
        button.addEventListener("click", function () {
            selectedComicId = button.getAttribute("data-bs-comic-id");
        });
    });

    // Listener per il pulsante di conferma della cancellazione
    document
        .getElementById("confirmDeleteButton")
        .addEventListener("click", function () {
            if (selectedComicId) {
                const deleteForm = document.getElementById("deleteForm");
                deleteForm.action = `/comics/${selectedComicId}`;
                deleteForm.submit();
            }
        });
});
