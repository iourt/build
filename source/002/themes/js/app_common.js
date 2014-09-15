var siteCommon = {
    videoTab: function(params) {
        var self = this;

        var $that = $('.js_detail'),
            $link = $('.js_link li'),
            tWidth = $that.width(),
            tHeight = $('.js_detail li').height();

        $that.css({
            'height': tHeight + 'px'
        });
        $that.find('ul').css({
            'height': tHeight + 'px',
            'width': tWidth * $link.length + 'px'
        });
        $that.find('li').css({
            'height': tHeight + 'px',
            'width': tWidth + 'px'
        });

        $link.on('click', function() {
            var i = $(this).index();
            // $link.removeClass('current');
            // $(this).addClass('current');
            $that.find('ul').animate({
                left: -i*tWidth
            }, 500);
        });

    }
};