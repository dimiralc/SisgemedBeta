$(document).ready( function() {
$("#agregarPaciente").click(function(event) {
     event.preventDefault();
     var datos = $('#formularioPaciente').serialize();
     var url = $('#formularioPaciente').attr('action');
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
  });
 

