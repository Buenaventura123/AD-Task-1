<?php

function createNavbar($active = '') {
    return '
    <nav class="navbar">
        <ul>
            <li><a href="/page/home/index.php" class="' . ($active === "All Movies" ? "active" : "") . '">All Movies</a></li>
            <li><a href="/page/high-rated/index.php" class="' . ($active === "High Rated" ? "active" : "") . '">High Rated</a></li>
            <li><a href="/page/low-rated/index.php" class="' . ($active === "Low Rated" ? "active" : "") . '">Low Rated</a></li>
        </ul>
    </nav>
    ';
}
