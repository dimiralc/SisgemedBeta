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
<!-- backimg="./res/bas_page.png" -->
<!--<page backcolor="#FEFEFE" backimgx="center" 
backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
-->
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
    <bookmark title="Lettre" level="0" ></bookmark>
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
    <i>
        <b><u>Reporte</u>: &laquo; Listado de Pacientes &raquo;</b><br>
    </i>
    <br>
    Cantidad Total de pacientes: <b><?=$cantidad;?></b>.<br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 5%; text-align:center">#</th>
            <th style="width: 15%; text-align:center">Rut</th>
            <th style="width: 20%; text-align:center">Nombres</th>
            <th style="width: 20%; text-align:center">Apellidos</th>
            <th style="width: 10%; text-align:center">Edad</th>
            <th style="width: 20%; text-align:center">Email</th>
            <th style="width: 10%; text-align:center">Telefono</th>
        </tr>
        
        <?php $cont=0;foreach ($pacientes->result() as $paciente){ $cont++; ?>
            <tr>
            <td style="width: 5%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$cont;?>
            </td>    
            <td style="width: 15%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$paciente->rut;?>
            </td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$paciente->primer_nombre." ".$paciente->segundo_nombre;?>
            </td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$paciente->apellido_paterno." ".$paciente->apellido_materno;?>
            </td>
            <td style="width: 5%;background: #FFFFFF; text-align: center; font-size: 10pt">
                <?=CalculaEdad($paciente->fecha_nacimiento);?>
            </td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$paciente->correo;?></td>
            <td style="width: 20%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$paciente->telefono;?></td>
            </tr>
        <?php }?>

    </table>
    <nobreak>
        <br>
    </nobreak>
<!--</page>-->
</body>
</html>