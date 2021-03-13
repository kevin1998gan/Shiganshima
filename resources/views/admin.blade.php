<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clothes. Shiganshina.</title>
    <script src="https://kit.fontawesome.com/047746317e.js" defer></script>
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body>
    <header>
        <p>Welcome Admin!</p>
        <div class="header-up">
            <div class="app-btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
                <div class="logo-up">シガンシナ</div>
                <div class="logo-down">shiganshina clothes</div>
            </div>
            <div class="btn-panel">
                <div class="sign-in">
                    <i class="far fa-user"></i>
                </div>
                <div class="favourites">
                    <i class="far fa-heart"></i>
                </div>
                <div class="cart">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="header-down">
            <ul class="navPage">
                <li class="navPage-item"><a href="/">men</a></li>
                <li class="navPage-item">women</li>
                <li class="navPage-item">teen</li>
                <li class="navPage-item">children</li>
                <li class="navPage-item">adult</li>
                <li class="navPage-item">baby</li>
                <li class="navPage-item">footwear</li>
                <a class="dropdown-item" href="{{ url('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </header>

    <main>
        <div class="sliderz">
            <div class="hero">
                <div class="hero-title">Casual Basics</div>
                <div class="hero-description">
                    Quality confort for quality basics at home.
                </div>
            </div>
        </div>

        <div class="latest-section">
            <div class="latest-section-title"></div>
            <div class="latest-section-description"></div>
            <div class="latest-items">
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/1.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/2.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/3.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/4.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/5.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/6.jpg" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/7.jfif" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
                <div class="box">
                    <!--img-box---------->
                    <div class="slide-img">
                        <img alt="1" src="/img/imag/8.jfif" />
                        <!--overlayer---------->
                        <div class="overlay">
                            <!--buy-btn------>
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <!--detail-box--------->
                    <div class="detail-box">
                        <!--type-------->
                        <div class="type">
                            <a href="#">Rabbed Cardigan</a>
                            <span>Noe Arrival</span>
                        </div>
                        <!--price-------->
                        <a href="#" class="price">$23</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="future-section section">
            <div class="section-title">Future Release</div>
            <div class="future-showcase">
                <div>
                    <img src="/img/sample1.jpg" alt="" />
                </div>
                <div>
                    <img src="/img/sample2.jpg" alt="" />
                </div>
                <div>
                    <img src="/img/sample3.jpg" alt="" />
                </div>
                <div>
                    <img src="/img/sample4.jpg" alt="" />
                </div>
            </div>
            <div class="view-more">View more futuristic design!</div>
        </div>

        <div class="category-section">
            <div class="category-section-title">Discover</div>
            <div class="category-section-description">
                Unveil the exclusive clothes design from the renowned designer in
                accordance to country.
            </div>
            <div class="categories">
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/japan.png" alt="" />
                    </div>
                    <div class="country-name">Japan</div>
                </div>
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/korea.png" alt="" />
                    </div>
                    <div class="country-name">Korea</div>
                </div>
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/france.png" alt="" />
                    </div>
                    <div class="country-name">France</div>
                </div>
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/uk.png" alt="" />
                    </div>
                    <div class="country-name">UK</div>
                </div>
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/china.png" alt="" />
                    </div>
                    <div class="country-name">China</div>
                </div>
                <div class="category">
                    <div class="flag-container">
                        <img class="flag" src="/img/canada.png" alt="" />
                    </div>
                    <div class="country-name">Canada</div>
                </div>
            </div>
        </div>

        <div class="news section">
            <div class="section-title">Recreational Blogs</div>
            <div class="blogs">
                <div class="blog blog-first">
                    <div class="blog-thumbnail">
                        <img src="/img/blouse.jfif" alt="" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-title">Viridescent Blouse</div>
                        <div class="blog-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Consequatur, officia consequuntur molestiae odit unde a amet
                            quasi neque repellendus, facere hic itaque eveniet dolor laborum
                            quas saepe totam? Nemo, harum.
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="blog-thumbnail">
                        <img src="/img/jeans.jpg" alt="" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-title">Noblesse Jeans</div>
                        <div class="blog-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquam provident reprehenderit nihil blanditiis voluptas fuga
                            expedita fugiat commodi fugit. Magni alias accusamus
                            necessitatibus consequatur quae explicabo dicta odit obcaecati
                            corporis.
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="blog-thumbnail">
                        <img src="/img/calm.jpg" alt="" />
                    </div>
                    <div class="blog-info">
                        <div class="blog-title">Expressing calmness</div>
                        <div class="blog-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
                            omnis dolore natus rerum voluptas necessitatibus quae odit
                            voluptatum soluta atque quisquam aliquam facilis repellat.
                            Cupiditate perferendis consectetur alias voluptate quis?
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more">View more inspiring posts</div>
        </div>

        <div class="partner-section section">
            <div class="section-title">Partnership</div>
            <div class="partners">
                <img src="/img/gap.jpg" alt="" class="gap" />
                <img src="/img/mango.png" alt="" class="mango" />
                <img src="/img/muji.png" alt="" class="muji" />
                <img src="/img/uniqlo.gif" alt="" class="uniqlo" />
                <img src="/img/shein.jfif" alt="" class="shein" />
                <img src="/img/hnm.jpg" alt="" class="hnm" />
                <img src="/img/zara.png" alt="" class="zara" />
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-up">
            <div class="locales footer-group">
                <div class="footer-title">Locales</div>
                <ul class="footer-nav">
                    <li class="footer-nav-item">
                        <span><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Japan</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fas fa-globe"></i>&nbsp;&nbsp;&nbsp;English</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;(+81)12-238
                            3223</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fas fa-store-alt"></i>&nbsp;&nbsp;Locate Store</span>
                    </li>
                </ul>
            </div>
            <div class="help footer-group">
                <div class="footer-title">Help</div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><span>Contact Us</span></li>
                    <li class="footer-nav-item"><span>Customer Service</span></li>
                    <li class="footer-nav-item"><span>Product Quality</span></li>
                    <li class="footer-nav-item"><span>FAQs</span></li>
                    <li class="footer-nav-item"><span>Warranty</span></li>
                    <li class="footer-nav-item"><span>Comparison</span></li>
                </ul>
            </div>
            <div class="company footer-group">
                <div class="footer-title">Company</div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><span>About Weiyan Holdings</span></li>
                    <li class="footer-nav-item"><span>Subsidiaries</span></li>
                    <li class="footer-nav-item"><span>Affiliate</span></li>
                    <li class="footer-nav-item"><span>Corporate Vision</span></li>
                    <li class="footer-nav-item"><span>Careers</span></li>
                    <li class="footer-nav-item"><span>Legal</span></li>
                    <li class="footer-nav-item"><span>Principles</span></li>
                </ul>
            </div>
            <div class="social-media footer-group">
                <div class="footer-title">Follow Us On</div>
                <ul class="footer-nav">
                    <li class="footer-nav-item">
                        <span><i class="fab fa-facebook"></i>&nbsp;&nbsp;Facebook</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-twitter"></i>&nbsp;&nbsp;Twitter</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-instagram"></i>&nbsp;&nbsp;Instagram</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-pinterest"></i>&nbsp;&nbsp;Pinterest</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-youtube"></i>&nbsp;Youtube</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-line"></i>&nbsp;&nbsp;Line</span>
                    </li>
                    <li class="footer-nav-item">
                        <span><i class="fab fa-blogger"></i>&nbsp;&nbsp;Blogger</span>
                    </li>
                </ul>
            </div>
            <div class="newsletter footer-group">
                <div class="footer-title">Subscribe To Our Newsletter</div>
                <div class="footer-para">
                    By signing up to our weekly exclusive newsletters, you consent to
                    receive emails from us for our latest updates, designs, events and
                    hot deals. You agreed to our <span>Privacy Policy</span>
                </div>
                <div>
                    <input type="text" class="email-input" placeholder="Email Address" />
                </div>
                <div class="logo logo-footer">
                    <div class="logo-up">シガンシナ</div>
                    <div class="logo-down">shiganshina clothes</div>
                </div>
            </div>
        </div>
        <div class="footer-down">
            &copy; 2018-2021 Weiyan Holdings Pte Ltd. All rights reserved.
        </div>
    </footer>
</body>

</html>
