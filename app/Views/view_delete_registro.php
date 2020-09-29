<!DOCTYPE html>
<html lang="pt-br">
    
<?php echo view('view_menu'); ?>

<title><?php echo $titulo?></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <div class="container">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well">Excluir o registro</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post">
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <input type="hidden" name="id" value="<?php echo $id;?>" />
                                <div class="alert alert-danger">
                                    Confirma a exclusão do registro?
                                <!--<label>Insira a senha para a exclusão do registro</label>
                                <input type="text" name="password" id="password" required="">-->
                                </div>
                                <div class="form actions">
                                    <a href="<?php echo base_url('excluir-registro/' . $id) ?>" type="submit" class="btn btn-info">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    Excluir
                                    </a>
                                    <a href="<?php echo base_url('/') ?>" type="button" class="btn btn-info">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                    Voltar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>