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
        /*--------------------------------------- Horarios------------------------------------------*/              

          function agregahora($datos)
            {
                $this->db->insert('horarios', $datos);
                echo "<script>alert('Agregado Correctamente, ¡Gracias!.');</script>";
            }

          function gethoras()
            {
              $query = $this->db->get('horarios');
              return $query->result_array();
            }       
          function gethora($id){
                $this->db->where('IdHorario',$id);
                $query = $this->db->get('horarios');

                return $query->result_array()[0];
            }

          function updatehora($datos,$id){
                $this->db->where('IdHorario',$id);        
                $this->db->update('horarios', $datos);
            }
     
          function delhora($id){
                $this->db->where('IdHorario',$id);
                $this->db->delete('horarios');
            } 
 	}
 ?>