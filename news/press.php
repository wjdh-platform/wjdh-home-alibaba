<?php 
include $_SERVER['DOCUMENT_ROOT'].'/menu.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/headerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/footerWrapper.php'; 
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<link rel= "shortcut icon" media="all" type="image/x-icon" href="/favicon.ico" />
<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="/favicon.ico" /><title>阿里巴巴集团</title>
<link href="/css/jquery.swiper.css" rel="stylesheet" type="text/css">
<link href="/css/easydropdown.css" rel="stylesheet" type="text/css">
<link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="/css/reset.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
    <link href="/css/style_1024.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/css/style_1024.css" rel="stylesheet" type="text/css" media="screen and (min-width:960px)" />
<link href="/css/style_768.css" rel="stylesheet" type="text/css" media="screen and (max-width:959px) and (min-width:768px)" />
<link href="/css/style_320.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="/css/style_mobile_nav.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="/css/style_1024.css" rel="stylesheet" type="text/css" media="print" />
<link href="/css/print.css" rel="stylesheet" type="text/css" media="print" />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.easydropdown.js"></script>
<script src="/js/jquery.scrollto.js"></script>
<script src="/js/jquery.cycle2.min.js"></script>
<script src="/js/jquery.swiper-2.0.min.js"></script>
<script src="/js/jquery.swiper.hashnav.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<!--<script type="text/javascript" src="/js/addthis_widget.js"></script>-->
<script src="/js/highcharts.js"></script>
<script src="/js/exporting.js"></script>
<script src="/js/grid.js"></script>
<script src="/js/appear_animate.js"></script>
<script src="/js/jquery.redirect.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/common.js"></script>

