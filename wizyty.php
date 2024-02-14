<!DOCTYPE hmtl>
<html>
  <head>
    <meta charset="UTF-8">
    <title>urodaaaaa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<div id="kontener">
  <div id="baner">
  </div>
  <div id="menu">
    <ol id="przycisk">
      <li><a href="index.html">strona glowna</a></li>
      <li><a href="wizyty.php">wizyty</a></li>
    </ol>
  </div>
  <div id="glowny">
    <h2>zapisz sie na wizyte</h2>
    <form action="" method="post">
      <table>
        <tr>

        <td>imie:</td>
          <td><input type="text" name="imie"></td>
        </tr>
        <tr>
          <td>nazwisko:</td>
          <td><input type="text" name="nazw"></td>
        </tr>
        <tr>
          <td>wybierz date uslugi</td>
          <td><input type="date" name="data"></td>
        </tr>
        <tr>
          <td>wybierz usluge:</td>
          <td><select name="zabieg">
            <option values="2">manicure tradycyjny</option>
            <option values="3">manicure tradycyjny</option>
            <option values="4">manicure tradycyjny</option>
            <option values="5">manicure tradycyjny</option>
            <option values="1">manicure tradycyjny</option>
            <option values="6">manicure tradycyjny</option>
          </select>
          </td>
          
        </tr>
        <tr><td colspan="2"><input type="submit" id="przycisk2" value="zapisz wizyte"></td></tr>
      </table>
    </form>
 <?php
	    $conn=mysqli_connect('localhost', 'root','','salon');
	    if (isset($_POST['imie'])&&isset($_POST['nazw'])&&isset{$_POST['data'])&&isset($_POST['zabieg']))
	    {
	    $imie=$_POST['Imie'];
	    $nazw=$_POST['nazw'];
	    $data=$_POST['data'];
	    $zabieg=$_POST['zabieg'];
	    $q1=mysqli_query($conn,"SELECT IDklient FROM klient WHERE Imie='$imie' and Nazwisko='$nazw' ");
	    $r1=mysqli_fetch_array($q1);
	    $d= $r1['Idklienta'];
	    $q2=mysqli_query($conn, "SELECT max(Idklienta) as 'ile' FROM klient ");
	    $r2=mysqli_fetch_array($q2);
	    if ($r1!=NULL)
	    {
	    $q3=mysqli_query($conn, "INSERT INTO wizyta (Idklienta, Iduslugi, Datazabiegu) values ('$d','$zabieg','$data')");
	    echo "<h4>wizyta zostala zapisana</h4>";
	    }
	    else (echo "<h4>nie ma cie w bazie</h4>";)
	    }
	    ?>
    
  </body>
</html>
