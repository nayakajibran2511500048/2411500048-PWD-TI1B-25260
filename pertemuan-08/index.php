<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])) {
  $sesnama = $_SESSION["sesnama"];
}

$sesemail = "";
if (isset($_SESSION["sesemail"])) {
  $sesemail = $_SESSION["sesemail"];
}

$sespesan = "";
if (isset($_SESSION["sespesan"])) {
  $sespesan = $_SESSION["sespesan"];
}

$sesnim = "";
if (isset($_SESSION["sesnim"])) {
  $sesnim = $_SESSION["sesnim"];
}

$sestgl_lahir = "";
if (isset($_SESSION["sestgl_lahir"])) {
  $sestgl_lahir = $_SESSION["sestgl_lahir"];
}

$seshobi = "";
if (isset($_SESSION["seshobi"])) {
  $seshobi = $_SESSION["seshobi"];
}

$sespasangan = "";
if (isset($_SESSION["sespasangan"])) {
  $sespasangan = $_SESSION["sespasangan"];
}

$sespekerjaan = "";
if (isset($_SESSION["sespekerjaan"])) {
  $sespekerjaan = $_SESSION["sespekerjaan"];
}

$sesortu = "";
if (isset($_SESSION["sesortu"])) {
  $sesortu = $_SESSION["sesortu"];
}

$seskakak = "";
if (isset($_SESSION["seskakak"])) {
  $seskakak = $_SESSION["seskakak"];
}

$sesadik = "";
if (isset($_SESSION["sesadik"])) {
  $sesadik = $_SESSION["sesadik"];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
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


    <section id="entry-data">
      <h2>Entry Data Mahasiswa</h2>

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

        <label for="txtTTL"><span>Tempat & Tanggal Lahir:</span>
          <input type="text" id="txtTTL" name="txtTTL" placeholder="Tempat & Tanggal lahir" required>
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi" required>
        </label>

        <label for="txtPasangan"><span>Pasangan:</span>
          <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan Pasangan" required>
        </label>

        <label for="txtPekerjaan"><span>Pekerjaan:</span>
          <input type="text" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan Pekerjaan" required>
        </label>

        <label for="txtOrtu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtOrtu" name="txtOrtu" placeholder="Masukkan Nama Orang Tua" required>
        </label>

        <label for="txtAdik"><span>Nama Adik:</span>
          <input type="text" id="txtAdik" name="txtAdik" placeholder="Masukkan Nama Adik" required>
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
    </section>

    <section id="about">
      <?php
      $NIM = '0344300002';
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong> <?php echo $NIM; ?></p>
      <p><strong>Nama Lengkap:</strong> <?php echo $Nama; ?> &#128526;</p>
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
      <div id="hasilKontak">
        <h2>Yang Menghubungi Kami</h2>
        <p><strong>Nama:</strong> <?php echo $sesnama ?></p>
        <p><strong>Email:</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan:</strong> <?php echo $sespesan ?></p>
        <p><strong>NIM:</strong> <?php echo $sesnim ?></p>
        <p><strong>Hobi:</strong> <?php echo $seshobi ?></p>
        <p><strong>Pasangan:</strong> <?php echo $sespasangan ?></p>
        <p><strong>Pekerjaan:</strong> <?php echo $sespekerjaan ?></p>
        <p><strong>Orang Tua:</strong> <?php echo $sesortu ?></p>
        <p><strong>Kakak:</strong> <?php echo $seskakak ?></p>
        <p><strong>Adik:</strong> <?php echo $sesadik ?></p>
      </div>
      <?php endif; ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
