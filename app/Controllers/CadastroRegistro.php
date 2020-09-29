<?php namespace App\Controllers;

class CadastroRegistro extends BaseController
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

    public function listarRegistros()
	{
        $registroModel = new \App\Models\RegistroModel();
        $data['registros'] = $registroModel->listarOrdenadoPorNome();
        $data['titulo'] = 'Agenda - Contatos';
        $data['msg'] = $this->session->getFlashdata('msg');
		return view('view_list_registro_contacts', $data);
    }
    
    public function cadastrarContato()
	{
        $data['titulo'] = 'Agenda - Cadastrar Contato';
        $data['acao'] = 'Inserir';
        $data['retorno'] = '/';
        $data['msg'] = '';
        $data['erros'] = '';

        if($this->request->getMethod() == 'post') {

            $registroModel = new \App\Models\RegistroModel();
            $registroModel->set('nm_contato', strtoupper($this->request->getPost('nm_contato')));
            $registroModel->set('nm_cidade', $this->request->getPost('nm_cidade'));
            $registroModel->set('nm_uf', strtoupper($this->request->getPost('nm_uf')));
            $registroModel->set('nm_empresa', $this->request->getPost('nm_empresa'));
            $registroModel->set('nm_ddd1', $this->request->getPost('nm_ddd1'));
            $registroModel->set('nm_ddd2', $this->request->getPost('nm_ddd2'));
            $registroModel->set('ds_telefone1', $this->request->getPost('ds_telefone1'));
            $registroModel->set('ds_telefone2', $this->request->getPost('ds_telefone2'));
            $registroModel->set('ds_observacao', $this->request->getPost('ds_observacao'));

            if($registroModel->insert()) {
                //deu certo
                $data['msg'] = 'Inserido com sucesso';
            }
            else {
                //nao deu certo
                $data['msg'] = 'Erro ao inserir';
                $data['erros'] = $registroModel->errors();
            }
        }

		return view('view_insert_contacts', $data);
    }
    
    public function editarRegistro($id)
    {
        $data['titulo'] = 'Agenda - Editar Contato';
        $data['acao'] = 'Editar';
        $data['msg'] = '';
        $data['retorno'] = '/';

        $registroModel = new \App\Models\RegistroModel();
        $registro = $registroModel->find($id);

        if($this->request->getMethod() === 'post') {
            //quando o form for submetido
            $registro->nm_contato = strtoupper($this->request->getPost('nm_contato'));
            $registro->nm_cidade = $this->request->getPost('nm_cidade');
            $registro->nm_uf = strtoupper($this->request->getPost('nm_uf'));
            $registro->nm_empresa = $this->request->getPost('nm_empresa');
            $registro->nm_ddd1 = $this->request->getPost('nm_ddd1');
            $registro->nm_ddd2 = $this->request->getPost('nm_ddd2');
            $registro->ds_telefone1 = $this->request->getPost('ds_telefone1');
            $registro->ds_telefone2 = $this->request->getPost('ds_telefone2');
            $registro->ds_observacao = $this->request->getPost('ds_observacao');

            if($registroModel->update($id, $registro)) {
                $data['msg'] = 'Alterado com sucesso';
            }
            else {
                $data['msg'] = 'Erro ao alterar';
                $data['erros'] = $registroModel->errors();
            }
        }

        $data['registro'] = $registro;
        return view('view_insert_contacts', $data);
    }

    public function excluirRegistro($id = null)
    {
        if(is_null($id)) {
            //redirecionar para a view de usuários - 'view_list_estoque'
            //definir uma msg via sessao
            $this->session->setFlashdata('msg', 'Item não encontrado');
            return redirect()->to(base_url('/'));
        }

        /*$password = $this->request->getPost('password');
        var_dump($password);*/

        //if($password == 'a2020') {
            $registroModel = new \App\Models\RegistroModel();
            $data['titulo'] = 'Agenda - Excluir registro';
            $data['acao'] = 'Excluir registro';

            if($registroModel->delete($id)) {
                $this->session->setFlashdata('msg', 'Item excluído com sucesso');
            }
            else {
                $this->session->setFlashdata('msg', 'Erro ao excluir item');
            }
        /*}
        else {
            $this->session->setFlashdata('msg', 'Senha incorreta');
        }  */ 

        return redirect()->to(base_url('/'));
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
        $data['titulo'] = 'Agenda - Excluir registro';
        return view('view_delete_registro', $data);
    }
}