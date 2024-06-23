import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";

import.meta.glob(["../img/**"]);

//test
console.log("Hello World!");

// SCRIPT MODALE

// intercetto tutti i bottoni di cancellazione
const deleteBtns = document.querySelectorAll(".delete-btn");
// console.log(deleteBtns);

if (deleteBtns.length > 0) {
    // per ogni bottone, avvia il listener del click
    deleteBtns.forEach((trashButton) => {
        // console.log(trashButton);

        // opzione preventDefault per evitare il reload della pagina
        trashButton.addEventListener("click", function (e) {
            e.preventDefault();
            // console.log("click apertura modale");

            //creazione modale in JS
            const modal = new bootstrap.Modal(
                document.getElementById("delete-modal")
            );
            // console.log(modal);

            // prelevo il titolo del fumetto attraverso il data attribute
            const comicTitle = trashButton.dataset.comicTitle;

            // compilo il messaggio dinamicamente in base al titolo del fumetto da cancellare
            document.getElementById(
                "modal-message"
            ).innerHTML = `Stai per cancellare il fumetto <span class="fw-bold text-danger">${comicTitle}</span>, vuoi proseguire?`;

            // aggiungo il listener sul bottone di conferma cancellazione
            document
                .getElementById("confirm-delete")
                .addEventListener("click", function () {
                    trashButton.parentElement.submit();
                });

            // metodo per mostrare il modale
            modal.show();
        });
    });
}
