var view = {
    init: function(){
        var self = this;

        self.setShowList({
            'wrap': '.js_show_list',
            'title': 'dt',
            'detail': 'dd'
        });
    },

    setShowList: function(params) {
        var self = this;

        var wrap   = params.wrap,
            title  = params.title,
            detail = params.detail;

        var $that = $(wrap + ' ' + title);

        $that.on('click', function() {
            var $next = $(this).next(detail),
                $tag = $next.attr('class');

            if ($tag == 'current') {
                $(wrap).find(title).removeClass('current');
                $(wrap).find(detail).removeClass('current');
                // $next.removeClass('current');
            } else {
                $(wrap).find(title).removeClass('current');
                $(wrap).find(detail).removeClass('current');
                $(this).addClass('current');
                $next.addClass('current');
            }
        });
    }
};

view.init();