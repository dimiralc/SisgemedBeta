function validarBotonRadio() {
    var marcado = "no";
    with (document.formularioPaciente) {
        for (var i = 0; i < genero.length; i++) {
            if (genero[i].checked) {
                return true;
            }
        }
        if (marcado == "no") {
            window.alert("Debe seleccionar el genero del paciente");
        }
    }
}
