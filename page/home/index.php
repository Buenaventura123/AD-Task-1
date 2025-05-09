<?php
include '../../utils/movies.utils.php';
$title = 'All Movies';
include '../../components/navbar.component.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <div class="movie-list">
        <?php foreach ($movies as $movie): ?>
            <div class="movie-item">
                <img src="/assets/img/<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
                <div class="movie-info">
                    <h3><?= $movie['title']; ?></h3>
                    <p>Rating: <?= $movie['rating']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
