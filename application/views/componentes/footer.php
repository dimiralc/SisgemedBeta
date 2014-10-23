<script src="<?=base_url();?>plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url();?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url();?>js/devoops.js"></script>
<script src="<?=base_url();?>js/table-master.js"></script>
<script src="<?=base_url();?>js/bootstrap-table.js"></script>
<script src="<?=base_url();?>js/validar/bootstrapValidator.js" type="text/javascript" ></script>
<script src="<?=base_url();?>js/tags_input/typeahead.bundle.min.js"></script>
<script src="<?=base_url();?>js/jquery.Rut.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/funciones.js" type="text/javascript"></script>
<script src="<?=base_url();?>/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/sweet-alert.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/funcionesAgregarConsulta.js" type="text/javascript"></script>
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
            sweetAlert('Email Inválido', 'El formato correcto es nombre@correo.com', 'error');
            $('#mail').val('');
            $('#mail').focus();
            return false;
        }
    });
});
</script>


</body>
</html>
