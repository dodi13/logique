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
	error_reporting(0);
	$input=$_POST['txtAngka'];
	$angka=str_replace(" ","",$input);
	$MyArray = explode(",", $angka);
	//$MyArray=array(1,2,3,4,5,6,7,8,9,0,100,200,3000,50,1,1,1,1,1,1,1);
	$jml=count($MyArray);
	for($i=0; $i<=$jml-1; $i++)
	{
		$j=$i+1;
		if($MyArray[$i]>=$MyArray[$j])
		{
			$j=$MyArray[$j]; 
		}else{
			$temp=$MyArray[$j];
			if($MyArray[j]>=$temp)
			{
				$max=$MyArray[$j];
			}else{
				$max=$temp;
			}
		} 
	}
	echo "Nilai Terbesar adalah ".$max;
}

?>