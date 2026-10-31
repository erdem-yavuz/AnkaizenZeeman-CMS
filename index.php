<?php include 'includes/header.php'; ?>
<?php $home = getContent('home'); ?>

<section class="hero">
    <div class="hero-content">
        <h1><?php echo $home['hero_title']; ?></h1>
        <p><?php echo $home['hero_subtitle']; ?></p>
        <a href="faaliyetler.php" class="btn-prime"><?php echo $home['hero_button']; ?></a>
    </div>
</section>

<div class="container">
    <div class="section-title">
        <h2>Ne Yapıyoruz?</h2>
    </div>
    <div class="grid">
        <div class="feature-card">
            <h3>Endüstriyel Borulama</h3>
            <p>ASME, API ve ISO standartlarına uygun boru hatları, kaynak ve basınç testleri.</p>
        </div>
        <div class="feature-card">
            <h3>Kriyojenik Sistemler</h3>
            <p>Sıvılaştırılmış gaz depoları, soğutma sistemleri, vakumlu tanklar, ısı izolasyon sistemleri.</p>
        </div>
        <div class="feature-card">
            <h3>Saha Uygulamaları</h3>
            <p>Yerinde kurulum, devreye alma, kullanıcı eğitimi ve periyodik bakım hizmetleri.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
