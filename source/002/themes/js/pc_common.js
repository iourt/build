var siteCommon = {
    init: function() {
        var self = this;

        self.setLeft();
        self.setMenu();
        self.fixMenu();
    },

    setLeft: function() {
        var self = this;

        var $body = $('.js_mod'),
            $bodyLeft = $('.js_left');

        $bodyLeft.css("height", $body.height()+'px');
    },

    // 菜单
    setMenu: function() {

        var $menu = $('.js_menu li'),
            $menuWidth = $menu.width();
        
        $menu.hover(function() {
            $(this).find('div').animate({
                width: $menuWidth
            }, 300);
        }, function() {
            $(this).find('div').animate({
                width: 0
            }, 300);
        });

    },

    // 菜单浮动
    fixMenu: function() {
        var $menu = $('.js_menu');

        $(window).on('scroll', function() {
            change();
        });

        $(window).on('resize', function() {
            change();
        });

        function refix(){
            var $bodyWidth = $("body").width();

            if($bodyWidth<1100){

                $menu.css({
                    'position': 'fixed',
                    'right': '20px'
                });

            }else{

                $menu.css({
                    'position': 'fixed',
                    'right': (($bodyWidth-1100)/2+20)+'px'
                });

            }
        }

        function change() {
            var sTop = $(window).scrollTop();

            if (sTop >= 170) {
                refix();
            } else {

                $menu.css({
                    'position': 'absolute',
                    'right': '20px'
                });
            }
        }
    },

    setMusic: function(params) {
        // $('audio,video').mediaelementplayer();

        var detail = params ? params : [],
            num = detail.length,
            current = 0,
            isClick = false;

        var $title = $('.js_music_title');

        if (current == 0) {
            $title.html(detail[current].title);
        }
        
        var player = new MediaElement('player', {
            success: function (mediaElement, domObject) {

                mediaElement.play();
                isClick = !isClick;
                 $('.js_music_play').addClass('current');

                // add event listener
                mediaElement.addEventListener('ended', function(e) {
                    if (current < (num-1)){
                        current++;
                    } else {
                        current = 0;
                    }

                    mediaElement.setSrc(detail[current].src);
                    mediaElement.play();

                    $title.html(detail[current].title);
                }, false);
                 
            },
            // fires when a problem is detected
            error: function () { 
             
            }
        });

        $('.js_music_play').on('click', function(){
            if (isClick) {
                player.pause();
                $(this).removeClass('current');
            } else {
                player.play();
                $(this).addClass('current');
            }
            isClick = !isClick;
        });
    },

    videoTab: function(params) {
        var self = this;

        var tHeight = params && params.height ? params.height : 400,
            elem = params && params.elem ? params.elem : '.js_tab';

        var $detail = $(elem + ' .js_detail ul'),
            $link = $(elem + ' .js_link li');

        $link.on('click', function() {
            var i = $(this).index();
            $link.removeClass('current');
            $(this).addClass('current');
            $detail.animate({
                left: -i*830
            }, 500);
        });

    }
};

window.onload = function() {
    siteCommon.init();
};