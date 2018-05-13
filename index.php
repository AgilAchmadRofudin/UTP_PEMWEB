<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa-Siswi Baru SMK N 1 Raman Utara</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa-Siswi Baru SMK N 1 Raman Utara</h3>
    </header>

    <h4>Menu</h4>
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
            <li><a href="form_daftar.php">Daftar Baru</a></li>
            <li><a href="daftar_siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    </body>
</html>