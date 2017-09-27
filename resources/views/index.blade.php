<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>网上报名</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}">
</head>

<body>
    <div class="container font">
        <header class="color-3B4356">2017广州市大学生电子设计校园邀请赛</header>
        <h1 class="color-3B4356">互联网报名</h1>

        <input type="text" name="tname" placeholder="队伍名（20字以内）">
        <textarea class="textarea-style" placeholder="口号（255字以内）"></textarea>

        <div class="member-info">
            <label class="member-order color-474E61">队长：</label>
            <input class="input-style" type="text" name="name" placeholder="姓名">
            <input class="input-style" type="text" name="tel" placeholder="联系电话">
            <input class="input-style" type="text" name="qq" placeholder="QQ">
        </div>

        <div class="member-info" id="member_1">
            <label class="member-order color-474E61">队员：</label>
            <input class="input-style" type="text" name="name" placeholder="姓名">
            <input class="input-style" type="text" name="tel" placeholder="联系电话">
            <input class="input-style" type="text" name="qq" placeholder="QQ">
        </div>

        <div class="member-info" id="member_2">
            <label class="member-order color-474E61">队员：</label>
            <input class="input-style" type="text" name="name" placeholder="姓名">
            <input class="input-style" type="text" name="tel" placeholder="联系电话">
            <input class="input-style" type="text" name="qq" placeholder="QQ">
        </div>

        <!-- add member -->
        <p id="add_member" class="add-member color-474E61">添加一名新队员</p>

        <p id="reduce_member" class="reduce-member color-474E61">删除一名队员</p>

        <button class="color-474E61">提交</button>

        <div class="attention color-474E61">
            <p class="attention-title">注意：</p>
            <p class="attention-piece">1.队伍人数不得超过3人</p>
            <p class="attention-piece">2.线上报名截止时间为xxxx,你也可以到所在学校指定报名点提交纸质报名表。</p>
            <p class="attention-piece">3.确保所填信息无误后方可提交。</p>
        </div>

        <!-- footer -->
        <footer>
            <div class="footer-tag color-FFF">无线电爱好者协会</div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
</body>

</html>