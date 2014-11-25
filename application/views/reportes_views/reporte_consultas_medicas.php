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
        <b><u>Reporte</u>: &laquo; Listado Consultas M&eacute;dicas &raquo;</b><br>
    </i>
    <br>
    Cantidad Total de consultas m&eacute;dicas: <b><?=$cantidad;?></b>.<br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 10%; text-align:left">N°</th>
            <th style="width: 25%; text-align:left">Fecha</th>
            <th style="width: 15%; text-align:left">R.U.T Paciente</th>
            <th style="width: 50%; text-align:left">Motivo</th>
        </tr>
        <?php $cont=0;foreach ($List_CM->result() as $consulta){ ?>
            <tr>
            <td style="width: 10%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$consulta->id_consulta;?>
            </td>
            <td style="width: 25%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$consulta->fecha_consulta;?>
            </td>
            <td style="width: 15%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$consulta->rut;?>
            </td>
            <td style="width: 50%;background: #FFFFFF; text-align: left; font-size: 10pt">
                <?=$consulta->motivo_consulta;?>
            </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <nobreak>
        <br>
        <br>
    </nobreak>
    </body>
</html>