<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Usuario;
  
class CreadorSesiones extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        return view('creacionSesion', $data);
    }
  
    public function almacenarSesion()
    {
        helper(['form']);
        $rules = [
            'email'         => 'required|min_length[4]|max_length[100]|is_unique[usuario.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'name'          => 'required|min_length[2]|max_length[50]|alpha',
            'confirmpassword'  => 'required|matches[password]'
        ];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        if($this->validate($rules)){
            $usuarios = new Usuario();
            $data = [
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'name'     => $this->request->getVar('name')
            ];
            $usuarios->save($data);

            $correo = \Config\Services::email();
            $correo->setTo($this->request->getVar('email'),);
            $correo->setFrom('administracion@comparador.com', 'Confirmación de registro.');
            $correo->setSubject($asunto = "Usted se ha registrado en comparador.com");
            $correo->setMessage($msg = "Hola ". $this->request->getVar('name') . " Bienvenido");
            $correo->send();

            return redirect()->to('/inicioSesion');
        }else{
            $data['validation'] = $this->validator;
            echo view('creacionSesion', $data);
        }
          
    }
  
}