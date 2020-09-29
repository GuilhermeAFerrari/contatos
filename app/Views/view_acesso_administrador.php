<!DOCTYPE html>
<html lang="pt-br">
    
<?php echo view('view_menu'); ?>

<title><?php echo $titulo?></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <div class="container">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="well">Acessar como administrador da agenda</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('validar-senha'); ?>">
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Insira a senha de administrador</label>
                                <input type="text" name="password"required="">
                            <?php if(isset($msg)) { ?>
                            <div class="alert alert-dark" role="alert">
                                Senha incorreta.
                            </div>
                            <?php } ?>
                            </div>
                            <div class="form actions">
                                <button type="submit" class="btn btn-info">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                                    </svg>
                                Acessar
                                </button>
                                <a href="<?php echo base_url('/') ?>" type="button" class="btn btn-info">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                Voltar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>