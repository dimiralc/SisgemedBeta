/* @JS que permite mediante AJAX , editar el perfil de un profesional **/

$("#editarPerfil").click(function(event) {
    
    swal({   
        title: "Estás seguro de guardar los cambios ?",   
        text: "",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Si, Guardar Cambios!",   
        closeOnConfirm: false, 
        cancelButtonText:'Cancelar'
    }, 
    function(){
        
        event.preventDefault();
        var datos = $('#formPerfilProfesional').serialize();
        var url = $('#formPerfilProfesional').attr('action');
        
            $.ajax({
            type: 'POST',
            url: url, 
            data: datos,
            success:
                    
                function(resultado){                

                    if(resultado == "error_r"){

                        sweetAlert('Faltan Datos','ingrese todos los datos', 'error');
                        
                    }else if(resultado=="error_m"){
                        
                        sweetAlert('Error al modificar los datos','intente nuevamente','error');
                    }
                    else{
                       
                        swal({   
                            title: "Datos Modificados Correctamente!",   
                            text: resultado,
                            type:"success",
                            confirmButtonText: "OK"
                            
                        },function(){
                            
                            $(location).attr('href',window.location);
                            
                        });
                    }      
                }
        });
    });
 });




$("#editarUsername").click(function(event) {
    
    swal({   
        title: "Estás seguro que deseas cambiar tu USUARIO DE ACCESO ?",   
        text: "",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Si, Guardar nuevo Usuario de acceso!",   
        closeOnConfirm: false, 
        cancelButtonText:'Cancelar'
    }, 
    function(){
        
        event.preventDefault();
        var datos = $('#form_username').serialize();
        var url = $('#form_username').attr('action');
        
            $.ajax({
            type: 'POST',
            url: url, 
            data: datos,
            success:
                    
                function(resultado){                
                    
                    swal({   
                        title   :"Usuario de acceso modificado Correctamente!",   
                        text    : resultado,
                        type    :"success",
                        confirmButtonText: "OK"

                    },function(){

                        //$(location).attr('href',window.location);

                    });
                }
        });
    });
 });

