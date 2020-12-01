<?php

$headerWrapper = 
'


	<div class="header clearfix">
		<div class="logo"><a href="/index.php"><img src="/picture/logo-header.png"></a></div>
        <div class="fright" style="display:none;">
            <div class="search"> 
                <div class="searchWrapper">
                <form class="jqtransform" method="get" action="../global/search.php" name="subSearchForm">
				    <input type="hidden" name="filter" value="0" />
					<input type="hidden" name="lang" value="cn" />
                    <input type="text" id="search" name="q" placeholder="搜寻阿里巴巴集团">
                    <button type="submit" id="submitSearch">搜索</button>
				</form>
                </div>
            </div>
            <div class="selectWrapper offering">
            	<div class="defaultText">阿里巴巴集团相关平台  &nbsp;</div>
               	<select id="offering" class="dropdown" onchange="javascript:offeringDropDown(this.value);">
                    <option value="http://www.tmall.com/">天猫</option>
                    <option value="http://www.taobao.com/">淘宝</option>
                    <option value="http://www.freshhema.com/">盒马</option>
                    <option value="http://www.alihealth.cn/">阿里健康</option>
                    <option value="http://www.1688.com/">1688.com</option>
                    <option value="https://lst.1688.com/">零售通</option>
                    <option value="http://www.aliexpress.com/">全球速卖通</option>
                    <option value="https://group.lazada.com/">Lazada集团</option>
                    <option value="https://www.kaola.com/">考拉海购</option>
                    <option value="http://www.alibaba.com/">阿里巴巴国际站</option>
                    <option value="http://www.ele.me/">饿了么</option>
                    <option value="https://www.koubei.com/">口碑</option>
                    <option value="https://www.fliggy.com/">飞猪</option>
                    <option value="http://www.youku.com/">优酷</option>
                    <option value="http://www.alibabapictures.com/">阿里影业</option>
                    <option value="https://www.damai.cn/">大麦</option>
                    <option value="https://www.amap.com/">高德地图</option>
                    <option value="https://www.dingtalk.com/">钉钉</option>
                    <option value="http://www.cainiao.com/">菜鸟网络</option>
                    <option value="http://www.alimama.com/">阿里妈妈</option>
                    <option value="http://www.antgroup.com/">蚂蚁集团</option>
                    <option value="http://www.aliyun.com/">阿里云</option>
                    <option value="http://www.alisports.com/">阿里体育</option>
                    <option value="http://www.ent-fund.org/">阿里巴巴创业者基金</option>
                    <option value="https://agi.alibaba.com/">阿里巴巴全球创新部</option>
        	    </select>
            </div>
            <div class="selectWrapper lang">
                <select id="lang" class="dropdown" onchange="javascript:changeLanguage(this.value);">
                    <option  value="en">EN</option>
                    <option selected value="cn">简</option>  
                    <option  value="tc">繁</option>                    
                </select>
            </div>
		</div>
    </div>
    
    <div class="headerMobile clearfix">
    	<a href="/index.php" id="logoMobile"></a>
        
        <a href="javascript:;" id="navBtnMobile"></a>
        <div id="langMobileArea" style="display:none;">
            <select id="langMobile" class="dropdown" onchange="javascript:changeLanguage(this.value);">
                <option  value="en">EN</option>
                <option selected value="cn">简</option>       
                <option  value="tc">繁</option>                
            </select>
        </div>
    </div>


    ';