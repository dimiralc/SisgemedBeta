<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?=$titulo;?></title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?=$url_base;?>/img/inicio_sesion/logotipo.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=$url_base;?>css/validar/bootstrap.css"/>
    <link rel="stylesheet" href="<?=$url_base;?>css/validar/bootstrapValidator.css"/>
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?=$url_base;?>css/inicio_sesion_2/main.css">
    <link rel="stylesheet" href="<?=$url_base;?>css/inicio_sesion_2/animate.min.css">

  </head>
  <body class="login">

<?php
/* El campo oculto llamado token  contiene una clave aleatoria y distinta en cada recarga de página en 
forma de sesión que nos proporciona el método del controlador login.php token, 
ya sabemos para que es y también que es muy importante para evitar ataques CSRF*/

//creamos el input username
$username = array('name'=>'username','placeholder'=>'Usuario','class'=>'form-control top');
//creamos el input password
$password = array('name' => 'password','placeholder'=>'contraseña','class'=>'form-control bottom');
//creamos el input institucion
$institucion = array('name' => 'institucion','placeholder'=>'institucion','class'=>'form-control bottom');

/*creamos las "opciones" del select de "perfil"
$perfiles = array(''=> 'Perfil','profesional'=>'Profesional de la Salud','paciente'=>'Paciente','administrador'=>'Administrador');
//creamos datos adicionales para el select "perfil"
$datosPerfiles = 'class="form-control"';
*/

//creamos el boton iniciar sesion
$button = array('name'=>'ingresar','id'=>'ingresar','value'=>'true','type'=>'submit','class'=>'btn btn-lg btn-primary btn-block','content'=>'Iniciar sesión');
//creamos datos adicionales pertenecientes al formulario
$datosAdicionalesForm = array('class' => 'form-signin', 'id' => 'defaultForm');
?>
    <div class="form-signin">
      <div class="text-center">
        <img src="<?=$url_base;?>/img/inicio_sesion/logotipo.png" width="121px;"   alt="SISGEMED">
      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">

        <!-- creamos el formulario -->
        <?=form_open(base_url().'login/inicio_sesion',$datosAdicionalesForm);?>
            
            <!-- creamos campo token tipo hidden (nombre,valor) -->
            <?=form_hidden('token',$token)?>
            
            <p class="text-muted text-center"><strong>Iniciar Sesión Sistema Sisgemed</strong></p>
            
<?php 
//muestra error si Los datos introducidos son incorrectos.
if($this->session->flashdata('usuario_incorrecto'))
{ ?>
<p class="text-muted text-center">
<strong class="text-danger"><?=$this->session->flashdata('usuario_incorrecto')?></strong>
</p>
<?php } ?>
                
                <div class="form-group">
                    <!-- creamos el input username -->
                    <?=form_input($username)?>
                    <!-- mensaje de error , validacion del campo -->
                    <p><strong class="text-danger"><?=form_error('username')?></strong></p>
                </div>
                
                <div class="form-group">
                    <!-- creamos el input contraseña tipo password -->
                    <?=form_password($password)?>
                    <!-- mensaje de error , validacion del campo-->
                    <p><strong class="text-danger"><?=form_error('password')?></strong></p>
                </div>
                
                <div class="form-group">
                <!-- creamos el input institucion -->
                    <?=form_input($institucion)?>
                    <!-- mensaje de error , validacion del campo-->
                    <p><strong class="text-danger"><?=form_error('institucion')?></strong></p>

