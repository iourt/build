<?php include 'pc_header.php'; ?>

<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=0b895f63ca21c9e82eb158f46fe7f502"></script>

<div class="img_01">
    <img src="/themes/temp/6.jpg" alt="" />
</div>

<h3 class="title_02">
    Program Schedule<br>
    节目安排
</h3>

<h4 class="title_03">
    Shanghai Jazz Week Present<br>
    主会场节目安排
</h4>


<div class="schedule_main clearfix">
    <div class="this_left">
        <dl>
            <dt>
                <div><b>2014</b></div>
                <div>OCT.02</div>
                <div>OCT.03</div>
                <div>OCT.04</div>
            </dt>
            <dd>
                <div class="time">17:00</div>
            </dd>
            <dd>
                <div class="time">17:30</div>
            </dd>
            <dd>
                <div class="time">18:00</div>
            </dd>
            <dd>
                <div class="time">18:30</div>
            </dd>
            <dd>
                <div class="time">19:00</div>
            </dd>
            <dd>
                <div class="time">19:30</div>
            </dd>
            <dd>
                <div class="time">20:00</div>
            </dd>
            <dd>
                <div class="time">20:30</div>
            </dd>
            <dd>
                <div class="time">18:30</div>
            </dd>
            <dd>
                <div class="time">19:00</div>
            </dd>
            <dd>
                <div class="time">19:30</div>
            </dd>
            <dd>
                <div class="time">20:00</div>
            </dd>
            <dd>
                <div class="time">20:30</div>
            </dd>
        </dl>

        <!-- 
            width : 110px; 
        -->
        <div class="this_text_01" style="left:70px;top:160px;height:200px;">
            Dee Dee<br>
            Bridgewater<br>
            ____<br>
            Address:上海大东方
        </div>

        <div class="this_text_01" style="left:180px;top:200px;height:200px;">
            Dee Dee<br>
            Bridgewater<br>
            ____<br>
            Address:上海大东方
        </div>

        <div class="this_text_02" style="left:290px;top:240px;height:200px;">
            Dee Dee<br>
            Bridgewater<br>
            ____<br>
            Address:上海大东方
        </div>


        <div class="this_text_img" style="left:400px;top:280px;">
            <img src="themes/temp/img.jpg" />
            <a href="">购票</a>
            <span><span>
        </div>
    </div>

    <div class="this_right">
        <div class="this_title">地址map</div>
        <div class="this_map" id="map1">
        </div>
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




<h4 class="title_03">
    Shanghai Jazz Week Present<br>
    分会场节目安排
</h4>

<div class="table">
    <table class="a" cellspacing="0" cellpadding="0">
        <tr>
            <th>MON 周一</th>
            <th>TUE 周二</th>
            <th>WED 周三</th>
            <th>THU 周四</th>
            <th>FRI 周五</th>
            <th>SUN 周日</th>
        </tr>
    </table>
    <table class="b" cellspacing="0" cellpadding="0">
        <tr>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd style="position:relative;">
                        和平饭店
                        <div>
                            阿斯蒂芬阿萨德发生的发送到撒地方阿萨德
                            阿斯蒂芬阿萨德发生的发送到撒地方阿萨德
                            阿斯蒂芬阿萨德发生的发送到撒地方阿萨德
                            <a href="">购票</a>
                            <span></span>
                        </div>
                    </dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="yellow">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
            <td class="gray">
                <dl>
                    <dt>9月22日</dt>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                    <dd>和平饭店</dd>
                </dl>
            </td>
        </tr>
    </table>
</div>


<div style="padding:20px;">
    <div id="map2" style="width:100%;height:400px;">
    </div>
</div>

<script type="text/javascript">

    initialize({
        lng: 116.397428,
        lat: 39.90923,
        elem: "map2"
    });
</script>
<?php include 'pc_footer.php'; ?>