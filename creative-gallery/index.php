<?php
$page_title       = 'Creative Gallery | Minerdia Studio';
$page_description = 'Browse creative work by Minerdia Studio: social posts, designs, videos and campaigns.';
include __DIR__ . '/../include/header.php';
?>

<main style="overflow: hidden;">

    <?php require __DIR__ . '/hero.php'; ?>
    <?php require __DIR__ . '/gallery-body.php'; ?>

</main>

<?php include __DIR__ . '/../include/footer.php'; ?>