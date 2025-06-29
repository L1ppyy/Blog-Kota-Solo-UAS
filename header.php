<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Kota Solo - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="solo-background"></div>
    
    <header class="solo-header">
        <div class="header-content">
            <div class="logo-container">
                <img src="assets/logo.png" alt="Logo Solo" class="logo">
                <h1>Blog Kota Solo</h1>
            </div>
            <nav class="solo-nav">
                <ul>
                    <li><a href="index.php" <?php if($currentPage == 'home') echo 'class="active"'; ?>>Beranda</a></li>
                    <li><a href="about.php" <?php if($currentPage == 'about') echo 'class="active"'; ?>>Tentang Solo</a></li>
                    <li><a href="wisata.php" <?php if($currentPage == 'wisata') echo 'class="active"'; ?>>Wisata</a></li>
                    <li><a href="kuliner.php" <?php if($currentPage == 'kuliner') echo 'class="active"'; ?>>Kuliner</a></li>
                    <li><a href="budaya.php" <?php if($currentPage == 'budaya') echo 'class="active"'; ?>>Budaya</a></li>
                    <li><a href="kontak.php" <?php if($currentPage == 'kontak') echo 'class="active"'; ?>>Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="solo-main">
        
    </main>