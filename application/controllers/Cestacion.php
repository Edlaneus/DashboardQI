<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cestacion extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mdash');
	}

	public function index()
	{
				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altaproducto');
				$this->load->view('assets/footer');
		//$this->load->view('login');
	}

	function ini(){

				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altaproducto');
				$this->load->view('assets/footer');  
	}

	
	function valida(){   
		$this->form_validation->set_rules('correo', 'Correo', 'valid_email|required');	
		$this->form_validation->set_rules('clave', 'Clave', 'trim|required');	

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        }else{
			$correo = $this->input->post('correo');
			$clave = $this->input->post('clave');
			$res = $this->mdash->getCliente($correo,$clave);

			if (!isset($res)){
				$this->load->view('login');
			}

			else{
				$this->session->set_userdata('usuario',$res);
				
				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altaproducto');
				$this->load->view('assets/footer');  
			}        	
        }
	}

	function logueo(){
		$this->load->view('login');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	function nvoUsuario(){
		$this->load->view('registro');
	}


	function newUsuario(){

		$this->form_validation->set_rules('nom', 'Nombre completo', 'required');
		$this->form_validation->set_rules('correo', 'Correo', 'valid_email|required|is_unique[usuarios.Correo]');	
		$this->form_validation->set_rules('clave', 'Clave', 'trim|required|matches[confclave]');
		$this->form_validation->set_rules('confclave', 'Confirmar clave', 'required');		

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registro');
        } else {
          
			$mail = $this->input->post('correo');
			$nomb = $this->input->post('nom');
			$cve = $this->input->post('clave');

	        $datos['Nombre']   = $nomb;
	        $datos['Correo']   = $mail;

	        // Generacion de salt aleatoreo, de 22 caracteres para Bcrypt
	        $salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);

	        // Se cambian los '+' así que los vamos a reemplazar por puntos.
			$salt = strtr($salt, array('+' => '.')); 

			// Se genera el password hash
			$datos['Password'] = crypt($cve, '$2y$10$' . $salt);
	        $this->mestacion->altaUsuario($datos);
	        $this->load->view('login',array("mensaje"=>"Usuario agregado correctamente"));
        } 
	}



	function getArticulos($categoria){
		$this->session->set_userdata('categoria',$categoria);   // Almacenamos la categoria seleccionada en 
                                                                // la variable de sesion: categoria

		$articulos = $this->mdash->getArticulos($categoria); // Obtenemos todos los articulo de la categoria
        $data['articulos']=$articulos;

		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('Productos',$data); // Pasamos los articulo encontrados a la vista: galeria
		$this->load->view('assets/footer');
	}

	function altes(){

				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altaproducto');
				$this->load->view('assets/footer');  
	}

	function addproducto(){
		$this->form_validation->set_rules('nom', 'Nombre', 'required');
		$this->form_validation->set_rules('idcat', 'IdCategoria', 'required');
		$this->form_validation->set_rules('precio', 'Precio', 'required');
		$this->form_validation->set_rules('img', 'imagen', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                		 
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('altaproducto');
			$this->load->view('assets/footer');  
        }
        else
        {
			$datos['Nombre']=$this->input->post("nom");
			$datos['IdCategoria']=$this->input->post("idcat");
			$datos['Precio']=$this->input->post("precio");
			$datos['Descripción']=$this->input->post("des");
			$datos['imagen']=$this->input->post("img");
			$datos['estado']=$this->input->post("est");
			
			move_uploaded_file($_FILES['$img']['tmp_name'], 'images/'.$_FILES['$img']['name']);

		    $this->mdash->agregaproducto($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('Productos',array("mensaje"=>"Agregado correctamente"));
			$this->load->view('assets/footer');  
	    }
	}

	function listaproductos(){
		$datos['articulos'] = $this->mdash->getproductos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('Productos',$datos); 
			$this->load->view('assets/footer');  
	}	
	
	function editproducto($id){
		$datos['articulos'] = $this->mdash->getproducto($id);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('editar',$datos); 
			$this->load->view('assets/footer'); 
      
	}	

    function actualizaproducto(){
        	$id = $this->input->post("idArticulo"); 
			$datos['Nombre']=$this->input->post("name");
			$datos['IdCategoria']=$this->input->post("idcat");
			$datos['Precio']=$this->input->post("precio");
			$datos['Descripción']=$this->input->post("des");
			$datos['imagen']=$this->input->post("img");
			$datos['estado']=$this->input->post("est");

	    $this->mdash->updateproducto($datos,$id);    	
	    $this->listaproductos();
    }
    
	function deleteproducto($id){
	    $this->mdash->delproducto($id);	
	    $this->listaproductos();		
	}
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------

//Funciones de Promociones
	function banner(){

				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('banner');
				$this->load->view('assets/footer');  
	}
 
	function addpromo(){
		$this->form_validation->set_rules('nom', 'Nombre', 'required');
		$this->form_validation->set_rules('img', 'imagen', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                		 
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('banner');
			$this->load->view('assets/footer');  
        }
        else
        {
			$datos['Nombre']=$this->input->post("nom");
			$datos['imagen']=$this->input->post("img");
			

		    $this->mdash->agregapromo($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('banner',array("mensaje"=>"Agregado correctamente"));
			$this->load->view('assets/footer');  
	    }
	}

	function listapromo(){
		$datos['promociones'] = $this->mdash->getpromos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('verpromo',$datos); 
			$this->load->view('assets/footer');  
	}	
	
	function editpromo($id){
		$datos['promociones'] = $this->mdash->getpromo($id);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('editpromo',$datos); 
			$this->load->view('assets/footer'); 
      
	}	

    function actualizapromos(){
        	$id = $this->input->post("IdPromo"); 
			$datos['Nombre']=$this->input->post("name");
			$datos['imagen']=$this->input->post("img");

	    $this->mdash->updatepromo($datos,$id);    	
	    $this->listapromo();
    }
    
	function deletepromos($id){
	    $this->mdash->delpromo($id);	
	    $this->listapromo();		
	}  
//----------------------------------------------------------------------------------------------------------------------------	
//----------------------------------------------------------------------------------------------------------------------------	
//----------------------------------------------------------------------------------------------------------------------------
//Funciones de Cursos
	function cursos(){

				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altacurso');
				$this->load->view('assets/footer');  
	}


	function addcurso(){
		$this->form_validation->set_rules('nom', 'nombre_curso', 'required');
		$this->form_validation->set_rules('des', 'descripcion_curso', 'required');
		$this->form_validation->set_rules('finicio', 'finicio_curso', 'required');
		$this->form_validation->set_rules('ffinal', 'ffinal_curso', 'required');
		$this->form_validation->set_rules('hora', 'hora', 'required');
		$this->form_validation->set_rules('cupos', 'cupos_curso', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                		 
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('altacurso');
			$this->load->view('assets/footer');  
        }
        else
        {
			$datos['nombre_curso']=$this->input->post("nom");
			$datos['descripcion_curso']=$this->input->post("des");
			$datos['finicio_curso']=$this->input->post("finicio");
			$datos['ffinal_curso']=$this->input->post("ffinal");
			$datos['hora']=$this->input->post("hora");
			$datos['cupos_curso']=$this->input->post("cupos");
			$datos['estado']=$this->input->post('est');
			

		    $this->mdash->agregacurso($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('cursos');
			$this->load->view('assets/footer');  
	    }
	}

	function listacursos(){
		$datos['cursos'] = $this->mdash->getcursos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('cursos',$datos); 
			$this->load->view('assets/footer');  
	}	
	
	function editcurso($id){
		$datos['cursos'] = $this->mdash->getcurso($id);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('editcurso',$datos); 
			$this->load->view('assets/footer'); 
      
	}	

    function actualizacurso(){
        	$id_curso = $this->input->post("id_curso"); 
			$datos['nombre_curso']=$this->input->post("nom");
			$datos['descripcion_curso']=$this->input->post("des");
			$datos['finicio_curso']=$this->input->post("finicio");
			$datos['ffinal_curso']=$this->input->post("ffinal");
			$datos['cupos_curso']=$this->input->post("cupos");
			$datos['estado']=$this->input->post("est");

	    $this->mdash->updatecurso($datos,$id_curso);    	
	    $this->listacursos();
    }
    
	function deletecurso($id){
	    $this->mdash->delcurso($id);	
	    $this->listacursos();		
	}

}