<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Perfil</a></li> 
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-sm-8">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>Mi Perfil</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <h4 class="page-header">Mi Perfil de Usuario</h4>
                    <?php
                    $attributes = 'class= "form-horizontal"';
                    $run = array(
                        'name' => 'Run',
                        'placeholder' => 'Ingrese su Rut',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Rol Único Nacional'
                    );
                    $pnombre = array(
                        'name' => 'Pnombre',
                        'placeholder' => 'Ingrese su Nombre',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su Primer Nombre'
                    );
                    $snombre = array(
                        'name' => 'Snombre',
                        'placeholder' => 'Ingrese su segundo nombre',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su segundo nombre'
                    );
                    $paterno = array(
                        'name' => 'Paterno',
                        'placeholder' => 'Ingrese su apellido paterno',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su apellido paterno'
                    );
                    $materno = array(
                        'name' => 'Materno',
                        'placeholder' => 'Ingrese su apellido materno',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su apellido materno'
                    );
                    $telefono = array(
                        'name' => 'Telefono',
                        'placeholder' => 'Ingrese su telefono de contacto',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Celular o Fijo'
                    );
                    $fecnac = array(
                        'name' => 'Fecnac',
                        'placeholder' => 'Fecha de Nacimiento',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su fecha de Naciemiento'
                    );
                    $direccion = array(
                        'name' => 'Direccion',
                        'placeholder' => 'Direccion de residencia',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su direccion personal',
                        'rows' => '2'
                    );
                    $passactual = array(
                        'name' => 'Pactual',
                        'placeholder' => 'Contraseña Actual',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su contraseña de acceso'
                    );
                    $passnueva = array(
                        'name' => 'Pnueva',
                        'placeholder' => 'Contraseña Nueva',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Su cnueva contraseña'
                    );
                    ?>				
                    <?= form_open('perfil/recibirdatos', $attributes) ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Run</label>
                        <div class="col-sm-4">
                            <?= form_input($run) ?>
                        </div>
                        <label class="col-sm-2 control-label">Primer Nombre</label>
                        <div class="col-sm-4">
                            <?= form_input($pnombre) ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">Segundo Nombre</label>
                        <div class="col-sm-4">
                            <?= form_input($snombre) ?>
                        </div>
                        <label class="col-sm-2 control-label">Apellido Paterno</label>
                        <div class="col-sm-4">
                            <?= form_input($paterno) ?>
                        </div>
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label class="col-sm-2 control-label">Apellido Materno</label>
                        <div class="col-sm-4">
                            <?= form_input($materno) ?>
                        </div>
                        <label class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-4">
                            <?= form_input($telefono) ?>
                        </div>						
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label class="col-sm-2 control-label">País de Residencia</label>
                        <div class="col-sm-4">
                            <select class="col-sm-8" name="pais" id="pais">
                                <option value="Chile">Chile</option>
                                <option value="Perú">Perú</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="México">México</option>
                                <option value="Panamá">Panamá</option>
                            </select>
                        </div>						
                    </div>                                        
                    <div class="form-group has-error has-feedback">
                        <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
                        <div class="col-sm-3">
                            <?= form_input($fecnac) ?>
                        </div>						
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Género</label>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio"  name="genero" value="Masculino"> Masculino
                                        <i class="fa fa-circle-o"></i>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="genero" value="Femenino"> Femenino
                                        <i class="fa fa-circle-o"></i>
                                    </label>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-styles">Dirección</label>
                        <div class="col-sm-10">
                            <?= form_textarea($direccion) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Cambio de Contraseña</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <?= form_input($passactual) ?>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <?= form_input($passnueva) ?>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <button type="submit" class="btn btn-default btn-label-left" value="Cancelar" name="btoPerfil">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Cancelar
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-label-left" value="Guardar" name="btoPerfil">
                                <span><i class="fa fa-clock-o"></i></span>
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>Imagen de Perfil</span>
                    </div>
                    <div class="box-icons">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="no-move"></div>
                </div>
                <div class="box-content">
                    <h4 class="page-header">Adjuntar Imágen</h4>   
                    <form enctype="multipart/form-data" action="uploader.php" method="POST" class="form-group">
                        <input name="uploadedfile" type="file"/>
                        <div class="clearfix"></div>
                        <label class="control-label">Archivos Permitidos: JPG, PNG, JEPG</label> 
                        <div class="clearfix"></div>
                        <input type="submit" value="Subir archivo" class="btn btn-primary btn-label-left" />
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
<!--End Content-->
