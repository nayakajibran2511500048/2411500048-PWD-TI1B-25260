<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<style>

</style>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="Entry Data Mahasiswa">
     <section id="about">
  <?php
   
    $NIM  = "2511500048";
    $NAMA = "Nayaka Jibran";
    $lahir = "Toboali, 3 September 2006";
    $hobi = "Bermain alat musik, Basket";
    $status = "Belum ada ❤";
    $pekerjaan = "Session Player Music";
    $NamaOrangTua = "Ayah Irawan dan Ibu Sepi Normalasari";
    $NamaAdik = "Nathan Sabih Irhap";
  
    echo "<h2>About $NAMA</h2>";
    echo "<p><strong>Nama Lengkap:</strong> $NAMA</p>";
    echo "<p><strong>NIM:</strong> $NIM</p>";
    echo "<p><strong>Tempat & Tanggal Lahir:</strong> $lahir</p>";
    echo "<p><strong>Hobi:</strong> $hobi</p>";
    echo "<p><strong>Pasangan:</strong> $status</p>";
    echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
    echo "<p><strong>Nama Orang Tua:</strong> Ayah Irawan dan Ibu Sepi Normalasari</p>";
    echo "<p><strong>Nama Adik:</strong> Nathan Sabih Irhap</p>";
  ?>
</section>

    <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtNIM"><span>NIM:</span>
          <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan NIM" required autocomplete="NIM">
        </label>

        <label for="txtTempat & Tanggal lahir"><span>Tempat & Tanggal Lahir:</span>
          <input type="text" id="txtTempat & Tanggal lahir" name="txtTempat & Tanggal lahir" placeholder="Tempat & Tanggal lahir" required autocomplete="Tempat & Tanggal lahir">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="email" id="txt" name="txtHobi" placeholder="Masukkan Hobi" required autocomplete="Hobi">
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan Pasangan" required autocomplete="Pasangan">
        </label>

        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="email" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan Pekerjaan" required autocomplete="Pekerjaan">
        </label>

        <label for="txtNama Orang Tua"><span>NamaOrangTua:</span>
          <input type="text" id="txtNama Orang Tua" name="txtNama Orang Tua" placeholder="Masukkan Nama Orang Tua" required autocomplete="Nama Orang ">
        </label>

        <label for="txtNama Adik"><span>Nama Adik:</span>
          <input type="Nama adik" id="txtNama Adik" name="txtAdik" placeholder="Masukkan Nama adik" required autocomplete="Nama adik">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
        </form>
    
    
    <section>
      <style>
      #hasilKontak {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
  padding: 20px;
  max-width: 700px;
  margin: 20px auto;
}

#hasilKontak h2 {
  color: #003366;
  font-size: 20px;
  border-bottom: 2px solid #003366;
  padding-bottom: 6px;
  margin-bottom: 16px;
  text-align: left;
}

#hasilKontak p {
  margin: 10px 0;
  padding: 8px 0;
  border-bottom: 1px solid #e6e6e6;
  display: flex;
  justify-content: flex-start;
  align-items: baseline;
}

#hasilKontak strong {
  color: #003366;
  font-weight: bold;
  min-width: 150px;
  display: inline-block;
}
</style>


    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>