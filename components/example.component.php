<?php
echo "<div class='movie'>";
echo "<h3>$title</h3>";
echo "<p>Rating: $rating/10</p>";
if ($rating >= 7) {
    echo "<p class='good'>✅ Good Movie</p>";
} else {
    echo "<p class='bad'>❌ Bad Movie</p>";
}
echo "</div>";
?>
