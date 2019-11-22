<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <script>
        (function (doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function () {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if(clientWidth>=640){
                        docEl.style.fontSize = '100px';
                    }else{
                        docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                    }
                };
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
    </script>
    <title>联盟介绍</title>
    <link rel="stylesheet" href="css/common.css">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/abouts.css">
</head>
<style>
    .Honor_union{
        width: 90%;
        margin: 0 auto;
        height: 6.2rem;
        border-radius: 4px;
        position: relative;
        border: 1px silver solid;
    }
    .HonorTitle{
        width: 100%;
        text-align: center;
    }
    .HonorTitle img{
        width: 35%;
    }
    .Honor_union_List{
        width: 90%;
        margin: 0 auto;
        font-size: .24rem;
        letter-spacing: .5px;
    }
    .Honor_union_List p{
        margin-top: .1rem;
    }
    .blueBall{
         width: .12rem;
         height: .12rem;
         border-radius: 50%;
         background: #2e84fb;
         display: inline-block;
        position: relative;
        top: -.02rem;
     }
    .bluesBall{
        width: .07rem;
        height: .07rem;
        border-radius: 50%;
        background: #2e84fb;
        display: inline-block;
        position: relative;
        top: -.025rem;
    }
    .listson{
        text-indent: 2em;
    }
    .Honor_union_Pic{
        width: 20%;
        position: absolute;
        right: .2rem;
        top:-.5rem;
    }
</style>
<body>
    <div class="box">
        <!--顶部导航栏-->
        <!--#include file="header.html"-->
       <div class="banner"></div>
        <!--联盟介绍视频-->
        <div class="Ant_Video">
            <div class="Ant_Video_Title">
                <img src="images/introdutionTitle.png" alt="">
            </div>
            <div class="Ant_Content">
                蚂蚁节点联盟是国内知名的区块链线下社群组织，联盟以引领行业新生态、促进区块链行业稳健发展为宗旨，
                致力于聚合全球区块链行业专家及区块链爱好者整合区块链产业上下游资源，为区块链行业参与者提供第三方综合服务。
            </div>
            <div class="video_box">
                <video src="/themes/mobile/video/G_New.mp4" controls="controls" class="videoTrol" ></video>
            </div>
        </div>
        <!--发展历程-->
        <div class="DeveHistory">
            <div class="DeveHistory_Title">
                <img src="images/hisTory.png" alt="">
            </div>

            <div class="HistoryContent">
                <!--左边-->
                <div class="LeftHistory">
                    <ul>
                        <li>
                            <div class="HyNrHis">
                                <p>2019年9月21日-22日</p>
                                <p>2019FINWISE纷智第六届</p>
                                <p>全球峰会·澳门站</p>
                                <p>蚂蚁节点联盟承办</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg01.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis sdH">
                                <p>2018年8月10日-11日</p>
                                <p>FINWISE纷智第四届·香港峰会</p>
                                <p>蚂蚁节点联盟联合主办</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg02.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis">
                                <p>2018年5月21日-22日</p>
                                <p>Finwise纷智第三届·东京峰会</p>
                                <p>豪哥发表重要演讲</p>
                                <p>蚂蚁节点联盟联合主办</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg03.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis sdH">
                                <p>2018年3月20日</p>
                                <p>2018两会大家谈</p>
                                <p>吴杰庄委员盛赞蚂蚁节点联盟</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg04.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis">
                                <p>2018年1月12日-13日</p>
                                <p>FINWISE纷智第二届·澳门峰会</p>
                                <p>蚂蚁节点联盟联合主办</p>
                                <p>全球发布蚂蚁节点联盟成立</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg05.png" alt="">
                            </div>
                        </li>
                    </ul>

                </div>
                <!--中间-->
                <div class="CenterHistory">
                    <div class="cricleTaday">
                        今天
                    </div>
                    <div class="CricleLine">
                        <div class="LineLeft">
                            <ul>
                                <li>
                                   <span class="yuanquan">

                                   </span>
                                </li>
                                <li>
                                   <span class="yuanquan">

                                   </span>
                                </li>
                                <li>
                                   <span class="yuanquan">

                                   </span>
                                </li>
                                <li>
                                   <span class="yuanquan">

                                   </span>
                                </li>
                                <li>
                                   <span class="yuanquan">

                                   </span>
                                </li>
                            </ul>
                        </div>
                        <div class="LineRight">
                            <ul>
                                <li>
                                    <span class="yuanTop">

                                   </span>
                                </li>
                                <li>
                                    <span class="yuanTop">

                                   </span>
                                </li>
                                <li>
                                    <span class="yuanTop">

                                   </span>
                                </li>
                                <li>
                                    <span class="yuanTop">

                                   </span>
                                </li>
                                <li>
                                    <span class="yuanTop">

                                   </span>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <!--右边-->
                <div class="RightHistory">
                    <ul>
                        <li>
                            <div class="HyNrHis">
                                <p>2019年5月28日-29日</p>
                                <p>2019FINWISE纷智第五届</p>
                                <p>全球峰会·香港站</p>
                                <p>蚂蚁节点联盟承办</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg06.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis sdH">
                                <p>2018年6月29日-30日</p>
                                <p>2018第二届海创会暨</p>
                                <p>首届全球区块链技术成果论坛</p>
                                <p>蚂蚁节点联盟承办</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg07.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis">
                                <p>2018年4月9日</p>
                                <p>全国政协委员吴杰庄</p>
                                <p>莅临蚂蚁节点联盟</p>
                                <p>深度交流及指导工作</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg08.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis sdH">
                                <p>2018年1月26日</p>
                                <p>区块链领袖峰会</p>
                                <p>暨蚂蚁节点联盟年会</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg09.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="HyNrHis sdH ">
                                <p>2017年5月</p>
                                <p>福建区块链俱乐部成立</p>
                            </div>
                            <div class="LeftHistoryImg">
                                <img src="images/HisImg10.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>

            </div>


        </div>
        <!--联盟荣誉-->
        <div class="Honor_union">
            <img src="images/Medal.png" alt="" class="Honor_union_Pic">
            <div class="HonorTitle">
                <img src="images/CompanyHonor.png" alt="">
            </div>
            <div class="Honor_union_List">
                <ul>
                    <li>
                        <p>
                            <span class="blueBall"></span>
                            中国高科技产业化研究会区块链产业联盟
                        </p>
                        <p class="listson"><span class="bluesBall"></span> 副理事长单位</p>
                        <p class="listson"><span class="bluesBall"></span> 会务会展发展委员会</p>
                        <p class="listson"> <span class="bluesBall"></span> 国内事务发展委员会执委</p>
                    </li>
                    <li>
                        <p><span class="blueBall"></span> 中国科学院大学数字经济与区块链研究中心战略合作单位</p>
                    </li>
                    <li>
                        <p><span class="blueBall"></span> 厦门大学区块链研究中心战略合作单位</p>
                    </li>
                    <li>
                        <p><span class="blueBall"></span> 厦门区块链协会创始会长单位</p>
                    </li>
                    <li>
                        <p><span class="blueBall"></span> 粤港澳大湾区媒体联盟执行会长单位</p>
                    </li>
                    <li>
                        <p> <span class="blueBall"></span> 2019年5月28日第五届纷智峰会·香港站，纷智金球奖-获优秀社区联盟奖</p>
                    </li>
                </ul>

            </div>
        </div>
        <!--底部框-->
        <!--#include file="footer.html"-->

    </div>
</body>
<script src="js/common.js"></script>
</html>