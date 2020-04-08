<?php require'headtml.php'?>
    <body class="page-scroll">

        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Left Sidebar -->
        <div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                <div class="search-holder">
                    <label>
                        <input type="search" class="search-field" placeholder="Type here to search..." value="" name="s" title="Search for:">
                    </label>
                </div>
                <div class="site-info-holder">
                    <h1 class="site-title">Кто-то другой</h1>
                    <p class="site-description">
                        Я иду по весенней воде,
Звезды, звезды в моей бороде:
Но в речной весне,<br>
Но в зеркальном сне<br>
Отражается что-то другое.<br>
Но в земном бреду,<br>
По речному льду<br>
Катит саночки кто-то другой.<br>
                    </p>
                </div>
                <?php require'leftsidebartml.php';?>

        <!-- Scroll Content -->
        <div id="content" class="site-content">
            <div class="full-screen-scroll">
                <ul id="cbp-bislideshow" class="cbp-bislideshow scroll">
                    <li style="background-image: url('demo-images/featured-image.jpg');">
                        <article class="entry-holder">
                            <h2 class="entry-title">
                                <a href="concert.php">Обложки альбомов</a>
                            </h2>
                            <div class="info-holder">
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Сибирский Панк-Рок</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">23 марта, 2020</div>
                            </div>
                            <div class="excerpt">Здесь собраны все обложки альбомов, включая переиздания.<a class="read-more" href="concert.php"></a></div>
                            <div class="clear"></div>
                        </article>
                    </li>

                    <li style="background-image: url('demo-images/01.jpg');">
                        <article class="entry-holder">
                            <h2 class="entry-title">
                                <a href="single.html">Фотографии с концертов<br>(1985-2007)</a>
                            </h2>
                            <div class="info-holder">
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Сибирский Панк-Рок</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">23 марта, 2020</div>
                            </div>
                            <div class="excerpt">Фотографии с концертов Гражданской обороны, Егора Летова, группы "Егор и опиздининевшие".<a class="read-more" href="single.html"></a></div>
                            <div class="clear"></div>
                        </article>
                    </li>

                    <li style="background-image: url('demo-images/02.jpg');">
                        <article class="entry-holder">
                            <h2 class="entry-title">
                                <a href="single.html">Коллажи созданные Егором Летовым</a>
                            </h2>
                            <div class="info-holder">
                                <div class="cat-links">
                                    <ul>
                                        <li>
                                            <a href="#">Сибирский Панк-Рок</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-date published">23 марта, 2020</div>
                            </div>
                            <div class="excerpt">Многие знают Егора Летова как известного музыканта, однако, Летов был ещё и  коллажистом. Можно часами рассматривать его работы.<a class="read-more" href="single.html"></a></div>
                            <div class="clear"></div>
                        </article>
                    </li>

                </ul>
            </div>
            <div class="clear"></div>
        </div>



        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
    </body>
</html>
