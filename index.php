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
    <link href="<?php bloginfo('template_url'); ?>/style/line1.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/line3.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/line2.css" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/style/global.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.3.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/animenu.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
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
        })
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


<body>
    <div class="header">
        <div class = "banner">

        </div>
        <nav class="menubar animenu">
            <button class="animenu__toggle" id="menu_btn" onclick="
            
            alert("ok")"
        >
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
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="800" data-close-others="false">东大共青团 </a>
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
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="800" data-close-others="false">学生组织 </a>
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
                      <a href="#" class="dropdown-toggle menucolor"  data-toggle="dropdown" data-hover="dropdown" data-delay="800" data-close-others="false">网上团支部 </a>
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
                      <a href="#" class="menucolor">友情链接<b class="caret"></b></a>
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
                </div>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner"  style="height: 100%;">
                    <div class="item active" style="height: 100%;">
                        <img src="<?php bloginfo('template_url'); ?>/images/20151020221927_21947.png" alt="First slide" style="height: 100%;width: 100%">
                        <div class="carousel-caption" id="carousel-caption1"><p>管院学子在第八届网商创新应用大赛辽宁赛区决赛中喜获佳绩</p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php bloginfo('template_url'); ?>/images/20150610211937_28458.png" alt="Second slide" style="height: 100%;width: 100%">
                        <div class="carousel-caption" id="carousel-caption2"><p>中荷学院第八届团委学生会工作总结暨第九届团委学生会主席团换</p></div>
                    </div>
                    <div class="item" style="height: 100%">
                        <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="height: 100%;width:100%">
                        <div class="carousel-caption" id="carousel-caption3"><p>“唱响红色旋律 构建和谐社区”七一文艺汇演成功参演</p></div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="carousel-control left" href="#myCarousel"
                       data-slide="prev"><br><br><br><br>&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel"
                       data-slide="next"><br><br><br><br>&rsaquo;</a>
                </div>

            </div>
        </div>
      	<div class="line12">
			<div class="line12a"><p>先锋头条</p></div>
			<div class="line12a1"><a href="#" class="ainline1">more>></a></div>
            <div class="line12b"></div>
			<div class="line12c">
				
			</div>
			<div class="line12d">
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
			</div>
			
        </div>
      	<div class="line13">
			<div class="line13a"><p>学院团训</p></div>
			<div class="line13a2"><a href="#" class="ainline1">more>></a></div>
            <div class="line13b"></div>
			<div class="line13c">
				<ul class="disc">
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
					<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				</ul>
			</div>
        </div>
        <div class="line14">
            <div class="line14a"><p>通知公告</p></div>
			<div class="line14a2"><a href="#" class="line1a2">more>></a></div>
            <div class="line14b"></div>
			<div class="line14c">
			<ul class="disc">
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
				<li><a href="#" class="ainline1">科技日报关于2016年全将首次模的报报道道</a><span>03-28</span></li>
			</ul>
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
                                <li class="line2-active"><a href="#tabs21-1" id="line2-head1" onclick="return false">活力支部</a></li>
                                <li><a href="#tabs21-2" id="line2-head2" onclick="return false">魅力团干</a></li>
                                <li><a href="#tabs21-3" id="line2-head3" onclick="return false">缤纷社团</a></li>
                            </ul>
                        </div>
                        <div class="line2-container" style="height: 1%;background-color: rgb(242,130,68)"></div>
                        <div class="tab-content" id="line21-tab-content" style="height: 84%;border:solid 2px rgb(237,238,239);margin: 0;padding: 0">
                            <div class="tab-pane active" id="tabs21-1" style="height: 100%">
                                <div class="tab-pane-content-1"
                                     style="width: 57%;height: 100%;float: left">
                                    <ul style="padding-left: 6%;font-size:smaller;line-height: 150%">
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年"创青春"全国大举办于</a><span>03-30</span></li>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <div class="tab-pane-content-2" style="width: 43%;float: right;height: 100%">
                                    <img
                                        src="<?php echo bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs21-2">
                                魅力团干内容...
                            </div>
                            <div class="tab-pane" id="tabs21-3">
                                缤纷社团内容...
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
                                    <li class="line22-active" style="width: 24.5%;text-align: center;margin-right: 0.6%;border-right: solid #d61b21;"><a href="#tabs22-1" id="line22-head1" onclick="return false" style="padding: 0;">思想引领行动</a></li>
                                    <li style="width: 24.5%;text-align: center;margin-right: 0.6%;border-right: solid #d61b21;"><a href="#tabs22-2" id="line22-head2" onclick="return false" style="padding: 0">素质拓展行动</a></li>
                                    <li style="width: 24.5%;text-align: center;margin-right: 0.6%;border-right: solid #d61b21;"><a href="#tabs22-3" id="line22-head3" onclick="return false" style="padding: 0">权益服务行动</a></li>
                                    <li style="width: 24.5%;text-align: center;float: right;"><a href="#tabs22-4" id="line22-head4" onclick="return false" style="padding: 0">组织提升行动</a></li>
                                </ul>
                            </div>
                            <div class="line22-container" style="height: 1%;background-color: rgb(242,130,68)"></div>
                            <div class="tab-content" id="line22-tab-content" style="border: solid 1px yellow;height: 84%">
                                <div class="tab-pane active" id="tabs22-1" style="height: 100%;">
                                    <div class="line22-left-head" style="width: 11.1%;float: left;height: 100%">
                                        <ul class="nav-tabs nav" id="tabs221">
                                            <li class="line221-active"><a href="#tabs221-1">主题团日</a></li>
                                            <li><a href="#tabs221-2">四进四信</a></li>
                                            <li><a href="#tabs221-3">青马工程</a></li>
                                            <li><a href="#tabs221-4">社会实践</a></li>
                                            <li><a href="#tabs221-5">智惠社区</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="line22-left-tab-content" style="width: 88.8%;float: right;height: 100%;">
                                        <div class="tab-pane active" id="tabs221-1" style="height: 100%">
                                            <div style="width: 63%;height: 100%;float: left">
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                                <li style="float: left"><a style="font-size: small">中国青年报东北大学将首次摸清留的报道到的倾情于</a></li><span style="float: right"> 03-30</span>
                                            </div>
                                            <div style="width: 36%;height: 100%;float: right">
                                                <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide" style="height: 90%;width:100%;padding-top:5%">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs221-2">四进四信内容</div>
                                        <div class="tab-pane" id="tabs221-3">青马工程内容</div>
                                        <div class="tab-pane" id="tabs221-4">社会实践内容</div>
                                        <div class="tab-pane" id="tabs221-5">智惠社区内容</div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs22-2">
                                    素质拓展行动内容...
                                </div>
                                <div class="tab-pane" id="tabs22-3">
                                    权益服务行动内容...
                                </div>
                                <div class="tab-pane" id="tabs22-4">
                                    组织提升行动内容...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line23">
            23
        </div>

    </div> <!-- /container -->

    <div class="line3">
            <div class="line31">
                31

            </div>
            <div class="line32">
                32
            </div>
            <div class="line33">
                <div class="line33a"><a href="#" class="ainline3">专题一 学习之路</a></div>
            </div>

            <div class="line34">
				<div class="line34a"><a href="#" class="ainline3">专题二 青年之声</a></div>
            </div>
            <div class="line35">
				<div class="line35a">活动专题</div>
				<div class="line35b"></div>
				<div class="line35c" ><ul style="list-style-type: none">
                    <div class="line35c1"> <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_4.png" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line35c2"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_5.png" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line35c3"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_6.png" border="0"  width="84.6%" height="19.3%"></a></div>
                </ul>
            </div>
            </div>
    </div>

    <footer class = "footer">
        <?php get_footer() ?>

    </footer>


</body>
</html>
