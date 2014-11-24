$(document).ready(function () {
    $("#buscarPaciente").click(function (event) {
        event.preventDefault();
        $('#nhce').attr('disabled', false);
        var datos = $('#formBuscar').serialize();
        var url = $('#formBuscar').attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: datos,
            success:
                    function (datos) {
                        datos = JSON.parse(datos);
                        var rut = datos.rut;
                        var firstname = datos.primer_nombre;
                        var lastname = datos.segundo_nombre;
                        var paterno = datos.apellido_paterno;
                        var materno = datos.apellido_materno;
                        var direccion = datos.direccion;
                        var sexo = datos.sexo;
                        var nacionalidad = datos.lugar_nac;
                        var nhce = datos.id_historia_medica;
                        $('#rut').val(rut);
                        $('#nombre_paciente').val(firstname);
                        $('#paterno').val(paterno);
                        $('#materno').val(materno);
                        $('#sexo').val(sexo);
                        $('#nacionalidad').val(nacionalidad);
                        $('#nhce').val(nhce);


                    }
        });
    });
});
$(document).ready(function () {
    $("#ingresarConsulta").click(function (event) {
        event.preventDefault();
        var datos = $('#formConsultaMedica').serialize();
        var url = $('#formConsultaMedica').attr('action');
        alert(url);
        $.ajax({
            type: 'POST',
            url: url,
            data: datos,
            success:
                    function () {
                        sweetAlert('Consulta ingresada satisfactoriamente', 'Redireccionando a la pagina principal...', 'success');
                        setTimeout("document.location.href='profesional/index';", 1000);

                    }
        });
    });
});
$(document).ready(function () {
    $("#chkEnfermedades").change(function () {
        if ($("#chkEnfermedades").is(':checked')) {
            $("#enfermedades").attr('disabled', false);
        } else {
            $("#enfermedades").attr('disabled', true);
        }
    });
});
$(document).ready(function () {
    $("#chkTraumatismos").change(function () {
        if ($("#chkTraumatismos").is(':checked')) {
            $("#traumatismos").attr('disabled', false);
        } else {
            $("#traumatismos").attr('disabled', true);
        }
    });
});
$(document).ready(function () {
    $("#chkOperaciones").change(function () {
        if ($("#chkOperaciones").is(':checked')) {
            $("#operaciones").attr('disabled', false);
        } else {
            $("#operaciones").attr('disabled', true);
        }
    });
});

 