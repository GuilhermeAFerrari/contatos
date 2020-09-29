<?php namespace App\Controllers;

class CadastroAdm extends BaseController
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

    public function validar()
	{
        $data['titulo'] = 'Agenda - Acesso Adm';
		return view('view_acesso_administrador', $data);
    }
    
    public function validarSenha()
	{        
        if($this->request->getMethod() === 'post') {
			$password = $this->request->getPost('password');

			if($password == '2020rch') {
				$_SESSION['administrador'] = true;
				return redirect()->to(base_url('/'));
			}
			else {
			    $data['msg'] = 'Senha incorreta!';
		        return view('view_acesso_administrador', $data);
			}
		}
	}
}