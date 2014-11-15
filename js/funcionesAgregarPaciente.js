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
                   sweetAlert('Paciente Ingresado Correctamente', 'Redireccionando a la pagina principal...', 'success');                         
                   setTimeout("window.location.replace('http://localhost/sisgemed/profesional/index');", 2000);
              }
             
          });
 });

