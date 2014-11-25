<script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>js/devoops.js"></script>
<script src="<?= base_url(); ?>js/table-master.js"></script>
<script src="<?= base_url(); ?>js/bootstrap-table.js"></script>
<script src="<?= base_url(); ?>js/validar/bootstrapValidator.js" type="text/javascript" ></script>
<script src="<?= base_url(); ?>js/tags_input/typeahead.bundle.min.js"></script>
<script src="<?= base_url(); ?>js/jquery.Rut.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>js/funciones.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>js/sweet-alert.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>js/funcionesAgregarConsulta.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>js/funcionesAgregarPaciente.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#fecnac").datepicker();
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#fecing").datepicker();
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#fur").datepicker();
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#rut').Rut({
            on_error: function () {
                sweetAlert('Rut Inválido', 'Debe ingresar un rut válido', 'error');
                $('#rut').val('');
                $('#rut').focus();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#buscarRut').Rut({
            on_error: function () {
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
        if ((evt.keyCode === 13) && (node.type === "text")) {
            return false;
        }
    }
    document.onkeypress = stopRKey;
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#mail').blur(function () {
            if ($("#mail").val().indexOf('@', 0) === -1 || $("#mail").val().indexOf('.', 0) === -1) {
                sweetAlert('Email Inválido', 'El formato correcto es nombre@correo.com', 'error');
                $('#mail').val('');
                $('#mail').focus();
                return false;
            }
        });
    });
</script>
<script type="text/javascript">
$(function () { 
    $('#genero').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Pacientes en el sistema'
        },
        xAxis: {
            categories: ['Pacientes por Sexo']
        },
        yAxis: {
            title: {
                text: 'Numero de Pacientes en el Sistema'
            }
        },
        series: [{
            name: 'Hombres',
            data: [8]
        }, {
            name: 'Mujeres',
            data: [3]
        }]
    });
});
</script>
<script type="text/javascript">
$(function () { 
    $('#enfermedades').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Enfermedades mas Frecuentes'
        },
        xAxis: {
            categories: ['Colera', 'Hepatitis', 'Henteropatogenia', 'Shigelosois', 'Enteritis']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Pacientes'
            }
        },
        series: [ {
            name: 'N° Pac.',
            data: [8, 14, 7, 9, 11]
        }]
    });
});
</script>
<script type="text/javascript">
$(function () { 
        $('#patologias').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,//null,
            plotShadow: false
        },
        title: {
            text: 'Patologías mas frecuentes'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Enfermedades',
            data: [
                ['Coli',   45.0],
                ['Tifoidea',       26.8],
                ['Hepatitis',    8.5],
                ['Enteritis',     6.2],
                ['Colera',   0.7]
            ]
        }]
    });
});
</script>
<script type="text/javascript">
$(function () { 
        $('#pacientes').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,//null,
            plotShadow: false
        },
        title: {
            text: 'Pacientes por Genero'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: false,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Género',
            data: [
                ['Hombres',   45.0],
                ['Mujeres',       26.8],
                
            ]
        }]
    });
});
</script>
</body>
</html>
