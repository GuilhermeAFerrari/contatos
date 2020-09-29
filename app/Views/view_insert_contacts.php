<!DOCTYPE html>
<html lang="pt-br">

<?php echo view('view_menu'); ?>

<title><?php echo $titulo?></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
    .tableList {
        margin: 24px;
        text-align: center;
        display: block;
    }

    .formList {
        margin-left: 35%;
        max-width: 400px;
    }

    .buttonList {
        margin-left: 24px;
        margin-top: 12px;
        margin-bottom: 12px;
    }

    input {
        margin-bottom: 12px !important;
    }
</style>

    <?php if(!empty($msg)) { ?>
        <div class="alert alert-info" role="alert">
            <?php echo $msg; ?>
        </div>
    <?php } ?>

    <form method="post">
        <div class="buttonList">
        <button class="btn btn-info" type="submit">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z"/>
                </svg>
            <?php echo $acao ?>
            </button>
            <a class="btn btn-info" href="<?php echo base_url($retorno)?>">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
            Voltar
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="formList">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="nomeResponsavel">Nome do contato</label>
                            <input type="text" name="nm_contato" class="form-control" placeholder="Insira o nome do contato" required="Insira o nome do contato" value="<?php echo isset($registro) ? $registro->nm_contato : '' ?>">
                        </div>
                        <div class="col-md-9">
                            <label for="numeroRamal">Cidade do contato</label>
                            <input type="text" name="nm_cidade" class="form-control" placeholder="Insira a cidade do contato (opcional)" value="<?php echo isset($registro) ? $registro->nm_cidade : '' ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="descricaoDepartamento">UF</label>
                            <input type="text" name="nm_uf" class="form-control" placeholder="UF" value="<?php echo isset($registro) ? $registro->nm_uf : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="descricaoDepartamento">Nome da empresa</label>
                            <input type="text" name="nm_empresa" class="form-control" placeholder="Insira o nome da empresa (opcional)" value="<?php echo isset($registro) ? $registro->nm_empresa : '' ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="descricaoDepartamento">DDD</label>
                            <input type="text" maxlength="2" name="nm_ddd1" class="form-control" placeholder="Insira o DDD" required="Insira o DDD" value="<?php echo isset($registro) ? $registro->nm_ddd1 : '' ?>">
                        </div>
                        <div class="col-md-8">
                            <label for="descricaoDepartamento">Telefone primário</label>
                            <input type="text" name="ds_telefone1" class="form-control" placeholder="Insira o telefone primário" required="Insira o telefone primário" value="<?php echo isset($registro) ? $registro->ds_telefone1 : '' ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="descricaoDepartamento">DDD Secundário</label>
                            <input type="text" maxlength="2" name="nm_ddd2" class="form-control" placeholder="Insira o DDD" value="<?php echo isset($registro) ? $registro->nm_ddd2 : '' ?>">
                        </div>
                        <div class="col-md-8">
                            <label for="descricaoDepartamento">Telefone secundário</label>
                            <input type="text" name="ds_telefone2" class="form-control" placeholder="Telefone secundário (opcional)" value="<?php echo isset($registro) ? $registro->ds_telefone2 : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="descricaoDepartamento">Anotação</label>
                            <textarea type="text" name="ds_observacao" class="form-control" placeholder="Insira alguma anotação (opcional)"><?php echo isset($registro) ? $registro->ds_observacao : '' ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
