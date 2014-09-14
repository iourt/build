<?php include 'app_header.php'; ?>

<header>
    <ul class="this_main">
        <li></li>
        <li>内部员工认证申请</li>
        <li class="this_ask">
            <a class="btn btn_orange btn_ask" href="">?</a>
        </li>
    </ul>
</header>

<section class="text_hand">
    请填写正确的个人信息，这将是您以后兑换佣金的重要凭证。如果您是内部员工，请点击内部员工认证按钮。
</section>

<h3 class="title_01">重要信息</h3>
<ul class="form_info">
    <li>
        <label>姓 名</label>
        <input placeholder="请输入您的姓名" />
        <span>姓名不能空</span>
    </li>
    <li>
        <label>手 机</label>
        <input placeholder="手机号码11位有效" />
        <span>手机号码错误</span>
    </li>
    <li>
        <label>职 位</label>
        <select>
            <option>置业顾问</option>
        </select>
    </li>
    <li>
        <label>所在项目</label>
        <select>
            <option>隆鑫 爱琴海</option>
        </select>
    </li>
    <li>
        <label>从业年限</label>
        <input placeholder="从事该行业的时间" />年
        <span>从业年限不能空</span>
    </li>
</ul>

<section class="btn_list btn_one">
    <a class="btn btn_green" href="">申请认证</a>
</section>

<?php include 'app_footer.php'; ?>