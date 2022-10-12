<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Usuario;
  
class IniciadorSesiones extends Controller
{
    public function index()
    {
        helper(['form']);
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        return view('inicioSesion',$data);
    } 
    
    public function prueba(){
        $session = session();
        $userModel = new Usuario();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        print_r($password);
        print_r($data);
        $pass=$data['password'];
        print_r($pass);
        $authenticatePassword = password_verify($password, $pass);
        print_r($authenticatePassword);
    }

    public function loginAuth() //dar permisos dependiendo del nivel del ususario(usuario, administrador, etc.)
    {
        $session = session();
        $userModel = new Usuario();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'tipo_usuario' => $data['tipo_usuario'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/perfil');
            
            }else{
                $session->setFlashdata('msg', 'Contraseña incorrecta.');
                return redirect()->to('/inicioSesion');
            }
        }else{
            $session->setFlashdata('msg', 'Este correo no existe');
            return redirect()->to('/inicioSesion');
        }
    }
}