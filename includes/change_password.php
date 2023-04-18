<?php	
	require("C:\\xampp\htdocs\web bán kim cương\diamondStore\includes\connect_db.php");
	
	include("C:\\xampp\htdocs\web bán kim cương\diamondStore\includes\check_errors.php");
	$mkc = md5($_POST['mkc']); //pass cũ
	$mkm = md5($_POST['mkm']); //pass mới
	$makh = $_POST['makh'];

	$query_item="UPDATE khachhang SET `MatKhau`='".$mkm."' WHERE `MatKhau`='".$mkc."' and makh=".$makh;
	$result_item=mysqli_query($dbc,$query_item);
	check_errors($result_item,$query_item);
	if(mysqli_affected_rows($dbc)==1)
	{
		echo "<b style='color:green;'>Bạn đã thay đổi mật khẩu thành công</b>";
	}
	else{
		echo "<b style='color:red;font-size:20px;'> Mật khẩu cũ không chính xác</b>";
	}
?>