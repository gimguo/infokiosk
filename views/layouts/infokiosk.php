<?php

use yii\helpers\Html;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
<!--    <meta-->
<!--            http-equiv="Content-Security-Policy"-->
<!--            content="default-src 'self'; img-src https://*; child-src 'none';" />-->
    <title>Carousel Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">





    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
</head>
<body>

<!--<header>-->
<!--    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">-->
<!--        <div class="container-fluid">-->
<!--            <a class="navbar-brand" href="#">Carousel</a>-->
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!---->
<!--        </div>-->
<!--    </nav>-->
<!--</header>-->

<main>

<!--    <iframe name="iframe_a" width="100%" height="700px"></iframe>-->


<!--    <iframe name="iframe_a" sandbox="allow-same-origin src="//gsn.nso.ru/" noborder="0" width="830" height="800"></iframe>-->


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active center">
<!--                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
<!--                <div class="container">-->
                    <?= Html::img('/images/fon1.png', ['style' => ['width' => '100%']]) ?>
<!--                </div>-->
            </div>
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
<!--                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                <a class="btn btn-secondary" href="//gsn.nso.ru/"  target="_blank">
                <?= Html::img('/images/nso.png', ['style' => ['class' => "bd-placeholder-img rounded-circle", 'width' => '240px', 'height' => '240px']]) ?>
                <h2 class="fw-normal">Сайт</h2>
                </a>
<!--                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>-->
<!--                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a class="btn btn-secondary" href="http://gsn.nso.ru/page/39"  target="_blank">
                <?= Html::img('/images/large_1x_phone.png', ['style' => ['class' => "bd-placeholder-img rounded-circle", 'width' => '240px', 'height' => '240px']]) ?>
                <h2 class="fw-normal">Справочник</h2>
                </a>
<!--                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>-->
<!--                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
<!--                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                <a class="btn btn-secondary" href="http://gosuslugi.ru"  target="_blank">
                <?= Html::img('/images/gos.jpg', ['style' => ['class' => "bd-placeholder-img rounded-circle", 'width' => '240px', 'height' => '240px']]) ?>
                <h2 class="fw-normal">Госуслуги</h2>
<!--                <p>And lastly this, the third column of representative placeholder content.</p>-->
                </a>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

<!--        <hr class="featurette-divider">-->
<!---->
<!--        <div class="row featurette">-->
<!--            <div class="col-md-7">-->
<!--                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>-->
<!--                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>-->
<!--            </div>-->
<!--            <div class="col-md-5">-->
<!--                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <hr class="featurette-divider">-->


        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
<!--        <p class="float-end"><a href="#">Back to top</a></p>-->
<!--        <p>&copy; 2022 Строитель. &middot; </p>-->
    </footer>
</main>


<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
