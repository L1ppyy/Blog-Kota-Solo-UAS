<?php 
$pageTitle = "Beranda";
include 'functions.php';
include 'header.php';
?>

<section class="hero fade-in">
    <div class="hero-content">
        <h2>Selamat Datang di Kota Solo</h2>
        <p>Jelajahi keindahan budaya, wisata, dan kuliner khas Surakarta</p>
        <a href="about.php" class="btn">Pelajari Lebih Lanjut</a>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Mengapa Solo?</h2>
    <div class="card-container">
        <div class="card fade-in delay-1">
            <img src="assets/batik-solo.jpg" alt="Batik Solo" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Batik Solo</h3>
                <p class="card-text">Kota Solo terkenal dengan batiknya yang khas dan bermutu tinggi dengan motif tradisional yang indah.</p>
                <a href="budaya.php" class="btn">Selengkapnya</a>
            </div>
        </div>
        
        <div class="card fade-in delay-2">
            <img src="assets/keraton.jpg" alt="Keraton Solo" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Keraton Surakarta</h3>
                <p class="card-text">Pusat budaya Jawa yang masih terjaga dengan arsitektur megah dan tradisi yang hidup.</p>
                <a href="wisata.php" class="btn">Selengkapnya</a>
            </div>
        </div>
        
        <div class="card fade-in delay-3">
            <img src="assets/sate.jpeg" alt="Sate Solo" class="card-img">
            <div class="card-content">
                <h3 class="card-title">Kuliner Legendaris</h3>
                <p class="card-text">Temukan cita rasa autentik kuliner Solo seperti Sate Kambing, Nasi Liwet, dan Tengkleng.</p>
                <a href="kuliner.php" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <h2 class="section-title">Event Budaya</h2>
    <div class="card-container">
        <div class="card fade-in">
            <div class="card-content">
                <h3 class="card-title">Sekaten</h3>
                <p class="card-text">Festival tahunan untuk memperingati Maulid Nabi Muhammad dengan pasar malam dan pertunjukan gamelan.</p>
                <p><strong>Waktu:</strong> Setiap bulan Rabiul Awal</p>
            </div>
        </div>
        
        <div class="card fade-in delay-1">
            <div class="card-content">
                <h3 class="card-title">Kirab Malam 1 Suro</h3>
                <p class="card-text">Prosesi budaya mengelilingi kota dengan pusaka keraton untuk menyambut tahun baru Jawa.</p>
                <p><strong>Waktu:</strong> Malam 1 Suro (Muharram)</p>
            </div>
        </div>
        
        <div class="card fade-in delay-2">
            <div class="card-content">
                <h3 class="card-title">Festival Solo Batik Carnival</h3>
                <p class="card-text">Karnaval busana batik dengan konsep kontemporer yang menampilkan kreativitas desainer muda.</p>
                <p><strong>Waktu:</strong> Biasanya bulan Juli</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>