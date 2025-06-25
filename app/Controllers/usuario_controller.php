<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        // Muestra el formulario
        $dato['titulo'] = 'registro';
        return view('front/head_view', $dato)
             . view('front/navbar_view')
             . view('back/usuario/registro') // Asegurate de que exista esta vista
             . view('front/footer_view');
    }

    public function formValidation()
    {
        // Validación de campos
        $isValid = $this->validate([
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'usuario'   => 'required|min_length[3]',
            'email'     => 'required|min_length[3]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'      => 'required|min_length[3]|max_length[10]'
        ]);

        if (!$isValid) {
            // Devuelve a la vista con errores
            return view('front/head_view')
                 . view('front/navbar_view')
                 . view('back/usuario/registro', ['validation' => $this->validator])
                 . view('front/footer_view');
        }

        // Guardar datos
        $model = new usuario_Model();
        $model->save([
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'usuario'   => $this->request->getPost('usuario'),
            'email'     => $this->request->getPost('email'),
            'pass'      => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'perfil_id' => 2, // Cliente por defecto
            'baja'      => 'NO'
        ]);

        // Mensaje y redirección
        session()->setFlashdata('success', 'Usuario registrado con éxito');
        return redirect()->to('/login');
    }
}