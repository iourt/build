<?php include 'app_header.php'; ?>

<ul class="tab">
    <li>主会场</li>
    <li>分会场</li>
</ul>

<section class="tab_detail">
    <!-- 主会场 -->
    <div class="this_left">
        <dl>
            <dt>
                Program Schedule<br>
                主会场节目安排

                <div>
                    <em></em> 站票
                    <em></em> 坐票
                <div>
            </dt>
            <div class="this_line"></div>
            <dd>
                <h4>CUI JIAN 崔健</h4>
                <ul>
                    <li>10/2</li>
                    <li>14:00-16:00</li>
                    <li></li>
                    <li>
                        <a href="">BUY<br>购票</a>
                    </li>
                </ul>
                <div>
                    <em class="stand">STAND</em> RMB 150
                    <em class="seat">SEAT</em> RMB 300
                </div>
            </dd>
            <dd>
                <h4>CUI JIAN 崔健</h4>
                <ul>
                    <li>10/2</li>
                    <li>14:00-16:00</li>
                    <li></li>
                    <li>
                        <a href="">BUY<br>购票</a>
                    </li>
                </ul>
                <div>
                    <em class="stand">STAND</em> RMB 150
                    <em class="seat">SEAT</em> RMB 300
                </div>
            </dd>
            <dd>
                <h4>CUI JIAN 崔健</h4>
                <ul>
                    <li>10/2</li>
                    <li>14:00-16:00</li>
                    <li></li>
                    <li>
                        <a href="">BUY<br>购票</a>
                    </li>
                </ul>
                <div>
                    <em class="stand">STAND</em> RMB 150
                    <em class="seat">SEAT</em> RMB 300
                </div>
            </dd>
        </dl>
        <div class="this_line"></div>


        <div style="padding:10px 0;line-height:20px;font-size:14px;">
            上阿萨德会发生打法<br>
            上阿萨德会发生打法
        </div>
        <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=0b895f63ca21c9e82eb158f46fe7f502"></script>
        <div style="height:300px;border:5px solid #959595;" id="map1">
        </div>
        <script type="text/javascript">
            function initialize(params){
                var position=new AMap.LngLat(params.lng, params.lat);

                var mapObj=new AMap.Map(params.elem, {
                        view: new AMap.View2D({//创建地图二维视口
                            center:position,//创建中心点坐标
                            zoom:14, //设置地图缩放级别
                            rotation:0 //设置地图旋转角度
                        }),
                        lang:"zh_cn"//设置地图语言类型，默认：中文简体
                    });//创建地图实例
            }

            initialize({
                lng: 116.397428,
                lat: 39.90923,
                elem: "map1"
            });
        </script>
    </div>


    <!-- 分会场 -->
    <div class="this_right">
        <div class="this_title">
            Program Schedule<br>
            分会场节目安排
        </div>
        <div class="this_line"></div>
        <dl>
            <dt><em>9/22</em>星期一</dt>
            <dd>
                <ul>
                    <li>和平饭店爵士吧</li>
                    <li>M1N1</li>
                    <li>Tops</li>
                </ul>
            </dd>
            <dt><em>9/22</em>星期一</dt>
            <dd>
                <ul>
                    <li>和平饭店爵士吧</li>
                    <li>M1N1</li>
                    <li>Tops</li>
                </ul>
            </dd>
        </dl>
    </div>
</section>


<section class="mask">&nbsp;</section>
<section class="frame">
    <div class="this_close"></div>
    <img src="themes/temp/01.jpg" />
    <div class="this_detail">
        <h2>和平饭店爵士吧</h2>
        <article>
            外形的确引起了大家的关注，溢美之词溢于言表。不过我们将问题反过来思考
        </article>
        <ul>
            <li class="this_name">DEE DEE BRIDGEWATER</li>
            <li class="this_address">上海市 黄陂区<br>中山南路888号</li>
            <li class="this_tel">021-400231655</li>
            <li class="this_time">2014.10.2 21:00</li>
        </ul>
    </div>
</section>

<script type="text/javascript">
(function(){
    var $tab   = $('.tab li'),
        $left  = $('.tab_detail .this_left'),
        $right = $('.tab_detail .this_right');

    $tab.on('click', function(){
        var index = $(this).index(),
            width = $('body').width();
        switch (index){
            case 0:
                $left.css({
                    '-webkit-transition': '-webkit-transform ease 1s',
                    '-webkit-transform': 'translate3d(0, 0, 0)'
                });
                $right.css({
                    '-webkit-transition': '-webkit-transform ease 1s',
                    '-webkit-transform': 'translate3d(0, 0, 0)'
                });
                break;
            case 1:
                $left.css({
                    '-webkit-transition': '-webkit-transform ease 1s',
                    '-webkit-transform': 'translate3d(-'+width+'px, 0, 0)'
                });
                $right.css({
                    '-webkit-transition': '-webkit-transform ease 1s',
                    '-webkit-transform': 'translate3d(-'+width+'px, 0, 0)'
                });
                break;
        }
    });


    var $dt = $('.tab_detail .this_right dt');

    $dt.on('click', function(){
        var $cl = $(this).attr('class');

        if ($cl == 'current') {
            $(this).removeClass('current');
            $(this).next('dd').css('display', 'none');
        } else {
            $(this).addClass('current');
            $(this).next('dd').css('display', 'block');
        }
    });


    var $list  = $('.tab_detail .this_right dd li'),
        $mask  = $('.mask'),
        $frame = $('.frame'),
        $close = $('.frame .this_close');

    $list.on('click', function(){
        $mask.css('display', 'block');
        $frame.css('display', 'block');
    });
    $close.on('click', function(){
        $mask.css('display', 'none');
        $frame.css('display', 'none');
    })
})();
</script>
<?php include 'app_footer.php'; ?>