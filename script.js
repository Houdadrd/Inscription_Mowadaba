document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les sélecteurs déroulants
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);

    // Initialiser les modales
    var modalElems = document.querySelectorAll('.modal');
    var modalInstances = M.Modal.init(modalElems);
});
