<!DOCTYPE html>
<html lang="pt-br">

<?php echo view('view_menu'); ?>

<head>
    <title><?php echo $titulo?></title>
    <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>

<?php if($_SESSION['administrador'] == true) { ?>
<div class="buttonList">
  <a class="btn btn-info" href="<?php echo base_url('inserir-ramal')?>">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
    </svg>
  Adicionar Ramal
  </a>
</div>
<?php } ?>

<?php if(isset($msg)) {
  echo '<div class="alert alert-secondary" role="alert">' . $msg . '</div>';
 }?>

<div class="tableList">
  <table class="table table-sm" id="table">
    <thead class="thead-light">
      <tr>
        <?php if($_SESSION['administrador'] == true) { ?>
        <th scope="col">Ações</th>
        <?php } ?>
        <!--<th scope="col">ID</th>-->
        <th scope="col">Reponsável</th>
        <th scope="col">Departamento</th>
        <th scope="col">Número</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($ramais as $ramal) : ?>
        <tr>
          <?php if($_SESSION['administrador'] == true) { ?>
          <th scope="row">
            <a href="<?php echo base_url('confirmar-excluir-ramal/' . $ramal->id_ramal)?>">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
              </svg>
            </a>
            <a href="<?php echo base_url('editar-ramal/' . $ramal->id_ramal)?>">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
              </svg>
            </a>
          </th>
          <?php } ?>
          <th scope="col"><?php echo $ramal->nm_responsavel ?></th>
          <td><?php echo $ramal->ds_setor ?></td>
          <td><?php echo $ramal->nr_numero ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
</body>
<script>
    $(document).ready( function () {
        $('#table').DataTable({
            "language": {
            "lengthMenu": "Exibir _MENU_ registros por página",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Exibindo página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "Pesquisar:",
            
                "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
                }
            }
        });
    } );
</script>
</html>
