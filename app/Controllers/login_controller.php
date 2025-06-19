<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']); // corregido 'fomr' → 'form'

        $dato['titulo'] = 'login';

        return view('front/head_view', $dato)
             . view('front/navbar_view')
             . view('back/usuario/login')
             . view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first(); // corregido 'firts()' → 'first()'

        if ($data) {
            $pass = $data['pass']; // agregado punto y coma
            $ba = $data['baja'];

            if ($ba == "SI") {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_controller');
            }

            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => true
                ];

                $session->set($ses_data);
                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Password incorrecta');
                return redirect()->to('/login_controller');
            }
        } else {
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/login_controller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}