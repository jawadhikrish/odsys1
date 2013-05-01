<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title>Reporte</title>
</head>

<?php if($model!==null){ ?>
<table>
<tr>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>Programa</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>Consultas</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>Acciones</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>Promoción</td>
<td <?php echo "style='background-color:#CCC' style='color:#FFF'"; ?>>Total</td>
</tr>
<?php foreach($model as $user) {?>
<tr <?php echo "style='background-color:#FFF'"; ?>>
<td><?php echo $user->D; ?></td>
<td><?php echo $user->C; ?></td>
<td><?php echo $user->A; ?></td>
<td><?php echo $user->P;?></td>
<td><?php echo $user->TOTAL;?></td>
</tr>
<?php } ?>
</table>
<?php } ?>