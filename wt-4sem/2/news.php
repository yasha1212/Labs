<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
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
        <h1>NEWS</h1>
    </div>
    <section>
        <div class="news-block">
            <h3>Greta Thunberg attacks</h3>
            <time datetime="2020-02-25">25 February, 2020</time>
            <p>On this week our website was attacked with the aim of stop the development of our service,
                because in this way we motivate meat companies to kill more animals and destroy Earth's ecosystem.
                We learned, that this attacks were organised by the environmental movement leader Greta Thunberg.
                We will try to calm the situation.</p>
        </div>
        <div class="news-block">
            <h3>Meat disaster...</h3>
            <time datetime="2020-02-17">17 February, 2020</time>
            <p>We are sorry to report, that our Meat Department will be closed soon.
                It became the truth, because of situation, that happened in 210 classroom in this month.
                We know, that it is a huge loss, but it doesn't mean, that our zeal to work hard and
                effectively is lost too. We will announce a new department soon. So try to be attentive to
                make a first order!</p>
        </div>
        <div class="news-block">
            <h3>Sight Event</h3>
            <time datetime="2020-02-13">13 February, 2020</time>
            <p>Next week a new event will be started! To have a special deals in our service you must
                take a photo with any sight of Belarus. Mir Castle could be an example. Let's have a nice
                journey!</p>
        </div>
        <div class="news-block">
            <h3>Black Friday</h3>
            <time datetime="2020-01-6">6 January, 2020</time>
            <p>At the end of this week our service will provide you special deals as the main part of
                the Black Friday event. You could order Margarita Pizza at the price of 5$, as an example.
                See you on friday!</p>
        </div>
        <div class="news-block">
            <h3>Happy New Year!</h3>
            <time datetime="2020-01-1">1 January, 2020</time>
            <p>Happy New Year, dear friends! We wish you all the best things in the 2020 year,
                good health and unforgettable impressions as well. We hope, that our partnership will
                become stronger in this year. And we can promise, that we will do our best to develop this service
                and make you fell fed and happy. Congratulations!</p>
        </div>
        <div class="news-block">
            <h3>Birthday!</h3>
            <time datetime="2019-12-21">21 December, 2019</time>
            <p>Our company has successfully released this new website.
                We are ready to work a lot and satisfy our clients orders.
                Hello World! :)</p>
        </div>
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