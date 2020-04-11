<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
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
                <li id="home"><a href="index.php?link=home">HOME</a></li>
                <li id="menu"><a href="menu.php?link=menu">MENU</a></li>
                <li id="news"><a href="news.php?link=news">NEWS</a></li>
                <li id="contact"><a href="contact.php?link=contact">CONTACT</a></li>
                <li id="search"><a href="search.php?link=search">SEARCH</a></li>
            </ul>
        </nav>
        <div id="heading">
            <h1>MENU</h1>
        </div>
        <section class="menu-wrapper">
            <figure>
                <a href="#pizza_margarita"><img src="images/pizza_margarita.png" alt=""></a>
                <figcaption>Pizza Margarita<span>8.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#pizza_king"><img src="images/pizza_king.png" alt=""></a>
                <figcaption>Pizza King<span>9.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#pizza_dolche"><img src="images/pizza_dolche.png" alt=""></a>
                <figcaption>Pizza Dolche<span>8.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#pizza_four_cheeses"><img src="images/pizza_fourcheeses.png" alt=""></a>
                <figcaption>Pizza Four Cheeses<span>7.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#pizza_karne"><img src="images/pizza_karne.png" alt=""></a>
                <figcaption>Pizza Karne<span>8.69$</span></figcaption>
            </figure>
            <figure>
                <a href="#thai_rice_chicken"><img src="images/thai_rice_chicken.png" alt=""></a>
                <figcaption>Thai Rice with Chicken<span>6.49$</span></figcaption>
            </figure>
            <figure>
                <a href="#thai_rice_pig"><img src="images/thai_rice_pig.png" alt=""></a>
                <figcaption>Thai Rice with Pig<span>6.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#udon_vegetables"><img src="images/udon_vegetable.png" alt=""></a>
                <figcaption>Udon with Vegetables<span>7.69$</span></figcaption>
            </figure>
            <figure>
                <a href="#cheesecake"><img src="images/cheesecake_ny.png" alt=""></a>
                <figcaption>Cheesecake New York<span>3.29$</span></figcaption>
            </figure>
            <figure>
                <a href="#salad_caesar"><img src="images/salad_cesar.png" alt=""></a>
                <figcaption>Caesar Salad<span>5.99$</span></figcaption>
            </figure>
            <figure>
                <a href="#salad_greek"><img src="images/salad_greek.png" alt=""></a>
                <figcaption>Greek Salad<span>5.49$</span></figcaption>
            </figure>
            <figure>
                <a href="#salad_sea_caesar"><img src="images/salad_seacesar.png" alt=""></a>
                <figcaption>Caesar Salad with Seafood<span>6.99$</span></figcaption>
            </figure>
        </section>
    </div>
    <footer>
        <div id="footer">
            <div id="sitemap">
                <h3>SITEMAP</h3>
                <div>
                    <a href="index.php?link=home">Home</a>
                    <a href="menu.php?link=menu">Menu</a>
                    <a href="news.php?link=news">News</a>
                </div>
                <div>
                    <a href="contact.php?link=contact">Contact</a>
                    <a href="search.php?link=search">Search</a>
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