<?php
    if(isset($_SESSION['cart'])){
        $total_price = 0;
        $total_qty = count($_SESSION['cart']);
    foreach($_SESSION['cart'] as $key => $value){
        $q = "SELECT * from products where product_id = $key";
        $res = mysqli_query($con, $q);
        $prod = mysqli_fetch_assoc($res);
        $total_price += $prod['product_price'] * $value['qty'];
    }
    }
?>
<!-- Page Preloder -->
<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span><?=@$total_qty?></span></a>
            <div class="price">PKR <?=@$total_price?></div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php
                                    if(isset($_SESSION['user_id'])){
                                        ?>
                                    <a href="logout.php">Log out</a>

                                        <?php
                                    } else{
                                        ?>
                                        <a href="signin.php">Sign in</a>
                                <a href="signup.php">Sign up</a>
                                        <?php
                                    }
                                ?>
                                
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Categories</a>
                                <ul class="dropdown">
                                    <?php
                                        $q = "SELECT * from categories";
                                        $res = mysqli_query($con, $q);
                                        while($row = mysqli_fetch_assoc($res)){
                                            ?>
                                            <li><a href="category.php?id=<?=$row['category_id']?>"><?=$row['category_name']?></a></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                    <a href="shopping-cart.php"><img src="img/icon/cart.png" alt=""> <span>
                                        <?=@$total_qty?></span></a>
</span></a>
                        <div class="price">PKR <?=@$total_price?></div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->