<?php
$n=filter_input(INPUT_GET,'name');
$e=filter_input(INPUT_GET,'email');
$m=filter_input(INPUT_GET,'message');
if(!empty($n)&&!empty($e))
{
	$user = 'root';
$pswrd = '';
$db = 'test2';
$conn = new mysqli('localhost',$user,$pswrd,$db);
	if(mysqli_connect_error())
		echo mysqli_connect_error();
	else
		{
			$sql = "INSERT INTO contact2(Name,Email,Comment) values('$n','$e','$m')";
			if($conn->query($sql))
			{
				
				header('Location: http://localhost/oneclick2/savory/index.php');
			}
			else
				{
					die("Can't Insert");
				}


		}
}
else
echo "Cannot leave it empty";
?>