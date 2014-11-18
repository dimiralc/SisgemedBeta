<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
        <div id="breadcrumb" class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Administrar datos de Paciente</a></li> 
            </ol>
        </div>
    </div>
    <!-- Formulario de Búsqueda de Pacientes en el sistema -->
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-search"></i>
                        <span>Actualización o Eliminación de Pacientes en el Sistema</span>
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
                </div>
                <div class="box-content">
                    <h4 class="page-header">Búsqueda de Datos</h4>
                    <?= form_open('administrarPacientes/buscarPaciente') ?>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Búsqueda por Rut  </label>
                            <div class="col-sm-4">
                                <input type="text" 
                                       class="form-control" placeholder="Rut del paciente" 
                                       data-toggle="tooltip" data-placement="bottom" 
                                       title="Ingrese el rut del paciente que desea encontrar" 
                                       name="Run">
                            </div>                                        
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-label-left" name="btoPaciente">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Buscar
                                </button>
                            </div>                                                                                        
                        </div>    
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>



