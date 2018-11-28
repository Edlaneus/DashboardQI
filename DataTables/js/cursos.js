$(document).ready(function(){

    var tabla = $('#cursos').DataTable({
    	"columnDefs":[{
    		"targets":[0],
    		"visible":false
    	}],
    	"ajax":{
    		url:"index.php/Cestacion/listacursos"
            type: 'POST'
    	},
    	"columns":[
    		{"data":"id_curso"},
    		{"data":"nombre_curso"},
    		{"data":"descripcion_curso"},
            {"data":"finicio_curso"},
            {"data":"ffinal_curso"},
            {"data":"horaini"},
            {"data":"horafin"},
            {"data":"cupomax"},
            {"data":"cupodis"},
    		{"data":"estado"}
    		// {
    		// 	"target":-1,
    		// 	"data":null,
    		// 	"defaultContent":"<button id='btn-edit' class='btn btn-primary btn-sm'>Editar</button>",
    		// 	"searchable":"false"
    		// }
    	],

    });

    // $("#categorias tbody").on('click','[id=btn-edit]',function(){
    //     data=tabla.row( $(this).parents('tr') ).data();  //Objeto con datos del registro (tupla) 
    //     //alert(data.id_categoria);   

    //     $("#idc").val(data.id_categoria);    
    //     $("#nom").val(data.nombre);    
    //     $("#descrip").val(data.descripcion); 

    //     if (data.status == "Activa") {
    //        $("#act").prop('selected',true);
    //        $("#inac").prop('selected',false);  
    //     }else{
    //        $("#inac").prop('selected',true);
    //        $("#act").prop('selected',false); 
    //     }
   
    //                      //Accedieno al atributo: id_categoria
    //     $('#editar_cat').modal('show')
    // });

}); //fin de ready

// function guardar(){
//     var tabla =  $('#categorias').DataTable();
//     $.post("dashboard/mod_categoria",$('#edita_cat').serialize(),function(respuesta){
//         //alert(respuesta);
//          tabla.ajax.reload();       
//     });
    

//     $('#editar_cat').modal('hide');
// }