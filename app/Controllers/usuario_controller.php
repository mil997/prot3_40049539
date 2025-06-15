<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function _construct(){
        helper(['form', 'url']);

    }
    public function create(){
        $dato['titulo']='registro';
        . view('front/head_view',$data);
        . view('front/navbar_view')
        . view('back/usuario/registro')
        . view('front/footer_view');
    } 
    public function formValidation(){ 
        $imput = $this->validate([
            'nombre'    => 'required|min_length[3]',  
            'apellido'  => 'required|min_length[3]|max_length[25]';
            'usuario'   => 'required|min_length[3]',
            'email'     => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'      => 'required|min_length[3]|max_length[10]'
        ],
    );
    $formodel = new usuario_Model();

    if (!$imput) {
            $data['titulo']='registro';
            . view('front/head_view',$data);
            . view('front/navbar_view')
            . view('back/usuario/registro', ['validation' => $this->validator]);
            . view('front/footer_view');
    }

    else {
        $formModel->save([
            'nombre'    => $this->request->getVar('nombre')
            'apellido'  => $this->request->getVar('apellido')
            'usuario'   => $this->request->getVar('usuario')
            'email'     => $this->request->getVar('email')
            'pass'      => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)

                        // dar mensaje de exito o error //

            session()->setFlashdata('success', 'usuario registrado con exito');
            return $this-> response->redirect ('/login');
        ])
        
       }
    }
}