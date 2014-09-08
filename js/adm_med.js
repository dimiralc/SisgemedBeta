$(document).ready(function(){
    $("#add").click(function(){
        
        id=$("#Id").val();
        nombre=$("#Nombre").val();

        if(id!="" && nombre!=""){

           $.ajax({url:"<?php echo base_url().'administrarMedicamentos/recibirDatos'; ?>", data:{Id:id,Nombre:nombre}, success:function(result){
            $("#mens").html(result);

          }});

        }else{

         $("#mens").html("No deje campos vacíos");

        }

     });

   });

