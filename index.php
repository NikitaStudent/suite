<!DOCTYPE html>
<head>
    <title>Векторное произведение векторов</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div align="center">
    <h2 style="padding-bottom: 20px;">Онлайн калькулятор. Векторное произведение векторов.</h2>
<form method="post">
<table>
<tr>
<td>a</td>
<td><input type="text"id="pole" name="a[i]"></td>
<td><input type="text"id="pole" name="a[j]"></td>
<td><input type="text"id="pole" name="a[k]"></td>
</tr>
<tr>
<td>b</td>
<td><input type="text" id="pole"name="b[i]"></td>
<td><input type="text"id="pole" name="b[j]"></td>
<td><input type="text"id="pole" name="b[k]"></td>
</tr>
<table>
<input type="submit" name="submit">
</form>
<br>
</div>
<?php
if (!isset($_POST['submit']))die();
$a = array('i' => $_POST['a']['i'],
         'j' => $_POST['a']['j'],
         'k' => $_POST['a']['k']);
$b = array('i' => $_POST['b']['i'],
         'j' => $_POST['b']['j'],
         'k' => $_POST['b']['k']);
$c['i'] = ($a['j'] * $b['k']) - ($a['k'] * $b['j']);
$c['j'] = ($a['k'] * $b['i']) - ($a['i'] * $b['k']);
$c['k'] = ($a['i'] * $b['j']) - ($a['j'] * $b['i']);
echo "C = ({$c['i']}, {$c['j']}, {$c['k']})"
?>
</body>
</html>