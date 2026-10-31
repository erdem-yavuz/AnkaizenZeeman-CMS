<?php include 'includes/header.php'; ?>
<?php $activities = getContent('activities'); ?>

<div class="container">
    <div class="section-title">
        <h2><?php echo $activities['title']; ?></h2>
    </div>
    <div class="grid">
        <?php foreach ($activities['items'] as $item): ?>
            <div class="feature-card">
                <h3><?php echo $item['title']; ?></h3>
                <p><?php echo $item['content']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
