<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bee Smart</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Medula+One&family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="username" class="input-control">
            <input type="password" name="pass" placeholder="password" class="input-control">
            <input type="submit" name="submit" value="login" class="btn">
        </form>
        <?php
        if(isset($_POST['submit'])){
            include 'db.php';

            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".$pass."'");
            if(mysqli_num_rows($cek) > 0) {
                $data = mysqli_fetch_assoc($cek);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dasboard.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="tutor_uswatun"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_uswatun";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_uswatun.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="tutor_dena"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_dena";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_dena.php");
 
	// cek jika user login sebagai siswa
	}else if($data['level']=="tutor_heri"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_heri";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="tutor_anis"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_anis";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_anis.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="tutor_naufal"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_naufal";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_naufal.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="tutor_sana"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_sana";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_sana.php");
 
	// cek jika user login sebagai siswa
	}else if($data['level']=="tutor_zena"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor_zena";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor_zena.php");
 
	// cek jika user login sebagai siswa
	}else if($data['level']=="tutor"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tutor";
		// alihkan ke halaman dashboard pegawai
		header("location:tutor.php");
 
	// cek jika user login sebagai siswa
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}







            //     echo'<script>window.location="dasboard.php"</script>';
            // }else{
            //     echo "<p>Username atau Password tidak terdaftar. Apakah Anda akan registrasi? <a href='register.php'>Registrasi</a> sekarang.</p>";
            // }
            

        }
        ?>
    </div>
</body>
</html>