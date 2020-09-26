<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
		<form name="form1" id="form1" action="" method="POST">
			<fieldset>
			<p>
				<label>Angka:</label>
				<input name="txtAngka" type="text" id="txtAngka" value="" />
			</p>
			<p>
				<input name="btCek" type="submit" id="btCek" value="Cek" />
			</p>
			</fieldset>
		</form>
	</body>
</html>
<?php

if(isset($_POST['btCek'])){
	$cek=new cek(); 
	$angka=$_POST['txtAngka'];
	$prima=$cek->segitiga($angka);

	echo $prima;
}

class cek{
	function segitiga($x){
		for ($i = 1; $i <= $x; $i++){
            for ($j = 1; $j <= $i; $j++){
                echo $j;
            }
            echo "<br>";
        }
	}
}

?>