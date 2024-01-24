import './bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
]);
import * as bootstrap from 'bootstrap';


document.addEventListener('DOMContentLoaded', (event) => {
    const deleteModal = document.getElementById('deleteModal');

    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const projectSlug = button.getAttribute('data-slug'); 
            const modal = this;
            const deleteForm = document.getElementById('deleteForm');
            deleteForm.setAttribute('action', '/admin/projects/' + projectSlug);
        });
    }
});

