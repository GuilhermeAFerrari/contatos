<?php namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model {
    protected $table = 'tb_registros';
    protected $primaryKey = 'id_contato';
    protected $allowedFields = [
        'nm_contato', 'nm_cidade', 'nm_uf', 'nm_empresa', 'nm_ddd1', 'nm_ddd2', 'ds_telefone1',
        'ds_telefone2', 'ds_observacao'
    ];
    protected $returnType = 'object';

    public function listarOrdenadoPorNome() {
        $db = \Config\Database::connect();
        return $builder = $db->table('tb_registros')
        ->orderBy('nm_contato', 'ASC')->get()
        ->getResultObject();
    }
}