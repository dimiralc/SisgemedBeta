$("#buscarPaciente").click(function(event) {
     event.preventDefault();
     var datos = $('#formBuscar').serialize();
     var url = $('#formBuscar').attr('action');
     $.ajax({
         type: 'POST',
         url: url, 
         data: datos,
         success: 
               function(datos){
                   datos= JSON.parse(datos);
                   var rut = datos.rut;
                   var firstname = datos.primer_nombre;
                   var lastname = datos.segundo_nombre; 
                   var paterno = datos.apellido_paterno;
                   var materno = datos.apellido_materno;
                   var telefono = datos.direccion;
                   var sexo = datos.sexo;
                   var nacionalidad = datos.lugar_nac;
	           $('#rut').val(rut);
                   $('#nombre_paciente').val(firstname);
                   $('#paterno').val(paterno);
                   $('#materno').val(materno);
                   $('#sexo').val(sexo);
                   $('#nacionalidad').val(nacionalidad);                  
                   
              }
          });
 });

 