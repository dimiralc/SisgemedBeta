<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?=$titulo;?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?=base_url();?>img/favicon.ico">
        <link href="<?=base_url();?>css/iniciarSesion.css" rel="stylesheet" type="text/css" />        
        <link href="<?=base_url();?>plugins/bootstrap/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url();?>css/validar/bootstrapValidator.css"/>
        <link href="<?=base_url();?>css/font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link href="<?=base_url();?>css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url();?>css/tags_input/bootstrap-tagsinput.css"> 
        <link rel="stylesheet" href="<?= base_url();?>css/tags_input/app.css">
        <script type="text/javascript" src="<?=base_url();?>js/funciones.js"></script>
        <script>
        $(document).ready(function(){
          $("#nuevaConsulta").click(function(){
            $("#content").load("agregarConsulta.php");
          });
        });
        </script>
           
        <script type="text/javascript">
            //ingresar FCE via AJAX
            function ingresarFCE($this){

                try
                { 
                    //Añadimos elemento de progreso , con un valor de un 35% complete.
                    $('#progreso').html('<div class="progress"><div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"><span class="sr-only">35% Complete</span></div></div>');

                    //comienza nuestro ajax.
                    $.ajax({

                        url: $($this).attr("action"),//URL controlador
                        type: $($this).attr("method"),//metodo post
                        data: 'accion=agregarFCE&'+$($this).serialize(),//datos formulario

                        beforeSend:function(){
                            //mostrar elemento de progreso.
                            $(".progress").show();
                        },

                        success: function(response) {//respuesta ajax desde nuestro controlador 

                           if(response == "error_paciente"){//error con el id del paciente.

                                //cargamos elemento de error de paciente.  
                                 var valorDiv = $("#error_rut").html();
                                 //mostrar una alerta en pantalla.    
                                 alert("error: seleccione un paciente");
                                 //ocultamos nuestro elemento de progreso.    
                                 $(".progress").fadeOut("slow");
                                 //cargamos div de error
                                 var valorDiv = $("#error_rut").html();
                                 //agregamos html a nuestro div antes cargado, para mostrar nuestro error.
                                 $("#error_rut").html(valorDiv +'<p><strong id="error_rut" class="text-danger">Seleccione un paciente.</strong></p>');
                                 //focus a campo con error.
                                 $("#rut").focus();
                                 //finalizar proceso ajax.
                                 return false;

                           }else if(!isNaN(response) && response > 0){//exito al ingresar ficha clinica.

                                //cargamos elemento de progreso con un valor del 100% omplete.
                                $('#progreso').html('<div class="progress"><div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">100% Complete</span></div></div>');
                                //redireccionar a pagina ficha clinica.
                                window.location = "<?=base_url().'profesional/ficha_clinica/'?>"+response;
                                //finalizar proceso ajax.
                                return false;

                           }else if(response == "error"){//error en una de las transacciones

                                //cargamos elemento de progreso con un valor del 100% omplete.
                                $('#progreso').html('<div class="progress"><div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">100% Complete</span></div></div>');
                                //redireccionar a pagina ficha clinica.
                                window.location = "<?=base_url().'profesional/ficha_clinica/'?>"+response;
                                //finalizar proceso ajax.
                                return false;
                           }

                       }
                    });

                    return false;

                }
                catch(ex)
                {
                    alert(ex.description);
                }
            }
        </script>
    </head>
<body>   
