<div id="content" class="col-xs-12 col-sm-10">
<?php include 'datosConsulta.php';?>
    <div class="row">
		<div id="breadcrumb" class="col-xs-12">
			<ol class="breadcrumb">
				<li><a href="#"><?= $titulo ?>
				</a></li>
				<li><a href="#">Clinica Alemana</a></li>
				<li><a href="#">Profesional</a></li>
				<li><a href="#">Carlos Perez</a></li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-search"></i>
						<span>Búsqueda de Pacientes en el sistema</span>
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
					<div class="form-horizontal">
                                            <?php $attributes = array('id'=> 'formBuscar');?>
                                            <?= form_open('administrarCME/buscarPaciente', $attributes)?>
						<div class="form-group">
							<label class="col-sm-4 control-label">Busqueda por ID, RUT o DNI de Paciente</label>
                                                        <div class="col-sm-4">
                                                            <?php $attrBusqueda = array('x-webkit-speech'=>'x-webkit-speech');?>
                                                            <?= form_input($buscarPaciente)?>
                                                            <input speech x-webkit-speech name="reconocimiento" />
                                                        </div>
							<div class="col-sm-4">
                                                            <button type="button" class="btn btn-primary btn-label-left" id="buscarPaciente" name="btoPaciente">
								<span><i class="fa fa-clock-o"></i></span>
								Buscar Paciente </button>
							</div>
						</div>
                                            <?= form_close() ?>
					</div>
					<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close fade" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
						<strong>Advertencia!</strong>
						Si el Paciente no se encuentra en el sistema, debe ingresarlo en la base de datos utilizando el siguiente <a href="<?=base_url();?>administrarPacientes/registrarPaciente" class="alert-link">enlace</a>.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-7">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-table"></i>
						<span><a href="#">Datos del Paciente</a></span>
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
					<div class="no-move">
					</div>
				</div>
				<div class="box-content no-padding">
                                    <?php $attrConsulta =  array('id'=> 'formConsultaMedica');?>
                                    <?= form_open('administrarCME/ingresarConsultaBase', $attrConsulta)?>
					<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<tbody>
					<tr>
						<td>
							<b>Rut del Paciente</b>
						</td>
						<td>
							<?= form_input($rut)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Nombres</b>
						</td>
						<td>
							<?= form_input($nombres)?>
                                                </td>
					</tr>
					<tr>
						<td>
							<b>Apellido Paterno</b>
						</td>
						<td>
							<?= form_input($paterno)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Apellido Materno</b>
						</td>
						<td>
							<?= form_input($materno)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Sexo</b>
						</td>
						<td>
							<?= form_input($sexo)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Edad</b>
						</td>
						<td>
							<?= form_input($edad)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Nacionalidad</b>
						</td>
						<td>
							<?= form_input($nacionalidad)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Estado Civil</b>
						</td>
						<td>
							<?= form_input($ecivil)?>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-5">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-table"></i>
						<span><a href="#">Datos Historia Clinica </a></span>
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
					<div class="no-move">
					</div>
				</div>
				<div class="box-content no-padding">
					<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<tbody>
					<tr>
						<td class="text-capitalize">
							<b>Fecha y Hora Actual</b>
						</td>
						<td>
							<?= form_input($date)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Numero Historia Clinica</b>
						</td>
						<td>
                                                       	<?= form_input($nhce)?>
                                                      
                                                        
						</td>
					</tr>
					<tr>
						<td>
							<b>DNI del Paciente</b>
						</td>
						<td>
							<?= form_input($dni)?>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-table"></i>
						<span><a href="#">Imagen</a></span>
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
					<div class="no-move">
					</div>
				</div>
				<div class="box-content no-padding">
					<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<tbody>
					<tr>
						<td>
                                                    <img src="<?= base_url(); ?>img/photo.png" class="img-responsive">
						</td>
					</tr>
					<tr>
						<td>
							<input type="file" name="userfile"/>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-10">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-table"></i>
						<span><a href="#">Motivo de la Consutla</a></span>
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
					<div class="no-move">
					</div>
				</div>
				<div class="box-content no-padding">
                                    
					<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<tbody>
					<tr>
						<td>
							<b>Motivo de la Consulta</b>
						</td>
						<td>
							<?= form_textarea ($motivoConsulta)?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Anamnésis Próxima</b>
						</td>
						<td>
							<?= form_textarea ($anamnesisProxima)?>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="box-name">
						<i class="fa fa-table"></i>
						<span><a href="#">Antecedentes Clínicos / Anamnésis Remota</a></span>
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
					<div class="no-move">
					</div>
				</div>
				<div class="box-content no-padding">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#morbidos" role="tab" data-toggle="tab">Mórbidos</a></li>
						<li><a href="#ginecoobstetricos" role="tab" data-toggle="tab">Ginecoobstétricos </a></li>
						<li><a href="#habitos" role="tab" data-toggle="tab">Hábitos</a></li>
						<li><a href="#medicamentos" role="tab" data-toggle="tab">Medicamentos</a></li>
						<li><a href="#alergias" role="tab" data-toggle="tab">Alergias</a></li>
						<li><a href="#sociales" role="tab" data-toggle="tab">Sociales y Personales</a></li>
						<li><a href="#familiares" role="tab" data-toggle="tab">Familiares</a></li>
						<li><a href="#inmunizaciones" role="tab" data-toggle="tab">Inmunizaciones</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="morbidos">
                                                    <!-- Antecedentes Morbidos -->
                                                    <?php $attrMorbidos = array('id'=> 'formAntMorbidos');?>
                                                    <?= form_open('administrarCME/ingresarAntecedentesMorbidos', $attributes)?>
							<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
							<thead>
							<tr>
								<th>
									 Antecedente Mórbido
								</th>
								<th>
									 SI / NO
								</th>
								<th>
									 Identificación de Antecedente
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td class="text-capitalize">
									<b>Enfermedades</b>
								</td>
								<td width="50px">
									<div class="toggle-switch toggle-switch-info">
										<label>
										<input type="checkbox" name="[]" value="">
										<div class="toggle-switch-inner">
										</div>
										<div class="toggle-switch-switch">
											<i class="fa fa-check"></i>
										</div>
										</label>
									</div>
								</td>
								<td>
									<?= form_input($enfermedades)?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Traumatismos</b>
								</td>
								<td width="50px">
									<div class="toggle-switch toggle-switch-info">
										<label>
										<input type="checkbox" name="[]" value="">
										<div class="toggle-switch-inner">
										</div>
										<div class="toggle-switch-switch">
											<i class="fa fa-check"></i>
										</div>
										</label>
									</div>
								</td>
								<td>
									<?= form_input($traumatismos)?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Operaciones</b>
								</td>
								<td width="50px">
									<div class="toggle-switch toggle-switch-info">
										<label>
										<input type="checkbox" name="[]" value="">
										<div class="toggle-switch-inner">
										</div>
										<div class="toggle-switch-switch">
											<i class="fa fa-check"></i>
										</div>
										</label>
									</div>
								</td>
								<td>
									<?= form_input($operaciones)?>                                                                    
								</td>
                                                                
							</tr>
                                                        <tr>
                                                            
                                                            <td colspan="3"><input type="button" id="ant_morbidos" value="Guardar Antecedentes Morbidos" style="width: 100%;"></td>
                                                        </tr>
							</tbody>
							</table>
                                                    
						</div>
						<div class="tab-pane fade" id="ginecoobstetricos">
							<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
							<tbody>
							<tr>
								<td width="50px">
									<b>Menarquia / Rango de Edad</b>
								</td>
								<td width="50px">
									<div class="radio">
										<label>
										<input type="radio" name="menarquia" value="No Presenta"> No Presenta <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menarquia" value=""> Menor a 10 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menarquia" value=""> Entre 11 - 15 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menarquia" value=""> Mayor a 15 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
								</td>
								<td width="50px">
									<b>Menopausia / Rango de Edad</b>
								</td>
								<td width="50px">
									<div class="radio">
										<label>
										<input type="radio" name="menopausia" value=""> No Presenta <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menopausia" value=""> Menor a 45 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menopausia" value=""> Entre 45 - 55 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="menopausia" value=""> Mayor a 55 años <i class="fa fa-circle-o small"></i>
										</label>
									</div>
								</td>
								<tr>
									<td>
										<b>Presencia de algun Sitnoma</b>
									</td>
									<td width="50px">
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> No Presenta <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Dismenorrea <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Hipermenorrea <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Polimenorrea <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Oligomenorrea <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Amenorrea <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="gineco[]" value=""> Metrorragia <i class="fa fa-square-o"></i>
											</label>
										</div>
									</td>
									<td>
										<b>Información sobre embarazo con Fórmula Obstétrica</b>
									</td>
									<td>
										<table>
										<tbody>
										<tr>
											<td>
												 Gestación
											</td>
											<td>
                                                                                            <input type="number" min="0" max="10">
											</td>
										</tr>
										<tr>
											<td>
												 Partos
											</td>
											<td>
												<input type="number" min="0" max="10">
											</td>
										</tr>
										<tr>
											<td>
												 Abortos
											</td>
											<td>
												<input type="number" min="0" max="10">
											</td>
										</tr>
										</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<b>FUR (Fecha Ultima Menstruación)</b>
									</td>
									<td>
										<?= form_input($fur)?>
									</td>
									<td>
										<b>Otras Observaciones </b>
									</td>
									<td>
                                                                            <?= form_textarea($ginecoObs)?>
									</td>
								</tr>
                                                                <tr>
                                                                    <td>
                                                                        <b>
                                                                            Métodos Anticonceptivos
                                                                        </b>
                                                                    </td>
                                                                    <td>
                                                                        <select name="" id="">
                                                                                <option value="">Coito interrupto o método del retiro </option>
                                                                                <option value="">Condón femenino </option>
                                                                                <option value="">Condón o preservativo </option>
                                                                                <option value="">Diafragma </option>
                                                                                <option value="">Dispositivo intrauterino o DIU </option>
                                                                                <option value="">Espermicidas </option>
                                                                                <option value="">Inyectables </option>
                                                                                <option value="">Ligadura de trompas </option>
                                                                                <option value="">Método natural </option>
                                                                                <option value="">Píldora Antoconceptiva</option>
                                                                                <option value="">Píldora del día después </option>
                                                                                
                                                                                
                                                                        </select>
                                                                    </td>
                                                                    
                                                                    <td colspan="2"><input type="button" value="Guardar Antecedentes Ginecoobstétricos" style="width: 100%;"></td>
                                                                </tr>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade " id="habitos">
								<div class="tab-pane fade in active" id="morbidos">
									<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
									<thead>
									<tr>
										<th>
											 Hábitos
										</th>
										<th>
											 SI / NO
										</th>
										<th>
											 Descripción
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td class="text-capitalize">
											<b>Tabaquismo</b>
										</td>
										<td width="50px">
											<div class="toggle-switch toggle-switch-info">
												<label>
												<input type="checkbox" name="[]" value="">
												<div class="toggle-switch-inner">
												</div>
												<div class="toggle-switch-switch">
													<i class="fa fa-check"></i>
												</div>
												</label>
											</div>
										</td>
										<td>
											<?= form_input($tabaquismo)?>
										</td>
									</tr>
									<tr>
										<td>
											<b>Alcoholismo</b>
										</td>
										<td width="50px">
											<div class="toggle-switch toggle-switch-info">
												<label>
												<input type="checkbox" name="[]" value="">
												<div class="toggle-switch-inner">
												</div>
												<div class="toggle-switch-switch">
													<i class="fa fa-check"></i>
												</div>
												</label>
											</div>
										</td>
										<td>
											<?= form_input($alcoholismo)?>
										</td>
									</tr>
									<tr>
										<td>
											<b>Drogas</b>
										</td>
										<td width="50px">
											<div class="toggle-switch toggle-switch-info">
												<label>
												<input type="checkbox" name="[]" value="">
												<div class="toggle-switch-inner">
												</div>
												<div class="toggle-switch-switch">
													<i class="fa fa-check"></i>
												</div>
												</label>
											</div>
										</td>
										<td>
											<?= form_input($drogas)?>
										</td>
									</tr>
									<tr>
										<td>
											<b>Desórdenes Alimenticios</b>
										</td>
										<td width="50px">
											<div class="toggle-switch toggle-switch-info">
												<label>
												<input type="checkbox" name="[]" value="">
												<div class="toggle-switch-inner">
												</div>
												<div class="toggle-switch-switch">
													<i class="fa fa-check"></i>
												</div>
												</label>
											</div>
										</td>
										<td>
											<?= form_input($desordenes)?>
										</td>
									</tr>
                                                                        <tr>
                                                                            
                                                                            <td colspan="3">
                                                                                <input type="button" value="Guardar Hábitos del Paciente" style="width: 100%;">
                                                                            </td>
                                                                            
                                                                        </tr>
									</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="medicamentos">
								<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
								<thead>
								<tr>
									<th>
										Consumo de Medicamentos
									</th>
									<th>
										SI / NO
									</th>
									<th>
										Nombre
									</th>
									<th>
										Veces / día
									</th>
									<th>
										+
									</th>
                                                                        <th>
                                                                                Guardar Datos
                                                                        </th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="text-capitalize">
										<b>Detalles</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_input($nombreMed)?>
									</td>
									<td>
                                                                            <input type="number" class="form-control" name="txtDosisDiaria" min="0" max="10">
									</td>
									<td>
										<input type="button" value="+">
									</td>
                                                                        <td>
                                                                                <input type="button" value="Guardar Datos" style="width: 100%;">
                                                                        </td>
								</tr>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="alergias">
								<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
								<thead>
								<tr>
									<th>
										 Tipo de Alergia
									</th>
									<th>
										 SI / NO
									</th>
									<th>
										 Descripción
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="text-capitalize">
										<b>Alimentos</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_textarea ($alimentos)?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Medicamentos</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_textarea ($medicamentos)?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Ambiente</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_textarea ($ambiente)?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Animales</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_textarea ($animales)?>
									</td>
								</tr>
								<tr>
									<td>
										<b>Contacto con la Piel</b>
									</td>
									<td width="50px">
										<div class="toggle-switch toggle-switch-info">
											<label>
											<input type="checkbox" name="[]" value="">
											<div class="toggle-switch-inner">
											</div>
											<div class="toggle-switch-switch">
												<i class="fa fa-check"></i>
											</div>
											</label>
										</div>
									</td>
									<td>
										<?= form_textarea ($contactoPiel)?>
									</td>
								</tr>
                                                                <tr>
                                                                 
                                                                    <td colspan="3"> 
                                                                        <input type="button" value="Guardar Alergias" style="width: 100%;">
                                                                    </td>
                                                                </tr>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="sociales">
								<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
								<tbody>
								<tr>
									<td width="30%">
										<b>Breve Descripcion de Antecedentes Sociales Relevantes</b>
									</td>
									<td>
										<?= form_textarea ($antecedentesSociales)?>
									</td>
                                                                        
                                                                            
								</tr>
                                                                <tr>
                                                                    
                                                                    <td colspan="2">
                                                                        <input type="button" value="Guardar Antecedentes Sociales y Personales" style="width: 100%;">
                                                                    </td>
                                                                </tr>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="familiares">
								<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
								<tbody>
								<tr>
									<td width="30%">
										<b>Breve Descripcion de Antecedentes Familiares relevantes</b>
									</td>
									<td>
										<?= form_textarea ($antecedentesFamiliares)?>
									</td>
								</tr>
                                                                <tr>
                                                                   
                                                                    <td colspan="3">
                                                                        <input type="button" value="Guardar Antecedentes Familiares" style="width: 100%;">
                                                                    </td>
                                                                </tr>
								</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="inmunizaciones">
								<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
								<tbody>
								<tr>
									<td width="50px">
										<b>Inmunizaciones durante la infacia</b>
									</td>
									<td width="50px">
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> No Presenta <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox" >
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Sarampión <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Coqueluche <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Tétanos <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Difteria <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Tuberculosis <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Poliomelitis <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Parotiditis <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Rubeóla <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Neumococos <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Hepatitis A <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Hepatitis B <i class="fa fa-square-o"></i>
											</label>
										</div>
									</td>
									<td width="50px">
										<b>Inmunizaciones durante la adultez</b>
									</td>
									<td width="50px">
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> No Presenta <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Influenza <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Hepatitis A <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Hepatitis B <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Haemophylus influenzae <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> refuerzo de toxoide tetánico <i class="fa fa-square-o"></i>
											</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" name="inmuno[]" value=""> Otros: Indique <i class="fa fa-square-o"></i>
											</label>
											<?= form_input($inmunoObs)?>
                                                                                 
                                                                                        
										</div>
									</td>
                                                                </tr>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <input type="button" value="Guardar Inmunizaciones" style="width: 100%;">
                                                                                </td>
                                                                            </tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<div class="box-name">
								<i class="fa fa-table"></i>
								<span><a href="#">Revisión por Sistemas</a></span>
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
							<div class="no-move">
							</div>
						</div>
						<div class="box-content no-padding">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#generales" role="tab" data-toggle="tab">Síntomas Generales</a></li>
								<li><a href="#respiratorio" role="tab" data-toggle="tab">Respiratorio</a></li>
								<li><a href="#Cardiovascular" role="tab" data-toggle="tab">Cardiovascular</a></li>
								<li><a href="#Gastrointestinal" role="tab" data-toggle="tab">Gastrointestinal</a></li>
								<li><a href="#Genitourinario" role="tab" data-toggle="tab">Genitourinario</a></li>
								<li><a href="#Neurológico" role="tab" data-toggle="tab">Neurológico</a></li>
								<li><a href="#Endocrino" role="tab" data-toggle="tab">Endocrino</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="generales">
									<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
									<tbody>
									<tr>
										<td width="30%">
											<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
										</td>
										<td width="70%">
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Fiebre <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Trastornos en el Peso <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Malestar General <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Problemas con el Apetito <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Sudoración Nocturna <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Insomnio <i class="fa fa-square-o"></i>
												</label>
											</div>
											<div class="checkbox">
												<label>
												<input type="checkbox" name="generales[]" value=""> Angustia <i class="fa fa-square-o"></i>
												</label>
											</div>
										</td>
										<tr>
											<td>
												<label> Comentarios </label>
											</td>
											<td>
												<?= form_textarea($sisObs)?>
											</td>
										</tr>
                                                                                <tr>
                                                                                    
                                                                                    <td colspan="2">
                                                                                        <input type="button" value="Guardar Sintomas generales" style="width: 100%;">
                                                                                    </td>
                                                                                    
                                                                                </tr>
										</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="respiratorio">
										<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
										<tbody>
										<tr>
											<td width="30%">
												<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
											</td>
											<td width="70%">
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value="">No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Disnea <i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Tos <i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Expectoracion <i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Hemoptisis<i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Puntada de Costado <i class="fa fa-square-o"></i>
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="resp[]" value=""> Obstruccion Bronquial <i class="fa fa-square-o"></i>
													</label>
												</div>
											</td>
											<tr>
												<td>
													<label> Comentarios </label>
												</td>
												<td>
													<?= form_textarea($resObs)?>
												</td>
											</tr>
                                                                                        <tr>
                                                                                            
                                                                                            <td colspan="2">
                                                                                                <input type="button" value="Guardar Sintomas Sistema Respiratorio" style="width: 100%;">
                                                                                            </td>
                                                                                        </tr>
											</tbody>
											</table>
										</div>
										<div class="tab-pane fade " id="Cardiovascular">
											<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
											<tbody>
											<tr>
												<td width="30%">
													<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
												</td>
												<td width="70%">
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
														</label>
													</div>
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> Disnea de Esfuerzo <i class="fa fa-square-o"></i>
														</label>
													</div>
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> Ortopnea <i class="fa fa-square-o"></i>
														</label>
													</div>
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> Disnea Paroxística Nocturna <i class="fa fa-square-o"></i>
														</label>
													</div>
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> Edema de extremidades Inferiores <i class="fa fa-square-o"></i>
														</label>
													</div>
													<div class="checkbox">
														<label>
														<input type="checkbox" name="cardio[]" value=""> Dolor Precordial <i class="fa fa-square-o"></i>
														</label>
													</div>
												</td>
												<tr>
													<td>
														<label> Comentarios </label>
													</td>
													<td>
														<?= form_textarea($cardioObs)?>
													</td>
												</tr>
                                                                                                <tr>
                                                                                                    
                                                                                                    <td colspan="2">
                                                                                                        <input type="button" value="Guardar Sintomas Cardiológicos" style="width: 100%;">
                                                                                                    </td>
                                                                                                </tr>
												</tbody>
												</table>
											</div>
											<div class="tab-pane fade" id="Genitourinario">
												<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
												<tbody>
												<tr>
													<td width="30%">
														<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
													</td>
													<td width="70%">
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Disuria dolorsa o de esfuerzo <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Poliaquiuria <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Poliuria <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Nicturia <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Alteración del Chorro urinario<i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Hematuria <i class="fa fa-square-o"></i>
															</label>
														</div>
														<div class="checkbox">
															<label>
															<input type="checkbox" name="genito[]" value=""> Dolor en fosas lumbares <i class="fa fa-square-o"></i>
															</label>
														</div>
													</td>
													<tr>
														<td>
															<label> Comentarios </label>
														</td>
														<td>
															<?= form_textarea($genitoObs)?>
														</td>
													</tr>
                                                                                                        <tr>
                                                                                                            
                                                                                                            <td colspan="2">
                                                                                                                <input type="button" value="Guardar Sintomas Genitourinarios" style="width: 100%;">
                                                                                                            </td>
                                                                                                        </tr>
													</tbody>
													</table>
												</div>
												<div class="tab-pane fade" id="Neurológico">
													<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
													<tbody>
													<tr>
														<td width="30%">
															<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
														</td>
														<td width="70%">
															<div class="checkbox">
																<label>
																<input type="checkbox" > No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
																</label>
															</div>
															<div class="checkbox">
																<label>
																<input type="checkbox" name="neuro[]" value=""> Cefalea <i class="fa fa-square-o"></i>
																</label>
															</div>
															<div class="checkbox">
																<label>
																<input type="checkbox" name="neuro[]" value=""> Mareos <i class="fa fa-square-o"></i>
																</label>
															</div>
															<div class="checkbox">
																<label>
																<input type="checkbox" name="neuro[]" value=""> Problemas de Coordinación<i class="fa fa-square-o"></i>
																</label>
															</div>
															<div class="checkbox">
																<label>
																<input type="checkbox" name="neuro[]" value=""> Paresias <i class="fa fa-square-o"></i>
																</label>
															</div>
															<div class="checkbox">
																<label>
																<input type="checkbox" name="neuro[]" value=""> Parestesias<i class="fa fa-square-o"></i>
																</label>
															</div>
														</td>
														<tr>
															<td>
																<label> Comentarios </label>
															</td>
															<td>
																<?= form_textarea($neuroObs)?>
															</td>
														</tr>
                                                                                                                <tr>
                                                                                                                   
                                                                                                                    <td colspan="2">
                                                                                                                        <input type="button" value="Guardar Sintomas Neurologicos" style="width: 100%;">
                                                                                                                    </td>
                                                                                                                </tr>
														</tbody>
														</table>
													</div>
													<div class="tab-pane fade" id="Endocrino">
														<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
														<tbody>
														<tr>
															<td width="30%">
																<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
															</td>
															<td width="70%">
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Baja de Peso <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Inteolerancia al Frío <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Intolerancia al calor <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Temblor Fino <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Polidefecacion <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Ronquera <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Sonmolencia <i class="fa fa-square-o"></i>
																	</label>
																</div>
																<div class="checkbox">
																	<label>
																	<input type="checkbox" name="endo[]" value=""> Sequedad de la Piel <i class="fa fa-square-o"></i>
																	</label>
																</div>
															</td>
															<tr>
																<td>
																	<label> Comentarios </label>
																</td>
																<td>
																	<?= form_textarea($endoObs)?>
																</td>
															</tr>
                                                                                                                        <tr>
                                                                                                                           
                                                                                                                            <td colspan="2">
                                                                                                                                <input type="button" value="Guardar Sintomas Sistema Endocrino" style="width: 100%;">
                                                                                                                            </td>
                                                                                                                        </tr>
															</tbody>
															</table>
														</div>
														<div class="tab-pane fade" id="Gastrointestinal">
															<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
															<tbody>
															<tr>
																<td width="30%">
																	<b>Inidque aquellos sintomas que pueden ser observados en el paciente. Puede agregar un comentario adicional para mayor informacion</b>
																</td>
																<td width="70%">
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> No Presenta síntomas relevantes <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Problemas de Apetito <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Nauseas <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Vomitos <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Disfagia <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Pirosis <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Diarrea <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Constipacion <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																	<div class="checkbox">
																		<label>
																		<input type="checkbox" name="gastro[]" value=""> Melena <i class="fa fa-square-o"></i>
																		</label>
																	</div>
																</td>
																<tr>
																	<td>
																		<label> Comentarios </label>
																	</td>
																	<td>
																		<?= form_textarea($gastroObs)?>
																	</td>
																</tr>
                                                                                                                                <tr>
                                                                                                                                    
                                                                                                                                    <td colspan="2">
                                                                                                                                        <input type="button" value="Guardar Sintomas Gastrointestinales" style="width: 100%;">
                                                                                                                                    </td>
                                                                                                                                </tr>
																</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12">
												<div class="box">
													<div class="box-header">
														<div class="box-name">
															<i class="fa fa-table"></i>
															<span><a href="#">Examen Físico General</a></span>
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
														<div class="no-move">
														</div>
													</div>
													<div class="box-content no-padding">
														<!-- Nav tabs -->
														<ul class="nav nav-tabs" role="tablist">
															<li class="active"><a href="#Decúbito" role="tab" data-toggle="tab">Decúbito</a></li>
															<li><a href="#Deambulación" role="tab" data-toggle="tab">Deambulación</a></li>
															<li><a href="#Facie" role="tab" data-toggle="tab">Facie</a></li>
															<li><a href="#Conciencia" role="tab" data-toggle="tab">Conciencia</a></li>
															<li><a href="#Constitución" role="tab" data-toggle="tab">Constitución</a></li>
															<li><a href="#Piel" role="tab" data-toggle="tab">Piel</a></li>
															<li><a href="#Linfático" role="tab" data-toggle="tab">S. Linfático</a></li>
															<li><a href="#Respiración" role="tab" data-toggle="tab">Respiración</a></li>
															<li><a href="#Temperatura" role="tab" data-toggle="tab">Temperatura</a></li>
															<li><a href="#Presion" role="tab" data-toggle="tab">Presion y Pulso</a></li>
														</ul>
														<!-- Tab panes -->
														<div class="tab-content">
															<div class="tab-pane fade in active" id="Decúbito">
																<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																<thead>
																<tr>
																	<th>
																		 Posición
																	</th>
																	<th>
																		 Decúbito
																	</th>
																	<th>
																		 Archivo Multimedia
																	</th>
																</tr>
																</thead>
																<tbody>
																<tr>
																	<td>
																		<label>Descripción de la posicion de pie del paciente</label>
																	</td>
																	<td>
																		<label>Descripción de la posicion en decúbito del paciente</label>
																	</td>
																	<td>
																		<label>Imagenes, Audio o Video (opcional)</label>
																	</td>
																</tr>
																<tr>
																	<td>
																		<?= form_textarea($posicion)?>
																	</td>
																	<td>
																		<?= form_textarea($decubito)?>
																	</td>
																	<td>
																		<input type="file" value="Añadir Archivo" style="width: 60%;">
																	</td>
																</tr>
                                                                                                                                <tr>
                                                                                                                                    
                                                                                                                                    <td colspan="3">
                                                                                                                                        <input type="button" value="Guardar examen de Decúbito" style="width: 100%;">
                                                                                                                                    </td>
                                                                                                                                </tr>
																</tbody>
																</table>
															</div>
															<div class="tab-pane fade" id="Deambulación">
																<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																<tbody>
																<tr>
																	<td width="30%">
																		<b>Seleccione algun trastorno de marcha que presente el paciente</b>
																	</td>
																	<td width="70%">
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Deambulacion Normal <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha atáxica o tabética <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha cerebelosa <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha de pacientes con polineutitis (marcha equina o "steppage") <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha espástica (en tijeras) <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha del hemipléjico <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																		<div class="checkbox">
																			<label>
																			<input type="checkbox" name="deambu[]" value=""> Marcha parkinsoniana <i class="fa fa-square-o"></i>
																			</label>
																		</div>
																	</td>
																	<tr>
																		<td>
																			<label> Comentarios / Puede Ingresar un nuevo trastorno</label>
																		</td>
																		<td>
																			<?= form_textarea($deambuObs)?>
																		</td>
																	</tr>
                                                                                                                                        <tr>
                                                                                                                                          
                                                                                                                                            <td colspan="2">
                                                                                                                                                <input type="button" value="Guardar examen de Deambulación" style="width: 100%;">
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        
																	</tbody>
																	</table>
																</div>
																<div class="tab-pane fade " id="Facie">
																	<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																	<tbody>
																	<tr>
																		<td width="30%">
																			<b>Seleccione algun trastorno de facie que presente el paciente</b>
																		</td>
																		<td width="70%">
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie Normal <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie acromegálica <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie cushingoide <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie hipertiroídea <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie hipotiroídea o mixedematosa <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie hipocrática <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie mongólica (del síndrome de Down) <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie parkinsoniana <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie febril <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																			<div class="checkbox">
																				<label>
																				<input type="checkbox" name="facie[]" value=""> Facie mitrálica <i class="fa fa-square-o"></i>
																				</label>
																			</div>
																		</td>
																		<tr>
																			<td>
																				<label> Comentarios / Puede Ingresar un nuevo trastorno</label>
																			</td>
																			<td>
																				<?= form_textarea($facieObs)?>
																			</td>
																		</tr>
                                                                                                                                                <tr>
                                                                                                                                                    
                                                                                                                                                    
                                                                                                                                                    <td colspan="2">
                                                                                                                                                        <input type="button" value="Guardar examen de Facie" style="width: 100%;">
                                                                                                                                                    </td>
                                                                                                                                                </tr>
																		</tbody>
																		</table>
																	</div>
																	<div class="tab-pane fade" id="Conciencia">
																		<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																		<tbody>
																		<tr>
																			<td>
																				<label>Orientación en el tiempo</label>
																			</td>
																			<td>
																				<?= form_textarea($tiempo)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Orientación en el espacio</label>
																			</td>
																			<td>
																				<?= form_textarea($espacio)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Reconocimiento de Personas</label>
																			</td>
																			<td>
																				<?= form_textarea($personas)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label> Nivel De Conciencia</label>
																			</td>
																			<td>
																				<div class="radio">
																					<label>
																					<input type="radio" name="conciencia" value=""> Lucidez <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																				<div class="radio">
																					<label>
																					<input type="radio" name="conciencia" value=""> Obnubilacion <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																				<div class="radio">
																					<label>
																					<input type="radio" name="conciencia" value=""> Sopor <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																				<div class="radio">
																					<label>
																					<input type="radio" name="conciencia" value=""> Coma <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<b>Comentarios</b>
																			</td>
																			<td>
																				<?= form_textarea($consObs)?>
																			</td>
																		</tr>
                                                                                                                                                <tr>
                                                                                                                                                    
                                                                                                                                                    
                                                                                                                                                    <td colspan="2">
                                                                                                                                                        <input type="button" value="Guardar examen de Conciencia" style="width: 100%;">
                                                                                                                                                    </td>
                                                                                                                                                </tr>
																		</tbody>
																		</table>
																	</div>
																	<div class="tab-pane fade" id="Constitución">
																		<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																		<thead>
																		<tr>
																			<th>
																				 Tipo de Constitución
																			</th>
																			<th>
																				 Analisis de IMC
																			</th>
																			<th>
																				 Subir Archivo
																			</th>
																		</tr>
																		</thead>
																		<tbody>
																		<tr>
																			<td>
																				<div class="radio">
																					<label>
																					<input type="radio" name="constitucion" value=""> Constitución mesomorfa o atlética <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																				<div class="radio">
																					<label>
																					<input type="radio" name="constitucion" value=""> Constitución ectomorfa, asténica o leptosómica <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																				<div class="radio">
																					<label>
																					<input type="radio" name="constitucion" value=""> Constitución endomorfa o pícnica <i class="fa fa-circle-o small"></i>
																					</label>
																				</div>
																			</td>
																			<td>
																				<label>Peso / Metros</label>
																				<?= form_input($peso)?>
																				<br>
																				<label>Altura / Kilogramos</label>
																				<?= form_input($altura)?>
																				<br>
																				<label>IMC Calculado</label>
																				<?= form_input($imc)?>
																				<br>
																			</td>
																			<td>
																				<input type="file" value="Añadir Archivo" style="width: 60%;">
																			</td>
																		</tr>
                                                                                                                                                <tr>
                                                                                                                                                    
                                                                                                                                                    <td colspan="3">
                                                                                                                                                        <input type="button" value="Guardar examen de Constitución" style="width: 100%;">
                                                                                                                                                    </td>
                                                                                                                                                    
                                                                                                                                                </tr>
																		</tbody>
																		</table>
																	</div>
																	<div class="tab-pane fade" id="Piel">
																		<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																		<thead>
																		<tr>
																			<th>
																				 Evaluación por aspectos
																			</th>
																			<th>
																				 Descripción
																			</th>
																		</tr>
																		</thead>
																		<tbody>
																		<tr>
																			<td>
																				<label>Color </label>
																			</td>
																			<td>
																				<?= form_input($color)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Humedad </label>
																			</td>
																			<td>
																				<?= form_input($humedad)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Untuosidad </label>
																			</td>
																			<td>
																				<?= form_input($untuosidad)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Turgor </label>
																			</td>
																			<td>
																				<?= form_input($turgor)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Elastisidad </label>
																			</td>
																			<td>
																				<?= form_input($elasticidad)?>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<label>Temperatura </label>
																			</td>
																			<td>
																				<select name="" id="">
																					<option value="">Normal</option>
																					<option value="">Aumentada</option>
																					<option value="">Disminuída</option>
																				</select>
																			</td>
																		</tr>
																		</tbody>
																		</table>
																		<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																		<tbody>
																		<tr>
																			<td width="15%">
																				<b>Seleccione algun trastorno en la piel que presente el paciente</b>
																			</td>
																			<td>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value="">No presenta lesiones <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value="">Eritema <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Eritema por exposicion solar <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Mácula en la cara <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Pápula <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Nódulo <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Tumor <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Vesícula <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Ampolla <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Pústula <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Placa <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																			</td>
																			<td>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Escama <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Erosión <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Ulseracion <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Costra <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Cicatriz <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Roncha <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Liquenificación <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Telangiectasia <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Petequia <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Equímosis <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Víbice <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																				<div class="checkbox">
																					<label>
																					<input type="checkbox" name="piel[]" value=""> Efélide <i class="fa fa-square-o"></i>
																					</label>
																				</div>
																			</td>
																			<tr>
																				<td>
																					<label> Comentarios / Precise la posicion de la lesión</label>
																				</td>
																				<td>
																					<?= form_textarea($pielObs)?>
																				</td>
																				<td>
																					<input type="file" value="Añadir Archivo" style="width: 60%;">
																				</td>
																			</tr>
                                                                                                                                                        <tr>
                                                                                                                                                            
                                                                                                                                                            <td colspan="3"><input type="button" value="Guardar examen de Piel" style="width: 100%;"></td>
                                                                                                                                                            
                                                                                                                                                        </tr>
																			</tbody>
																			</table>
																		</div>
																		<div class="tab-pane fade" id="Linfático">
																			<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																			<thead>
																			<tr>
																				<th>
																					 Presencia de Adenopatías
																				</th>
																				<th>
																					 SI / NO
																				</th>
																				<th>
																					 Descripción de Adenopatía
																				</th>
																			</tr>
																			</thead>
																			<tbody>
																			<tr>
																				<td class="text-capitalize">
																					<b>Adenopatía</b>
																				</td>
																				<td width="50px">
																					<div class="toggle-switch toggle-switch-info">
																						<label>
																						<input type="checkbox" name="[]" value="">
																						<div class="toggle-switch-inner">
																						</div>
																						<div class="toggle-switch-switch">
																							<i class="fa fa-check"></i>
																						</div>
																						</label>
																					</div>
																				</td>
																				<td>
																					<?= form_input($adenopatia)?>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<b>Comentarios</b>
                                                                                                                                                                        <?= form_textarea($linfaObs)?>
																				</td>
																				
                                                                                                                                                                <td colspan="2">
																					<input type="file" value="Añadir Archivo" style="width: 60%;">
																				</td>
																			</tr>
                                                                                                                                                        <tr>
                                                                                                                                                            
                                                                                                                                                            <td colspan="3"><input type="button" value="Guardar examen Sistema Linfático" style="width: 100%;"></td>
                                                                                                                                                            
                                                                                                                                                        </tr>
																			</tbody>
																			</table>
																		</div>
																		<div class="tab-pane fade" id="Respiración">
																			<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																			<thead>
																			<tr>
																				<th>
																					 Respiraciones por Minuto
																				</th>
																				<th>
																					 Subir Archivo
																				</th>
																			</tr>
																			</thead>
																			<tbody>
																			<tr>
																				<td>
																					<label>Respiración (RPM): </label>
																					<?= form_input($rpm)?>
																				</td>
																				<td>
																					<input type="file" value="Añadir Archivo" style="width: 60%;">
																				</td>
																			</tr>
                                                                                                                                                        <tr>
                                                                                                                                                            
                                                                                                                                                            <td colspan="2"><input type="button" value="Guardar examen de Respiración" style="width: 100%;"></td>
                                                                                                                                                            
                                                                                                                                                        </tr>
																			</tbody>
																			</table>
																		</div>
																		<div class="tab-pane fade" id="Temperatura">
																			<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																			<thead>
																			<tr>
																				<th>
																					 Temperatura
																				</th>
																				<th>
																					 Subir Archivo
																				</th>
																			</tr>
																			</thead>
																			<tbody>
																			<tr>
																				<td>
																					<label>Temperatura (C°): </label>
																					<?= form_input($celsius)?>
																				</td>
																				<td>
																					<input type="file"  style="width: 60%;">
																				</td>
																			</tr>
                                                                                                                                                        <tr>
                                                                                                                                                            
                                                                                                                                                            <td colspan="2"><input type="button" value="Guardar examen de Temperatura" style="width: 100%;"></td>
                                                                                                                                                            
                                                                                                                                                        </tr>
																			</tbody>
																			</table>
																		</div>
																		<div class="tab-pane fade" id="Presion">
																			<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																			<thead>
																			<tr>
																				<th>
																					 Presion Arterial
																				</th>
																				<th>
																					 Pulso Arterial
																				</th>
																				<th>
																					 Subir Archivo
																				</th>
																			</tr>
																			</thead>
																			<tbody>
																			<tr>
																				<td>
																					<label>Presion (mmHg): </label>
																					<?= form_input($presion)?>
																				</td>
																				<td>
																					<label>Pulso (lpm): </label>
																					<?= form_input($pulso)?>
																				</td>
																				<td>
																					<input type="file" value="Añadir Archivo" style="width: 60%;">
																				</td>
																			</tr>
																			</tbody>
																			</table>
																			<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																			<thead>
																			<tr>
																				<th>
																					 Zona
																				</th>
																				<th>
																					 P.Carotídeo
																				</th>
																				<th>
																					 P.Braquial
																				</th>
																				<th>
																					 P.Radial
																				</th>
																				<th>
																					 P.Femoral
																				</th>
																				<th>
																					 P.Poplíteo
																				</th>
																				<th>
																					 P.Tibial
																				</th>
																				<th>
																					 P.Pedio
																				</th>
																			</tr>
																			</thead>
																			<tbody>
																			<tr>
																				<td>
																					<b>Izquierda</b>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<b>Derecha</b>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																				<td>
																					<select name="" id="">
																						<option value="Normal">+</option>
																						<option value="Aumentado">++</option>
																						<option value="Muy Aumentado">+++</option>
																						<option value="Disminuido">-</option>
																					</select>
																				</td>
																			</tr>
                                                                                                                                                        <tr>
                                                                                                                                                            
                                                                                                                                                            <td colspan="8"><input type="button" value="Guardar examen de Presion y Pulso" style="width: 100%;"></td>
                                                                                                                                                            
                                                                                                                                                        </tr>
																			</tbody>
																			</table>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12">
															<div class="box">
																<div class="box-header">
																	<div class="box-name">
																		<i class="fa fa-table"></i>
																		<span><a href="#">Diagnóstico Clínico Preliminar</a></span>
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
																	<div class="no-move">
																	</div>
																</div>
																<div class="box-content no-padding">
																	<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
																	<tbody>
																	<tr>
																		<td>
																			<b>Hipótesis Diagnóstica</b>
																		</td>
																		<td>
																			<?=form_textarea($diagnosticoPreliminar)?>
																		</td>
																		<td>
																			<button type="button" class="btn btn-primary btn-label-left" id="ingresarConsulta" name="btoPaciente">
																			<span><i class="fa fa-clock-o"></i></span>Ingresar Consulta Médica </button>
																		</td>
																	</tr>
																	</tbody>
                                                                                                                                        <?= form_close()?>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
                                                                                              
