<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
        <div id="breadcrumb" class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#"><?= $institucion; ?></a></li>
                <li><a href="#"><?= $perfil; ?></a></li>
                <li><a href="#"><?= $profesional; ?></a></li>
            </ol>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span><a href="#">Estadisticas del Sistema</a></span>
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
            <div class="box-content no-padding">
                <div id="container" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-table"></i>
                        <span><a href="<?= base_url(); ?>historiasMedicas/jsonHceRecientes">Historias Clinicas Recientes</a></span>
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
                <div class="box-content no-padding">
                    <!--<div class="alert alert-success" id="events-result">
                        Here is the result of event.
                    </div>-->
                    <input type="hidden" id="url_site" value="<?= base_url(); ?>">
                    <table class="table table-striped" 
                    data-toggle="table"
                    id="table-hce-recientes"
                    data-url="<?= base_url(); ?>historiaMedica/jsonHceRecientes" 
                    data-height="400" 
                    data-pagination="true"
                    data-search="true"
                    >
                    <thead>
                        <tr>
                            <th data-field="id_historia_medica" data-sortable="true">N° HCE</th>
                            <th data-field="rut"               data-sortable="true">DNI Paciente</th>
                            <th data-field="nombres"           data-sortable="true">Nombres</th>
                            <th data-field="apellidos"         data-sortable="true">Apellidos</th>
                            <th data-field="ultimoControl"     data-sortable="true">Ultimo Control</th>
                            <th data-field="url"               data-sortable="false">Acceso HCE</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>        
</div>
</div>

<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">
    <div class="row">
        <div id="breadcrumb" class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#"><?= $institucion; ?></a></li>
                <li><a href="#"><?= $perfil; ?></a></li>
                <li><a href="#"><?= $profesional; ?></a></li>
            </ol>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span><a href="#">Estadisticas del Sistema </a></span>
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
            <div class="box-content no-padding">
                <div id="container" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-table"></i>
                        <span><a href="<?= base_url(); ?>profesional/historiasClinicas">Historias Clinicas Recientes</a></span>
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
                <div class="box-content no-padding">
                    <!--<div class="alert alert-success" id="events-result">
                        Here is the result of event.
                    </div>-->
                    <input type="hidden" id="url_site" value="<?= base_url(); ?>">
                    <table class="table table-striped" 
                    data-toggle="table"
                    id="table-hce-recientes"
                    data-url="<?= base_url(); ?>historiaMedica/jsonHceRecientes" 
                    data-height="400" 
                    data-pagination="true"
                    data-search="true"
                    >
                    <thead>
                        <tr>
                            <th data-field="id_historia_medica" data-sortable="true">N° HCE</th>
                            <th data-field="rut"               data-sortable="true">DNI Paciente</th>
                            <th data-field="nombres"           data-sortable="true">Nombres</th>
                            <th data-field="apellidos"         data-sortable="true">Apellidos</th>
                            <th data-field="ultimoControl"     data-sortable="true">Ultimo Control</th>
                            <th data-field="url"               data-sortable="false">Acceso HCE</th>
                        </tr>
                    </thead>
                </table>
                        
            </div>
        </div>
    </div>        
</div>
</div>

