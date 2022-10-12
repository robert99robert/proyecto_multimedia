<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Usuario;
  
class CerradorSesiones extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        return view('formularioCierreSesion', $data);
    }
    
    public function cierreSesion(){

        $session = session();
        
        if ($this->request->getVar('conditions')==1 and $this->request->getVar('sendForm')!=null):
            $session = session_destroy();
            $data['cabecera'] = view('template/cabecera');
            $data['navbar'] = view('template/navbar');
            $data['info'] = view('template/info');
            $data['piepagina'] = view('template/piepagina');
            //return view('main',$data);
            return redirect()->to('/');//al utilizar el método get y post, puedo redirigirme hacia una vista establecida en otra función
        else:
            return redirect()->to('/formularioCierreSesion');
        endif;
    }
    /*public function almacenarSesion()
    {
        helper(['form']);
        $rules = [
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuario.email]',
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
            return redirect()->to('/inicioSesion');
        }else{
            $data['validation'] = $this->validator;
            echo view('creacionSesion', $data);
        }
          
    }*/
  
}