<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>

</head>
<style>

</style>
<body>
<div class="box">
    <!--导航栏-->
    <!--#include file="header.html"-->

    <!--创始团队-->

    <div id="particles-js">
        <div class="FoundingTeam">
            <div class="FoundTeam_Cont">
                <a href="#" name="FoundingTeam"></a>
                <div class="FoundTitle">
                    <img src="images/foundteam.png" alt="" >
                </div>
                <div class="FoundContent">
                    <img src="images/teamK.png" alt="" width="70%">
                    <div class="pictureTx">
                        <img src="images/zenghao.png" alt="">
                    </div>
                    <div class="NameFound">
                        曾豪
                    </div>
                    <div class="appellation">
                        <p>中高会区块链产业联盟副理事长</p>
                        <p>蚂蚁节点联盟创始人</p>
                        <p>蚂蚁联盟国际资本创始人</p>
                    </div>
                </div>
                <!--三人-->
                <div class="List_Team">
                    <ul>
                        <li>
                            <div class="yuan">

                            </div>
                            <div class="List_TeamTx">
                                <img src="images/zh.png" alt="">
                            </div>
                            <div class="NameList">
                                曾豪
                            </div>
                        </li>
                        <li>
                            <div class="yuan">

                            </div>
                            <div class="List_TeamTx">
                                <img src="images/zjw.png" alt="">
                            </div>
                            <div class="NameList">
                                张竟唯
                            </div>
                        </li>
                        <li>
                            <div class="yuan">

                            </div>
                            <div class="List_TeamTx">
                                <img src="images/yzw.png" alt="">
                            </div>
                            <div class="NameList">
                                杨志文
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="TeamStyle">
            <div class="TeamStyle_Cont">
                <a href="#" name="TeamStyle"></a>
                <div class="FoundTeam_Cont">
                    <div class="FoundTitle">

                        <img src="images/teamType.png" alt="" >
                    </div>
                    <!--轮播-->
                    <div class="banner-nav">
                        <div class="in exhibition_hall">
                            <div id="" class="roundabout_box">
                                <ul>

                                    <li><a href="#"><img src="images/TeamStyle02.jpg" alt=""><span class="text"></span></a></li>
                                    <li><a href="#"><img src="images/TeamStyle001.jpg" alt=""><span class="text"></span></a></li>
                                    <li><a href="#"><img src="images/TeamStyle03.jpg" alt=""><span class="text"></span></a></li>
                                    <li><a href="#"><img src="images/TeamStyle04.jpg" alt=""><span class="text"></span></a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--团队风采-->

    <!--底部-->
    <!--#include file="footer.html"-->
</div>
</body>
</html>


<script src="js/particles.min.js"></script>
<script src="js/lib/stats.js"></script>
<script src="js/app.js"></script>
<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            // count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
<script src="js/jquery.roundabout.min.js"></script>
<script src="js/commom.js"></script>
<script>
    $(document).ready(function(){
        $('.roundabout_box ul').roundabout({
            duration: 1000,
            minScale: 0.6,
            autoplay: true,
            autoplayDuration: 5000,
            minOpacity: 0,
            maxOpacity: 1,
            reflect: true,
            startingChild: 3,
            autoplayInitialDelay: 5000,
            autoplayPauseOnHover: true,
            enableDrag: true
        });
    });

    $(".List_Team ul li").click(function () {
        if($(this).index()==0){
            $(".pictureTx img").attr("src","/themes/default/images/zenghao.png");
            $(".NameFound").html("曾豪")
            $(".appellation p").eq(0).html("中高会区块链产业联盟副理事长");
            $(".appellation p").eq(1).html("蚂蚁节点联盟创始人");
            $(".appellation p").eq(2).html("蚂蚁联盟国际资本创始人");
        }
        if($(this).index()==1){
            $(".pictureTx img").attr("src","/themes/default/images/zhangjingwei.png")
            $(".NameFound").html("张竟唯");
            $(".appellation p").eq(0).html("蚂蚁节点联盟联合创始人");
            $(".appellation p").eq(1).html("蚂蚁联盟国际资本联合创始人");
            $(".appellation p").eq(2).html("");
        }
        if($(this).index()==2){
            $(".pictureTx img").attr("src","/themes/default/images/yangzhiwen.png")
            $(".NameFound").html("杨志文")
            $(".appellation p").eq(0).html("蚂蚁节点联盟联合创始人");
            $(".appellation p").eq(1).html("蚂蚁联盟国际资本联合创始人");
            $(".appellation p").eq(2).html("");
        }

    })
</script>