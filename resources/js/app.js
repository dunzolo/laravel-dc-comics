import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const buttons_delete = document.querySelectorAll('.delete-button[type="submit"]');

buttons_delete.forEach((button) => {
    button.addEventListener('click', function (event) {
        // evitiamo che venga cancellato subito il record dal database
        event.preventDefault();

        // recupero il nome della pasta dal data attribut title
        const title = button.getAttribute('data-title');

        // recupero la modale tramite id
        const modal = document.getElementById('delete-modal');

        //creo una modale con i metodi di bootstrap a partire da quella realizzata nel file modal.blade.php
        const bootstrap_modal = new bootstrap.Modal(modal);

        // mostro la modale
        bootstrap_modal.show();

        // inserisco il titolo
        const item_title = modal.querySelector('#modal-item-title');
        item_title.innerText = title;

        // recupero il pulsante di cancellazione
        const confirm_delete = modal.querySelector('#confirm-delete');

        confirm_delete.addEventListener('click', () => {
            button.parentElement.submit();
        })

    })
})