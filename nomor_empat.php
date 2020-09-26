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
	function bubblesort(&$Array, $n) 
	{
		$temp;
		for($i=0; $i<$n; $i++) 
		{
			for($j=0; $j<$n-$i-1; $j++)
			{
				if($Array[$j]>$Array[$j+1])
				{
					$temp = $Array[$j];
					$Array[$j] = $Array[$j+1];
					$Array[$j+1] = $temp;
				}
			}
		}
	}

	function PrintArray($Array, $n) 
	{ 
		for ($i = 0; $i < $n; $i++) 
			echo $Array[$i]." "; 
	} 
	
	$input=$_POST['txtAngka'];
	$angka=str_replace(" ","",$input);
	$MyArray = explode(",", $angka);
	
	$n = sizeof($MyArray); 
	echo "Original Array :";
	PrintArray($MyArray, $n);
	echo "<br>";
	bubblesort($MyArray, $n);
	echo "Sorted Array :";
	PrintArray($MyArray, $n);
}

?>