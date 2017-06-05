<!DOCTYPE html>
<html>
<head>
<style>
p {
	font-family: arial, sans-serif;
	font-weight: bold;
	text-decoration: underline;
	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>
	
<?php

$rez1 = $_GET["br1"]+$_GET["br2"];
$rez2 = $_GET["br3"]+$_GET["br4"];
$rez3 = $_GET["br5"]+$_GET["br6"];
$rez  = $_GET["br1"]+$_GET["br2"]+$_GET["br3"]+$_GET["br4"]+$_GET["br5"]+$_GET["br6"];

?>

<p>Zbroj dva broja u redu, te dobiveni rezultat i zbroj svih brojeva u tablici</p>

<table>
  <tr>
    <th>Prvi broj</th>
    <th>Drugi broj</th>
    <th>Rezultat</th>
  </tr>
  <tr>
    <td><?php echo $_GET["br1"]; ?></td> +
    <td><?php echo $_GET["br2"]; ?></td> =
    <td style="font-weight: bold;"><?php echo $rez1; ?></td>
  </tr>
  <tr>
    <td><?php echo $_GET["br3"]; ?></td> +
    <td><?php echo $_GET["br4"]; ?></td> =
    <td style="font-weight: bold;"><?php echo $rez2; ?></td>
  </tr>
  <tr>
    <td><?php echo $_GET["br5"]; ?></td> +
    <td><?php echo $_GET["br6"]; ?></td> =
    <td style="font-weight: bold;"><?php echo $rez3; ?></td>
  </tr>
  <tr>
    <td></td>
    <td style="text-align: right; color: red; font-weight: bold; text-decoration: underline;"><i>UKUPNO</i></td>
    <td style="color: red; font-weight: bold;"><?php echo $rez; ?></td>
  </tr>
</table>

</body>
</html>