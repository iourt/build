<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="format-detection" content="telephone=no" />

        <link rel="stylesheet" type="text/css" href="themes/app_themes.css" />
        <script type="text/javascript" src="themes/js/jquery.min-1.8.2.js"></script>
        <script type="text/javascript" src="themes/js/jquery.bxslider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="themes/jquery.bxslider.app.css" />
    </head>
    <body>
        <header>
            <img src="themes/images/app_logo.jpg" />
            <section class="line"></section>

            <div class="js_img img_slider">
                <ul class="bxslider">
                    <li><img src="/themes/temp/1.jpg" title="" /></li>
                    <li><img src="/themes/temp/2.jpg" title="" /></li>
                    <li><img src="/themes/temp/3.jpg" title="" /></li>
                    <li><img src="/themes/temp/4.jpg" title="" /></li>
                    <li><img src="/themes/temp/5.jpg" title="" /></li>
                </ul>
                <script type="text/javascript">
                    $('.bxslider').bxSlider({
                        touchEnabled: false,
                        controls: false,
                        auto: true
                    });
                </script>
            </div>

            <menu>
                <li><a href="">NEWS 首页</a></li>
                <li><a href="">ARTIST 艺术家</a></li>
                <li><a href="">SCHEDULE 演出安排</a></li>
                <li><a href="">REGISTRATION 注册</a></li>
            </menu>
        </header>