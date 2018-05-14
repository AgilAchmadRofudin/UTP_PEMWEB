<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa-Siswi Baru SMK N 1 Raman Utara</title>																				
</head>
<body>
<center>
    <header>
        <h3>Pendaftaran Siswa-Siswi Baru SMK N 1 Raman Utara</h3>
    </header>
	</center>
	<center>
    <h4>Menu</h4>
	</center>
    <nav>
	
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
	
        <ul>
		<center>
            <button><a href="form_daftar.php">Daftar Baru</a></button>
            <button><a href="daftar_siswa.php">Pendaftar</a></button>
			</center>
        </ul>
    </nav>
    </body>
</html>