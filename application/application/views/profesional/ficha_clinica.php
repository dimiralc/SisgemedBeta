<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
            <li><a href="#"><?=$institucion;?></a></li>
			<li><a href="#">Fichas Medicas Electronicas</a></li>
            <li><a href="#"><?=$perfil;?></a></li>
            <li><a href="#"><?=$profesional;?></a></li>
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Ficha Clinica Electronica</span>
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
				<h4 class="page-header">Ficha Clinica</h4>     
<?php 
//mesansaje de error
//Error en una o mas de las  transaccciones que permiten la creacion de una ficha clinica
if($this->session->flashdata('error_transaccion_fce'))
{ ?>
<div class="alert alert-danger" role="alert">
    <a href="<?=  base_url();?>profesional/registrarFCE" class="alert-link"><?=$this->session->flashdata('error_transaccion_fce')?></a>
</div>
<?php } ?>

<?php 
if($this->session->flashdata('transaccion_correcta_fce'))
{ ?>
<div class="alert alert-success" role="alert">
  <p class="alert-link"><?=$this->session->flashdata('transaccion_correcta_fce')?></p>
</div>
<?php } ?>
                    <!-- input paciente -->
                     <div class="form-group">
                            
                        <div class="col-sm-5">
                            
                        </div>
                          
                    </div><!-- fin input paciente --> 

                    
					<div class="form-group">
						
						<div class="col-sm-10">
                        
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
                            
						</div>
					</div>
                </form>
			</div>
		</div>
	</div>
</div>
</div>

<!--End Content-->
