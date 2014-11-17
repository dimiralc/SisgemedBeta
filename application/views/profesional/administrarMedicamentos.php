<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">                    
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Administrar Medicamentos</a></li> 
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>Administración de Medicamentos</span>
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
                    <h4 class="page-header">Búsqueda de Datos</h4>
                    <form class="form-horizontal" role="form" id="formulario">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ID Medicamento</label>
                            <div class="col-sm-4">
                                <input type="text" 
                                       id="txtBuscar"
                                       class="form-control" 
                                       placeholder="Ingrese el Id del medicamento"
                                       value="Buscar"
                                       name="btomedicamento">                                                      
                            </div>                                        
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Buscar
                                </button>
                            </div>                                        
                        </div>                                                                        
                    </form>                                   
                    <h4 class="page-header">Datos del Medicamento</h4>
                    <!-- Metadatos del Formulario de Ingreso de Medicamentos -->
                    <?php
                    $attributes = 'class="form-horizontal"';
                    $id = array(
                        'name' => 'Id',
                        'id' => 'Id',
                        'placeholder' => 'Ingrese el Código del Medicamento',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $nombre = array(
                        'name' => 'Nombre',
                        'id' => 'Nombre',
                        'placeholder' => 'Ingrese el nombre del Medicamento',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $generico = array(
                        'name' => 'Generico',
                        'id' => 'Generico',
                        'placeholder' => 'Ingrese el Nombre Genérico del M.',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $componente = array(
                        'name' => 'Componente',
                        'id' => 'Componente',
                        'placeholder' => 'Ingrese el Componente Activo del M.',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $laboratorio = array(
                        'name' => 'Laboratorio',
                        'id' => 'Laboratorio',
                        'placeholder' => 'Ingrese el Laboratorio',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $formato = array(
                        'name' => 'Formato',
                        'id' => 'Fomrulario',
                        'placeholder' => 'Ingrese el Formato del M.',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name'
                    );
                    $descripcion = array(
                        'name' => 'Indicaciones',
                        'id' => 'Indicaciones',
                        'placeholder' => 'Indicaciones Preliminares',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Tooltip for name',
                        'rows' => '2'
                    );
                    $contraindicaciones = array(
                        'name' => 'Indicaciones',
                        'id' => 'Contraindicaciones',
                        'placeholder' => 'Contraindicaciones',
                        'size' => '90',
                        'class' => 'form-control',
                        'data-placement' => 'bottom',
                        'data-toggle' => 'tooltip',
                        'title' => 'Contraindicaciones del Medicamento   ',
                        'rows' => '2'
                    );
                    ?>
                    <!-- Fin Metadatos del Formulario de Registro de Medicamentos -->
                    <?= form_open('administrarMedicamentos/recibirDatos', $attributes) ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ID del Medicamento</label>
                        <div class="col-sm-4">
                            <?= form_input($id) ?>
                        </div>
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-4">
                            <?= form_input($nombre) ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">Generico</label>
                        <div class="col-sm-4">
                            <?= form_input($generico) ?>
                        </div>
                        <label class="col-sm-2 control-label">Componente Activo</label>
                        <div class="col-sm-4">
                            <?= form_input($componente) ?>
                            <span class="form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label class="col-sm-2 control-label">Laboratorio</label>
                        <div class="col-sm-4">
                            <?= form_input($laboratorio) ?>
                            <span class="txt-warning form-control-feedback"></span>
                        </div>
                        <label class="col-sm-2 control-label">Formato</label>
                        <div class="col-sm-4">
                            <?= form_input($formato) ?>
                        </div>						
                    </div>
                    <div class="form-group" id="info">
                        <label class="col-sm-2 control-label" for="form-styles">Usos Medicos / Indicaciones</label>
                        <div class="col-sm-10">
                            <?= form_textarea($descripcion) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="form-styles">Contraindicaciones</label>
                        <div class="col-sm-10">
                            <?= form_textarea($contraindicaciones) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <button type="submit"
                                    class="btn btn-primary btn-label-left" 
                                    value="Agregar" 
                                    name="btomedicamento"
                                    >
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Agregar
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" 
                                    class="btn btn-primary btn-label-left" 
                                    value="Eliminar" 
                                    name="btomedicamento">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Actualizar
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" 
                                    class="btn btn-primary btn-label-left" 
                                    value="Eliminar" 
                                    name="btomedicamento">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Eliminar
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" 
                                    class="btn btn-primary btn-label-left" 
                                    value="Cancelar" 
                                    name="btomedicamento">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Cancelar
                            </button>
                        </div>
                        <?= form_close()?>
                    </div>
                </div>
            </div>                                
        </div>
    </div>
  </div>              
<!--End Content-->  


