<?php
$page_title       = 'Creative Production | Minerdia Studio';
$page_description = 'Bring your brand to life with professional creative production, engaging visuals, compelling videos and impactful content designed to captivate audiences and strengthen your brand.';
include __DIR__ . '/../include/header.php';
?>

<main style="overflow: hidden;">

    <?php require __DIR__ . '/hero.php'; ?>
    <?php require __DIR__ . '/testimonial.php'; ?>
    <?php require __DIR__ . '/brand-testimonial.php'; ?>
    <?php require __DIR__ . '/leads.php'; ?>
    <?php require __DIR__ . '/price.php'; ?>
    
</main>

<?php include __DIR__ . '/../include/footer.php'; ?>