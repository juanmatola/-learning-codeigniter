class InfoModal{
    constructor(modalId, labelId, bodyId){
    this.modalId = modalId;
    this.modal = document.getElementById(modalId);
    this.label = document.getElementById(labelId);
    this.body = document.getElementById(bodyId);
    }

    show(label, body, icon){
    this.label.innerHTML = label;
    this.body.innerHTML = `<div>${icon}</div></br> ${body}`;
    $('#' + this.modalId).modal('show');
    }
};

let possibleResponses = {
insert: {ok: 'success', err: 'file_err'},
delete: {ok: 'success', err: 'err'},
};

let infoModal = new InfoModal('infoModal', 'infoModalLabel', 'infoModalBody');
let url = new URL(document.URL);

if (!(url.search === '')){
    let getResponse = url.searchParams;
    let insertResponse = getResponse.get('insert');
    let deleteResponse = getResponse.get('delete');

    switch (insertResponse) {
        case possibleResponses.insert.ok:
            infoModal.show('Éxito', 'Los datos se han guardado correctamente.', '<i class="far fa-check-circle text-success"></i>');
        break;
    
        case possibleResponses.insert.err:
            infoModal.show('Ups..', 'Asegurate de que el archivo que intentas subir: <br><br> - Pesa menos de 3Mb. <br><br> - Es un archivo permitido (.png , .jpeg, .jpg).', '<i class="fas fa-exclamation-circle text-danger"></i>');
        break;

        default:
        break;
    }

    switch (deleteResponse) {
        case possibleResponses.delete.ok:
            infoModal.show('Éxito', 'Los datos se han eliminado correctamente.', '<i class="far fa-check-circle text-success"></i>');
        break;
    
        case possibleResponses.delete.err:
            infoModal.show('Ups..', 'Ocurrió algún error al intentar eliminar el post, si el error persiste comunícate con el soporte', '<i class="fas fa-exclamation-circle text-danger"></i>');
        break;

        default:
        break;
    }

}

function updateFormOpen(id){
    let form = document.getElementById('updatepostform');
    form.action = '/admin/savepost?id='+id;
}
function deleteModalOpen(id){
    let deleteModalButton = document.getElementById('deleteModalButton');
    deleteModalButton.href = '/admin/deletepost?id='+id;
}