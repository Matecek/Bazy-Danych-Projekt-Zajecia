<?PHP
    $id=$_POST['f_id'];

	include 'dbconfig.php';
	$baza = mysqli_connect($server,$user,$pass,$base) or ('coś nie tak z połączniem z BD');

   	$zapytanie="DELETE FROM `operacje` WHERE `id`=$id";
	
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');

    $baza->close();
?>