<?php 
//muestra error si la institucion no existe, esto esta en login_model
if($this->session->flashdata('institucion_incorrecto'))
{ 
?>
<p><strong class="text-danger"><?=$this->session->flashdata('institucion_incorrecto')?></strong></p>
<?php } ?>

                </div>
                <!--
                <div class="form-group">
                creamos el select profesionales form_dropdown('nombre','opciones','selected','datos adicionales')
                    <?=form_dropdown('perfil',$perfiles,'',$datosPerfiles);?>
                </div>
                -->            
                <div class="checkbox">
                    <label>
                    <!-- creamos el checkbox recuerdame form_checkbox('nombre','valor','estado') -->
                    <?=form_checkbox('recuerdame', 'aceptar', FALSE);?>Recuérdame
                    </label>
                </div>
                
                <!-- creamos el button iniciar sesion -->
                <?=form_button($button);?>


        <!-- cerramos el formulario -->
        <?=form_close()?>
        </div>
        <div id="forgot" class="tab-pane">
          <form action="index.html">
            <p class="text-muted text-center">Ingrese su dirección de e-mail válida</p>
            <input type="email" placeholder="mail@domain.com" class="form-control">
            <br>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Recuperar Contraseña</button>
          </form>
        </div>
        <div id="signup" class="tab-pane">
          <form action="index.html">
            <input type="text" placeholder="username" class="form-control top">
            <input type="email" placeholder="mail@domain.com" class="form-control middle">
            <input type="password" placeholder="password" class="form-control middle">
            <input type="password" placeholder="re-password" class="form-control bottom">
            <button class="btn btn-lg btn-success btn-block" type="submit">Registro</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="text-center">
        <ul class="list-inline">
          <li> <a class="pull-right need-help" href="#login" data-toggle="tab">Iniciar sesión</a>  </li>
          <li> <a class="pull-right need-help" href="#forgot" data-toggle="tab">Olvidé mi contraseña</a>  </li>
          <li> <a class="pull-right need-help" href="#signup" data-toggle="tab">Registrarse</a></li>
        </ul>
      </div>
    </div>

    <script type="text/javascript" src="<?=$url_base;?>js/validar/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=$url_base;?>js/validar/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$url_base;?>js/validar/bootstrapValidator.js"></script>
    
    <!-- ANIMACION CAMBIO DE FOMULARIO -->
    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>

    <!-- VALIDAR FORMULARIO -->
    <script type="text/javascript">
            $(document).ready(function() {
                
                $('#defaultForm')
                    .bootstrapValidator({
                        message: 'Este valor no es válido',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            username: {
                                message: 'El nombre de usuario no es válido.',
                                validators: {
                                    notEmpty: {
                                        message: 'Se requiere el nombre de usuario y no puede estar vacío.'
                                    },
                                    stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de longitud.'
                                    },
                                    /*remote: {
                                        url: 'remote.php',
                                        message: 'The username is not available'
                                    },*/
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                        message: 'El nombre de usuario sólo puede consistir en alfabético, número, puntos o subrayados.'
                                    }
                                }
                            },
                            /*email: {
                                validators: {
                                    notEmpty: {
                                        message: 'The email address is required and can\'t be empty'
                                    },
                                    emailAddress: {
                                        message: 'The input is not a valid email address'
                                    }
                                }
                            },
                            */
                            institucion: {
                                validators: {
                                    notEmpty: {
                                        message: 'La institucion es necesaria y no puede estar vacío'
                                    },
                                    stringLength: {
                                        max: 80,
                                        message: 'El nombre de la institucion debe ser inferior a 80 caracteres de longitud'
                                    },
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                        message: 'El nombre de la institucion sólo puede consistir en alfabético, número, puntos o subrayados.'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'La contraseña es necesaria y no puede estar vacío'
                                    }
                                }
                            }
                        }
                    });
                   /* .on('success.form.bv', function(e) {

                        alert("1");
                        // Prevent form submission, Evitar el envío de formularios
                        e.preventDefault();
alert("2");
                        // Get the form instance, Obtener el tipo de formulario
                        var $form = $(e.target);
alert("3");
                        // Get the BootstrapValidator instance, Obtenga la instancia BootstrapValidator
                        var bv = $form.data('bootstrapValidator');
alert("4");
                        // Use Ajax to submit form data, Utilizar Ajax para enviar datos de formulario 
                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);

                            
                            
                        }, 'json');
                    });*/
            });
        </script>
  </body>
</html>
