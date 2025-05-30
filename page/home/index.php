<?php
require_once realpath(__DIR__ . '/../../bootstrap.php');
require_once BASE_PATH . '/utils/movies.utils.php';
require_once BASE_PATH . '/components/navbar.component.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Movies</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<?= createNavbar('All Movies') ?>

<div class="movie-list">
    <?php foreach ($movies as $movie): ?>
        <div class="movie-card">
            <div class="movie-item">
                <img src="/assets/img/<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
            </div>
            <div class="movie-info">
                <h3><?= $movie['title']; ?></h3>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
