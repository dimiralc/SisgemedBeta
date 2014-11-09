$("#agregarPaciente").click(function(event) {
     event.preventDefault();
     var datos = $('#validarDatos_paciente').serialize();
     var url = $('#validarDatos_paciente').attr('action');
         $.ajax({
         type: 'POST',
         url: url, 
         data: datos,
         success: 
               function(){
                   sweetAlert('Paciente Ingresado Correctamente', 'Los datos han sido ingresados exitosamente a la base de datos', 'success');                         
                   
              }
             
          });
 });

