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
		$datos['articulos'] = $this->mdash->getproductos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('Productos',$datos); 
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
		$this->form_validation->set_rules('pro', 'proveedor', 'required');

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
			$datos['proveedor']=$this->input->post("pro");
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
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('Productos'); 
			$this->load->view('assets/footer');  
	}

	function getprod(){
		$datos= $this->mdash->getproductos();


		$res['data'] = $datos;
    	echo json_encode($res); 
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
			$datos['proveedor']=$this->input->post("pro");
			$datos['estado']=$this->input->post("est");

	    $this->mdash->updateproducto($datos,$id);    	
	    $this->listaproductos();
    }
    
	function deleteproducto($id){
	    $this->mdash->delproducto($id);	
	    $this->listaproductos();		
	}


//---------------------------------------------------------------------------------
	//*--------------------- Funciones Promociones ----------------------------*//
//---------------------------------------------------------------------------------

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
			$datos['descripcion']=$this->input->post("des");
			$datos['imagen']=$this->input->post("img");
			$datos['fechaini']=$this->input->post("fechaini");
			$datos['fechafin']=$this->input->post("fechafin");
			$datos['horaini']=$this->input->post("horaini");
			$datos['horafin']=$this->input->post("horafin");
			

		    $this->mdash->agregapromo($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('banner',array("mensaje"=>"Agregado correctamente"));
			$this->load->view('assets/footer');  
	    }
	}

	function listapromo(){
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('verpromo'); 
			$this->load->view('assets/footer');  
	}	
	
	function getpromociones(){
		$datos= $this->mdash->getpromos();
		foreach ($datos as $row) {
		$Imagen = '';
		if($row["Imagen"] != '')
		{
			$Imagen = '<img src="images/'.$row['Imagen'].'" class ="img-responsive img-thumbnail" width:"75" height:"75" />';
		}			
		}



		$res['data'] = $datos;
    	echo json_encode($res); 
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
			$datos['descripcion']=$this->input->post("des");
			$datos['imagen']=$this->input->post("img");
			$datos['fechaini']=$this->input->post("fechaini");
			$datos['fechafin']=$this->input->post("fechafin");
			$datos['horaini']=$this->input->post("horaini");
			$datos['horafin']=$this->input->post("horafin");

	    $this->mdash->updatepromo($datos,$id);    	
	    $this->listapromo();
    }
    
	function deletepromos($id){
	    $this->mdash->delpromo($id);	
	    $this->listapromo();		
	}  


//---------------------------------------------------------------------------------
	//*--------------------- Funciones Cursos ----------------------------*//
//---------------------------------------------------------------------------------

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
			$datos['horaini']=$this->input->post("horaini");
			$datos['horafin']=$this->input->post("horafin");
			$datos['cupomax']=$this->input->post("cupomax");
			$datos['cupodis']=$this->input->post("cupodis");
			$datos['estado']=$this->input->post('est');
			

		    $this->mdash->agregacurso($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('cursos');
			$this->load->view('assets/footer');  
	    }
	}

	function listacursos(){
	
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('cursos'); 
			$this->load->view('assets/footer');
	}

	function getcursos(){
		$datos= $this->mdash->getcursos();


		$res['data'] = $datos;
    	echo json_encode($res); 
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
			$datos['horaini']=$this->input->post("horaini");
			$datos['horafin']=$this->input->post("horafin");
			$datos['cupomax']=$this->input->post("cupomax");
			$datos['cupodis']=$this->input->post("cupodis");
			$datos['estado']=$this->input->post("est");

	    $this->mdash->updatecurso($datos,$id_curso);    	
	    $this->listacursos();
    }
    
	function deletecurso($id){
	    $this->mdash->delcurso($id);	
	    $this->listacursos();		
	}


//---------------------------------------------------------------------------------
	//*--------------------- Funciones Proveedor ----------------------------*//
//---------------------------------------------------------------------------------

	function listaproveedores(){
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('proveedores'); 
			$this->load->view('assets/footer');  
	}

	function getprovee(){
		$datos= $this->mdash->getproveedor();


		$res['data'] = $datos;
    	echo json_encode($res); 
	}

	function altaproveedor(){

				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('altaproveedor');
				$this->load->view('assets/footer');  
	}


	function addproveedor(){
		$this->form_validation->set_rules('rfc', 'rfc', 'required');
		$this->form_validation->set_rules('rs', 'nombre', 'required');
		$this->form_validation->set_rules('dir', 'direccion', 'required');
		$this->form_validation->set_rules('cp', 'cp', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('tel', 'tel', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                		 
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('altaproveedor');
			$this->load->view('assets/footer');  
        }
        else
        {
			$datos['rfc']=$this->input->post("rfc");
			$datos['nombre']=$this->input->post("rs");
			$datos['direccion']=$this->input->post("dir");
			$datos['cp']=$this->input->post("cp");
			$datos['email']=$this->input->post("email");
			$datos['tel']=$this->input->post("tel");
			$datos['estado']=$this->input->post('est');
			

		    $this->mdash->agregaproveedor($datos);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('proveedores');
			$this->load->view('assets/footer');  
	    }
	}
	
	function editproveedor($id){
		$datos['proveedor'] = $this->mdash->getpro($id);
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('editproveedor',$datos); 
			$this->load->view('assets/footer'); 
      
	}	

    function actualizaproveedor(){
        	$idpro = $this->input->post("idpro"); 
			$datos['rfc']=$this->input->post("rfc");
			$datos['nombre']=$this->input->post("rs");
			$datos['direccion']=$this->input->post("dir");
			$datos['cp']=$this->input->post("cp");
			$datos['email']=$this->input->post("email");
			$datos['tel']=$this->input->post("tel");
			$datos['estado']=$this->input->post("est");

	    $this->mdash->updatepro($datos,$idpro);    	
	    $this->listaproveedores();
    }
    
	function deleteproveedor($id){
	    $this->mdash->delpro($id);	
	    $this->listaproveedores();		
	}


}