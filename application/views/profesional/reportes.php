<div id="content" class="col-xs-12 col-sm-10">
    
    <div class="row">

        <div id="breadcrumb" class="col-xs-12">

            <ol class="breadcrumb">

                <li><a href="#"><?=$titulo?> </a></li>

                            <li><a href="#"><?=$institucion;?></a></li>

                            <li><a href="#"><?=$perfil;?></a></li>

                            <li><a href="#"><?=$profesional;?></a></li>

            </ol>

        </div>
        
    </div>
    
    <div class="row">
        <!-- FIN IDENTIFICACION PACIENTE -->
        <!-- ANTECENTES CLINICOS DEL PACIENTE -->
    	<div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
				<div class="box-name">
					<i class="fa fa-table"></i>
					<span> <a href="#">MODULO REPORTES / INFORMES</a></span>
				</div>
				<div class="box-icons pull-right">
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
                
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li class="active">
                    <a href="#informes" role="tab"  accesskey=""data-toggle="tab"              >Informes</a></li>
                    <li><a href="#revision_sistemas" role="tab" data-toggle="tab" >Información Paciente</a></li>
                    <li><a href="#ginecoobstetricos" role="tab" data-toggle="tab" >Antecedentes Clínicos</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="informes">
                        <ul class="list-group">
                        <li class="list-group-item"><strong>>> Informe Listado Pacientes</strong>
                            <span class="badge">
                                <a href="<?=base_url()?>reportes/ReportlistadoPacientes/" style="color: #FFFFFF;" target="_blank">
                                 Descargar PDF <img src="<?=base_url()?>/img/Pdf.png" width="20px" height="20px;" alt="PDF" title="PDf" >
                                </a>
                            </span>
                            <span class="badge">
                                <a href="#" style="color: #FFFFFF;">
                                 Descargar Excel <img src="<?=base_url()?>/img/excel.png" width="20px" height="20px;" alt="Excel" title="Excel" >
                                </a>
                            
                            </span>
                        </li>
                        
                        <li class="list-group-item"><strong>>> Informe Listado Historias Médicas</strong>
                            <span class="badge">
                                <a href="<?=base_url()?>reportes/ReportlistadoHce/" target="_blank" style="color: #FFFFFF;">
                                 Descargar PDF <img src="<?=base_url()?>/img/Pdf.png" width="20px" height="20px;" alt="PDF" title="PDf" >
                                </a>
                            </span>
                            <span class="badge">
                                <a href="#" style="color: #FFFFFF;">
                                 Descargar Excel <img src="<?=base_url()?>/img/excel.png" width="20px" height="20px;" alt="Excel" title="Excel" >
                                </a>
                            
                            </span>
                        </li>
                        
                        
                        <li class="list-group-item"><strong>>> Informe Listado Consultas Médicas</strong>
                            <span class="badge">
                                <a href="<?=base_url()?>reportes/ReportlistadoConsultasMedicas/" target="_blank" style="color: #FFFFFF;">
                                 Descargar PDF <img src="<?=base_url()?>/img/Pdf.png" width="20px" height="20px;" alt="PDF" title="PDf" >
                                </a>
                            </span>
                            <span class="badge">
                                <a href="#" style="color: #FFFFFF;">
                                 Descargar Excel <img src="<?=base_url()?>/img/excel.png" width="20px" height="20px;" alt="Excel" title="Excel" >
                                </a>
                            
                            </span>
                        </li>
                        
                        </ul>
                    </div>
                                        
                    <div class="tab-pane" id="revision_sistemas">
                      
                        <?php 
                            
                            $attributes = 'id="r_info_paciente" target="_blank"'; 
                            $buscarPaciente = array(
                            'name'=> 'txtRutPaciente',
                            'id' => 'buscarRutReporte',
                            'placeholder'=>'Rut del Paciente',
                            'class' => 'form-control',
                            'value'=>""    
                            );
                        ?>
                        <?= form_open('reportes/dataPaciente', $attributes) ?>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Ingrese RUT del Paciente</label>
                            <div class="col-sm-4">
                                <?= form_input($buscarPaciente) ?>
                                <?php echo form_error('txtRutPaciente'); ?>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-label-left" name="btoPaciente">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Generar Reporte </button>
                            </div>
                        </div>
                        <?= form_close() ?>
                    
                    </div>
                    <div class="tab-pane" id="ginecoobstetricos">
                        
                        <form action="<?=  base_url()?>reportes/antecedentesClinicos/" 
                              method="POST" class="form-horizontal" role="form" target="_blank">
                          <div class="form-group">
                            <label for="ejemplo_email_3" class="col-lg-2 control-label">Rut Paciente</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="txtRutAntCln" id="buscarRutReporteAntCln"
                                       placeholder="Ingrese Rut del Paciente" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ejemplo_password_3" class="col-lg-2 control-label">Antecedente Clínico</label>
                            <div class="col-lg-10">
                                <select name="ant_clinicos" id="ant_clinicos" class="form-control">
                                <option value="">>>> Seleccione Antecedente Clínico <<<</option>
                                <option value="M">Antecedentes Mórbidos</option>
                                <option value="H">Antecedentes Hábitos</option>
                                <option value="MED">Antecedentes Medicamentos</option>
                                <option value="A">Antecedentes Alergias</option>
                                <option value="I">Antecedentes Inmunizaciones</option>
                                <option style="color: red;" value="G">Antecentes Ginecoobstétricos >> (SIN REALIZAR)</option>
                                <option style="color: red;" value="R">Antecedentes Revisión por sistemas >> (SIN REALIZAR)</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary btn-label-left">Generar Reporte</button>
                            </div>
                          </div>
                        </form>
                        
                    </div>
                    
                </div>
                <hr>
               
			</div>
		</div>
        </div>
        <!-- FIN ANTECENTES CLINICOS DEL PACIENTE -->
    
    </div>
</div>