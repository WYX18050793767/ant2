<?php if (!defined('THINK_PATH')) exit();?>
<div class="nav-header">
    <!--蚂蚁logo-->
    <div class="My-logo">
        <img src="images/logo.png" alt="">
    </div>
    <ul class="header-list">
        <li>
            <div class="sub-page">
                <div class="sub-page-first"  onclick='window.location.href="/anthome"'>首页</div>
            </div>
        </li>
        <li>
            <div class="sub-page">
                <div class="sub-page-first">新闻资讯</div>
                <div class="sub-page-navH">
                    <div class="sub-page-nav"  onclick='window.location.href="/message"'>快讯</div>
                    <div class="sub-page-nav padd-T" onclick='window.location.href="/news/all"'>新闻动态</div>
                </div>
            </div>
        </li>
        <li>
            <div class="sub-page">
                <div class="sub-page-first">蚂蚁导航</div>
                <div class="sub-page-navH">
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/1"'>行情</div>
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/2"'>交易所</div>
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/3"'>TOP200</div>
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/4"'>钱包</div>
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/5"'>矿池</div>
                    <div class="sub-page-nav" onclick='window.location.href="/antmap/6"'>媒体</div>
                    <div class="sub-page-nav padd-T" onclick='window.location.href="/antmap/7"'>技术服务</div>
                </div>
            </div>
        </li>
        <li>
            <div class="sub-page">
                <div class="sub-page-first">活动</div>
                <div class="sub-page-navH">
                    <div class="sub-page-nav" onclick='window.location.href="/activit/1/all"'>报名中</div>
                    <div class="sub-page-nav padd-T" onclick='window.location.href="/activit/2/all"'>已结束</div>
                </div>
            </div>
        </li>
        <li>
            <div class="sub-page">
                <div class="sub-page-first">关于我们</div>
                <div class="sub-page-navH">
                    <div class="sub-page-nav" onclick='window.location.href="/description"'>简介</div>
                    <div class="sub-page-nav"  onclick='window.location.href="/aboutus"'>团队</div>
                    <div class="sub-page-nav padd-T"  onclick='window.location.href="/contactus"'>联系我们</div>
                </div>
            </div>
        </li>
    </ul>
    <div class="search">
        <input type="text" placeholder="搜索" class="search-i">
        <span class="search-s" >
            <img src="images/SearchK.png" alt="">
        </span>
    </div>
</div>
<script src="js/jquery.js"></script>
<script>
$('.search-s').click(function(){
    var keyword = $('.search-i').val();
    // console.log(keyword)
    window.location.href="/search/"+keyword;
})

$( '.search-i').focus( function(){
    document.onkeydown = function(e){
        var ev = document.all ? window.event : e;
        if(ev.keyCode==13) {
            var keyword = $('.search-i').val();
            // console.log(keyword)
            window.location.href="/search/"+keyword;
        }
    }
} )
</script>