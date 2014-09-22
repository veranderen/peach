<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>易县旅游网</title>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=2b866a6daac9014292432d81fe9b47e3"></script>  
        <script src="http://d1.lashouimg.com/static/js/release/jquery-1.4.2.min.js" type="text/javascript"></script>  
        <script type="text/javascript" src="Public/js/baidumap.js"></script>  
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/Public/css/index/index.css">
    </head>
    <body>
        <div class="all">
        <div class="navigation">
            <div class="nav-content">
                <nav class="main-nav">
                    <ul>
                        <li><a>首页</a></li>
                        <li><a>攻略</a></li>
                        <li><a>易县美食</a></li>
                        <li><a>易县特产</a></li>
                        <li><a>路线</a></li>
                        <li><a>问答</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <h1 class="address">千年古县－易县</h1>
        <div class="first-screen ">
            <div class="m-photo">
                <img src="/Public/img/易水湖.jpg" height="360" width="680">           
            </div>
            <div class="p-aside">
                <div class="m-tags">
                    <div class="hd">
                        <h2>易县印象</h2>
                    </div>
                    
                    <p>最佳旅游季节 春秋两季</p>
                    <p>建议游玩天数 2天</p>
                    <p>
                        易县是是联合国教科文组织命名的全国首批14个千年古县之一，
                        是河北省文化名城、河北省唯一一个上榜的全国50个最美小城之一，
                        是国家级森林公园（易州森林公园），是国家林业局颁布的中国绿色名县。
                        境内有清西陵、狼牙山、易水湖、荆轲塔、云蒙山、燕下都、紫荆关、老子道德经幢等著名景点。
                    </p>
                </div>
                <div class="m-map">
                    <div class="hd">
                       <h2>地图</h2> 
                       <a class="show-big-map" target="_blank" href="http://127.0.0.1/home/map/index">
                           查看大图
                       </a>
                    </div>
                    <div class="bd">
                        <div  id="container">
                        </div>  
                    </div>
                </div>
                
            </div>
        </div>
      
        <p class="split">易县旅游热门目的地</p>
        <div class="m-nearby">
            
        <ul>
            <li>
                <img src="/Public/img/易水湖.jpg" height="128" width="224">
                <h3 class="name">易水湖</h3>
            </li>
            <li>
                <img src="/Public/img/清西陵.png" height="128" width="224">
                <h3 class="name">清西陵</h3>
            </li>
            <li>
                <img src="/Public/img/狼牙山.png" height="128" width="224">
                <h3 class="name">狼牙山</h3>
            </li>
            <li>
                <img src="/Public/img/云蒙山.png" height="128" width="224">
                <h3 class="name">云蒙山</h3>
            </li>
            <li>
                <img src="/Public/img/荆轲塔.png" height="128" width="224">
                <h3 class="name">荆轲塔</h3>
            </li>
            <li>
                <img src="/Public/img/千佛山.png" height="128" width="224">
                <h3 class="name">千佛山森林公园</h3>
            </li>
            <li>
                <img src="/Public/img/洪崖山.png" height="128" width="224">
                <h3 class="name">洪崖山</h3>
            </li>
            <li>
                <img src="/Public/img/易县战国影视城.png" height="128" width="224">
                <h3 class="name">易县战国影视城</h3>
            </li>
        </uL>  
        </div>
       
        <div class="float">
            <p>开发参照<a target="_blank" href="http://www.mafengwo.cn/travel-scenic-spot/mafengwo/12711.html">马蜂窝云南页面</a>
        </p>
        </div>
       </div> 
    </body>
</html>
<script type="text/javascript">
    var map = new BMap.Map("container");
    map.centerAndZoom(new BMap.Point(115.502801, 39.35258), 10);
    map.enableScrollWheelZoom();
</script>