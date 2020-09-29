<?php namespace App\Models;

use CodeIgniter\Model;

class RamalModel extends Model {
    protected $table = 'tb_ramais';
    protected $primaryKey = 'id_ramal';
    protected $allowedFields = [
        'nm_responsavel', 'nr_numero', 'ds_setor'
    ];
    protected $returnType = 'object';

    public function listarOrdenadoPorNome() {
        $db = \Config\Database::connect();
        return $builder = $db->table('tb_ramais')
        ->orderBy('nm_responsavel', 'ASC')->get()
        ->getResultObject();
    }
}