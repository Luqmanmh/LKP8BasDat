<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Data Siswa Pendaftar Baru | SMK Coding</title>
</head>

<body>
    <nav>
        <a href="daftarsiswa.php">Return</a>
    </nav>

    <header>
        <h3>Formulir Edit data Siswa Pendaftar Baru</h3>
    </header>
    
    <?php
    include("config.php");
    $id = $_GET['id'];
    $query = pg_query("SELECT * FROM calonsiswa WHERE id=$id");
    while ($siswa = pg_fetch_array($query)) {
        ?>

        <form action="prosesedit.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa["id"] ?>">
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" value="<?php echo $siswa["nama"] ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"><?php echo $siswa["alamat"] ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($siswa["jenis_kelamin"] == 'laki-laki') 
                    {echo'checked';}?>> Laki-laki</label>

                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($siswa["jenis_kelamin"] == 'perempuan') 
                    {echo'checked';}?>> Perempuan</label>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" value="<?php echo $siswa["sekolah_asal"] ?>" />
                </p>
                <p>
                    <input type="submit" value="commit" name="commit" />
                </p>
            </fieldset>
        </form>
    <?php } ?>
</body>
</html>