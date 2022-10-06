<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssnieh.css">
    <title>Document</title>
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Data Pesanan Anda</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
                    <h4>Nama :</h4>
                    <P><?php echo $_GET["nama"]; ?></P>
				</div>
			<div class="login-form">
				<div class="control-group">
                    <h4>Ukuran :</h4>
                    <P><?php echo $_GET["ukuran"]; ?></P>
				</div>

			<div class="login-form">
				<div class="control-group">
                    <h4>Jumlah :</h4>
                    <P><?php echo $_GET["jumlah"]; ?></P>
				</div>

				

				
			</div>
		</div>
</body>
</html>