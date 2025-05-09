<?php
include "../../utils/Name.utils.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Top Rated Movies</title>
    <link rel="stylesheet" href="../../assets/css/name.css">
</head>
<body>
    <header><h1>🌟 Top Rated Movies</h1></header>
    <main>
        <?php
        for ($i = 0; $i < count($movies); $i++) {
            $title = $movies[$i];
            $rating = $ratings[$i];
            if ($rating >= 7) {
                include "../../components/name.component.php";
            }
        }
        ?>
        <a href="index.php">⟵ Back to All Movies</a>
    </main>
</body>
</html>
