<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Liami Ecommerce Products HTML5 Template</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?php /*?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
</header>
<?php */?>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <footer>
        <div class="w-100 position-relative">
            <div class="container">
                <hr class="mt-0 mb-70">
                <div class="footer-data position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget w-100">
                                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.svg" alt="Logo"></a></h1></div><!-- Logo -->
                                <div class="social-links d-flex flex-wrap">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget w-100">
                                <h5>Shop</h5>
                                <ul>
                                    <li><a href="product-detail.html" title="">Long Fit T-shirt</a></li>
                                    <li><a href="product-detail2.html" title="">Short Fit T-shirt</a></li>
                                    <li><a href="product-detail3.html" title="">Long Fit Pant</a></li>
                                    <li><a href="product-detail4.html" title="">Short Fit Pant</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget w-100">
                                <h5>Blog</h5>
                                <ul>
                                    <li><a href="blog-detail.html" title="">Standard</a></li>
                                    <li><a href="audio.html" title="">Audio</a></li>
                                    <li><a href="video.html" title="">Video</a></li>
                                    <li><a href="quote.html" title="">Quote</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="widget w-100">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="about.html" title="">About</a></li>
                                    <li><a href="content-elements.html" title="">Content Elements</a></li>
                                    <li><a href="faq.html" title="">Help</a></li>
                                    <li><a href="contact.html" title="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Data -->
                <hr class="mt-70 mb-0">
                <div class="bottom-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                    <ul class="bottom-links d-flex flex-wrap align-items-center list-unstyled mb-0">
                        <li><a href="javascript:void(0);" title="">Privacy Policy</a></li>
                        <li><a href="javascript:void(0);" title="">Terms of Service</a></li>
                        <li>&copy; <a href="index.html" title="">Liami</a> All rights reserved.</li>
                    </ul><!-- Bottom Links -->
                    <div class="payment-opt d-flex flex-wrap align-items-center">
                        <span>Accept for</span>
                        <img class="img-fluid" src="assets/images/payment-opt-img.png" alt="Payment Options Image">
                    </div><!-- Payment Options -->
                </div><!-- Bottom Bar -->
            </div>
        </div>
    </footer><!-- Footer -->
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/aos.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/custom-scripts.js"></script>
</body>
</html>
<?php $this->endPage() ?>
