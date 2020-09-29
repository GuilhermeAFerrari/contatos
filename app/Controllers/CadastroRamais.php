<?php namespace App\Controllers;

class CadastroRamais extends BaseController
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
        // E.g.:
		$this->session = \Config\Services::session();
    }

    public function listarRamais()
	{
        $ramalModel = new \App\Models\RamalModel();
        $data['ramais'] = $ramalModel->listarOrdenadoPorNome();
        $data['titulo'] = 'Agenda - Ramais';
        $data['msg'] = $this->session->getFlashdata('msg');
		return view('view_list_registro_extensions', $data);
    }

    public function cadastrarRamal()
	{
        $data['titulo'] = 'Agenda - Cadastrar Ramal';
        $data['acao'] = 'Inserir';
        $data['retorno'] = 'ramais';
        $data['msg'] = '';
        $data['erros'] = '';

        if($this->request->getMethod() == 'post') {

            $ramalModel = new \App\Models\RamalModel();
            $ramalModel->set('nm_responsavel', strtoupper($this->request->getPost('nm_responsavel')));
            $ramalModel->set('nr_numero', $this->request->getPost('nr_numero'));
            $ramalModel->set('ds_setor', $this->request->getPost('ds_setor'));

            if($ramalModel->insert()) {
                //deu certo
                $data['msg'] = 'Inserido com sucesso';
            }
            else {
                //nao deu certo
                $data['msg'] = 'Erro ao inserir';
                $data['erros'] = $ramalModel->errors();
            }
        }

		return view('view_insert_extensions', $data);
    }

    public function editarRamal($id)
    {
        $data['titulo'] = 'Agenda - Editar Ramal';
        $data['acao'] = 'Editar';
        $data['msg'] = '';
        $data['retorno'] = 'ramais';

        $ramalModel = new \App\Models\RamalModel();
        $ramal = $ramalModel->find($id);

        if($this->request->getMethod() === 'post') {
            //quando o form for submetido
            $ramal->nm_responsavel = strtoupper($this->request->getPost('nm_responsavel'));
            $ramal->nr_numero = $this->request->getPost('nr_numero');
            $ramal->ds_setor = $this->request->getPost('ds_setor');

            if($ramalModel->update($id, $ramal)) {
                $data['msg'] = 'Alterado com sucesso';
            }
            else {
                $data['msg'] = 'Erro ao alterar';
                $data['erros'] = $ramalModel->errors();
            }
        }

        $data['ramal'] = $ramal;
        return view('view_insert_extensions', $data);
    }

    public function excluirRamal($id = null)
    {
        if(is_null($id)) {
            //redirecionar para a view de usuários - 'view_list_estoque'
            //definir uma msg via sessao
            $this->session->setFlashdata('msg', 'Item não encontrado');
            return redirect()->to(base_url('ramais'));
        }

        /*$password = $this->request->getPost('password');
        var_dump($password);*/

        //if($password == 'a2020') {
            $ramalModel = new \App\Models\RamalModel();
            $data['titulo'] = 'Agenda - Excluir ramal';
            $data['acao'] = 'Excluir registro';

            if($ramalModel->delete($id)) {
                $this->session->setFlashdata('msg', 'Item excluído com sucesso');
            }
            else {
                $this->session->setFlashdata('msg', 'Erro ao excluir item');
            }
        /*}
        else {
            $this->session->setFlashdata('msg', 'Senha incorreta');
        }  */ 

        return redirect()->to(base_url('ramais'));
    }

    public function confirmarSenha($id)
    {
        if(is_null($id)) {
            //redirecionar para a view de usuários - 'view_list_estoque'
            //definir uma msg via sessao
            $this->session->setFlashdata('msg', 'Item não encontrado');
            return redirect()->to(base_url('ramais'));
        }
        $data['id'] = $id;
        $data['titulo'] = 'Agenda - Excluir ramal';
        return view('view_delete_extensions', $data);
    }
}