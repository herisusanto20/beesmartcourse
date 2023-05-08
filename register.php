<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <style>
        h2{
            font-family: "Poppins", sans-serif;
            text-align: center;
            font-size: 40px;
        }
        form {
			color: white;
			font-family: "Poppins", sans-serif;
			align-items: center;
			/* display: inline-block; */
			margin: 20px;
			padding: 20px;
			background-color: #1e90ff;
			border: 1px solid white;
            border-radius: 10px;
		}
    </style>
</head>
<body>
	<h2>Registrasi</h2>
	<form action="#" method="post">
    <label for="admin_id">Admin ID</label>
		<input type="text" id="admin_id" name="admin_id" required><br><br>
		<label for="admin_name">Nama Lengkap:</label>
		<input type="text" id="admin_name" name="admin_name" required><br><br>
        <label for="username">Username</label>
		<input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
        <label for="admin_telp">Nomor Telepon:</label>
		<input type="text" id="admin_telp" name="admin_telp" required><br><br>
		<label for="admin_email">Alamat Email:</label>
		<input type="email" id="admin_email" name="admin_email" required><br><br>
        <label for="admin_address">Alamat</label>
		<input type="text" id="admin_address" name="admin_address" required><br>
        <h3>Level</h3>
        <select  name="level" name="level" id="level" class="level" required>
                        <optgroup label="Anda sebagai">
                            
                            <option>admin</option>
                            <option>tutor</option>
                        </optgroup>
                        </select > <br> <br>
		<input type="submit" value="Daftar" name="process">
	</form>

    <?php
                        include 'db.php';
                        if(isset($_POST['process'])) {
                            mysqli_query($conn, "insert into tb_admin set
                            admin_id = '$_POST[admin_id]',
                            admin_name = '$_POST[admin_name]',
                            username = '$_POST[username]',
                            password = '$_POST[password]',
                            admin_telp = '$_POST[admin_telp]',
                            admin_email = '$_POST[admin_email]',
                            admin_address = '$_POST[admin_address]',
                            level = '$_POST[level]'");
                            
                    
                            echo "DATA REGISTRASI AKUN ANDA TERSIMPAN";
                        }
                        ?>
</body>
</html>
