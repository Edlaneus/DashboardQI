<?php 

	class Mdash extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getCliente($correo,$clave){
			$this->db->where('Correo',$correo);
			$query = $this->db->get('usuarios');

            $row = $query->row();

            if (isset($row)){
               $pass = $row->Password;

				if (crypt($clave, $pass) == $pass)
				    return $row;
				else
				    return FALSE; 
            }else{
            	return FALSE;
            }

		}
		
		  function altaUsuario($datos)
		  {
            	$this->db->insert('usuarios',$datos);
		  }


    	  function agregaproducto($datos)
			{
         		$this->db->insert('articulos', $datos);
     		}

        function getArticulos($categoria)
      {
                $this->db->where('IdCategoria',$categoria);
                $query = $this->db->get('articulos');

                return $query->result_array();
        }

     	  function getproductos()
     	  	{
      		  $query = $this->db->get('articulos');
        	  return $query->result_array();
     		}		
     	  function getproducto($id){
     			$this->db->where('idArticulo',$id);
        		$query = $this->db->get('articulos');

        		return $query->result_array()[0];
     		}

     	  function updateproducto($datos,$id){
        		$this->db->where('idArticulo',$id);        
        		$this->db->update('articulos', $datos);
     		}
     
     	  function delproducto($id){
         		$this->db->where('idArticulo',$id);
         		$this->db->delete('articulos');
     		} 

    //--------------------------------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------
                            /*--------------------Promociones-------------------------*/

          function agregapromo($datos)
            {
                $this->db->insert('Promociones', $datos);
            }

          function getpromos()
            {
              $query = $this->db->get('Promociones');
              return $query->result_array();
            }       
          function getpromo($id){
                $this->db->where('IdPromo',$id);
                $query = $this->db->get('Promociones');

                return $query->result_array()[0];
            }

          function updatepromo($datos,$id){
                $this->db->where('IdPromo',$id);        
                $this->db->update('promociones', $datos);
            }
     
          function delpromo($id){
                $this->db->where('IdPromo',$id);
                $this->db->delete('promociones');
            } 
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------
        /*--------------------------------------- Cursos------------------------------------------*/              

          function agregacurso($datos)
            {
                $this->db->insert('cursos', $datos);
                echo "<script>alert('Agregado Correctamente, ¡Gracias!.');</script>";
            }

          function getcursos()
            {
              $query = $this->db->where('estado','1');
              $query = $this->db->get('cursos');
              return $query->result_array();
            }       
          function getcurso($id){
                $this->db->where('id_curso',$id);
                $query = $this->db->get('cursos');

                return $query->result_array()[0];
            }

          function updatecurso($datos,$id_curso){
                $this->db->where('id_curso',$id_curso);        
                $this->db->update('cursos', $datos);
            }
     
          function delcurso($id){
                $this->db->where('id_curso',$id);
                $this->db->delete('cursos');
            } 
 	}
 ?>