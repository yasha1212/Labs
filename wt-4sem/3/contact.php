<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        include 'scripts.php';
    ?>
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
        <h1>CONTACT</h1>
    </div>
    <section>
        <div class="contact-block">
            <h3>Phone Numbers</h3>
            <p>+1 244 212 124 52</p>
            <p>+1 245 214 678 46</p>
        </div>
        <div class="contact-block">
            <h3>Support Emails</h3>
            <p>food.support.1@food.eat</p>
            <p>food.support.2@food.eat</p>
            <p>food.support.common@food.eat</p>
        </div>
        <div class="contact-block">
            <h3>Restaurant's Addresses</h3>
            <p>Moscow, Gorky, 25, 6a</p>
            <p>Minsk, Gikalo, 9</p>
            <p>Toronto, Queen Elisabeth's, 25</p>
            <p>New York, 6-th Avenue, 47</p>
        </div>
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