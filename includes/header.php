<header>
    <a href="/" class="logo">Mon blog</a>
    <ul class="header-menu">
        <li
            class=<?= isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
            <a href="/form-article.php">Créer un article</a>
        </li>
    </ul>
</header>