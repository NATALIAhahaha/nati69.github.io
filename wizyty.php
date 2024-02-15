<!DOCTYPE hmtl>
<html>
  <head>
    <meta charset="UTF-8">
    <title>urodaaaaa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
 <?php
	    $conn=mysqli_connect('localhost', 'root','','salon');
	    if (isset($_POST['imie'])&&isset($_POST'nazw'])&&isset($_POST['data'])&&isset($_POST['zabieg']))
	    {
	    $imie=$_POST['imie'];
	    $nazw=$_POST['nazw'];
	    $data=$_POST['data'];
	    $zabieg=$_POST['zabieg'];
	    $q1=mysqli_query($conn,"SELECT Idklient FROM klient WHERE Imie='$imie' and Nazwisko='$nazw' ");
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
