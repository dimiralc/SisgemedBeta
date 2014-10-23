$("#buscarPaciente").click(function(event)
    {
     event.preventDefault();
     var datos = $('#formBuscar').serialize();
     var url = $('#formBuscar').attr('action');
     alert (datos);
     $.ajax({
         type: "POST",
         url: url, 
         data: datos,
         success: 
              function(resp){
                  alert("javascript".resp);//datos de busqueda
                  //desgosar array
                  //agregar valores ($(#loquesea).html(arrAY) )
              }
          });
     return false;
 });
