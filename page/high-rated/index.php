<?php
require_once realpath(__DIR__ . '/../../bootstrap.php');

require_once BASE_PATH . '/utils/movies.utils.php';
require_once BASE_PATH . '/components/navbar.component.php';

$title = 'High Rated Movies';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<?= createNavbar('High Rated') ?>

<div class="movie-list">
    <?php foreach ($movies as $movie): ?>
        <?php if ($movie['rating'] > 7): ?>
            <div class="movie-card">
                <div class="movie-item">
                    <img src="/assets/img/<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
                </div>
                <div class="movie-info">
                    <h3><?= $movie['title']; ?></h3>
                    <p>Rating: <?= $movie['rating']; ?></p>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

</body>
</html>
