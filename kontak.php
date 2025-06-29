<?php 
$pageTitle = "Kontak Kami";
include 'functions.php';
include 'header.php';
include 'db.php';
?>

<section class="hero" style="background: linear-gradient(to right, #002147, #1e88e5);">
    <div class="hero-content">
        <h2>Hubungi Kami</h2>
        <p>Kami siap membantu Anda mengenal lebih jauh tentang Kota Solo</p>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Kirim Pesan</h2>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method='post' id="contactForm" class="contact-form fade-in">
        <div class="form-group">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-input" >
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-input" >
        </div>
        
        <div class="form-group">
            <label for="kritik" class="form-label">Kritik</label>
            <input type="text" id="kritik" name="kritik" class="form-input" >
        </div>
        
        <div class="form-group">
            <label for="saran" class="form-label">Saran</label>
            <input type="text" id="saran" name="saran" class="form-input" >
        </div>
        
        <div class="form-group">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea id="pesan" name="pesan" class="form-textarea" ></textarea>
        </div>
        
        <button type="submit" class="btn">Kirim Pesan</button>
    </form>
</section>

<section class="section">
    <h2 class="section-title">Informasi Kontak</h2>
    <div class="card-container">
        <div class="card fade-in">
            <div class="card-content">
                <h3 class="card-title">Alamat</h3>
                <p>Jl. Slamet Riyadi No. 123</p>
                <p>Kota Surakarta, Jawa Tengah</p>
                <p>Indonesia 57141</p>
            </div>
        </div>
        
        <div class="card fade-in delay-1">
            <div class="card-content">
                <h3 class="card-title">Kontak</h3>
                <p>Email: info@blogsolo.com</p>
                <p>Telepon: (0271) 1234567</p>
                <p>WhatsApp: +62 812 3456 7890</p>
            </div>
        </div>
        
        <div class="card fade-in delay-2">
            <div class="card-content">
                <h3 class="card-title">Jam Operasional</h3>
                <p>Senin - Jumat: 08.00 - 17.00</p>
                <p>Sabtu: 08.00 - 14.00</p>
                <p>Minggu & Hari Libur: Tutup</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
  <h2 class="section-title">Lokasi Kami</h2>
  <div class="fade-in">
    <!-- Embed Google Maps -->
    <div style="width: 100%; height: 400px; border-radius: 8px; overflow: hidden;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.834057743397!2d110.82332711477844!3d-7.556014594560196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16e7a4b6e7c7%3A0x9a4c132f2a96b94b!2sSurakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1655102235578!5m2!1sid!2sid"
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $kritik = filter_input(INPUT_POST, 'kritik', FILTER_SANITIZE_SPECIAL_CHARS);
        $saran = filter_input(INPUT_POST, 'saran', FILTER_SANITIZE_SPECIAL_CHARS);
        $pesan = filter_input(INPUT_POST, 'pesan', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($nama) && !empty($email) && !empty($kritik) && !empty($pesan)) {
            $sql = "INSERT INTO pengguna (nama, email, kritik, saran, pesan)
                    VALUES ('$nama', '$email', '$kritik', '$saran', '$pesan')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Data berhasil dikirim!');</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            echo "<script>alert('Anda belum mengisi semua data!');</script>";
        }
    }
?>


<?php include 'footer.php'; ?>