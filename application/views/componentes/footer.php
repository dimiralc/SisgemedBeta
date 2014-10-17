<script src="<?=base_url();?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url();?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url();?>js/devoops.js"></script>
<script src="<?=base_url();?>js/validar/bootstrapValidator.js" type="text/javascript" ></script>
<script src="<?=base_url();?>js/tags_input/typeahead.bundle.min.js"></script>
<script src="<?=base_url();?>js/tags_input/bootstrap-tagsinput.min.js"></script>
<script src="<?=base_url();?>js/validarDatosPaciente.js"></script>
<script src="<?=base_url();?>js/jquery.Rut.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/funciones.js" type="text/javascript"></script>
<script src="<?=base_url();?>/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/sweet-alert.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
    $( "#fecnac" ).datepicker();
  });
</script>
<script type="text/javascript">
    $(function() {
    $( "#fecing" ).datepicker();
  });
</script>
<script type="text/javascript">
    $(function() {
    $( "#fur" ).datepicker();
  });
</script>
<script type="text/javascript">
    $(function() {
    $('#rut').Rut({
        on_error: function(){ 
            sweetAlert('Rut Inválido', 'Debe ingresar un rut válido', 'error');
            $('#rut').val('');
            $('#rut').focus();
        }
      });
  });
</script>
<script type="text/javascript">
    $(function() {
    $('#buscarRut').Rut({
        on_error: function(){ 
            sweetAlert('Rut Inválido', 'Debe ingresar un rut válido', 'error');
            $('#buscarRut').val('');
            $('#buscarRut').focus();
        }
      });
  });
</script>
<script language=javascript type=text/javascript>
    function stopRKey(evt) {
        var evt = (evt) ? evt : ((event) ? event : null);
        var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
        if ((evt.keyCode === 13) && (node.type === "text")) {return false;}
    }
    document.onkeypress = stopRKey; 
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#mail').blur(function(){
        if($("#mail").val().indexOf('@', 0) === -1 || $("#mail").val().indexOf('.', 0) === -1) {
            sweetAlert('Email Inválido', 'El formato correcto es nombre@correo.com', 'alert');
            $('#mail').val('');
            $('#mail').focus();
            return false;
        }
    });
});
</script>

<script type="text/javascript">
// 
///* TAGS VACUNAS */
//var vacunas = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '<?=base_url();?>profesional/jsonVacunas/'
//});
//vacunas.initialize();
///** Objects as tags*/
//elt = $('.example_objects_as_vacunas > > input');
//elt.tagsinput({
//  itemValue: 'value',
//  itemText: 'text',
//  typeaheadjs: {
//    name: 'vacunas',
//    displayKey: 'text',
//    source: vacunas.ttAdapter()
//  }
//});
///* FIN TAGS VACUNAS */
//
//
///* TAGS ALERGIAS */
//var alergias = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '<?=base_url();?>profesional/jsonAlergias/'
//});
//alergias.initialize();
///** Objects as tags*/
//elt = $('.example_objects_as_alergias > > input');
//elt.tagsinput({
//  itemValue: 'value',
//  itemText: 'text',
//  typeaheadjs: {
//    name: 'alergias',
//    displayKey: 'text',
//    source: alergias.ttAdapter()
//  }
//});
///* FIN TAGS ALERGIAS */
//
///* TAGS MEDICAMENTOS */
//var medicamentos = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
// prefetch: '<?=base_url();?>profesional/jsonMedicamentos/'
//});
//medicamentos.initialize();
///** Objects as tags*/
//elt = $('.example_objects_as_medicamentos > > input');
//elt.tagsinput({
//  itemValue: 'value',
//  itemText: 'text',
//  typeaheadjs: {
//    name: 'medicamentos',
//    displayKey: 'text',
//    source: medicamentos.ttAdapter()
//  }
//});
///* FIN TAGS MEDICAMENTOS */
//
///* TAGS ENFERMEDADES */
//var enfermedades = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '<?=base_url();?>profesional/jsonEnfermedades/'
//});
//enfermedades.initialize();
///** Objects as tags*/
//elt = $('.example_objects_as_enfermedades > > input');
//elt.tagsinput({
//  itemValue: 'value',
//  itemText: 'text',
//  typeaheadjs: {
//    name: 'enfermedades',
//    displayKey: 'text',
//    source: enfermedades.ttAdapter()
//  }
//});
///* FIN TAGS ENFERMEDADES */
//
///* TAGS OPERACIONES */
//var operaciones = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '<?=base_url();?>profesional/jsonAccidente/'
//});
//operaciones.initialize();
//
///** Objects as tags
// */
//elt = $('.example_objects_as_accidentes > > input');
//elt.tagsinput({
//  itemValue: 'value',
//  itemText: 'text',
//  typeaheadjs: {
//    name: 'operaciones',
//    displayKey: 'text',
//    source: operaciones.ttAdapter()
//  }
//});
///* FIN TAGS OPERACIONES */
//
//</script>
</body>
</html>