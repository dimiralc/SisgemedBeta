<script src="<?=base_url();?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url();?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url();?>plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="<?=base_url();?>plugins/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.css"></script>
<script src="<?=base_url();?>js/devoops.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/validar/bootstrapValidator.js"></script>
<script src="<?=base_url();?>js/tags_input/typeahead.bundle.min.js"></script>
<script src="<?=base_url();?>js/tags_input/bootstrap-tagsinput.min.js"></script>
<script src="<?=base_url();?>js/validarGenero.js"></script>
<script type="text/javascript">
/* TAGS VACUNAS */
var vacunas = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '<?=base_url();?>profesional/jsonVacunas/'
});
vacunas.initialize();
/** Objects as tags*/
elt = $('.example_objects_as_vacunas > > input');
elt.tagsinput({
  itemValue: 'value',
  itemText: 'text',
  typeaheadjs: {
    name: 'vacunas',
    displayKey: 'text',
    source: vacunas.ttAdapter()
  }
});
/* FIN TAGS VACUNAS */


/* TAGS ALERGIAS */
var alergias = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '<?=base_url();?>profesional/jsonAlergias/'
});
alergias.initialize();
/** Objects as tags*/
elt = $('.example_objects_as_alergias > > input');
elt.tagsinput({
  itemValue: 'value',
  itemText: 'text',
  typeaheadjs: {
    name: 'alergias',
    displayKey: 'text',
    source: alergias.ttAdapter()
  }
});
/* FIN TAGS ALERGIAS */

/* TAGS MEDICAMENTOS */
var medicamentos = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
 prefetch: '<?=base_url();?>profesional/jsonMedicamentos/'
});
medicamentos.initialize();
/** Objects as tags*/
elt = $('.example_objects_as_medicamentos > > input');
elt.tagsinput({
  itemValue: 'value',
  itemText: 'text',
  typeaheadjs: {
    name: 'medicamentos',
    displayKey: 'text',
    source: medicamentos.ttAdapter()
  }
});
/* FIN TAGS MEDICAMENTOS */

/* TAGS ENFERMEDADES */
var enfermedades = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '<?=base_url();?>profesional/jsonEnfermedades/'
});
enfermedades.initialize();
/** Objects as tags*/
elt = $('.example_objects_as_enfermedades > > input');
elt.tagsinput({
  itemValue: 'value',
  itemText: 'text',
  typeaheadjs: {
    name: 'enfermedades',
    displayKey: 'text',
    source: enfermedades.ttAdapter()
  }
});
/* FIN TAGS ENFERMEDADES */

/* TAGS OPERACIONES */
var operaciones = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '<?=base_url();?>profesional/jsonAccidente/'
});
operaciones.initialize();

/** Objects as tags
 */
elt = $('.example_objects_as_accidentes > > input');
elt.tagsinput({
  itemValue: 'value',
  itemText: 'text',
  typeaheadjs: {
    name: 'operaciones',
    displayKey: 'text',
    source: operaciones.ttAdapter()
  }
});
/* FIN TAGS OPERACIONES */

</script>
<!-- FIN TAGS -->

</body>
</html>