<?php include 'scripts.php'; search(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1 class="logo">Food Delivery</h1>
        </header>
        <nav>
            <ul class="top-menu">
                <?php displayNav(); ?>
            </ul>
        </nav>
        <div id="heading">
            <h1>SEARCH</h1>
        </div>
        <section class="section-wrapper">
            <form name="search" method="post">
                <input type="text" placeholder="Search" name="search"><button type="submit">GO</button>
            </form>
        </section>
    </div>
    <footer>
        <div id="footer">
            <div id="sitemap">
                <h3>SITEMAP</h3>
                <div>
                    <a href="index.php">Home</a>
                    <a href="menu.php">Menu</a>
                    <a href="news.php">News</a>
                </div>
                <div>
                    <a href="contact.php">Contact</a>
                    <a href="search.php">Search</a>
                </div>
            </div>
            <div id="links">
                <h3>LINKS</h3>
                <a href="https://www.instagram.com/al_shukan/" class="social-icon instagram"></a>
                <a href="https://vk.com/shukan99" class="social-icon vkontakte"></a>
                <a href="https://twitter.com/al_shukan" class="social-icon twitter"></a>
            </div>
            <div id="copyright">
                <p>Copyright © 2020 Shukan Aleksey, group 851005</p>
            </div>
        </div>
    </footer>
</body>
</html>