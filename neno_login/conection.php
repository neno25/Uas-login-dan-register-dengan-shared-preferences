
<?php

    $connect = mysqli_connect('localhost','root','','neno_login' );

    if ($connect)
        echo "berhasil";
    else 
        echo "gagal"; 
    
    // $server		= "localhost"; //sesuaikan dengan nama server
	// $user		= "root"; //sesuaikan username
	// $password	= ""; //sesuaikan password
	// $database	= "Login"; //sesuaikan target databese
	
	// $connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
    // mysql_select_db($database) or die ("Database belum siap!");
    
    // $con = mysqli_connect($localhost, $root,$password, $neno_login);
	// if (mysqli_connect_errno()) {
	// 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	// }
?>