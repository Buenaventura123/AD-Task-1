<?php
include '../../utils/movies.utils.php';
$title = 'High Rated Movies';
include '../../components/navbar.component.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="movie-list">
    <?php foreach ($movies as $movie): ?>
        <?php if ($movie['rating'] > 7): ?>
            <div class="movie-card">
                <div class="movie-item">
                    <img src="../../assets/img/<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
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
