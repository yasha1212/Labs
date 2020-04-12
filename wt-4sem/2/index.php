<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Delivery</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        include 'scripts.php';
        displayNav();
    ?>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1 class="logo">Food Delivery</h1>
        </header>
        <nav>
            <ul class="top-menu">
                <li id="index"><a href="index.php">HOME</a></li>
                <li id="menu"><a href="menu.php">MENU</a></li>
                <li id="news"><a href="news.php">NEWS</a></li>
                <li id="contact"><a href="contact.php">CONTACT</a></li>
                <li id="search"><a href="search.php">SEARCH</a></li>
            </ul>
        </nav>
        <div id="heading">
            <h1>HOME</h1>
        </div>
        <section class="index-section">
            <p class="text">This website provides you an opportunity to choose and to order dishes from different categories.</p>
            <p class="text">We offer only the highest quality food.</p>
            <p class="text">We are the top 1000 delivery company.</p>
            <p class="text">There is only one rule to use this service: STAY FED :)</p>
            <figure>
                <a href="menu.php?link=menu"><img src="images/food.jpg" width="320" height="320" alt=""></a>
                <figcaption class="text">MENU</figcaption>
            </figure>
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