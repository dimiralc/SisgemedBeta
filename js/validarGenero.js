function validarBotonRadio() {
var marcado = "no";
with (document.formularioPaciente){
for ( var i = 0; i < sexo.length; i++ ) {
if ( sexo[i].checked ) {
return true;
}
}
if ( marcado == "no" ){
window.alert("Debe marcar su sexo" ) ;
}
}
}
function validarBotonRadio2() {
var marcado = "no";
with (document.formulario2){
for ( var i = 0; i < gallego.length; i++ ) {
if ( gallego[i].checked ) {
alert ("Su provincia es: " + gallego[i].value);
return true;
}
}
if ( marcado == "no" ){
window.alert("Debe marcar su provincia" ) ;
}
}
}


