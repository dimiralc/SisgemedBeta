<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$titulo;?></title>
    <style type="text/css">
    table { vertical-align: top; }
    tr    { vertical-align: top; }
    td    { vertical-align: top; }
   
    @page {
	margin: 2cm;
    }
    body {
      font-family: sans-serif;
        margin: 0.5cm 0;
        text-align: justify;
    }
    #header,
    #footer {
      position: fixed;
      left: 0;
        right: 0;
        color: #aaa;
        font-size: 0.9em;
    }
    #header {
      top: 0;
        border-bottom: 0.1pt solid #aaa;
    }
    #footer {
      bottom: 0;
      border-top: 0.1pt solid #aaa;
    }
    #header table,
    #footer table {
        width: 100%;
        border-collapse: collapse;
        border: none;
    }
    #header td,
    #footer td {
      padding: 0;
        width: 50%;
    }
    .page-number {
      text-align: center;
    }
    .page-number:before {
      content: "Page " counter(page);
    }
    hr {
      page-break-after: always;
      border: 0;
    }
    </style>
</head>
<body>
    <div id="header">
  <table>
    <tr>
      <td><?=$fecha;?></td>
      <td style="text-align: right;">www.Sisgemed.cl</td>
    </tr>
  </table>
</div>

<div id="footer">
  <div class="page-number"></div>
