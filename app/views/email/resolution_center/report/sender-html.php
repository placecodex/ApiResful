<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Usted ha abierto una disputa <?= $site_name; ?></title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h5 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Ha enviado un pago de <?=number_format($moneysend,2).currency_helper($id_currency); ?>  a  <?= $name_to; ?> </h5>     

<h5>Detalles de transaccion</h5>
<ul>

<li>Id de transaccion :<?=$id_track;?></li>	

<li>Destinatario :<?= $name_to; ?></li>	
<li>Metodo de pago <?=   method_helper($id_paymethod ,$id_currency);?></li>
<li>Cantidad enviada: <?=number_format($moneysend,2).currency_helper($id_currency); ?> </li>
<li>direccion : </li>
<li>Mensaje :</li>

</ul>





</td>
</tr>
</table>
</div>
</body>
</html>