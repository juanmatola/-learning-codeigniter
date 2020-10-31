<div class="row">
    <div class="col-md-6 col-12 text-center text-md-left"><h1>Posts</h1></div>
    <div class="col-md-6 col-12 text-center text-md-right my-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">+ Nuevo Post</button></div>
</div>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th class="mobile-none" scope="col">Descripción</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($posts as $post) { ?>
    <tr>
      <th scope="row"><?php echo $post['id'];?></th>
      <td><?php echo $post['title']; ?></td>
      <td class="mobile-none"><?php echo $post['description']; ?></td>
      <td class="table-img"><img src="<?php echo base_url().'/writable/uploads/portfolio/'.$post['image']; ?>" class="img-fluid"></td>
      <td>
        <!-- <a class="btn btn-danger" href="<?php echo base_url().'/admin/deletepost?id='.$post['id']; ?>" ><i class="far fa-trash-alt"></i></a> -->
        <button type="button" class="btn btn-danger my-2" data-toggle="modal" data-target="#deleteModal" onclick="deleteModalOpen('<?php echo $post['id']; ?>')"><i class="far fa-trash-alt"></i></button>
        <button type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#updateModal" onclick="updateFormOpen('<?php echo $post['id']; ?>')"><i class="far fa-edit"></i></button>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<div class="container">
  <?= $pager->links('group1','bootstrap_pager') ?>
</div>

<script>
  function updateFormOpen(id){
    let form = document.getElementById('updatepostform');
      form.action = '/admin/savepost?id='+id;
  }
  function deleteModalOpen(id){
    let deleteModalButton = document.getElementById('deleteModalButton');
    deleteModalButton.href = '/admin/deletepost?id='+id;
  }

  class InfoModal{
        constructor(modalId, labelId, bodyId){
          this.modalId = modalId;
          this.modal = document.getElementById(modalId);
          this.body = document.getElementById(labelId);
          this.label = document.getElementById(bodyId);
        }

        show(label, body){
          this.label.innerHTML = label;
          this.body.innerHTML = body;
          $('#' + this.modalId).modal('show');
        }
    };

    let possibleResponses = {
      insert: {ok: 'success', err: 'file_err'},
      delete: {ok: 'success', err: 'err'},
    }

    let infoModal = new InfoModal('infoModal', 'infoModalLabel', 'infoModalBody');
    let url = new URL(document.URL);

    if (!(url.search === '')){
      let getResponse = url.searchParams;
      let insertResponse = getResponse.get('insert');
      let deleteResponse = getResponse.get('delete');

      switch (insertResponse) {
        case possibleResponses.insert.ok:
          console.log('insert okay');
          break;
      
        case possibleResponses.insert.err:
          console.log('insert error');
          break;

        default:
          break;
      }

      switch (deleteResponse) {
        case possibleResponses.delete.ok:
          console.log('delete okay');
          
          break;
      
        case possibleResponses.delete.err:
          console.log('delete error');
          
          break;

        default:
          break;
      }

    }


    let modalaa = document.getElementById('infoModal');
    console.log('aca abajo')
    console.log(modalaa)

</script>