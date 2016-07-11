<?php
$title1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title1'");
$title2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title2'");
$title3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title3'");
$place1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place1'");
$place2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place2'");
$place3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place3'");
$time1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time1'");
$time2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time2'");
$time3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time3'");
$link1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link1'");
$link2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link2'");
$link3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link3'");
  $pictures = get_option("neup_picture");
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="format-detection" content="telephone=yes"/>
    <meta name="msapplication-tap-highlight" content="no" />
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap-datepicker3.standalone.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/default.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/line1.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/line3.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/line2.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/swiper-3.3.1.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/global.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/ublue_ImageCarousel.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.3.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/animenu.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/swiper-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/ublue_ImageCarousel.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/default.js"></script>

    <script>
        $(function () {
            $("#tabs21 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function () {
            $("#tabs22 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function(){
            $("#tabs221 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function(){
            $("#tabs222 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function(){
            $("#tabs223 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function(){
            $("#tabs224 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
        $(function(){
            $("#tabs23 a").mousemove(function (e) {
                $(this).tab('show');
            });
        })
        $(function(){
            $("#tabs31 a").mousemove(function (e) {
                $(this).tab('show');
            });
        })
    </script>
    <script>
        $(function() {
            /* 设置和说明：
             =====================================================
             // Dom节点
             ubArea:'.focusArea',				// 外层（上下无缝滚动时，以该层做定位）
             ubCon:'.focusCon',					// 内容（滚动时以该层做定位）
             ubItem:'.focusItem',				// 列表项
             ubIndicators:'.focusIndicators',		// 小按钮
             ubPrev:'.focusPrev',					// 向上按钮
             ubNext:'.focusNext',				// 向下按钮
             // 效果展现 （以下为默认值）
             ubEffect:'left',						// 效果呈现方式 'left' 'top' 'fade' 'leftSeamless' 'topSeamless'
             ubTrigger:'hover',					// 小按钮经触发条件 'hover' 'click'
             ubAutoPlay:'on',					// 是否自动播放
             ubAutoBtn:'on',						// 小按钮是否自动生成（便于做成缩略图形式）
             ubTitleHover:'off',					// 标题是否滑动显示
             ubGallery:'off',						// 是否开启多图滚动
             // 时间设置 （按毫秒计算：1000毫秒=1秒）
             ubTime:5000,						// 自动播放的时间间隔
             ubSpeed:480,						// 图片切换的速度
             ubTitleSpeed:50					// 标题滑过显示的速度
             =====================================================
             */
            $(".demoH").ublue_ImageCarousel({
//                ubAutoPlay:"on",			// 关闭自动播放
//                ubEffect:"leftSeamless",		// 图片切换方式为无缝滚动
//                ubTime:2000,
//                ubGallery:'on',
//                ubAutoBtn:'on',
//                ubSpeed:1000,						// 图片切换的速度
                ubAutoPlay:"on",			// 关闭自动播放
                ubEffect:"leftSeamless",		// 图片切换方式为无缝滚动
                ubTime:1000
            });
        });
    </script>
    <script type="text/javascript">
        function getmyDate(){
            // 获取页面UI
            var month_text0 = document.getElementById('month0'),
                month_text1 = document.getElementById('month1'),
                month_text2 = document.getElementById('month2');
            var day_text0 =document.getElementById('day0'),
                day_text1 =document.getElementById('day1'),
                day_text2 =document.getElementById('day2');
            /*// 获取时间
            var nowDate = new Date(),
                nextDate = new Date(nowDate.getTime()+24*60*60*1000),  //明天
                nextnextDate = new Date(nextDate.getTime()+24*60*60*1000);    //后天

            var year0 = nowDate.getFullYear(),
                month0 = nowDate.getMonth(),
                date0 = nowDate.getDate();
            var year1 = nextDate.getFullYear(),
                month1 = nextDate.getMonth(),
                date1 = nextDate.getDate();
            var year2 = nextnextDate.getFullYear(),
                month2 = nextnextDate.getMonth(),
                date2 = nextnextDate.getDate();*/
            var year0 = <?php echo substr($time1, 0, 4); ?>,
                month0 = <?php if(substr($time1, 5, 2) < 10) echo substr($time1, 6, 1); else echo substr($time1, 5, 2); ?>,
                date0 = <?php if(substr($time1, 8, 2) < 10) echo substr($time1, 9, 1); else echo substr($time1, 8, 2); ?>;
            var year1 = <?php echo substr($time2, 0, 4); ?>,
                month1 = <?php if(substr($time2, 5, 2) < 10) echo substr($time2, 6, 1); else echo substr($time2, 5, 2); ?>,
                date1 = <?php if(substr($time2, 8, 2) < 10) echo substr($time2, 9, 1); else echo substr($time2, 8, 2); ?>;
            var year2 = <?php echo substr($time3, 0, 4); ?>,
                month2 = <?php if(substr($time3, 5, 2) < 10) echo substr($time3, 6, 1); else echo substr($time3, 5, 2); ?>,
                date2 = <?php if(substr($time3, 8, 2) < 10) echo substr($time3, 9, 1); else echo substr($time3, 8, 2); ?>;

            var Monthes = [ "", "一月", "二月", "三月", "四月", "五月", "六月", "七月","八月","九月","十月","十一月","十二月" ];
            month_text0.innerHTML=Monthes[month0];
            day_text0.innerHTML=date0;
            month_text1.innerHTML=Monthes[month1];
            day_text1.innerHTML=date1;
            month_text2.innerHTML=Monthes[month2];
            day_text2.innerHTML=date2;
        }
    </script>
    <script>
    // window.onload=funtion(){
    //     var  div = document.getElementById('menu_btn');
    //   　div.onclick=funtion(){
    //         document.getElementById("navbar").style.display = 'block';
    //         document.getElementById("navbar_item").style.display = 'block';
    //         alert("ok");
    //     }
    //     function () {
    //         $("#tabs1 a").mousemove(function (e) {
    //             $(this).tab('show');
    //         });
    //     }
    // };
        $(function () {
          var click_num = 0;
            $("#tabs1 a").mousemove(function (e) {
                $(this).tab('show');
            });
            $("#menu_btn").click(function(e){
              // if (click_num % 2 == 0) {
              //   document.getElementById("navbar").style.display = 'block';
              //   document.getElementById("navbar_item").style.display = 'block';
              // }else{
              //   document.getElementById("navbar").style.display = 'none';
              //   document.getElementById("navbar_item").style.display = 'none';
              // };
              var navbar = $("#navbar");
              var navbar_item = $("#navbar_item");
                if(navbar.css("display")!="none" && navbar_item.css("display")!="none")
                {
                  navbar.css("display","none");
                   navbar_item.css("display","none");
                }
                else{
                  navbar.css("display","block");
                   navbar_item.css("display","block");
                }
            });

        });
    </script>
<title>无标题文档</title>
</head>


<body onload="getmyDate();">
    <div class="header">
        <div class = "banner">

          <form class="bs-example bs-example-form" id="serarch_form" role="form" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- <?php get_search_form(); ?> -->
                <!-- http://down.chinaz.com/try/201202/1644_1.htm -->
            <div class="input-group">
            <!-- <input type="text" class="form-control"> -->
            <input class="form-control" name="s" id="s" type="search" results="s" class="text"/>
            </div>

            </form>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%">
            <param name="movie" value="<?php bloginfo('template_url'); ?>/images/banner.swf" />
            <param name="quality" value="high" />
            <PARAM NAME="SCALE" VALUE="exactfit">
            <embed src="<?php bloginfo('template_url'); ?>/images/banner.swf" quality="high" type="application/x-shockwave-flash" width="100%" height="100%" SCALE="exactfit" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        </div>
        <nav class="menubar animenu">
            <button class="animenu__toggle" id="menu_btn" >
              <span class="animenu__toggle__bar"></span>
              <span class="animenu__toggle__bar"></span>
              <span class="animenu__toggle__bar"></span>
            </button>
            <ul class="nav nav-justified animenu__nav" id = "navbar">
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="menucolor">先锋首页</a>
                  </li>

                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="200" data-close-others="false">东大共青团 </a>
                      <ul class="dropdown-menu animenu__nav__child" id = "navbar_item">
                        <li><a href="#" class="submenucolor">团委简介</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">机构设置</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">工作职责</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">光辉历程</a></li>
                        <!-- <li class="dropdown-header">Dropdown header</li> -->

                      </ul>
                  </li>

                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="200" data-close-others="false">学生组织 </a>
                      <ul class="dropdown-menu animenu__nav__child" id = "navbar_item">
                        <li><a href="#" class="submenucolor">学生会</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">研究生会</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">社团联合会</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">志愿者协会</a></li>
                        <!-- <li class="dropdown-header">Dropdown header</li> -->

                      </ul>
                  </li>
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="200" data-close-others="false">网上团支部 </a>
                      <ul class="dropdown-menu animenu__nav__child" id = "navbar_item">
                        <li><a href="#" class="submenucolor">网上团支部</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">支部博客联盟</a></li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="#" class="submenucolor">团日视频展播</a></li>

                      </ul>
                  </li>
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="menucolor">青年之声</a>
                  </li>
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="menucolor">先锋论坛</a>
                  </li>
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                    <a href="#" class="menucolor">文件下载</a>
                    </li>
                  <li class="dropdown">
                      <ul class="dropdown-menu top-of-item">
                      </ul>
                      <a href="#" class="menucolor">友情链接</a>
                  </li>
              </ul>
        </nav>
    </div>


    <div class="line1">
        <div class="line11" style="border: none">
            <div id="myCarousel" class="line10 carousel slide" data-ride="carousel" style="height:100%;">
                <!-- 轮播（Carousel）指标 -->
                <div class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" type="circle" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" type="circle"></li>
                    <li data-target="#myCarousel" data-slide-to="2" type="circle"></li>
                    <li data-target="#myCarousel" data-slide-to="3" type="circle"></li>
                    <li data-target="#myCarousel" data-slide-to="4" type="circle"></li>
                </div>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner" style="height: 100%;">
                    <div class="item active" style="height: 100%;">
                        <img src="<?php echo $pictures['top_left_picture1']; ?>" alt="First slide"
                             style="position: absolute;bottom: 0">
                        <div class="carousel-caption" id="carousel-caption1"><p><?php echo $pictures["top_left_content1"]; ?></p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php echo $pictures['top_left_picture2']; ?>" alt="Second slide"
                             style="position: absolute;bottom: 0">
                        <div class="carousel-caption" id="carousel-caption2"><p><?php echo $pictures["top_left_content2"]; ?></p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php echo $pictures['top_left_picture3']; ?>" alt="Third slide"
                             style="position: absolute;bottom: 0">
                        <div class="carousel-caption" id="carousel-caption3"><p><?php echo $pictures["top_left_content3"]; ?></p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php echo $pictures['top_left_picture4']; ?>" alt="Second slide"
                             style="position: absolute;bottom: 0">
                        <div class="carousel-caption" id="carousel-caption2"><p><?php echo $pictures["top_left_content4"]; ?></p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php echo $pictures['top_left_picture5']; ?>" alt="Third slide"
                             style="position: absolute;bottom: 0">
                        <div class="carousel-caption" id="carousel-caption3"><p><?php echo $pictures["top_left_content5"]; ?></p></div>
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel"
                   data-slide="prev"><br><br><br><br>&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel"
                   data-slide="next"><br><br><br><br>&rsaquo;</a>
            </div>
        </div>
      	<div class="line12">
    			<div class="line12a2"></div>
    			<div class="line12a"><p>先锋头条</p></div>
    			<div class="line12a1"><a href="#" target="_blank" class="ainline1">more>></a></div>
                <div class="line12b"></div>
    			<div class="line12c">
            <?php
                $cat_name = "先锋头条";
                $query = new WP_Query("posts_per_page=1&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
            ?>
    				<a href="<?php the_permalink() ?>" target="_blank" class="ainline12c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_the_excerpt();?>（点击看全文）</a>
    				<?php endwhile; wp_reset_query(); ?>
    			</div>

    			<div class="line12d">................................................................................................</div>
    			<div class="line12e">
                <?php
        						$cat_name = "先锋头条";
        						$query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
        						while($query->have_posts()): $query->the_post();
    						?>
                <div class="line12e1"><div class="line12e2"><p style="padding-left:3%;">>&nbsp;<a href="<?php the_permalink(); ?>" target="_blank" class="ainline1"><?php the_title(); ?></a></p></div><div class="line12e3"><span style="float: right"><?php the_time("m-d"); ?></span></div></div>
                <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      	<div class="line13">
    			<div class="line13a2"></div>
    			<div class="line13a"><p>学院团训</p></div>
    			<div class="line13a1"><a href="#" target="_blank" class="ainline1">more>></a></div>
                <div class="line13b"></div>
    			<div class="line13c">
              <?php
        					$cat_name = "学院团训";
        					$query = new WP_Query("posts_per_page=6&category_name=".$cat_name);
        					while($query->have_posts()): $query->the_post();
    					?>
              <div class="line13c1"><div class="line13c2"><p style="padding-left:3%;">>&nbsp;<a href="<?php the_permalink(); ?>" target="_blank" class="ainline1"><?php the_title(); ?></a></p></div><div class="line13c3"><span style="float: right"><?php the_time("m-d"); ?></span></div></div>
    			  	<?php endwhile; wp_reset_query(); ?>
    			</div>
        </div>
        <div class="line14">
    			<div class="line14a2"></div>
                <div class="line14a"><p>通知公告</p></div>
    			<div class="line14a1"><a href="#" target="_blank" class="ainline1">more>></a></div>
                <div class="line14b"></div>
    			<div class="line14c">
            <?php
        				$cat_name = "通知公告";
        				$query = new WP_Query("posts_per_page=3&category_name=".$cat_name);
        				while($query->have_posts()): $query->the_post();
    				?>
            <div class="line14c1"><div class="line14c2"><p style="padding-left:3%;">>&nbsp;<a href="<?php the_permalink(); ?>" target="_blank" class="ainline1"><?php the_title(); ?></a></p></div><div class="line14c3"><span style="float: right"><?php the_time("m-d"); ?></span></div></div>
    			  <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>


    <div class="line2">
        <div class="line21" style="border: none;">
            <div class="col-md-4 line21 frame"  style="width: 100%; padding: 0;border: none">
                <div class="container" style="height: 100%;width:100%;padding: 0">
                    <div class="row" style="height: 100%;width:100%;margin: 0;">
                        <div class="line21-head" style="height: 14%;">
                            <ul class="nav-tabs nav" id="tabs1" style="height: 100%;width: 100%;">
                                <li class="active" style="width: 33.3%;margin: 0"><a href="#tabs21-1" id="line2-head1" onclick="return false" style="border-radius: 0;border: none;padding-top: 1%">活力支部</a></li>
                                <li style="width: 33.3%;margin: 0"><a href="#tabs21-2" id="line2-head2" onclick="return false" style="border-radius: 0;border-left: solid rgb(214,27,33);border-right: solid rgb(214,27,33);border-bottom: 0;border-top: 0;padding-top: 1%">魅力团干</a></li>
                                <li style="width: 33.3%;margin: 0"><a href="#tabs21-3" id="line2-head3" onclick="return false" style="border-radius: 0;border: 0;padding-top: 1%">缤纷社团</a></li>
                            </ul>
                        </div>
                        <div class="line2-container" style="height: 1%;background-color: rgb(242,130,68)"></div>
                        <div class="tab-content" id="line21-tab-content" style="height: 84%;border:solid 2px rgb(237,238,239);margin: 0;padding: 0">
                            <div class="tab-pane active" id="tabs21-1" style="height: 100%">
                                <div class="tab-pane-content-1"
                                     style="width: 57%;height: 100%;float: left">
                                    <ul style="padding-left: 2%;font-size:smaller;line-height: 250%;padding-top: 1%;">
                                    <?php
                        								$cat_name = "活力支部";
                        								$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                        								while($query->have_posts()) : $query->the_post();
                    									?>
                                      <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 75%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                      <?php endwhile; wp_reset_query(); ?>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <div class="tab-pane-content-2" style="width: 43%;float: right;height: 100%">
                                    <img
                                        src="<?php echo bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" style="height:87%;margin-top: 5%;margin-bottom: 8%;">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs21-2" style="height: 100%">
                                <div class="tab-pane-content-1"
                                     style="width: 57%;height: 100%;float: left">
                                    <ul style="padding-left: 2%;font-size:smaller;line-height: 250%;padding-top: 1%;">
                                        <?php
                          								$cat_name = "魅力团干";
                          								$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                          								while($query->have_posts()) : $query->the_post();
                      									?>
                                        <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 75%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                        <?php endwhile; wp_reset_query(); ?>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <div class="tab-pane-content-2" style="width: 43%;float: right;height: 100%">
                                    <img
                                        src="<?php echo bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" style="height:87%;margin-top: 5%;margin-bottom: 8%;">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs21-3" style="height: 100%">
                                <div class="tab-pane-content-1"
                                     style="width: 57%;height: 100%;float: left">
                                    <ul style="padding-left: 2%;font-size:smaller;line-height: 250%;padding-top: 1%;">
                                        <?php
                          								$cat_name = "缤纷社团";
                          								$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                          								while($query->have_posts()) : $query->the_post();
                      									?>
                                        <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 75%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                        <?php endwhile; wp_reset_query(); ?>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <div class="tab-pane-content-2" style="width: 43%;float: right;height: 100%">
                                    <img
                                        src="<?php echo bloginfo('template_url'); ?>/images/20150610211937_28458.png" style="height:87%;margin-top: 5%;margin-bottom: 8%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line22">
            <div class="line22_frame" style="width: 100%;height: 100%;">
                <div class="col-md-4 line22 frame" style="width: 100%;height: 100%;padding: 0">
                    <div class="line22-container" style="width: 100%;height: 100%">
                        <div class="row" style="height: 100%;width: 100%;margin: 0;padding: 0">
                            <div class="line22-head" style="height: 14%;width: 100%;">
                                <ul class="nav-tabs nav" id="tabs22" style="height: 100%;">
                                    <li class="active" style="width: 25%;text-align: center;margin:0;height: 100%"><a href="#tabs22-1" id="line22-head1" onclick="return false" style="height: 100%;padding: 0;border-radius: 0;border: 0;padding-top: 1%;margin: 0">思想引领行动</a></li>
                                    <li style="width: 25%;text-align: center;margin:0;height: 100%"><a href="#tabs22-2" id="line22-head2" onclick="return false" style="height: 100%;padding: 0;border-radius: 0;padding-top: 1%;margin: 0;border-bottom: 0;border-top: 0;border-left: solid rgb(214,27,33);border-right: solid rgb(214,27,33)">素质拓展行动</a></li>
                                    <li style="width: 25%;text-align: center;margin:0;height: 100%"><a href="#tabs22-3" id="line22-head3" onclick="return false" style="height: 100%;padding: 0;border-radius: 0;border-bottom: 0;border-top: 0;border-left:0;border-right: solid rgb(214,27,33);margin: 0">权益服务行动</a></li>
                                    <li style="width: 25%;text-align: center;margin:0;float: right;height: 100%"><a href="#tabs22-4" id="line22-head4" onclick="return false" style="height: 100%;padding: 0;border-radius: 0;border: 0;padding-top: 1%;margin: 0">组织提升行动</a></li>
                                </ul>
                            </div>
                            <div class="line22-container" style="height: 1%;background-color: rgb(242,130,68)"></div>
                            <div class="tab-content" id="line22-tab-content" style="height: 84%;border:solid 2px rgb(237,238,239)">
                                <div class="tab-pane active" id="tabs22-1" style="height: 100%;">
                                    <div class="line22-left-head" style="width: 14.1%;float: left;height: 100%">
                                        <ul class="nav-tabs nav" id="tabs221" style="padding-left: 17%;font-size: small;padding-top: 10%;height: 100%;">
                                            <li class="line221-active"style="height: 20%;"><a href="#tabs221-1" style="border: 0;margin: 0;height: 100%" onclick="return false;">主题团日</a></li>
                                            <li style="height: 20%"><a href="#tabs221-2" style="border: 0;margin: 0;height: 100%" onclick="return false">四进四信</a></li>
                                            <li style="height: 20%"><a href="#tabs221-3" style="border: 0;margin: 0;height: 100%" onclick="return false">青马工程</a></li>
                                            <li style="height: 20%"><a href="#tabs221-4" style="border: 0;margin: 0;height: 100%" onclick="return false">社会实践</a></li>
                                            <li style="height: 20%"><a href="#tabs221-5" style="border: 0;margin: 0;height: 100%" onclick="return false">智惠社区</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="line22-left-tab-content" style="width: 85.8%;float: right;height: 100%;">
                                        <div class="tab-pane active" id="tabs221-1" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "主题团日";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs221-2" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "四进四信";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs221-3" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "青马工程";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs221-4" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "社会实践";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs221-5" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "智惠社区";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs22-2" style="height: 100%">
                                    <div class="line22-left-head" style="width: 14.1%;float: left;height: 100%">
                                        <ul class="nav-tabs nav" id="tabs222" style="padding-left: 17%;font-size: small;padding-top: 10%;height: 100%">
                                            <li class="line221-active"style="height: 20%"><a href="#tabs222-1" style="border: 0;margin: 0;height: 100%" onclick="return false">创新创业</a></li>
                                            <li style="height: 20%"><a href="#tabs222-2" style="border: 0;margin: 0;height: 100%" onclick="return false">能力拓展</a></li>
                                            <li style="height: 20%"><a href="#tabs222-3" style="border: 0;margin: 0;height: 100%" onclick="return false">校园文化</a></li>
                                            <li style="height: 20%"><a href="#tabs222-4" style="border: 0;margin: 0;height: 100%" onclick="return false">缤纷社团</a></li>
                                            <li style="height: 20%"><a href="#tabs222-5" style="border: 0;margin: 0;height: 100%" onclick="return false">青春三走</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="line22-left-tab-content" style="width: 85.8%;float: right;height: 100%;">
                                        <div class="tab-pane active" id="tabs222-1" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "创新创业";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs222-2" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "能力拓展";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs222-3" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              									  $cat_name = "校园文化";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs222-4" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "缤纷社团";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs222-5" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "青春三走";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs22-3" style="height: 100%">
                                    <div class="line22-left-head" style="width: 14.1%;float: left;height: 100%">
                                        <ul class="nav-tabs nav" id="tabs223" style="padding-left: 10%;font-size: small;padding-top: 10%;height: 100%">
                                            <li class="line221-active"style="height: 33.3%"><a href="#tabs223-1" style="border: 0;margin: 0;height: 100%;" onclick="return false">校长接待日</a></li>
                                            <li style="height: 33.3%"><a href="#tabs223-2" style="border: 0;margin: 0;height: 100%" onclick="return false">提案反馈</a></li>
                                            <li style="height: 33.3%"><a href="#tabs223-3" style="border: 0;margin: 0;height: 100%" onclick="return false">出彩东大人</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="line22-left-tab-content" style="width: 85.8%;float: right;height: 100%;">
                                        <div class="tab-pane active" id="tabs223-1" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "校长接待日";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs223-2" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "提案反馈";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs223-3" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "出彩东大人";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs22-4" style="height: 100%">
                                    <div class="line22-left-head" style="width: 14.1%;float: left;height: 100%">
                                        <ul class="nav-tabs nav" id="tabs224" style="padding-left: 17%;font-size: small;padding-top: 10%;height: 100%">
                                            <li class="line221-active"style="height: 33.3%"><a href="#tabs224-1" style="border: 0;margin: 0;height: 100%" onclick="return false">活力支部</a></li>
                                            <li style="height: 33.3%"><a href="#tabs224-2" style="border: 0;margin: 0;height: 100%" onclick="return false">学生组织</a></li>
                                            <li style="height: 33.3%"><a href="#tabs224-3" style="border: 0;margin: 0;height: 100%" onclick="return false">青年教工</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="line22-left-tab-content" style="width: 85.8%;float: right;height: 100%;">
                                        <div class="tab-pane active" id="tabs224-1" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "活力支部";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:4%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs224-2" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "学生组织";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20151117213432_74563.jpg" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs224-3" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left;font-size:smaller;line-height: 250%;padding-top: 0.5%;">
                                                <?php
                              										$cat_name = "青年教工";
                              										$query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                              										while($query->have_posts()) : $query->the_post();
                          											?>
                                                <a href="<?php the_permalink(); ?>" target="_blank"><span style="width: 80%;float: left"><p style="margin: 0;padding-right:2%;float: left">></p><?php the_title(); ?></span></a><p style="float: right;margin:0;padding-right: 5%"><?php the_time("m-d"); ?></p>
                                                <?php endwhile; wp_reset_query(); ?>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png" alt="Third slide" style="width:100%;height:87%;margin-top: 5%;margin-bottom: 8%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line23" >
            <div class="line23-head" style="height: 12% ;background-color: white">
                <ul class="nav-tabs nav" id="tabs23" style="height: 100%;width: 100%;">
                    <li class="active" style="width: 50%;text-align: center;"><a href="#tabs23-1" style="font-weight: bolder;border-radius: 0">活动预告</a></li>
                    <li style="width: 50%;text-align: center;;"><a href="#tabs23-2" style="font-weight: bolder;border-radius: 0">投稿排行</a></li>
                </ul>
            </div>
            <div class="line23-container" style="height: 1%;background-color: rgb(242,130,68)"></div>
            <div class="tab-content" id="line23-tab-content" style="height: 88%;border: solid 2px rgb(237,238,239)">
                <div class="tab-pane active" id="tabs23-1" style="height: 100%">
                    <div style="height: 32%;background-color: white" >
                        <div style="width: 32.1%;height: 100%;float: left;">
                            <div id="date" style="height: 90%;width: 90%;padding-top: 10%;padding-left: 10%">
                                <div id="month0" style="background-color: rgb(240,90,87);color: white;height: 29%;font-size: smaller;text-align: center;"></div>
                                <div id="day0" style="background-color: rgb(238,239,240);color: black;height: 71%;text-align: center;font-size: xx-large;line-height:110%;overflow:hidden;"></div>
                            </div>
                        </div>
                        <div style="width: 67.2%;height: 100%;float: right;line-height: 140%;padding-top: 1.5%">
                            <a><span style="font-size: smaller;float: right;width: 100%;padding-right: 5%;color: rgb(240,100,96);"><p style="margin:0;float: left;width: 5%">></p><?php echo($title1)?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">具体时间:<?php echo str_replace("T"," ", "$time1") ?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">地点:<?php echo($place1)?></span></a>
                        </div>
                    </div>
                    <div style="border-bottom: dotted;width: 94%;margin-left: 3%"></div>
                    <div style="height: 32%;background-color: white">
                        <div style="width: 32.1%;height: 100%;float: left;">
                            <div id="date" style="height: 90%;width: 90%;padding-top: 10%;padding-left: 10%">
                                <div id="month1" style="background-color: rgb(240,90,87);color: white;height: 29%;font-size: smaller;text-align: center;"></div>
                                <div id="day1" style="background-color: rgb(238,239,240);color: black;height: 71%;text-align: center;font-size: xx-large;line-height:110%;overflow:hidden;"></div>
                            </div>
                        </div>
                        <div style="width: 67.2%;height: 100%;float: right;background-color: white;line-height: 140%;padding-top: 2%;">
                            <a><span style="font-size: smaller;float: right;width: 100%;padding-right: 5%;color: rgb(240,100,96)"><p style="margin: 0;float: left;width: 5%">></p><?php echo($title2)?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">具体时间:<?php echo str_replace("T"," ", "$time2") ?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">地点:<?php echo($place2)?></span></a>

                        </div>
                    </div>
                    <div style="border-bottom: dotted;width: 94%;margin-left: 3%"></div>
                    <div style="height: 32%;bottom: 2%;">
                        <div style="width: 32.1%;height: 100%;float: left;">
                            <div id="date" style="height: 90%;width: 90%;padding-top: 10%;padding-left: 10%">
                                <div id="month2" style="background-color: rgb(240,90,87);color: white;height: 29%;font-size: smaller;text-align: center;"></div>
                                <div id="day2" style="background-color: rgb(238,239,240);color: black;height: 71%;text-align: center;font-size: xx-large;line-height:110%;overflow:hidden;"></div>
                            </div>
                        </div>
                        <div style="width: 67.2%;height: 100%;float: right;line-height: 140%;padding-top: 2%">
                            <a><span style="font-size: smaller;float: right;width: 100%;padding-right: 5%;color: rgb(240,100,96)"><p style="margin: 0;float: left;width: 5%">></p><?php echo($title3)?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">具体时间:<?php echo str_replace("T"," ", "$time3") ?></span><span style="font-size: smaller;float: right;padding-right: 5%;color: black;">地点:<?php echo($place3)?></span></a>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tabs23-2" style="height: 100%;background-color: white">
                    <div style="height: 100%;width: 13%;float: left;margin-left: 2%">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/dot5.jpg" style="height: 90%;float: right;margin-right: 15%;margin-top: 25%">
                    </div>
                    <div style="height: 100%;width: 85%;float: right" class="line23-2" >
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                        <a>计算机科学与工程学院</a><span>(500篇)</span>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- /container -->

    <div class="line3">

            <div class="line31">
            <!-- <aside id="weibo" class="widget" style="height: 100%;width: 100%"> -->
                 <!-- <h1 class="widget-title"><?php _e( 'Weibo', 'skirmish' ); ?></h1> -->
                 <ul class="nav-tabs nav" id="tabs31" style="height: 14%;width: 100%;background-color:#f05a57;">
                     <li class="line221-active" style="width: 50%;height: 100%;text-align: center;background-color:#f05a57;"><a href="#tabs31-1" style="height: 100%;padding: 0px 0px;color:white;background-color:#f05a57;">新浪微博</a></li>
                     <li style="width: 50%;text-align: center;height: 100%;background-color:#f05a57;"><a href="#tabs31-2" style="height: 100%;padding: 0px 0px;color:white;background-color:#f05a57;">腾讯微博</a></li>
                 </ul>
                 <div class="tab-content" id="line31-tab-content" style="height: 84%">
                     <div class="tab-pane active" id="tabs31-1" style="height: 100%">
                         <iframe width="100%" height="100%" class="share_self"  frameborder="0" scrolling="yes"
                         src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=0&fansRow=0&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=2256094682&verifier=cc31d438&dpc=1"></iframe>

                     </div>
                     <div class="tab-pane" id="tabs31-2" style="height: 100%">
                         <iframe width="100%" height="100%" class="share_self"  frameborder="0" scrolling="yes"
                         src="http://show.v.t.qq.com/index.php?c=show&a=index&n=dbdxrj1405&o=31&co=0&o=1"></iframe>

                     </div>
                 </div>

            <!-- </aside> -->

        </div>
        <div class="line32">
            <div class="line32a" style="width: 100%;height: 3%;background-color: #f35853;"></div>
            <div class="line32b" style="width: 100%;height: 97%;">
                <div class="focusMain isCarousel demoH" style="width: 100%;height: 100%">
                    <div id="leftbtn" style="width: 10%;height:100%;float: left;">
                        <a class="focusBtn focusPrev" href="javascript:;"
                           style="background-color: transparent;padding-left: 3%"><br>
                            <p style="font-weight: bolder;color: rgb(251,86,88);"><</p></a>
                    </div>
                    <div style="width: 80%;height: 100%;float: left">
                        <div class="focusArea" style="width: 100%;height: 90%;margin: 0">
                            <div class="focusCon" style="">
                                <div class="focusItem">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></a>
                                </div>
                                <div class="focusItem">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></a>
                                </div>
                                <div class="focusItem">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></a>
                                </div>
                                <div class="focusItem">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></a>
                                </div>
                                <div class="focusItem">
                                    <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-3.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="focusIndicators" id="line32b-head"
                             style="height: 10%;width: 100%;color: black;">
                        </div>
                    </div>
                    <div id="rightbtn" style="width: 10%;height: 100%;float: right;">
                        <a class="focusBtn focusNext" href="javascript:;"
                           style="background-color: transparent;padding-right: 3%"><br>
                            <p style="font-weight: bolder;color: rgb(251,86,88);float: right;">></p></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="line33">
			<div class="line33a1"></div>
            <div class="line33a"><a href="#" target="_blank" class="ainline3">专题一 学习之路</a></div>
        </div>
        <div class="line34">
			<div class="line34a1"></div>
            <div class="line34a"><a href="#" target="_blank" class="ainline3">专题二 青年之声</a></div>
        </div>
        <div class="line35">
			<div class="line35a1"></div>
            <div class="line35a">活动专题</div>
            <div class="line35b"></div>
            <div class="line35c" >
				<ul style="list-style-type: none">
                    <div class="line35c1"> <a target="_blank" href="<?php echo $pictures["activity_url1"]; ?>"><img src="<?php echo $pictures["activity_picture1"]; ?>" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line35c2"><a target="_blank" href="<?php echo $pictures["activity_url2"]; ?>"><img src="<?php echo $pictures["activity_picture2"]; ?>" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line35c3"><a target="_blank" href="<?php echo $pictures["activity_url3"]; ?>"><img src="<?php echo $pictures["activity_picture3"]; ?>" border="0"  width="84.6%" height="19.3%"></a></div>
                </ul>
            </div>
        </div>
    </div>

    <footer class = "footer">
        <?php get_footer() ?>
    </footer>
</body>
</html>
