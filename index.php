<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
        if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } 
    ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/js.js"></script>
</head>
<body>
<!-- 头部开始 -->
<div class="header">
    <div class="container clearfix">

        <!-- LOGO开始 -->
        <div class="col col-3 fl" id="logo">
            <a href="" title="山水云的博客"><span style="color: #9BBC1C;">山</span><span style="color: #FA0;">水</span><span style="color: #E43C79;">云</span><span style="font-size: 16px; margin-left: 15px; color: #f1f1f1;">的</span><span style="color: #00D0FF; font-size: 16px;">博客</span></a>
        </div>
        <!-- LOGO结束 -->

        <!-- 导航开始 -->
        <div class="menu col col-9 col-fixed fr">
            <ul class="fr">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="">CATOGARY</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">CONTACT</a></li>
                <li><a href="">MESSAGE</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle">CATEGORY</a>
                    <ul class="dropdown-menu">
                        <li><a href="">DIV+CSS</a></li>
                        <li><a href="">PHP</a></li>
                        <li><a href="">Mysql</a></li>
                        <li><a href="">Sublime text 3</a></li>
                        <li><a href="">易语言</a></li>
                        <li><a href="">易语言</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- 导航结束 -->

    </div>
</div>
<!-- 头部结束 -->

<!-- 主体开始 -->
<div class="main">
    <div class="container clearfix">
            
        <!-- 左侧开始 -->
        <div class="left col col-9">

            <!-- 轮播 -->
            <div class="flash">
                <div class="topvebanner">
                    <div id="myjQuery">
                        <div id="myjQueryContent">
                            <div><a href="http://www.sucaijiayuan.com" target="_blank"><img src="images/2011090222552984933.jpg" title="成功的设计从像素级细节开始"></a></div>
                            <div class="smask"><a href="http://www.sucaijiayuan.com" target="_blank"><img src="images/2011041202310199922.jpg" title="专注于高端的网络交互"></a></div>
                            <div class="smask"><a href="http://www.sucaijiayuan.com" target="_blank"><img src="images/2011041202254559558.jpg" title="做有思想的设计"></a></div>
                            <div class="smask"><a href="http://www.sucaijiayuan.com" target="_blank"><img src="images/services.jpg" title="专注于高端网站界面设计"></a></div>
                            <div class="smask"><a href="http://www.sucaijiayuan.com" target="_blank"><img src="images/design.jpg" title="只有设计才能站在更高的层面解决问题"></a></div>
                        </div>
                        <ul id="myjQueryNav">
                            <li class="current"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- 文章列表 -->
            <div class="list">
                <div class="post">
                    
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/06/20140617144813503-630x360.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
                <div class="post">
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/08/20140825143401667-385x220.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
                <div class="post">
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/07/20140704160251739-590x685.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
                <div class="post">
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/06/20140617144813503-630x360.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
                <div class="post">
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/06/20140617144813503-630x360.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
                <div class="post">
                    <a href="" class="img">
                        <img src="http://isux.tencent.com/wp-content/uploads/2014/06/20140617144813503-630x360.png" alt="" />
                    </a>
                    <div class="info">
                        <h2><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></h2>
                        <a href="" class="supports">10</a><a href="" class="comments">12</a><a href="" class="tags">HTML</a><a href="" class="tags">CSS</a><a href="" class="tags">Sublime Text</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- 左侧结束 -->

        <!-- 右侧开始 -->
        <div class="right col col-3 col-fixed">
            <div class="sidebar">
                <h3>POPULAR POSTS</h3>
                <ul>
                    <li><a href="">CSS3制作圆角按钮</a></li>
                    <li><a href="">Sublime Text 3快捷键介绍</a></li>
                    <li><a href="">前端之Android入门(6):屏幕适配</a></li>
                    <li><a href="">理解指尖上的浏览场景：从一次眼动测试说起</a></li>
                    <li><a href="">item 5</a></li>
                </ul>
            </div>

            <div class="sidebar">
                <h3>RECOMMEND POSTS</h3>
                <ul>
                    <li><a href="">item 1</a></li>
                    <li><a href="">item 2</a></li>
                    <li><a href="">item 3</a></li>
                    <li><a href="">item 4</a></li>
                    <li><a href="">item 5</a></li>
                </ul>
            </div>

        </div>
        <!-- 右侧结束 -->

    </div>
</div>
<!-- 主体结束 -->

<!-- 尾部开始 -->
<div class="footer">
    
</div>
<!-- 尾部结束 -->

</body>
</html>