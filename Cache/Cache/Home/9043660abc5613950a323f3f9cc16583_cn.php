<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><meta name="robots" content="index, follow" /><meta name="keywords" content="<?php echo ($seo_keywords); ?>" /><meta name="description" content="<?php echo ($seo_description); ?>" /><meta name="Copyright" content="Copyright (c) 2008 yourphp.cn" /><meta name="author" content="<?php echo ($site_name); ?>--Powered by yourphp"><meta name="generator" content="Yourphp 2.0" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><title><?php echo ($seo_title); ?>-<?php echo ($site_name); ?> - Powered by Yourphp</title><link href="__ROOT__/index.php?m=Format&a=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" /><script src="__PUBLIC__/Js/jquery.min.js"></script><script src="__PUBLIC__/Js/yourphp.nav.js"></script><script src="__PUBLIC__/Js/yourphp.js"></script><link rel="stylesheet" type="text/css" href="../Public/css/style.css" /></head><body><div class="t_bg"></div><div id="header"><div  class="warp" style="overflow:visible;"><div class="logo"><a href="<?php echo ($site_url); ?>"><img src="<?php echo ($logo); ?>" alt="<?php echo ($site_name); ?>"></a></div><div id="nav" class="nav"><ul id="nav_box"><li id="nav_0"><span class="fl_ico"></span><a href="/" title="首页"><span class="fl">首页</span></a></li><li id="nav_11" class="first file"><span class="fl_ico"></span><a href="/info/" title="会所简介"><span class="fl">会所简介</span></a></li><li id="nav_14" class="folder"><span class="fl_ico"></span><a href="/model/" title="模特展示"><span class="fl">模特展示</span></a></li><li id="nav_1" class="folder"><span class="fl_ico"></span><a href="/news/" title="会所动态"><span class="fl">会所动态</span></a></li><li id="nav_19" class="file"><span class="fl_ico"></span><a href="/Guestbook/" title="预定包厢"><span class="fl">预定包厢</span></a></li><li id="nav_8" class="foot folder"><span class="fl_ico"></span><a href="/about/" title="关于我们"><span class="fl">关于我们</span></a></li></ul></div></div></div><script type="text/javascript">
var APP	 =	 '__APP__';
var ROOT =	 '__ROOT__';
var PUBLIC = '__PUBLIC__';
yourphpnav.init({navid: "nav"});
var nav = document.getElementById('nav_<?php echo ($bcid); ?>');nav.className=nav.className+" on";
</script><div class="banner"><script type="text/javascript" src="__PUBLIC__/Js/jquery.switchable.min.js"></script><style>
.slide-panel {position:relative;width:100%;height:380px;overflow:hidden;}
.slide-panel li {float:left;}
.slide-panel li img {display:block;}
.switchable-triggers { position:absolute; right:3px; bottom:6px; }
.switchable-triggers li {display:inline-block;border:1px solid #333;float:left;width:16px;height:16px;margin:0 3px;background:#454545;;color:#FFF;font-size:13px;
    line-height:16px; text-align:center; cursor:pointer; }