</div>
<br>
    <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr >
            <td style="width: 75%;">

                <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; text-align: left; font-size: 11pt;">
                    <tr>
                        <td style="width:14%"><strong>Empresa :</strong></td>
                        <td style="width:76%"> <?=$nombre;?></td>
                        <td style="width:10%;"></td>
                    </tr>
                    <tr>
                        <td style="width:14%"><strong>R.U.T :</strong></td>
                        <td style="width:76%"><?=$rut;?></td>
                        <td style="width:10%;"></td>
                    </tr>
                    <tr>
                        <td style="width:14%;"><strong>Direcci&oacute;n: </strong></td>
                        <td style="width:76%">
                            <?=$direccion;?>
                        </td>
                        <td style="width:10%;"></td>
                    </tr>
                    <tr>
                        <td style="width:14%; "><strong>Email :</strong></td>
                        <td style="width:76%"><?=$correo;?></td>
                        <td style="width:10%;"></td>
                    </tr>
                    <tr>
                        <td style="width:14%;"><strong>Tel :</strong></td>
                        <td style="width:76%"><?=$telefono?></td>
                        <td style="width:10%;"></td>
                    </tr>
                    <tr>
                        <td style="width:14%;"><strong>Fecha :</strong></td>
                        <td style="width:76%"><?=$fecha_creacion;?></td>
                        <td style="width:10%;"></td>
                    </tr>
                </table>
                <br>
                <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; text-align: left;font-size: 10pt">
                    <tr>
                        <td style="width:90%; "></td>
                        <td style="width:10%;"></td>
                    </tr>
                </table>    
            </td>
            <td style="width: 25%; color: #444444;">
                <img style="width:150px" height="80px;" src="img/logotipo.png" alt="Logo"><br>
                Sistema de Gestiones Medicas
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table cellspacing="0" border="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: left; font-size: 10pt;">
        <tr>
             <td style="width:100%;" colspan="6"><strong>Datos Filiatorios</strong></td>
        </tr>
        <tr>
            <td style="width: 15%;background: #FFFFFF;"><strong>Rut :</strong></td>
            <td style="width: 15%;background: #FFFFFF;text-align: left;"><?=$paciente->rut;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>N° HCE :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->id_historia_medica;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Fecha Ing. :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->fecha_ingreso;?></td>
        </tr>
        <tr>
            <td style="width: 15%;background: #FFFFFF;"><strong>Nombres :</strong></td>
            <td style="width: 15%;background: #FFFFFF;text-align: left;">
                <?=$paciente->primer_nombre." ".$paciente->segundo_nombre;?>
            </td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Apellidos :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;">
                <?=$paciente->apellido_paterno." ".$paciente->apellido_materno;?>
            </td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Fecha Nac. :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->fecha_nacimiento;?></td>
        </tr>
        <tr>
            <td style="width: 15%;background: #FFFFFF;"><strong>Estado Civil :</strong></td>
            <td style="width: 15%;background: #FFFFFF;text-align: left;"><?=$paciente->estado_civil;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Sexo :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->sexo;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Nacionalidad :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;">-Chile</td>
        </tr>
        <tr>
            <td style="width: 15%;background: #FFFFFF;"><strong>Niv. Estudios :</strong></td>
            <td style="width: 15%;background: #FFFFFF;text-align: left;"><?=$paciente->nivel_estudio;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Ocupacion :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->ocupacion;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Religión :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;">-Catolica</td>
        </tr>
        <tr>
            <td style="width: 15%;background: #FFFFFF;"><strong>Previsión :</strong></td>
            <td style="width: 15%;background: #FFFFFF;text-align: left;"><?=$paciente->prevision_medica;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Email :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->correo;?></td>
            <td style="width: 15%;background: #FFFFFF;"><strong>Telefono :</strong></td>
            <td style="width: 20%;background: #FFFFFF;text-align: left;"><?=$paciente->telefono;?></td>
        </tr>
        <tr>
            <td style="width:16%;background: #FFFFFF;"><strong>Dirección :</strong></td>
            <td style="width:80%;background: #FFFFFF;" colspan="5"><?=$paciente->direccion;?></td>
        </tr>
        <tr>
             <td style="width:100%;" colspan="6"><strong>Antecedentes Familiares</strong></td>
        </tr>
        <tr>
             <td style="width:100%;background: #FFFFFF;" colspan="6">
                <?=$ant_familiares->ant_familiar;?>
             </td>
        </tr>
        <tr>
             <td style="width:100%;" colspan="6"><strong>Antecedentes Sociales y Personales</strong></td>
        </tr>
        <tr>
             <td style="width:100%;background: #FFFFFF;" colspan="6">
                <?=$antSocialesPersonales->ant_social;?>
             </td>
        </tr>
    </table>
    <table cellspacing="0" border="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width:100%;text-align:left" colspan="5">Personas de Contacto</th>
        </tr>
        <tr>
            <th style="width: 20%; text-align:left">Nombres</th>
            <th style="width: 20%; text-align:left">Apellidos</th>
            <th style="width: 10%; text-align:left">Parentesco</th>
            <th style="width: 15%; text-align:left">Telefono</th>
            <th style="width: 25%; text-align:left">Email</th>
        </tr>
        <?php foreach ($personas_contacto->result() as $persona){ ?>
            <tr>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt"><?=$persona->nombres;?></td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt"><?=$persona->apellidos;?></td>
            <td style="width: 10%;background: #FFFFFF; text-align: left; font-size: 10pt"><?=$persona->parentesco;?></td>
            <td style="width: 15%;background: #FFFFFF; text-align: left; font-size: 10pt"><?=$persona->telefono;?></td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt"><?=$persona->correo;?></td>
            </tr>
         <?php } ?>
    </table>
    <!--<table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 20%; text-align:left">Nombres</th>
            <th style="width: 20%; text-align:left">Apellidos</th>
            <th style="width: 20%; text-align:left">Parentesco</th>
            <th style="width: 20%; text-align:left">Telefono</th>
            <th style="width: 20%; text-align:left">Email</th>
        </tr>
        
       
            <tr>
            <td style="background: #FFFFFF; text-align: left; font-size: 10pt">Cristian Alejadro</td>
            <td style="background: #FFFFFF; text-align: left; font-size: 10pt">Vidal Muñoz</td>
            <td style="background: #FFFFFF; text-align: left; font-size: 10pt">Padre</td>
            <td style="background: #FFFFFF; text-align: left; font-size: 10pt">56-97854122</td>
            <td style="background: #FFFFFF; text-align: left; font-size: 10pt">cris.vidal04@gmail.com</td>
            </tr>
    </table>-->
    <br>
</body>
</html>