<script>
$(function(){
	var totalRow = $('.feedBlock').length;
	var newsFeed = new feedPage(1,totalRow,24,{'year':'all','business':'all'});
	newsFeed.init();
});
</script>
</head>
<body><script>!(function(c,b,d,a){c[a]||(c[a]={});c[a].config={pid:"ggcvhz3u94@8f03de3e59271b7",appType:"web",imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",enableSPA:true,useFmp:true,sendResource:true};with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");</script>
    <div class="headerWrapper">
        <?=$headerWrapper?> 
    </div>
    <div class="nav">
    <?=$menu_content?>
    </div>
<div class="wrapper"><div class="container feedLayout nopadding" id="press">
	<div class="container upper clearfix">
        <h1 class="title">新闻发布</h1>
        <div class="fright">
            <div class="browseBy">浏览分类：</div>
            <div class="selectWrapper businessSelect">
                <select id="businessSelect" class="dropdown" onChange="javascript:goto('?page=1&year=all&business='+this.value);">
                    <option value="all" selected>全部业务</option>
                    <option value="alibaba" >阿里巴巴集团</option>
                    <option value="taobao" >淘宝</option>
                    <option value="tmall" >天猫</option>
                    <option value="juhuasuan" >聚划算</option>
                    <option value="fliggy" >飞猪</option>
                    <option value="aliexpress" >全球速卖通</option>
                    <option value="alibaba_com" >ALIBABA.COM</option>
                    <option value="1688" >1688.COM</option>
                    <option value="aliyun" >阿里云</option>
                    <option value="cainiao" >菜鸟网络</option>
                    <option value="alipay" >支付宝／蚂蚁集团</option>
                    <option value="alibababizschool" >阿里巴巴商学院</option>
                </select>
            </div>
            <div class="selectWrapper yearSelect">
                <select id="yearSelect" class="dropdown" onChange="javascript:goto('?page=1&year='+this.value+'&business=all');">
                    <option value="all" selected>全部年份</option>
					<option value="2020" >2020年</option>
					<option value="2019" >2019年</option>
					<option value="2018" >2018年</option>
					<option value="2017" >2017年</option>
					<option value="2016" >2016年</option>
					<option value="2015" >2015年</option>
					<option value="2014" >2014年</option>
                    <option value="2013" >2013年</option>
                    <option value="2012" >2012年</option>
                    <option value="2011" >2011年</option>
                    <option value="2010" >2010年</option>
                    <option value="2009" >2009年</option>	
                    <option value="2008" >2008年</option>
                    <option value="2007" >2007年</option>
                    <option value="2006" >2006年</option>
                    <option value="2005" >2005年</option>
                    <option value="2004" >2004年</option>
                    <option value="2003" >2003年</option>
                    <option value="2002" >2002年</option>
                    <option value="2001" >2001年</option>
                    <option value="2000" >2000年</option>
                </select>
            </div>
        </div>
        <p class="paragraph">以下是阿里巴巴集团的主要新闻稿。如欲浏览更多有关阿里巴巴集团的新闻，请参见我们的中文企业新闻网站<a href="http://alibabanews.com/" target="_blank">阿里足迹</a>及英文企业新闻网站<a href="http://www.alizila.com/" target="_blank">Alizila</a>。</p>        
	</div>
    <div class="blockWrapper clearfix">
    	<div class="feedBlock">
	<div class="hr">2020年11月12日</div>
    <div class="heading">阿里巴巴2020天猫双11全球狂欢季完满落幕　成交额达4,982亿元人民币（741亿美元）</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p201112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年11月5日</div>
    <div class="heading">Farfetch、阿里巴巴集团、历峰集团达成全球合作　加速奢侈品行业数字化（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p201105a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年11月5日</div>
    <div class="heading">阿里巴巴集团公布2020年9月份季度业绩</div>
    <div class="lower">
	    	    <a href="/../cn/news/article?news=p201105" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年11月3日</div>
    <div class="heading">阿里巴巴与马来西亚机场宣布马来西亚eWTP数字中枢正式开始运作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p201103" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年10月26日</div>
    <div class="heading">宝马与阿里巴巴签署战略合作备忘录　推动业务全流程数字化转型</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p201026" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年10月22日</div>
    <div class="heading">阿里巴巴集团将于2020年11月05日公布2020年9月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p201022" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年10月20日</div>
    <div class="heading">阿里巴巴启动天猫双11全球狂欢季</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p201020" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年10月19日</div>
    <div class="heading">阿里巴巴集团宣布控股高鑫零售</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p201019" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年9月18日</div>
    <div class="heading">阿里巴巴集团将举行投资者日（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200918" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年9月17日</div>
    <div class="heading">阿里云通过更多人工智能解决方案将体育赛事数字化（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200917a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年9月17日</div>
    <div class="heading">阿里巴巴云栖大会发布首台云计算机和配送机器人</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200917" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年9月16日</div>
    <div class="heading">天猫国际公布首届Go Global 11.11 Pitch Fest赛果（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200916a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年9月16日</div>
    <div class="heading">阿里巴巴揭幕新制造数字工厂</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200916" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年8月25日</div>
    <div class="heading">天猫奢品拉近高端品牌与中国Z世代的距离（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200825" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年8月20日</div>
    <div class="heading">阿里巴巴集团公布2020年6月份季度业绩</div>
    <div class="lower">
	    	    <a href="/../cn/news/article?news=p200820" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年8月11日</div>
    <div class="heading">道达尔中国与阿里巴巴签署战略合作协议　推动业务数字化升级</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200811" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年8月7日</div>
    <div class="heading">阿里巴巴集团将于2020年8月20日公布2020年6月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200807" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年7月30日</div>
    <div class="heading">淘宝推出创意商家评选机制支持年轻造物者</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200730" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年7月21日</div>
    <div class="heading">阿里巴巴数字经济体旗下四个旗舰手机应用程式接入星巴克“啡快”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200721" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年7月9日</div>
    <div class="heading">董事会主席兼首席执行官致投资者的信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200709a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年7月9日</div>
    <div class="heading">阿里巴巴集团发布2020财年年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200709" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年6月23日</div>
    <div class="heading">菜鸟宣布扩大物流基建及服务投资（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200623" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年6月22日</div>
    <div class="heading">阿里巴巴集团与义乌市升级eWTP合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200622" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年6月16日</div>
    <div class="heading">阿里云投资2.83亿美元　助力全球伙伴加快创新步伐</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200616" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年6月2日</div>
    <div class="heading">全球品牌借力天猫618把握中国经济疫后商机（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200602" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年5月27日</div>
    <div class="heading">阿里巴巴经济体全球抗疫投入近34亿元人民币</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200527" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年5月22日</div>
    <div class="heading">阿里巴巴集团公布2020年3月份季度及2020财政年度业绩</div>
    <div class="lower">
	    	    <a href="/../cn/news/article?news=p200522" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年5月11日</div>
    <div class="heading">阿里巴巴集团将于2020年5月22日公布2020年3月底季度及2020财年全年业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200511" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年4月20日</div>
    <div class="heading">阿里巴巴举办GET全球商业挑战赛　鼓励学生在疫情下创造数字化转型解决方案（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200420" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibababizschool.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年3月30日</div>
    <div class="heading">淘宝直播加速中国零售业数码化</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200330" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年3月19日</div>
    <div class="heading">阿里云提供人工智能和云服务助力全球对抗新冠肺炎疫情</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p200319" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年2月13日</div>
    <div class="heading">阿里巴巴集团公布2019年12月底止季度业绩</div>
    <div class="lower">
	    <!--<a href="/../cn/news/press_pdf/p200213.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p200213" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2020年1月23日</div>
    <div class="heading">阿里巴巴集团将于2020年2月13日公布2019年12月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p200123" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2019年12月16日</div>
    <div class="heading">工商银行与阿里巴巴、蚂蚁金服达成全面战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191216" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年12月10日</div>
    <div class="heading">阿里巴巴集团成为2022年杭州亚运会官方合作伙伴（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191210" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月26日</div>
    <div class="heading">阿里巴巴集团于香港联交所主板上市</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191126" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月25日</div>
    <div class="heading">埃塞俄比亚政府与阿里巴巴集团签署协议共建eWTP据点（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191125" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月20日</div>
    <div class="heading">阿里巴巴集团宣布全球发售定价</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191120" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月17日</div>
    <div class="heading">马云公益基金会牵头举办首届非洲创业者大赛决赛（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191117" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月15日</div>
    <div class="heading">董事局主席兼首席执行官致投资者的信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191115a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月15日</div>
    <div class="heading">阿里巴巴集团启动香港首次公开发行</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191115" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月12日</div>
    <div class="heading">阿里巴巴集团2019天猫双11成交额达人民币2,684亿元（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月11日</div>
    <div class="heading">阿里巴巴集团2019年天猫双11开始一小时内产生120亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月8日</div>
    <div class="heading">阿里巴巴集团增持菜鸟网络</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191108" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年11月1日</div>
    <div class="heading">阿里巴巴集团公布2019年9月底止季度业绩</div>
    <div class="lower">
	    <!--<a href="/../en/news/press_pdf/p191101.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p191101" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年10月21日</div>
    <div class="heading">阿里巴巴集团启动2019天猫双11全球狂欢节</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p191021a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年10月21日</div>
    <div class="heading">阿里巴巴集团将于2019年11月1日公布2019年9月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191021" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年10月17日</div>
    <div class="heading">阿里巴巴集团与北京环球度假区宣布达成战略合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191017" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年10月9日</div>
    <div class="heading">阿里巴巴集团、MegaFon、Mail.ru及俄罗斯直接投资基金完成合资公司交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p191009" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月30日</div>
    <div class="heading">历峰集团与阿里巴巴集团宣布NET-A-PORTER于天猫奢侈品平台上开设旗舰店（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190930" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月26日</div>
    <div class="heading">阿里巴巴和世界粮食计划署推出新一代机器学习技术以应对全球饥饿问题</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190926" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月25日</div>
    <div class="heading">阿里巴巴推出首款人工智慧晶片加强云端运算能力</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190925" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月24日</div>
    <div class="heading">阿里巴巴集团公布未来五年中国消费业务及GMV目标</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190924a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月24日</div>
    <div class="heading">阿里巴巴集团收到蚂蚁金服33%股份</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190924" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月12日</div>
    <div class="heading">第四届淘宝造物节全面升级　造物者携逾千新物种登场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190912" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月10日</div>
    <div class="heading">阿里巴巴迈向数字时代　发布“新六脉神剑”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190910" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月6日</div>
    <div class="heading">阿里巴巴与网易达成战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190906" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年9月2日</div>
    <div class="heading">阿里巴巴集团将举行投资者日（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190902" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年8月15日</div>
    <div class="heading">阿里巴巴集团公布2019年6月底止季度业绩</div>
    <div class="lower">
	    <!--<a href="/../en/news/press_pdf/p190815.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p190815" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年8月1日</div>
    <div class="heading">阿里巴巴集团将于2019年8月15日公布2019年6月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190801" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年7月31日</div>
    <div class="heading">天猫与New York Fashion Week: The Shows合作　展示中国顶尖时装设计（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190731" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年7月22日</div>
    <div class="heading">聚划算启动“聚土地”计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190722" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_juhuasuan.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年7月18日</div>
    <div class="heading">Michael Kors进驻天猫奢侈品平台（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190718" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月20日</div>
    <div class="heading">阿里巴巴集团和义乌政府签署eWTP战略合作协议</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190620" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月19日</div>
    <div class="heading">“淘宝天猫618年中庆”在中国消费市场创下纪录</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190619" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月13日</div>
    <div class="heading">天猫与威富加强在中国之战略合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190613" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月6日</div>
    <div class="heading">阿里巴巴集团发布2019财年年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190606" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月5日</div>
    <div class="heading">俄罗斯直接投资基金、阿里巴巴集团、MegaFon及Mail.ru宣布成立合资公司（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190605" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年6月3日</div>
    <div class="heading"><nobr>“淘宝天猫618年中庆”</nobr>赋能品牌拓展中国市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190603" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年5月15日</div>
    <div class="heading">阿里巴巴集团公布2019年3月底止季度及财年业绩</div>
    <div class="lower">
	    <!--<a href="/../en/news/press_pdf/p190515.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p190515" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年4月24日</div>
    <div class="heading">Gartner市场份额评估：阿里云IaaS及IUS稳占亚太地区首位</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190424" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年4月16日</div>
    <div class="heading">天猫成为重要新品首发平台（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190416" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年4月12日</div>
    <div class="heading">阿里巴巴集团将于2019年5月15日公布2019年3月底季度及2019财年全年业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190412" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年4月8日</div>
    <div class="heading">淘宝启动“村播计划”　利用直播推动农村发展（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190408" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年3月26日</div>
    <div class="heading">阿里巴巴推出“飞猪购”　助商家瞄准中国旅客境外购物需求（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190326" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_fliggy.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年3月21日</div>
    <div class="heading">天猫国际推两大新猷　助国际品牌加速进入中国市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190321a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年3月21日</div>
    <div class="heading">“从云到云智能”—阿里云解读战略升级</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190321" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年3月7日</div>
    <div class="heading">NBA与阿里巴巴升级中国合作伙伴关系</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190307" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年3月4日</div>
    <div class="heading">天猫继续发力美妆　计划于2019年扶持1,000个品牌开店（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190304" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年2月27日</div>
    <div class="heading">阿里云发起“Tech for Change”倡议</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190227" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年2月25日</div>
    <div class="heading">阿里云推新产品助力全球企业级客户及互联网企业提升商业智能</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190225" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年2月13日</div>
    <div class="heading">淘宝创新模式带动1/3中国人口参与公益（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190213" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年1月30日</div>
    <div class="heading">阿里巴巴集团公布2018年12月底止季度业绩</div>
    <div class="lower">
	    <!--<a href="/../en/news/press_pdf/p190130.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p190130" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年1月29日</div>
    <div class="heading">阿里云于日本开设第二个数据中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190129" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年1月11日</div>
    <div class="heading">阿里巴巴集团将于2019年1月30日公布2018年12月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p190111a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年1月11日</div>
    <div class="heading">阿里巴巴集团启动A100战略合作计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2019年1月9日</div>
    <div class="heading">阿里云于印尼开设第二个数据中心　服务能力翻倍</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p190109" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年12月20日</div>
    <div class="heading">哔哩哔哩弹幕网与淘宝宣布在电商领域达成合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181220" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年12月10日</div>
    <div class="heading">阿里巴巴集团拟增持阿里影业股权</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181210" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年12月5日</div>
    <div class="heading">比利时政府与阿里巴巴集团携手　通过eWTP推动全球普惠贸易</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181205" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月29日</div>
    <div class="heading">西班牙英格利斯百货与阿里巴巴集团探索紧密合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181129" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月28日</div>
    <div class="heading">38位亚洲创业者完成互联网创业者计划第四期课程（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181128" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月12日</div>
    <div class="heading">阿里巴巴集团2018天猫双11成交额达人民币2,135亿元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月11日</div>
    <div class="heading">阿里巴巴集团2018年天貓雙11开始一小时内产生100亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月6日</div>
    <div class="heading">阿里巴巴集团与冯氏零售集团达成战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181106a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月6日</div>
    <div class="heading">阿里巴巴宣布2,000亿美元全球进口计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181106" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月5日</div>
    <div class="heading">太古地产与天猫宣布合作推出崭新零售概念</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181105a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月5日</div>
    <div class="heading">阿里巴巴携手联合国世界粮食计划署　助力全球零饥饿目标（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181105" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月2日</div>
    <div class="heading">阿里巴巴集团公布2018年9月底止季度业绩</div>
    <div class="lower">
	   <!--<a href="/../en/news/press_pdf/p181102.pdf" target="_blank" class="link">查看 PDF</a>-->
	    <a href="/../cn/news/article?news=p181102" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年11月2日</div>
    <div class="heading">阿里巴巴开设天猫国际印尼国家馆（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181102a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月31日</div>
    <div class="heading">卢旺达政府与阿里巴巴集团签署协议　共同推动卢旺达经济发展（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181031" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月30日</div>
    <div class="heading">菜鸟智能物流科技全面升级　迎天猫双11全球狂欢节</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181030b" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月30日</div>
    <div class="heading">董事局主席2018致股东的信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181030a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月30日</div>
    <div class="heading">首席执行官2018致股东的信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181030" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月26日</div>
    <div class="heading">历峰集团与阿里巴巴集团宣布全球战略合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181026" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月24日</div>
    <div class="heading">阿里云将区块链即服务扩展到全球市场（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181024" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月22日</div>
    <div class="heading">阿里云开设英国数据中心　加强欧洲业务（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181022" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月19日</div>
    <div class="heading">阿里巴巴集团数字经济体全面集结　助力2018天猫双11全球狂欢节</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p181019" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年10月15日</div>
    <div class="heading">阿里巴巴集团将于2018年11月2日公布2018年9月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p181015" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月28日</div>
    <div class="heading">阿里云在印度推出第二个可用区（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180928" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月20日</div>
    <div class="heading">阿里巴巴人工智能实验室推出酒店服务机械人</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180920" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月19日</div>
    <div class="heading">阿里云与OBS为奥运赛事播放推出创新云端解决方案（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180919a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月19日</div>
    <div class="heading">阿里巴巴集团发表前沿技术研究发展蓝图</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180919" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月17日</div>
    <div class="heading">淘宝造物节首创断桥时装秀　展现中国创意与设计（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180917" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月14日</div>
    <div class="heading">淘宝造物节逾200商家聚首西湖　展现无限创意活力</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180914" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月11日</div>
    <div class="heading">俄罗斯直接投资基金、阿里巴巴集团、MegaFon及Mail.Ru集团在俄罗斯和独联体推出社交商务合资 ...</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180911" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月10日</div>
    <div class="heading">阿里巴巴集团宣布董事局主席传承计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180910" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年9月5日</div>
    <div class="heading">阿里巴巴举办“Xin公益大会”持续推动公益：相信小的伟大</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180905" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月29日</div>
    <div class="heading">阿里巴巴集团将举行投资者日（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180829" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月23日</div>
    <div class="heading">阿里巴巴集团公布2018年6月底止季度业绩</div>
    <div class="lower">
	    <!--<a href="/../en/news/press_pdf/p180823.pdf" target="_blank" class="link">查看</a>-->
	    <a href="/../cn/news/article?news=p180823" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月21日</div>
    <div class="heading">阿里巴巴集团与新加坡航空达成战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180821" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月18日</div>
    <div class="heading">阿里巴巴集团欢迎马来西亚首相到访阿里巴巴杭州总部</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180818" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月9日</div>
    <div class="heading">阿里巴巴启动88VIP全新会员计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180809" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月8日</div>
    <div class="heading">阿里巴巴集团创始人马云宣布出资1000万美元成立非洲互联网创业者基金（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180808" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年8月2日</div>
    <div class="heading">星巴克与阿里巴巴达成新零售全面战略合作　打造行业标杆　革新消费体验</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180802" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月28日</div>
    <div class="heading">阿里巴巴集团发布2018财年年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180728" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月27日</div>
    <div class="heading">阿里巴巴集团将于2018年8月23日公布2018年6月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180727" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月9日</div>
    <div class="heading">西门子与阿里云达成合作　助力中国工业物联网发展（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180709" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月6日</div>
    <div class="heading">阿里巴巴启动“马来西亚周”　助力马来西亚中小企业寻找中国商机</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180706" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月4日</div>
    <div class="heading">阿里巴巴推动时尚零售智能化</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180704" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年7月2日</div>
    <div class="heading">阿里云推出EMEA伙伴计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180702" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年6月27日</div>
    <div class="heading">阿里巴巴倡议成立开放研究平台“罗汉堂”（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180627" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年6月18日</div>
    <div class="heading">阿里巴巴在马来西亚开设办公室</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180618" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年6月13日</div>
    <div class="heading">天猫将618年中大促拓展到更多亚太区市场（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180613" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年6月7日</div>
    <div class="heading">阿里云于上海云栖大会推出ET农业大脑</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180607" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年6月6日</div>
    <div class="heading">菜鸟领衔合资公司将于香港国际机场打造全新物流枢纽</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180606" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月29日</div>
    <div class="heading">天猫新零售技术正式应用于INTERSPORT</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180529b" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月29日</div>
    <div class="heading">阿里巴巴、菜鸟与中通达成战略入股协议　共同探索新物流机遇</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180529a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月29日</div>
    <div class="heading">阿里巴巴集团宣布将健康医疗类目整合至阿里健康</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180529" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月25日</div>
    <div class="heading">菜鸟牵头阿里巴巴集团绿色物流2020计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180525" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月21日</div>
    <div class="heading">阿里巴巴、商汤集团及香港科技园公司携手成立AI实验室，促进香港人工智能产业发展</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180521" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年5月4日</div>
    <div class="heading">阿里巴巴集团公布2018年3月底季度及2018财年全年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180504" target="_blank" class="link">查看</a>
	    <!--<a href="/../en/news/press_pdf/p180504.pdf" target="_blank" class="link">查看 PDF</a>-->
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年4月19日</div>
    <div class="heading">阿里巴巴集团与泰国政府达成战略合作　支持泰国4.0计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180419" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年4月16日</div>
    <div class="heading">阿里巴巴集团将于2018年5月4日公布2018年3月底季度及2018财年全年业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180416" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年4月5日</div>
    <div class="heading">“互联网创业者计划”首批亚洲学员毕业（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180405" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年4月3日</div>
    <div class="heading">阿里巴巴集团与清华大学宣布共同成立自然交互体验联合实验室（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180403" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年4月2日</div>
    <div class="heading">阿里巴巴集团签署全资收购饿了么协议（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180402" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年3月26日</div>
    <div class="heading">联合国贸易和发展会议携手阿里巴巴商学院　启动“互联网创业者计划”首个亚洲项目</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180326" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年3月19日</div>
    <div class="heading">阿里巴巴集团向Lazada集团增资20亿美元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180319" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年3月15日</div>
    <div class="heading">阿里云印尼数据中心正式开启</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180315" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月28日</div>
    <div class="heading">新加坡南洋理工大学、阿里巴巴集团成立联合研究院　研发人工智能技术（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180228" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月12日</div>
    <div class="heading">阿里大文娱与迪士尼旗下发行公司签下多年期合约</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180212" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月11日</div>
    <div class="heading">阿里巴巴入股居然之家15%股份</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180211" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月10日</div>
    <div class="heading">阿里巴巴集团2018平昌冬奥展览馆揭幕　展示打造未来奥运会的愿景</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180210" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月1日</div>
    <div class="heading">阿里巴巴入股蚂蚁金服33%股权</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180201a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年2月1日</div>
    <div class="heading">阿里巴巴集团公布2017年12月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180201" target="_blank" class="link">查看</a>
	    <!--<a href="/../en/news/press_pdf/p180201.pdf" target="_blank" class="link">查看 PDF</a>-->
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2018年1月29日</div>
    <div class="heading">阿里云推出马来西亚城市大脑助力提升城市治理能力</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p180129" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2018年1月10日</div>
    <div class="heading">阿里巴巴集团将于2018年2月1日公布2017年12月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p180110" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2017年12月20日</div>
    <div class="heading">阿里云扩大覆盖范围　赋能印度企业（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171220" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2017年11月30日</div>
    <div class="heading">阿里巴巴集团宣布70亿美元优先无抵押债券发行定价（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171130" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月27日</div>
    <div class="heading">阿里巴巴集团拟发行优先无抵押债券（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171127" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月23日</div>
    <div class="heading">阿里巴巴集团与联合国贸易和发展会议启动互联网创业者计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171123" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月22日</div>
    <div class="heading">阿里云成为国际足联俱乐部世界杯冠名赞助商（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171122" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月22日</div>
    <div class="heading">全港最大型创业比赛JUMPSTARTER 2017结果出炉</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171122a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月20日</div>
    <div class="heading">阿里巴巴集团、欧尚零售及润泰集团达成新零售战略合作联盟</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171120" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月12日</div>
    <div class="heading">阿里巴巴集团2017天猫双11成交额增长39%至人民币1,682亿元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月11日</div>
    <div class="heading">阿里巴巴集团于2017年11.11全球狂欢节开始两小时内产生近120亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月3日</div>
    <div class="heading">阿里巴巴eWTP首个海外e-hub在马来西亚正式启动</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171103" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年11月2日</div>
    <div class="heading">阿里巴巴集团公布2017年9月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171102" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月31日</div>
    <div class="heading">阿里巴巴集团天猫双11全球狂欢节正式启动</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171031" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月30日</div>
    <div class="heading">阿里云马来西亚数据中心正式启用（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171030" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月19日</div>
    <div class="heading">阿里巴巴集团推出2017年11.11全球狂欢节（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171019" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月17日</div>
    <div class="heading">2017年董事长致投资者信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171017" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月17日</div>
    <div class="heading">2017年CEO致投资者信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171017a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月16日</div>
    <div class="heading">HistoWiz赢得阿里巴巴诸神之战全球创客大赛总决赛总冠军（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171016" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月11日</div>
    <div class="heading">阿里巴巴集团宣布成立全球科研项目推动科技创新</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p171011a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年10月11日</div>
    <div class="heading">阿里巴巴集团将于2017年11月2日公布2017年9月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p171011" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年9月26日</div>
    <div class="heading">阿里巴巴集团宣布增持菜鸟网络成为控股股东</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170926" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年9月13日</div>
    <div class="heading">阿里巴巴集团旗下业务天猫支持New York Fashion Week: The Shows（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170913" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年9月6日</div>
    <div class="heading">墨西哥经济部与阿里巴巴集团签署谅解备忘录　通过电商协助墨西哥产品销往中国（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170906" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年8月17日</div>
    <div class="heading">阿里巴巴集团公布2017年6月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170817" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年8月10日</div>
    <div class="heading">阿里巴巴集团升级知识产权保护平台　24小时内能剔除假货信息（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170810" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年8月7日</div>
    <div class="heading">阿里巴巴集团与万豪国际集团宣布组建创新合资公司　旨在重新定义旅行体验</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170807" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2017年8月4日</div>
    <div class="heading">阿里巴巴集团与澳门特区政府达成战略合作协议　推动智能城市发展</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170804a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年8月4日</div>
    <div class="heading">阿里巴巴集团将于2017年8月17日公布2017年6月份季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170804" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年8月3日</div>
    <div class="heading">开云集团及阿里巴巴集团协议携手开展知识产权保护</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170803" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年7月20日</div>
    <div class="heading">阿里云设立马来西亚数字孵化中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170720" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年7月10日</div>
    <div class="heading">阿里巴巴集团举办全球女性创业者大会　聚焦消弭性别不平等</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170710" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年7月9日</div>
    <div class="heading">阿里巴巴集团“淘宝造物节”回归　展示淘宝社区的活力及创意</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170709" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年6月28日</div>
    <div class="heading">阿里巴巴集团增持电商平台Lazada</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170628" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年6月19日</div>
    <div class="heading">阿里巴巴集团推出全域营销（Uni Marketing）解决方案（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170619" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年6月15日</div>
    <div class="heading">阿里巴巴集团发布2017财年年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170615" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年6月12日</div>
    <div class="heading">“天猫出海”项目正式发布　12亿商品“一店卖全球”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170612" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年6月10日</div>
    <div class="heading">阿里云将开设印度及印尼数据中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170610" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月31日</div>
    <div class="heading">阿里巴巴集团将举办投资者日（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170531" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月18日</div>
    <div class="heading">阿里巴巴集团公布2017年3月底季度及财年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170518" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月16日</div>
    <div class="heading">阿里巴巴与巴基斯坦贸易发展局签署战略合作备忘录　支持中小企业电商发展及金融服务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170516" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月12日</div>
    <div class="heading">阿里云马来西亚设数据中心支持eWTP</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170512a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月12日</div>
    <div class="heading">阿里巴巴集团与马来西亚数字经济发展局、杭州市政府签署合作备忘录　通过eWTP赋能中小企 ...</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170512" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年5月2日</div>
    <div class="heading">阿里巴巴集团与阿根廷政府签署合作协议　促进贸易机遇</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170502" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年4月27日</div>
    <div class="heading">香港初创支持先驱合办JUMPSTARTER 2017创业比赛</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170427a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年4月27日</div>
    <div class="heading">阿里巴巴集团将于2017年5月18日公布2017年3月份季度及2017财年全年业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170427" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年3月22日</div>
    <div class="heading">阿里巴巴落地eWTP　成立首个海外e-hub</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170322" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年3月12日</div>
    <div class="heading">阿里巴巴集团与丹麦政府签署谅解备忘录　共同向中国消费者推广丹麦产品及旅游业（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170312" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年2月20日</div>
    <div class="heading">阿里巴巴集团与百联集团达成战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170220" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年2月15日</div>
    <div class="heading">美泰与阿里巴巴集团达成全球战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170215" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年2月13日</div>
    <div class="heading">阿里云扩充香港数据中心　数据存储量增加超过一倍（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170213" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月24日</div>
    <div class="heading">阿里巴巴集团公布2016年12月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170124" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月19日</div>
    <div class="heading">国际奥委会与阿里巴巴集团达成历史性长期合作　阿里巴巴成为至2028年奥林匹克全球合作伙伴</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170119" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月16日</div>
    <div class="heading">阿里巴巴带领全球知名品牌及行业组建「大数据打假联盟」</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170116a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月16日</div>
    <div class="heading">阿里云、新加坡国立大学和EZ-Link三方携手推动新加坡数字经济发展</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170116" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月12日</div>
    <div class="heading">世界货运联盟与阿里巴巴国际交易市场於跨境电商货运领域达成合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月10日</div>
    <div class="heading">阿里巴巴集团将于2017年1月24日公布2016年十二月份季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p170110" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2017年1月10日</div>
    <div class="heading">阿里巴巴公布私有化银泰商业建议</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p170110a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2016年12月21日</div>
    <div class="heading">阿里巴巴集团关于美国贸易代表办公室《特别301报告》的声明</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161221" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年12月15日</div>
    <div class="heading">阿里云启动东京数据中心　服务日本客户（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p161215" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年12月8日</div>
    <div class="heading">泰国政府与阿里巴巴集团签署协议　协助泰国中小企把握线上商贸机遇</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161208" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年12月7日</div>
    <div class="heading">中国移动与阿里巴巴签署全面战略合作协议</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161207" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月21日</div>
    <div class="heading">阿里云新增四个数据中心　扩展全球服务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161121" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月12日</div>
    <div class="heading">阿里巴巴集团2016年11.11全球狂欢节成交额达人民币1,207亿元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月11日</div>
    <div class="heading">阿里巴巴集团于2016年11.11全球狂欢节开始两小时内产生70亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p161111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月3日</div>
    <div class="heading">阿里巴巴集团将于2016年11.11全球狂欢节展示物联网及消费类电子产品新惊喜（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p161103" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月2日</div>
    <div class="heading">阿里巴巴集团公布2016年9月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161102" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年11月1日</div>
    <div class="heading">阿里巴巴集团公布2016年双11狂欢夜阵容（英文版）</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161101" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年10月23日</div>
    <div class="heading">天猫双11全球潮流盛典　开启双11序幕</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161023" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年10月20日</div>
    <div class="heading">阿里巴巴集团2016年11.11全球狂欢节启航</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161020" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年10月19日</div>
    <div class="heading">阿里巴巴集团将于2016年11月2日公布2016年九月份季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p161019" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年10月14日</div>
    <div class="heading">阿里云公布AliLaunch计划新一批技术合作伙伴（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p161014" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年10月12日</div>
    <div class="heading">阿里巴巴集团全球领导力学院开学　加速全球化人才投资</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p161024" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年9月29日</div>
    <div class="heading">阿里巴巴创业者基金宣布投资三间香港初创企业</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160929" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年9月19日</div>
    <div class="heading">阿里巴巴集团任命高晓松为阿里娱乐战略委员会主席（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160919" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年9月7日</div>
    <div class="heading">eWTP倡议获纳入G20公报　WTO总干事造访阿里巴巴集团共商助力中小企</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160906a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年9月6日</div>
    <div class="heading">阿里巴巴集团与澳大利亚贸易委员会达成战略合作　推动澳大利亚至中国出口增长（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160906" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年9月3日</div>
    <div class="heading">阿里巴巴集团与加拿大政府签订合作协议　让小企业接通中国消费者（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160903" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月30日</div>
    <div class="heading">阿里巴巴集团启动9.9天猫全球酒水节　推50国逾10万款美酒</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160831" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月16日</div>
    <div class="heading">2016天猫11.11狂欢夜连手浙江卫视　上海家化获亿元级独家冠名权</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160816" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月11日</div>
    <div class="heading">阿里巴巴集团公布2016年6月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160811" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月9日</div>
    <div class="heading">阿里云与HTC达成战略合作　将共同推动VR 产业发展</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160809b" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月9日</div>
    <div class="heading">阿里云为技术合作伙伴推出全球云市场及AliLaunch计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160809a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年8月9日</div>
    <div class="heading">阿里云于北京峰会宣布最新的人工智能技术及全新logo</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160809" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年7月27日</div>
    <div class="heading">阿里巴巴集团将于2016年8月11日公布2016年六月份季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160727" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年7月22日</div>
    <div class="heading">阿里巴巴集团举办首届淘宝造物节（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160722" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年7月9日</div>
    <div class="heading">阿里巴巴公益基金会在中国举办首届XIN公益大会（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160709" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年7月6日</div>
    <div class="heading">阿里巴巴集团与上汽集团宣布联合发布互联网汽车RX5</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160706" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年7月1日</div>
    <div class="heading">阿里巴巴召开首届权利人共创会</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160701" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月29日</div>
    <div class="heading">全球食品行业巨头玛氏公司与阿里巴巴集团达成战略合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160629" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月22日</div>
    <div class="heading">美国地方法院驳回针对阿里巴巴集团的证券集团诉讼（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160622" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月15日</div>
    <div class="heading">阿里云扩建新加坡数据中心　获新加坡MTCS最高安全评级及PCI-DSS认证</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160615" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月14日</div>
    <div class="heading">阿里巴巴集团将举办投资者日（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160614" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月2日</div>
    <div class="heading">阿里巴巴集团公布从软银集团认购阿里巴巴股份之条款（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160602" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年6月1日</div>
    <div class="heading">阿里巴巴集团及合伙人向软银购买24亿美元阿里巴巴股份</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160601" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月25日</div>
    <div class="heading">阿里巴巴集团发布2016财年年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160525" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月18日</div>
    <div class="heading">阿里巴巴“日本招商中心”正式启动　协助日本企业进军亚洲及中国电商市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160518" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月13日</div>
    <div class="heading">阿里巴巴集团及软银成立合资公司进军日本云计算市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160513" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月11日</div>
    <div class="heading">阿里巴巴集团设立荷兰分公司　任命当地资深管理人员（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160511" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月10日</div>
    <div class="heading">阿里巴巴集团及国际反假联盟（IACC）宣布推出安全市场项目（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160510" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月5日</div>
    <div class="heading">阿里巴巴集团公布2016年3月底季度及财年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160505" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年5月5日</div>
    <div class="heading">阿里巴巴创业者基金公布投资三间香港初创企业</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160505a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年4月28日</div>
    <div class="heading">阿里云与韩国SK Holdings C&amp;C达成合作　携手为中韩企业提供云计算服务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160428" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年4月18日</div>
    <div class="heading">阿里巴巴集团与新西兰政府宣布战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160418a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年4月18日</div>
    <div class="heading">阿里巴巴集团将于2016年5月5日公布2016年3月份季度及2016财年全年业绩 ( 英文版 )</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160418" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年4月13日</div>
    <div class="heading">阿里巴巴集团成为国际反假联盟（IACC）全球首个电商成员</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160413" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年4月12日</div>
    <div class="heading">阿里巴巴集团投资控股电商平台Lazada</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p160412" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年3月21日</div>
    <div class="heading">阿里巴巴电商交易额突破人民币3万亿元　蔡信崇分享看法（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160321" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年2月12日</div>
    <div class="heading">阿里巴巴集团任命Jodee Kozlak为全球人力资源资深副总裁（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160212" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年1月28日</div>
    <div class="heading">阿里巴巴集团公布2015年12月底季度业绩</div>
    <div class="lower">
	    <!--<a href="/../cn/news/press_pdf/p160128.pdf" target="_blank" class="link">查看PDF</a>-->
	    <a href="/../cn/news/article?news=p160128" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2016年1月12日</div>
    <div class="heading">阿里巴巴集团将于2016年1月28日公布2015年12月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p160112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月21日</div>
    <div class="heading">阿里巴巴集团任命Matthew Bassiur为全球知识产权执法主管</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151221" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月11日</div>
    <div class="heading">致《南华早报》读者的一封信</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151211a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月11日</div>
    <div class="heading">阿里巴巴集团收购《南华早报》</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151211" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月10日</div>
    <div class="heading">阿里巴巴集团B2B业务与UBM携手创造全新B2B交易体验（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151210" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月8日</div>
    <div class="heading">阿里巴巴新增四名合伙人　继续传承发展使命与文化</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151208" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月7日</div>
    <div class="heading">淘宝网将举办12.12年度销售活动　提供现金购物分享奖励（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151207" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年12月1日</div>
    <div class="heading">阿里巴巴集团任命法国及德国董事总经理（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151201" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月19日</div>
    <div class="heading">实践创业梦想　阿里巴巴集团启动台湾创业者基金</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151119a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月19日</div>
    <div class="heading">阿里巴巴集团启动香港创业者基金</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151119" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月17日</div>
    <div class="heading">阿里云计算扩充香港数据中心　推进区内云计算使用（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151117" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月12日</div>
    <div class="heading">阿里巴巴集团11.11全球狂欢节　商品成交额达人民币912亿元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月11日</div>
    <div class="heading">阿里巴巴集团于2015年11.11全球狂欢节开始后14小时总交易额达100亿美元、超越去年11.11总交易额（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151111a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月11日</div>
    <div class="heading">阿里巴巴集团于2015年11.11全球狂欢节开始90分钟内产生50亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月9日</div>
    <div class="heading">阿里巴巴集团将在北京遥距参与纽约证券交易所开市敲钟仪式</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151109" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月6日</div>
    <div class="heading">阿里巴巴集团及优酷土豆签署最终合并协定（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151106" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年11月5日</div>
    <div class="heading">2015年11.11全球狂欢节将展现阿里巴巴集团之创新与领导地位（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151105" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月30日</div>
    <div class="heading">阿里云计算打破数据排序世界纪录（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151030" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月29日</div>
    <div class="heading">阿里巴巴集团宣布多项合作计划　将荷兰优质产品服务引入中国（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151029a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月29日</div>
    <div class="heading">菜鸟网络已准备就绪　迎接“11.11全球狂欢节”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151029" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月27日</div>
    <div class="heading">阿里云计算携手华大基因、英特尔　搭建精准医疗开放云平台（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151027a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月27日</div>
    <div class="heading">阿里巴巴集团公布2015年9月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151027" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月23日</div>
    <div class="heading">英国贸易投资总署与阿里巴巴集团旗下1688.com合作　扶持英国企业进入中国市场（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151023" target="_blank" class="link">查看</a>
         <img src="/picture/press_logo_1688.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月22日</div>
    <div class="heading">Ocean Spray于天猫国际开设首个中国网上旗舰店（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151022" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmallglobal.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月20日</div>
    <div class="heading">阿里巴巴集团拓展欧洲业务（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151020" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月20日</div>
    <div class="heading">阿里巴巴集团宣布于北京水立方2015年11.11全球狂欢节倒数晚会（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151020a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月19日</div>
    <div class="heading">11.11迎来全渠道狂欢　实现线上线下全面融合</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151019" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月16日</div>
    <div class="heading">阿里巴巴集团向优酷土豆发出收购要约　合力共创数字娱乐新未来</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151016" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月13日</div>
    <div class="heading">2015天猫11.11全球狂欢节启动　汇聚四万商家600万种优质商品</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151013" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月12日</div>
    <div class="heading">阿里巴巴集团将于2015年10月27日公布2015年9月底季度业绩（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151012" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月12日</div>
    <div class="heading">阿里巴巴集团将举2015年11.11全球狂欢节启动仪式（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151012a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月9日</div>
    <div class="heading">阿里巴巴集团开设第二个硅谷数据中心　满足云计算需求增长（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p151009" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年10月8日</div>
    <div class="heading">阿里巴巴集团发布首份年报</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p151008" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月29日</div>
    <div class="heading">阿里巴巴集团及蚂蚁金融战略投资于印度的Paytm（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150929" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月16日</div>
    <div class="heading">菜鸟网络与美国邮政签署合作备忘录加强跨境物流服务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150916" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月9日</div>
    <div class="heading">阿里巴巴集团成立阿里体育集团</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150909" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月8日</div>
    <div class="heading">阿里巴巴集团与德国麦德龙达成独家战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150908a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmallglobal.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月8日</div>
    <div class="heading">阿里云打造新一代绿色数据中心</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150908" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月8日</div>
    <div class="heading">阿里巴巴集团宣布2015“11.11全球狂欢节”启动</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150908b" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年9月1日</div>
    <div class="heading">Mondavi官方旗舰店独家进驻天猫</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150901" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月25日</div>
    <div class="heading">阿里云计算公布中国首个人工智能平台DT PAI（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150825" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月19日</div>
    <div class="heading">阿里巴巴集团委任新董事</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150819a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月19日</div>
    <div class="heading">阿里云计算设立新加坡数据中心　服务东南亚云端服务用户</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150819" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月12日</div>
    <div class="heading">阿里巴巴集团与Macy's达成独家合作伙伴协议（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150812a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月12日</div>
    <div class="heading">阿里巴巴集团公布2015年6月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150812" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月10日</div>
    <div class="heading">阿里巴巴集团与苏宁云商开启全面战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150810" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年8月4日</div>
    <div class="heading">阿里巴巴集团委任Michael Evans出任总裁</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150804" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月30日</div>
    <div class="heading">阿里云与中科院合作成立量子计算联合实验室</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150730" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月29日</div>
    <div class="heading">阿里巴巴集团宣布10亿美元战略增资阿里云</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150729" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月28日</div>
    <div class="heading">天猫国际启动环球免税店　开创跨境进口电商新模式</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150728" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmallglobal.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月24日</div>
    <div class="heading">天猫超市推进当日达配送服务（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150724" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月22日</div>
    <div class="heading">阿里云：计算将成DT世界引擎　发布11款新产品及50个行业解决方案</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150722a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月22日</div>
    <div class="heading">阿里巴巴藉信用保障服务　向从事跨境贸易的小企业提供全面保障（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150722" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月20日</div>
    <div class="heading">阿里巴巴集团与联合利华战略合作　开启“互联网+快消”新模式</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150720" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月16日</div>
    <div class="heading">阿里百川扶持移动创业者　推“10亿创投+10亿贷款”计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150716" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月8日</div>
    <div class="heading">阿里巴巴集团宣布战略投资魅力惠（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150708a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年7月8日</div>
    <div class="heading">新加坡邮政与阿里巴巴集团宣布加强电商物流合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150708" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月25日</div>
    <div class="heading">阿里巴巴集团宣布已提交2015财年20-F表格年报（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150625" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月24日</div>
    <div class="heading">阿里巴巴集团开启地球村模式　美欧澳东南亚十一国国家馆齐亮相</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150624a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月24日</div>
    <div class="heading">阿里巴巴集团联手在华国际出版商版权保护联盟　加强打击网上侵权行为</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150624" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月23日</div>
    <div class="heading">阿里巴巴集团与蚂蚁金服组本地生活服务合营公司</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150623" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月18日</div>
    <div class="heading">阿里巴巴集团与鸿海战略入股软银旗下子公司　联合推动机器人产业全球化</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150618" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月17日</div>
    <div class="heading">菜鸟全国三地设生鲜食品配送中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150617" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月8日</div>
    <div class="heading">阿里云计算启动全球合作伙伴计划</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150608" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月5日</div>
    <div class="heading">阿里巴巴集团任命Eric Pelletier为副总裁兼国际政府事务部负责人（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150605a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月5日</div>
    <div class="heading">阿里巴巴集团于2015年摩根大通全球中国峰会讨论投资和增长战略（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150605" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月4日</div>
    <div class="heading">阿里巴巴集团与上海文广集团签订战略协议</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150604a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年6月4日</div>
    <div class="heading">阿里旅行 &bull; 去啊推出“信用签证”便利用户</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150604" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_fliggy.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月22日</div>
    <div class="heading">菜鸟网络开设中国西南部首个超市配送中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150522a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月20日</div>
    <div class="heading">阿里巴巴推出信用保障服务　让小企业从事跨境贸易倍添信心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150520" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月18日</div>
    <div class="heading">阿里巴巴集团推出韩国馆　提供正宗韩国产品的一站式购买体验（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150518a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月18日</div>
    <div class="heading">阿里巴巴集团将举行国际性女性与创业大会（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150518" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月14日</div>
    <div class="heading">阿里巴巴集团战略投资圆通　推动快递全行业升级</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150514" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月12日</div>
    <div class="heading">菜鸟全国五个主要城市推三小时极速达服务（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150512" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年5月7日</div>
    <div class="heading">阿里巴巴集团公布2015年3月底季度及财年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150507" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年4月28日</div>
    <div class="heading">菜鸟网络开设其华东最大的超市配送中心（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150428" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_cainiao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年4月15日</div>
    <div class="heading">阿里巴巴集团宣布策略整合在线医药业务到阿里健康</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150415" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年4月1日</div>
    <div class="heading">阿里巴巴集团宣布俞永福担任阿里妈妈总裁</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150401" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年3月30日</div>
    <div class="heading">阿里旅行 &bull; 去啊发布“未来酒店”战略</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150330" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_fliggy.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年3月11日</div>
    <div class="heading">阿里巴巴与iwoca和ezbob合作为英国小型企业拓展贸易融资（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150311" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年3月2日</div>
    <div class="heading">阿里巴巴集团将在台湾提供资金扶植年轻企业家</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150302" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年2月13日</div>
    <div class="heading">阿里巴巴集团就阿里与美国证券交易委员会通信一事的声明</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150213" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年2月10日</div>
    <div class="heading">阿里巴巴集团和蚂蚁金融服务宣布重组完成（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150210" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年2月9日</div>
    <div class="heading">阿里巴巴集团宣布以5.9亿美元战略投资魅族科技</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150209a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年2月9日</div>
    <div class="heading">阿里巴巴集团出席高盛科技及互联网大会（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150209" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年2月1日</div>
    <div class="heading">阿里巴巴集团成立“香港青年企业家基金”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150201" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月29日</div>
    <div class="heading">蔡崇信对有关阿里巴巴集团与国家工商总局之间互动的回应</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150129a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月29日</div>
    <div class="heading">阿里巴巴集团公布2014年12月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150129" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月28日</div>
    <div class="heading">蚂蚁金服推出芝麻信用分　中国首个个人信用服务体系</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150128" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_ant.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月20日</div>
    <div class="heading">Visualead获阿里巴巴集团投资　共同布局O2O新技术</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150120" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月15日</div>
    <div class="heading">中国领先的移动打车客户端快的打车获得软银集团、阿里巴巴集团及老虎环球基金共6亿美元投资（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150115a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月14日</div>
    <div class="heading">阿里巴巴集团战略投资易传媒　构建大数据营销生态圈</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p150114" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2015年1月8日</div>
    <div class="heading">阿里巴巴集团与微软达成合作　提升网上客户体验、创造更安全网上环境（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p150108" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年12月23日</div>
    <div class="heading">阿里巴巴集团2014年知识产权保障措施（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p141223.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年12月8日</div>
    <div class="heading">支付宝发布十年帐单　揭示中国用户网上消费变迁</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141208" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_ant.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月21日</div>
    <div class="heading">阿里巴巴集团公布80亿美元高级无抵押债券定价（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p141121" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月13日</div>
    <div class="heading">阿里巴巴集团宣布计划发行高级无抵押债券（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p141113" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月12日</div>
    <div class="heading">阿里巴巴集团11.11购物狂欢节　商品成交额达人民币571亿元</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141112" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月11日</div>
    <div class="heading">阿里巴巴集团于11.11购物狂欢节结束前数小时总交易额达80亿美元（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p141111a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月11日</div>
    <div class="heading">阿里巴巴集团于11.11购物狂欢节首一小时产生20亿美元交易（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p141111" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年11月4日</div>
    <div class="heading">阿里巴巴集团公布2014年9月底季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141104" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年10月28日</div>
    <div class="heading">阿里巴巴集团推出全新旅行品牌“去啊”</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141028" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_fliggy.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年10月16日</div>
    <div class="heading">蚂蚁金融服务集团正式成立　拓展金融新生态</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141016" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_ant.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年10月14日</div>
    <div class="heading">TRAFFIC助力阿里巴巴集团　遏制网络非法野生物贸易</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p141014" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年9月29日</div>
    <div class="heading">阿里巴巴集团以28.1亿元人民币入股石基信息　加强拓展网上旅游市场服务能力</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140929" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年9月22日</div>
    <div class="heading">阿里巴巴集团承销商宣布行使超额配售权　购买额外美国存托股份（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p140922" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年9月18日</div>
    <div class="heading">阿里巴巴集团宣布首次公开招股定价（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p140918" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年7月31日</div>
    <div class="heading">阿里巴巴集团委任Jane Penner为副总裁兼投资者关系部负责人（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p140731" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年7月18日</div>
    <div class="heading">阿里巴巴集团与巴西邮政战略合作　共同开拓南美电商市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140718" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年7月15日</div>
    <div class="heading">狮门影业与阿里巴巴集团达成战略合作　为中国观众提供影视娱乐服务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140715" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年6月12日</div>
    <div class="heading">中国邮政集团和阿里巴巴集团达成全面战略合作　共同建设中国智能骨干网络</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140612" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年6月11日</div>
    <div class="heading">UC优视全面融入阿里巴巴集团　重塑互联网格局</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140611" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年6月11日</div>
    <div class="heading">阿里巴巴集团推出二维码商业战略　开启 “码上淘” 平台</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140611a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年6月11日</div>
    <div class="heading">意大利政府与阿里巴巴集团战略合作　为意大利企业创造国际业务拓展机遇</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140611b" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年5月28日</div>
    <div class="heading">新加坡邮政与阿里巴巴集团组成战略合作　共同开拓国际电商物流</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140528" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年5月16日</div>
    <div class="heading">法国政府与阿里巴巴集团合作促进法国商品出口至中国市场</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140516" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年5月13日</div>
    <div class="heading">阿里巴巴发放外贸服务补贴　推动出口企业使用外贸综合服务平台</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140513" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年5月12日</div>
    <div class="heading">阿里云计算与名气通合作　于香港设立数据中心</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140512a" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年5月12日</div>
    <div class="heading">阿里巴巴集团任命Jim Wilkinson为国际企业事务部资深副总裁（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p140512" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年4月8日</div>
    <div class="heading">阿里巴巴集团与华数数字电视传媒集团达成数字媒体内容及互联网电视方面的战略合作（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/article?news=p140408" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年3月31日</div>
    <div class="heading">阿里巴巴集团策略投资银泰商业集团　全面打通线上线下零售业务</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140331" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年3月26日</div>
    <div class="heading">阿里巴巴集团数字娱乐事业群发布娱乐宝平台</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140326" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2014年2月19日</div>
    <div class="heading">阿里巴巴集团旗下天猫国际正式上线</div>
    <div class="lower">
	    <a href="/../cn/news/article?news=p140219" target="_blank" class="link">查看</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2013年10月23日</div>
    <div class="heading">阿里巴巴集团于美国成立投资部门（英文版）</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p131023.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2013年8月15日</div>
    <div class="heading">国际反假联盟与淘宝网达成协议  共同打击网路侵权商品</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p130815.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年12月5日</div>
    <div class="heading">雅虎委任Jacqueline Reses加入阿里巴巴集团董事会（英文版）
</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p121205.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年9月18日</div>
    <div class="heading">阿里巴巴集团完成76亿美元股份回购计划　与雅虎关系揭开新篇章
</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120918.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年9月7日</div>
    <div class="heading">美国电影协会与淘宝网签署联合行动文件　携手打击网络侵权销售</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120907.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年6月6日</div>
    <div class="heading">阿里云携手海尔　推出云智能手机</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120606.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年5月25日</div>
    <div class="heading">阿里巴巴股东批准通过私有化建议</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120525.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年5月20日</div>
    <div class="heading">阿里巴巴集团与雅虎达成股权回购协议（英文版）</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120520.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年4月26日</div>
    <div class="heading">美国国家地理学会扩大中国环保资助规模</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120426.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2012年4月23日</div>
    <div class="heading">阿里巴巴独立董事委员会及独立财务顾问建议批准私有化</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120423a.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<!--<div class="feedBlock">
	<div class="hr">2012年4月23日</div>
    <div class="heading">阿里巴巴公布2012年第一季度纯利录得人民币3.392亿元</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120423b.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->
<div class="feedBlock">
	<div class="hr">2012年2月21日</div>
    <div class="heading">阿里巴巴集团向阿里巴巴提出私有化建议</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120221a.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<!--<div class="feedBlock">
	<div class="hr">2012年2月21日</div>
    <div class="heading">阿里巴巴公布2011年第四季度及全年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120221b.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->
<div class="feedBlock">
	<div class="hr">2012年1月11日</div>
    <div class="heading">阿里巴巴战略再升级　淘宝商城更名天猫</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p120111.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<!--<div class="feedBlock">
	<div class="hr">2011年11月24日</div>
    <div class="heading">阿里巴巴公布第三季度业绩　利润同比增长12%</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p111124.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->
<div class="feedBlock">
	<div class="hr">2011年9月19日</div>
    <div class="heading">38家国内领先的B2C购物网站入驻淘宝商城（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p110919.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>
<!--<div class="feedBlock">
	<div class="hr">2011年8月11日</div>
    <div class="heading">阿里巴巴第二季度利润按年增28%</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110811.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2011年7月29日</div>
    <div class="heading">阿里集团、雅虎和软银就支付宝问题达成协议</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110729.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2011年7月28日</div>
    <div class="heading">阿里云计算推出移动操作系统</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110728.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_aliyun.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2011年7月14日</div>
    <div class="heading">速卖通为买家提供西联公司现金付款选择</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110714.pdf" target="_blank" class="link">查看 PDF</a>
        <!--<img src="/picture/press_logo_aliexpress.png" />-->
        <img src="/picture/press_logo_aliexpress.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2011年5月15日</div>
    <div class="heading">阿里巴巴集团及雅虎发出的有关支付宝的联合声明（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p110515.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2011年5月13日</div>
    <div class="heading">阿里巴巴集团就支付宝现状及雅虎的相关声明进行澄清</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110513.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<!--<div class="feedBlock">
	<div class="hr">2011年5月12日</div>
    <div class="heading">阿里巴巴公布第一季度业绩　利润按年增37%</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110512.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<!--<div class="feedBlock">
	<div class="hr">2011年3月17日</div>
    <div class="heading">阿里巴巴2010年第四季度及全年业绩　显示公司财务表现强劲、业务模式发展渐趋平衡
</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110317.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<div class="feedBlock">
	<div class="hr">2011年1月18日</div>
    <div class="heading">阿里巴巴引入物流仓库、于全球速卖通平台推出货运及物流管理服务
</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p110118.pdf" target="_blank" class="link">查看 PDF</a>
        <!--<img src="/picture/press_logo_aliexpress.png" />-->
        <img src="/picture/press_logo_aliexpress.png" />
	</div>
</div>





<div class="feedBlock">
	<div class="hr">2010年11月15日</div>
    <div class="heading">阿里巴巴收购出口服务供应商一达通</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p101115.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>


<!--<div class="feedBlock">
	<div class="hr">2010年11月11日</div>
    <div class="heading">阿里巴巴第三季度付费会员总数超过100万　增值服务继续带动利润率增长</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p101111.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<div class="feedBlock">
	<div class="hr">2010年11月1日</div>
    <div class="heading">淘宝商城启动独立域名 发布垂直市场战略</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p101101.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_tmall.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2010年9月27日</div>
    <div class="heading">阿里巴巴计划将“中国Gold Supplier”产品升级</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100927.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年9月10日</div>
    <div class="heading">阿里巴巴于印度设客户服务中心</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100910.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年9月9日</div>
    <div class="heading">阿里巴巴集团推出企业新闻网站Alizila（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p100909.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年8月25日</div>
    <div class="heading">阿里巴巴通过收购Auctiva加强其平台作为美国网商首选货源的地位</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100825.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<!--<div class="feedBlock">
	<div class="hr">2010年8月10日</div>
    <div class="heading">阿里巴巴第二季度净利润及营业收入分别按年增长45.7%及48.6%</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100810.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2010年6月29日</div>
    <div class="heading">淘宝网与华数传媒推出数码娱乐产品平台及数码电视购物服务　扩大消费者的选择</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100629.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年6月24日</div>
    <div class="heading">阿里巴巴收购美国 Vendio 公司　进一步提升其全球电子商务平台</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100624.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年6月1日</div>
    <div class="heading">淘宝雅虎日本网购平台上线 中日小企业可跨国贸易</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100601.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年5月14日</div>
    <div class="heading">阿里巴巴与 UPS 携手开展全球震灾救援计划</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100514a.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年5月14日</div>
    <div class="heading">阿里巴巴集团宣布将0.3%年度收入成立环保基金</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100514b.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>


<!--<div class="feedBlock">
	<div class="hr">2010年5月13日</div>
    <div class="heading">阿里巴巴2010年第一季度客户数录得强劲增长</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100513.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2010年5月10日</div>
    <div class="heading">淘宝网与雅虎日本推出跨境网络零售平台　扩大消费者选择并推动小企业发展</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100510.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年5月4日</div>
    <div class="heading">UPS 与阿里巴巴结成战略联盟</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100504.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2010年4月26日</div>
    <div class="heading">阿里巴巴推出全球速卖通　为小批发商及零售商带来业内领先的安全技术、选择、灵活便捷及盈利</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100426.pdf" target="_blank" class="link">查看 PDF</a>
        <!--<img src="/picture/press_logo_aliexpress.png" />-->
        <img src="/picture/press_logo_aliexpress.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2010年3月31日</div>
    <div class="heading">新商业文明下的“淘宝式解读”：淘宝首度向全球开放数据</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100331.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<!--<div class="feedBlock">
	<div class="hr">2010年3月16日</div>
    <div class="heading">阿里巴巴公布2009年第四季度及全年业绩显示对客户、员工和技术基础建设的投资有助促进公司长远增长</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100316.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2010年3月14日</div>
    <div class="heading">支付宝注册用户数突破3亿（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p100314.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2010年1月15日</div>
    <div class="heading">淘宝网首推应用商店"淘宝箱" 大淘宝战略助力ISV掘金网购蓝海</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p100115.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2009年12月28日</div>
    <div class="heading">阿里巴巴完成收购互联网基础设施服务供应商中国万网（英文版）
</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p091228.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>





<!--<div class="feedBlock">
	<div class="hr">2009年11月10日</div>
    <div class="heading">阿里巴巴进一步巩固市场领导地位　寻求通过与集团加强协同效益让会员受惠更多</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p091110.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>-->





<div class="feedBlock">
	<div class="hr">2009年9月28日</div>
    <div class="heading">阿里巴巴收购中国领先的互联网基础设施服务供应商中国万网的控股权益</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090928.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2009年9月2日</div>
    <div class="heading">全球网商云集中国出席 APEC 中小企业峰会（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p090902.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>





<!--<div class="feedBlock">
	<div class="hr">2009年8月13日</div>
    <div class="heading">阿里巴巴2009年第二季客户净增长强劲　付费会员超过50万
</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090813.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<!--<div class="feedBlock">
	<div class="hr">2009年8月3日</div>
    <div class="heading">阿里巴巴与中国建设银行扩展小企业贷款计划</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090803.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<!--<div class="feedBlock">
	<div class="hr">2009年7月23日
</div>
    <div class="heading">阿里巴巴集团与中国银行宣布达成全面战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090723.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>-->



<div class="feedBlock">
	<div class="hr">2009年5月17日</div>
    <div class="heading">首届网商交易会在粤举行　“网货”助力“中国制造”出口转内销</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090517.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>


<!--<div class="feedBlock">
	<div class="hr">2009年5月6日</div>
    <div class="heading">阿里巴巴2009年首季客户总数净增长破历年纪录</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090506.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2009年5月5日</div>
    <div class="heading">阿里巴巴为全球供应商提供国际贸易新渠道</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090505.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2009年4月1日</div>
    <div class="heading">支付宝用户数突破1.5亿（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p090401.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>


<!--<div class="feedBlock">
	<div class="hr">2009年3月19日</div>
    <div class="heading">阿里巴巴公布2008年全年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p090319.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<!--<div class="feedBlock">
	<div class="hr">2008年12月19日</div>
    <div class="heading">阿里巴巴董事会选举新成员　独立董事比例大幅增加</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p081219.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<!--<div class="feedBlock">
	<div class="hr">2008年11月11日</div>
    <div class="heading">阿里巴巴公布 2008 年第三季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p081111.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->

<div class="feedBlock">
	<div class="hr">2008年11月3日</div>
    <div class="heading">阿里巴巴宣布重大措施　提升买家及供应商服务</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p081103.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2008年10月8日</div>
    <div class="heading">阿里巴巴集团50亿投资打造"大淘宝"</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p081008.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2008年9月21日</div>
    <div class="heading">支付宝用户数突破1亿</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080921.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2008年9月4日</div>
    <div class="heading">淘宝网整合阿里妈妈　正式启动大淘宝战略</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080904.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<!--<div class="feedBlock">
	<div class="hr">2008年8月27日</div>
    <div class="heading">阿里巴巴公布 2008 年中期业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080827.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<div class="feedBlock">
	<div class="hr">2008年8月2日</div>
    <div class="heading">阿里巴巴协助中小企业进军中国市场</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080802.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2008年7月24日</div>
    <div class="heading">阿里巴巴正式成立台湾分公司</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080724.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>



<!--<div class="feedBlock">
	<div class="hr">2008年5月6日</div>
    <div class="heading">阿里巴巴公布 2008 年第一季度业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080506.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->




<!--<div class="feedBlock">
	<div class="hr">2008年3月18日</div>
    <div class="heading">阿里巴巴公布2007年全年业绩</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p080318.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>-->


<div class="feedBlock">
	<div class="hr">2007年11月20日</div>
    <div class="heading">阿里巴巴集团全球首推互联网创新服务"阿里妈妈"</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p071120.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2007年11月6日</div>
    <div class="heading">阿里巴巴网络有限公司首日挂牌交易</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p071106.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2007年10月2日</div>
    <div class="heading">阿里巴巴在日内瓦设首个欧洲办事处</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p071002.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2007年8月28日</div>
    <div class="heading">支付宝推出新国际支付服务　网上贸易全球畅通</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p070828.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2007年7月10日</div>
    <div class="heading">阿里巴巴任命武卫为首席财务官</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p070710.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2007年5月14日</div>
    <div class="heading">沃尔玛全球采办总裁崔仁辅加盟阿里巴巴集团</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p070514.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>





<div class="feedBlock">
	<div class="hr">2006年11月22日</div>
    <div class="heading">中国邮政与阿里巴巴集团战略合作</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p061122.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2006年11月20日</div>
    <div class="heading">卫哲获委任为阿里巴巴总裁（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p061120.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>



<div class="feedBlock">
	<div class="hr">2006年10月24日</div>
    <div class="heading">支付宝与建设银行推出首张网购银行卡</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p061024.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2006年5月10日</div>
    <div class="heading">阿里巴巴推出B2C商城</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p060510.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>




<div class="feedBlock">
	<div class="hr">2006年2月21日</div>
    <div class="heading">阿里巴巴推出崭新的展会伙伴台作计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p060221.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2006年2月10日</div>
    <div class="heading">阿里巴巴全面引入支付宝</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p060210.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2005年10月20日</div>
    <div class="heading">淘宝宣布继续免费3年创造100万就业机会</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p051020.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2005年8月11日</div>
    <div class="heading">阿里巴巴结盟雅虎</div>
    <div class="lower">
	    <a href="/../cn/news/press_pdf/p050811.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2005年2月2日</div>
    <div class="heading">阿里巴巴在中国推出网上支付解决方案（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p050202.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alipay.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2004年7月19日</div>
    <div class="heading">淘宝网获取4,200万美元额外资金（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p040719.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_taobao.png" />
	</div>
</div>


<div class="feedBlock">
	<div class="hr">2004年2月17日</div>
    <div class="heading">阿里巴巴自一线投资者筹得8,200万美元资金（英文版）
</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p040217.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba.png" />
	</div>
</div>
<div class="feedBlock">
	<div class="hr">2002年10月17日</div>
    <div class="heading">阿里巴巴按计划登陆日本市场（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p021017.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2001年12月27日</div>
    <div class="heading">阿里巴巴会员数突破100万（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p011227.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2001年12月11日</div>
    <div class="heading">阿里巴巴于国内重要知识产权诉讼中取得胜诉（英文版）
</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p011211.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2001年9月10日</div>
    <div class="heading">阿里巴巴推出诚信通　助B2B中小企业买家卖家建立互信（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p010910.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>

<div class="feedBlock">
	<div class="hr">2001年5月30日</div>
    <div class="heading">阿里巴巴推出特选买家计划（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p010530.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>




<div class="feedBlock">
	<div class="hr">2000年12月19日</div>
    <div class="heading">阿里巴巴与四家领先的物流服务供应商携手创建货运报价及电子合同系统（英文版）</div>
    <div class="lower">
	    <a href="/../en/news/press_pdf/p001219.pdf" target="_blank" class="link">查看 PDF</a>
        <img src="/picture/press_logo_alibaba_com.png" />
	</div>
</div>
    </div>
	<p style="padding:0px 10px; font-size:14px;">本页提供的新闻稿包含具有针对性的部分业务、产品及服务信息，并不构成美国证券法律所要求的完整披露。本页提供这些新闻稿所包含的部分数据，其口径可能在某些方面与我们在财务报告中披露的内容存在差别。如欲了解符合美国证券法律及美国通用会计准则的财务及业务披露，请查阅我们在美国证监会网站上（<a href="http://www.sec.gov" target="_blank">www.sec.gov</a>）报备的披露文件。</p>
    <div class="pagerWrapper clearfix">
        <div class="pager"></div>
	</div>
</div>
<div class="push"></div>
</div>
<div class="footerWrapper">
    <?=$footerWrapper?>
</div>
</body>
</html>