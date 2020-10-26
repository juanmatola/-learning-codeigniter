<div class="row">
    <div class="col-md-6 col-12 text-center text-md-left"><h1>Posts</h1></div>
    <div class="col-md-6 col-12 text-center text-md-right my-2"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">+ Nuevo Post</button></div>
</div>

<table class="table">
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
  <?php for ($i=0; $i < 8; $i++) { ?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td>Mark</td>
      <td class="mobile-none">Otto</td>
      <td><img src="https://via.placeholder.com/150" class="img-fluid"></td>
      <td>
        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
        <button type="button" class="btn btn-success my-2 my-md-0"><i class="far fa-edit"></i></button>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>