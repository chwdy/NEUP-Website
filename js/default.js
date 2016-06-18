function quickNav(){
	var articleUrl ="http://"+document.getElementById("articleUrl").getAttribute("content").replace("蓝色梦想,","");
	document.write("<div id=\"topBar\"><span class=\"tbLeft left\"><a href=\"http://www.bluesdream.com\" target=\"_blank\">蓝色梦想 Bluesdream.com</a></span><span class=\"tbRight right\"><a href=\"http://www.bluesdream.com/blog/\" target=\"_blank\">博客首页→</a><a href=\""+articleUrl+"\" target=\"_blank\">查看原文→</a></span><span class=\"tbBg\"></span></div>");
}
quickNav();