.switchable-triggers li.current {border:1px solid #BF0000;background:#EF0000;color:#fff;}
</style><div class="slide1"><div id="slide_1" class="slide-panel"><ul><?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=1")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?><li><a href="<?php echo ($r["link"]); ?>" target="_blank"><img src="<?php echo ($r['pic']); ?>" alt="<?php echo ($r['title']); ?>"></a></li><?php endforeach; endif;?></ul></div></div><script>
  var swf_width='100%';
  var win_w=(document.body.scrollWidth <=window.screen.width)?document.body.scrollWidth :window.screen.width;
  var swf_height=(508*win_w)/1920;
jQuery(document).ready(function($){
	$('.slide-panel').css("height",swf_height);
	$('.slide-panel li,.slide-panel li img').css("height",swf_height);
	$('.slide-panel li,.slide-panel li img').css("width",win_w);	
}); 
</script><script>
jQuery(document).ready(function($){
   var slide = $('#slide_1').switchable({
    putTriggers: 'appendTo',
    panels: 'li',
    initIndex: -1,
    effect: 'scrollRight',
    easing: 'cubic-bezier(.455, .03, .515, .955)',
    end2end: true,
    loop: false, 
    autoplay: true,
    interval: 5,
    api: true
  });
});
</script></div><div class="warp"><div id="main"><div class="c"></div><div class="mlist"><h1 class="tit"><a href="<?php echo ($Categorys[$T[m_picmodel_catid]]['url']); ?>"><p><?php echo ($Categorys[$T[m_picmodel_catid]]['catname']); ?></p></a></h1><ul class="pic"><?php  $_result=M("Picture")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid in(21,25,26)")->order("id desc")->limit("8")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><span><a href="<?php echo ($r["url"]); ?>"><img src="<?php echo ($r["thumb"]); ?>"></a></span><a href="<?php echo ($r["url"]); ?>" target="_blank"><?php echo ($r["title"]); ?></a></li><?php endforeach; endif;?></ul></div><div class="c"></div><div class="left index" style="border:none;"><div class="inews"><div class="tu"><a href="<?php echo ($Categorys[$T[m_news_catid]]['url']); ?>"><img src="__PUBLIC__/Images/icon6.jpg" alt="<?php echo ($Categorys[$T[m_news_catid]]['catname']); ?>"><p><?php echo ($Categorys[$T[m_news_catid]]['catname']); ?></p><p>NEWS</p><div class="line">&nbsp;</div></a><i>&nbsp;</i></div><!--<h2 class="tit"><span><a href="<?php echo ($Categorys[$T[m_news_catid]]['url']); ?>"><?php echo L(more);?>>></a></span><b><?php echo ($Categorys[$T[m_news_catid]]['catname']); ?></b></h2>--><div class="ilist newslist"><ul class="txt"><?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid in(1,2,10)")->order("id desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 ); if( $i==1) : ?><li><div class="dt"><a href="<?php echo ($r["url"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" /></a></div><div class="dd"><a href="<?php echo ($r["url"]); ?>"><div class="des"><?php echo ($r["title"]); ?></div></a></div></li><?php else :?><li><a href="<?php echo ($r["url"]); ?>" target="_blank"><?php echo (str_cut($r[title],40)); ?></a></li><?php endif; endforeach; endif;?></ul></div></div><div class="list pic_list"><div class="tu"><a href="<?php echo ($Categorys[$T[m_picevm_catid]]['url']); ?>"><img src="__PUBLIC__/Images/icon7.jpg" alt="<?php echo ($Categorys[$T[m_picevm_catid]]['catname']); ?>"><p><?php echo ($Categorys[$T[m_picevm_catid]]['catname']); ?></p><p>PICTURES</p><div class="line">&nbsp;</div></a><i>&nbsp;</i></div><ul class="pic"><?php  $_result=M("Picture")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=20")->order("id desc")->limit("1")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><span><a href="<?php echo ($r["url"]); ?>"><img src="<?php echo ($r["thumb"]); ?>"></a></span><a href="<?php echo ($r["url"]); ?>" target="_blank"><?php echo ($r["title"]); ?></a></li><?php endforeach; endif;?></ul></div><div class="icontact"><div class="tu"><a href="<?php echo ($Categorys[$T[m_company_catid]]['url']); ?>"><img src="__PUBLIC__/Images/icon8.jpg" alt="<?php echo ($Categorys[$T[m_company_catid]]['catname']); ?>"><p><?php echo ($Categorys[$T[m_company_catid]]['catname']); ?></p><p>COMPANY</p><div class="line">&nbsp;</div></a><i>&nbsp;</i></div><div class="content"><span style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; </span><span style="color:#555555;font-family:SimSun;font-size:12px;">千年之前的中世纪,贵族的帝王在哥特式宫殿喧嚣着尽享纸醉金迷.千年之后的新纪元,东方魅力带给你穿越时空的奢华感官新体验。低调尊显华贵的装修,人性化的顶级设施,细致贴心的服务-- 我们商务KTV传承的是经典,延续的是口碑。杭州东方魅力倡导绿色消费，打造品质娱乐。</span><span style="color:#555555;font-family:SimSun;font-size:12px;">千年之前的中世纪,贵族的帝王在哥特式宫殿喧嚣着尽享纸醉金迷.</span></div></div></div><div class="c"></div><br></div></div><div id="footer"><div class="warp"><div class="fnav"><ul id="nav_box"><li id="nav_11" class="first file"><span class="fl_ico"></span><a href="/info/" title="会所简介"><span class="fl">会所简介</span></a></li><li id="nav_14" class="folder"><span class="fd_ico"></span><a href="/model/" title="模特展示"><span class="fd">模特展示</span></a><ul><li id="nav_21" class="first folder"><span class="fl_ico"></span><a href="/model/" title="模特展示"><span class="fl">模特展示</span></a></li><li id="nav_20" class="foot file"><span class="fl_ico"></span><a href="/environment/" title="环境展示"><span class="fl">环境展示</span></a></li></ul></li><li id="nav_1" class="folder"><span class="fd_ico"></span><a href="/news/" title="会所动态"><span class="fd">会所动态</span></a><ul><li id="nav_2" class="first file"><span class="fl_ico"></span><a href="/hangye/" title="行业新闻"><span class="fl">行业新闻</span></a></li><li id="nav_10" class="foot file"><span class="fl_ico"></span><a href="/zixun/" title="行业资讯"><span class="fl">行业资讯</span></a></li></ul></li><li id="nav_19" class="file"><span class="fl_ico"></span><a href="/Guestbook/" title="预定包厢"><span class="fl">预定包厢</span></a></li><li id="nav_8" class="foot folder"><span class="fd_ico"></span><a href="/about/" title="关于我们"><span class="fd">关于我们</span></a><ul><li id="nav_12" class="foot file"><span class="fl_ico"></span><a href="/contactus/" title="联系我们"><span class="fl">联系我们</span></a></li></ul></li></ul><div class="qrcode"><img src="/Uploads/201712/5a3dcff17abc2.jpg" width="110" height="110" alt="" /><p>	微信号：starzan
</p></div></div></div><div class="footer"><p>	Powered by *** 版权所有 &copy; 2008-2011, All right reserved
</p></div></div><?php if($Module[9]['status']) : ?><div class="kefu" id="kefu"><div class="kftop"></div><div class="kfbox"><ul><li class="tit">咨询电话:</li><li>0317-5022625</li><li class="tit">QQ客服:</li><li><a href="http://wpa.qq.com/msgrd?v=3&uin=2579766780&site=qq&menu=yes" rel="nofollow"><img border="0" SRC="http://wpa.qq.com/pa?p=1:2579766780:3" alt="QQ客服"></a></ul></div><div class="kfbottom"></div></div><script> var kefu = new Floaters(); kefu.addItem("kefu",-10,180,"");kefu.play("kefu");</script><?php endif;?></div></div></div></div><script>showon('.catlist ul li.folder','span.fd_ico','<?php echo ($catid); ?>');</script></body></html>