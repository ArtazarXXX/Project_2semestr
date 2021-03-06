<!DOCTYPE html>
<html lang="ruW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/new.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Work+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/wow-animation/animate.min.css">
    <title>Denim - Bestsellers</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $database = 'project';
        $password = 'root';
        $user = 'root';
        $link = mysqli_connect ($host, $user, $password, $database);
        $result = mysqli_query($link, "SELECT * FROM `bestsellers`");
        $number = mysqli_query($link, "SELECT count(id) FROM `bestsellers`");
        $ids = [];
        $titles = [];
        $imgs = [];
        $texts = [];
        $prices = [];
        $i = 0;
        while($bestsellers = mysqli_fetch_assoc($result)) 
        {
            $ids[$i] = $bestsellers['id'];
            $titles[$i] = $bestsellers['title'];
            $imgs[$i] = $bestsellers['img'];
            $texts[$i] = $bestsellers['text'];
            $prices[$i] = $bestsellers['price'];
            $i = $i + 1;
        }
    ?>
    <header>
        <div class="menu">
            <div class="burger-cont">
                <div class="burger">
                    <span></span>
                </div>
            </div>
            <ul class="catalog">
                <li class="catalog__unit"><a class="catalog__link" href="/rusclas.html">Русская классика</a></li>
                <li class="catalog__unit"><a class="catalog__link" href="/wrldclas.html">Мировая классика</a></li>
                <li class="catalog__unit"><a class="catalog__link" href="/new.html">Новинки</a></li>
            </ul>
            <a href="/index.html" class="logo">
                Три всадника
            </a>
            <ul class="purchases">
                <li class="purchases__unit"><a class="purchases__link" href="#">
                <svg width="45" height="40"><use xlink:href="#icon-cart">
                        <symbol id="icon-cart" viewBox="0 0 32 32">
                            <path d="M12 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
                            <path d="M32 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
                            <path d="M32 16v-12h-24c0-1.105-0.895-2-2-2h-6v2h4l1.502 12.877c-0.915 0.733-1.502 1.859-1.502 3.123 0 2.209 1.791 4 4 4h24v-2h-24c-1.105 0-2-0.895-2-2 0-0.007 0-0.014 0-0.020l26-3.98z"></path>
                        </symbol>
                    </use></svg>
                </a></li>
            </ul>
        </div>
        <div class="main">
            <div class="title">
                <ul class="bread-crumb">
                    <li class="bread-crumb__unit bread-crumb__unit_delete"><a href="/index.html" class="bread-crumb__link">Главная</a></li>
                    <li class="bread-crumb__unit bread-crumb__unit_delete">/</li>
                    <li class="bread-crumb__unit"><a href="/new.html" class="bread-crumb__link">Новинки</a></li>
                    <li class="bread-crumb__unit bread-crumb__unit_delete">/</li>
                    <li class="bread-crumb__unit"><a href="/bestsellers.php" class="bread-crumb__link">Бестселлеры</a></li>
                </ul>
                <div class="title__name">КНИГИ</div>
            </div>
            <div class="philosophy">
                <img src="/img/bestsellers/top.png" alt="Дж. К. Роулинг" class="philosophy__image">
            </div>
        </div>
    </header>
    <main>
        <div class="filter-container">
            <div class="filter">
                <p class="filter__name">Отфильтровать по</p>
                <svg class="filter__tick" width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L9 9L17 1" stroke="#151C22" stroke-width="2"/>
                </svg>                    
            </div>
            <div class="filter-cont">
                <ul class="filter-nav">
                    <li class="filter-nav__unit filter-nav__unit_clear-all"><a href="#" class="filter-nav__link filter-nav__link_clear-all">Очистить</a></li>
                    <li class="filter-nav__unit filter-nav__unit_name">Применить</li>
                    <li class="filter-nav__unit filter-nav__unit_close"><a href="#" class="filter-nav__link filter-nav__link_close">Закрыть</a></li>
                </ul>
                <div class="filter-characteristics filter-characteristics-price">
                    <div class="filter-characteristics-cont filter-characteristics-price-cont">
                        <h3 class="filter-characteristics-cont__name">Цене</h3>
                        <svg class="filter-characteristics-price__tick" width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L9 9L17 1" stroke="#151C22" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="price-inside price-none">
                        <p class="filter-characteristics-price__description">От</p>
                        <input class="filter-characteristics-price__range filter-characteristics-price__range_from" type="range" min="50" max="1500" step="10" value="50">
                        <p class="filter-characteristics-price__price"> <span class="filter-characteristics-price__price_number-from">50</span>р.</p>
                        <p class="filter-characteristics-price__description">До</p>
                        <input class="filter-characteristics-price__range filter-characteristics-price__range_to" type="range" min="50" max="1500" step="10" value="500">
                        <p class="filter-characteristics-price__price"><span class="filter-characteristics-price__price_number-to">500</span>р.</p>
                    </div>
                </div>
                <a href="#" class="filter__button">
                    Принять
                </a>
                <p class="filter__button-more768px">
                    <a href="#" class="filter__button-more768px_link">
                        Очистить
                    </a>
                </p>
            </div>
        </div>
        <div class="assortments">
            <?php
                $i = 0;
                while ($i < count($titles)) {
                    echo
                    '<a href="/bestsellers-item.php/?id='. $ids[$i] .'" class="assortments-unit wow fadeInUp">
                        <img src="' . $imgs[$i] . '" alt="книга" class="assortments-unit__image">
                        <p class="assortments-unit__name"> ' . $titles[$i] . ' </p>
                        <p class="assortments-unit__price"><span class="assortments-unit__price_number"> ' . $prices[$i] . ' </span>р.</p>
                    </a>';
                    $i = $i + 1;
                }
            ?>
        </div>
        <div class="no-products">
            <p class="no-products__name">
                Нет подходящих товаров
            </p>
        </div>
        <div class="all-products">
            <p class="all-products__name"> Количество товаров на странице: <?php echo count($ids) ?> </p>
        </div>
    </main>
    <footer class="footer">
        <div class="sections">
            <a href="index.html" class="sections__name">Три всадника</a>
        </div>
        <div class="social-networks">
            <a href="https://www.vk.com/" class="social-networks__unit">
                <svg height="40" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="40" xml:space="preserve" 
               xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" 
               xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" 
               xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs12"/>
               <g id="g5608"><rect height="512" id="rect2987" rx="64" ry="64" style="fill:#4c75a3;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 width="512" x="0" y="0"/>
                 <path d="m 251.70955,369.14455 h 23.90722 c 0,0 7.21927,-0.79762 10.91007,-4.76903 3.39705,-3.65021 3.28841,-10.50167 3.28841,-10.50167 0,0 -0.47175,-32.08055 14.42054,-36.80302 14.67964,-4.6544 33.52648,31.00352 53.50297,44.7136 15.10712,10.3751 26.58794,8.10401 26.58794,8.10401 l 53.41814,-0.74389 c 0,0 27.93719,-1.7254 14.69046,-23.69711 -1.08421,-1.79346 -7.72077,-16.24983 -39.71651,-45.94943 -33.50267,-31.09426 -29.01187,-26.06134 11.33755,-79.83777 24.56987,-32.75042 34.39689,-52.73881 31.32344,-61.30492 -2.92543,-8.15775 -20.99737,-6.00608 -20.99737,-6.00608 l -60.14789,0.37614 c 0,0 -4.45617,-0.60898 -7.76492,1.36837 -3.22986,1.93675 -5.30509,6.45384 -5.30509,6.45384 0,0 -9.52735,25.34252 -22.21891,46.89512 -26.77781,45.47421 -37.48837,47.88141 -41.86576,45.05151 -10.18409,-6.5816 -7.63722,-26.43388 -7.63722,-40.54397 0,-44.07239 6.68431,-62.45001 -13.02109,-67.20472 -6.53861,-1.57852 -11.353,-2.62571 -28.07453,-2.79407 -21.45819,-0.21851 -39.62332,0.0681 -49.90525,5.10336 -6.84198,3.35887 -12.12325,10.8181 -8.90281,11.25035 3.9749,0.53016 12.97566,2.42511 17.74706,8.92193 6.16377,8.38702 5.94764,27.21599 5.94764,27.21599 0,0 3.54393,51.88028 -8.27001,58.32099 -8.10874,4.42157 -19.22901,-4.60187 -43.10881,-45.86108 -12.23061,-21.1311 -21.46783,-44.49746 -21.46783,-44.49746 0,0 -1.77673,-4.36067 -4.9565,-6.69981 -3.8544,-2.83349 -9.24187,-3.72903 -9.24187,-3.72903 l -57.154499,0.37016 c 0,0 -8.58037,0.24358 -11.72552,3.97499 -2.80725,3.32066 -0.22448,10.18167 -0.22448,10.18167 0,0 44.742259,104.68594 95.406949,157.43907 46.46763,48.38052 99.21848,45.20196 99.21848,45.20196 l 0,0 z" id="path9" style="fill:#ffffff;fill-rule:evenodd"/></g><path d="m 18.69574,493.28751 c 11.56798,11.5679 27.57606,18.7125 45.30404,18.7125 l 384.01255,-0.029 c 35.456,0 63.9877,-28.5316 63.9877,-63.98759 l 0,-383.983685 c 0,-17.72798 -7.1446,-33.73603 -18.7126,-45.30403 L 18.69574,493.28751 z" id="rect2984-1" style="fill:#000000;fill-opacity:0.30196078;fill-rule:nonzero;stroke:none"/></svg>
            </a>
            <a href="https://www.instagram.com/" class="social-networks__unit">
                <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg height="40" style="overflow:visible;enable-background:new 0 0 32 32" viewBox="0 0 32 32" width="40" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Instagram_1_"><g id="Instagram"><path d="M28,0H4C1.8,0,0,1.8,0,4v8h32V4C32,1.8,30.2,0,28,0z" id="Head" style="fill:#895A4D;"/><path d="M2,0.6V12h2V0C3.3,0,2.6,0.2,2,0.6z" id="Red_x5F_Stripes" style="fill:#FF3939;"/><rect height="12" id="Yellow_x5F_Stripes" style="fill:#FED049;" width="2" x="4"/><rect height="12" id="Green_x5F_Stripes" style="fill:#10DD76;" width="2" x="6"/><rect height="12" id="Blue_x5F_Stripes" style="fill:#5FCCFF;" width="2" x="8"/><circle cx="26" cy="6" id="Lens_1_" r="3" style="fill:#162838;"/><circle cx="26" cy="6" id="Lens_x5F_Outer" r="1.5" style="fill:#2C4356;"/><circle cx="26" cy="6" id="Lens_x5F_Inside" r="0.5" style="fill:#47637A;"/><path d="M0,12v16c0,2.2,1.8,4,4,4h24c2.2,0,4-1.8,4-4V12H0z" id="Body" style="fill:#E5E0DC;"/><g id="Shadow"><polygon points="24.7,12 22.4,9.6 22.4,12 " style="fill:#75483D;"/><path d="M20,12L9.6,22.4l9.6,9.6H28c2.2,0,4-1.8,4-4v-8.7L24.7,12H20z" style="fill:#D0CBC5;"/></g><circle cx="16" cy="16" id="Lens" r="9" style="fill:#DCD7D3;"/><circle cx="16" cy="16" id="Inside_x5F_Lens" r="7" style="fill:#162838;"/><circle cx="16" cy="16" id="_x32_nd_Inner_Circle" r="4" style="fill:#2C4356;"/><circle cx="16" cy="16" id="Middle_Circle" r="2" style="fill:#162838;"/><circle cx="18.5" cy="13.5" id="Reflection" r="1.5" style="fill:#47637A;"/></g></g></g></svg>
            </a>
            <a href="https://www.facebook.com/" class="social-networks__unit">
                <svg height="40" viewBox="0 0 100 100" width="40" xmlns="http://www.w3.org/2000/svg"><path d="M50 0c-27.615 0-50 22.385-50 50 0 27.614 22.386 50 50 50s50-22.387 50-50c0-27.615-22.387-50-50-50z" fill="#3E4F71"/><path d="M47.985 68.99c-1.021 0-1.746-.787-1.995-.941-.797-.49-.603-.627-2.045-1.057l-4.038.01c-.503 0-.911-.404-.911-.902v-19.218c0-.499.408-.902.911-.902h5.342c.126-.068.518-.402 1.213-1.187 1.227-1.382 2.312-3.262 3.362-4.927.849-1.346 1.65-2.619 2.496-3.667 1.157-1.439 1.883-1.966 2.584-2.477.721-.522.574-.641 2.009-2.475 2.3-2.938 2.613-4.807 2.917-6.615.054-.32.109-.651.175-.981.259-1.307 1.405-2.659 2.876-2.658.53-.001 1.047.174 1.537.518 1.879 1.319 2.866 5.158 2.494 7.708-.383 2.619-1.578 6.005-2.681 7.23-.958 1.066-1.41 2.122-1.212 3.746.094.773 1.283.804 1.334.806l7.439.028c2.15.018 6.212.69 6.213 4.843 0 1.894-.77 3.071-1.666 3.757.852.758 1.516 1.742 1.278 3.609-.23 1.812-1.128 2.894-2.173 3.448.577.771.967 1.886.712 3.397-.245 1.455-1.134 2.469-2.048 2.961.431.658.699 1.666.473 2.869-.533 2.822-2.977 2.985-4.02 3.056l-.323.021h-22.253z" fill="#EFEFEF"/><path d="M76.34 49.629c.896-.686 1.666-1.863 1.666-3.757-.001-4.153-4.062-4.826-6.213-4.843l-7.439-.029c-.051-.002-1.24-.032-1.334-.806-.198-1.624.254-2.68 1.212-3.746 1.103-1.225 2.298-4.611 2.681-7.23.372-2.55-.615-6.389-2.494-7.708-.49-.344-1.007-.519-1.537-.518-.553 0-1.061.191-1.492.5l.029.018c1.879 1.319 2.866 5.158 2.494 7.708-.383 2.619-1.578 6.005-2.681 7.23-.958 1.066-1.41 2.122-1.212 3.746.094.773 1.283.804 1.334.806l7.439.028c2.15.018 6.212.69 6.213 4.843 0 1.894-.77 3.071-1.666 3.757.852.758 1.516 1.742 1.278 3.609-.23 1.812-1.128 2.894-2.173 3.448.577.771.967 1.886.712 3.397-.245 1.455-1.134 2.469-2.048 2.961.431.658.699 1.666.473 2.869-.533 2.822-2.977 2.985-4.02 3.056l-.323.021h3l.323-.021c1.043-.07 3.486-.233 4.02-3.056.227-1.203-.042-2.211-.473-2.869.914-.492 1.803-1.506 2.048-2.961.255-1.512-.135-2.627-.712-3.397 1.045-.555 1.942-1.636 2.173-3.448.237-1.866-.427-2.85-1.278-3.608zm-36.465 17.366l.032.007 1.059-.003-.021-.007-1.07.003zM76.34 49.629c.896-.686 1.666-1.863 1.666-3.757-.001-4.153-4.062-4.826-6.213-4.843l-7.439-.029c-.051-.002-1.24-.032-1.334-.806-.198-1.624.254-2.68 1.212-3.746 1.103-1.225 2.298-4.611 2.681-7.23.372-2.55-.615-6.389-2.494-7.708-.49-.344-1.007-.519-1.537-.518-.553 0-1.061.191-1.492.5l.029.018c1.879 1.319 2.866 5.158 2.494 7.708-.383 2.619-1.578 6.005-2.681 7.23-.958 1.066-1.41 2.122-1.212 3.746.094.773 1.283.804 1.334.806l7.439.028c2.15.018 6.212.69 6.213 4.843 0 1.894-.77 3.071-1.666 3.757.852.758 1.516 1.742 1.278 3.609-.23 1.812-1.128 2.894-2.173 3.448.577.771.967 1.886.712 3.397-.245 1.455-1.134 2.469-2.048 2.961.431.658.699 1.666.473 2.869-.533 2.822-2.977 2.985-4.02 3.056l-.323.021h3l.323-.021c1.043-.07 3.486-.233 4.02-3.056.227-1.203-.042-2.211-.473-2.869.914-.492 1.803-1.506 2.048-2.961.255-1.512-.135-2.627-.712-3.397 1.045-.555 1.942-1.636 2.173-3.448.237-1.866-.427-2.85-1.278-3.608zm-36.465 17.366l.032.007 1.059-.003-.021-.007-1.07.003z" fill="#DCDCDC"/><path d="M38.998 46.008h3.018v21h-3.018v-21z" fill="#D7D7D7"/><path d="M37.68 70.001h-11.067c-1.274 0-2.312-1.04-2.312-2.317l-3.304-21.38c0-1.279 1.037-2.318 2.311-2.318h14.372c1.275 0 2.312 1.039 2.312 2.318v21.38c-.001 1.277-1.038 2.317-2.312 2.317z" fill="#5879BD"/><path d="M33.993 61.006c1.105 0 2.001.895 2.001 1.999 0 1.103-.896 1.997-2.001 1.997s-2.002-.895-2.002-1.997c0-1.105.896-1.999 2.002-1.999z" fill="#fff"/><path d="M39.68 68.001h-11.067c-1.274 0-2.312-1.04-2.312-2.317l-3.304-21.38.029-.289c-1.141.141-2.029 1.107-2.029 2.289l3.304 21.38c0 1.277 1.037 2.317 2.312 2.317h11.067c1.176 0 2.139-.889 2.282-2.028l-.282.028z" fill="#5170AE"/><path d="M33.993 65.002c-1.105 0-2.002-.895-2.002-1.997 0-.292.066-.568.179-.818-.694.313-1.179 1.008-1.179 1.818 0 1.103.896 1.997 2.002 1.997.813 0 1.51-.486 1.823-1.181-.252.114-.529.181-.823.181z" fill="#48639A"/></svg>
            </a
        </div>
    </footer>
    <script src="/scripts/burger.js"></script>
    <script src="/scripts/filter.js"></script>
    <script src="/wow-animation/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>