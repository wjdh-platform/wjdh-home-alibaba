<?php
$menu_content ='
<ul class="menu">
    	<li id="mobileSearchBox" style="display:none;">
        	<div id="mobileSearchBoxArea">
                <form class="jqtransform" method="get" action="../global/search.php" name="subSearchForm">
				    <input type="hidden" name="filter" value="0" />
					<input type="hidden" name="lang" value="cn" />
                    <input type="text"  class="mobileSearch"  id="search" name="q" placeholder="搜寻阿里巴巴集团">
                    <input type="submit" class="mobileSearchSubmit" value="" title="Search">
                </form>
            </div>
        </li>
    	<li><span>关于我们</span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
	                	<li><a href="/about/overview.php">公司简介</a></li>
    	            	<li><a href="/about/businesses.php">业务范畴</a></li>
        	        	<li><a href="/about/history.php">历史及里程碑</a></li>
            	    	<li><a href="/about/leadership.php">领导团队</a></li>	
					</ul>
                    <ul class="submenu">
                        <li><a href="/about/culture.php">文化和价值观</a></li>
                        <!--<li><a href="/about/sustainability.php">可持续发展</a></li>-->
                        <li><a href="/about/integrity.php">廉正合规</a></li>
                        <li><a href="/about/faqs.php">常见问题</a></li>
					</ul>
				</div>
			</div>
		</li>

        <li><span>新闻及媒体资源</span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
                        <li><a href="/news/press.php">新闻发布</a></li>
	                    <li><a href="/news/video.php">视频</a></li>
					</ul>
                    <ul class="submenu">
                        <li><a href="/news/library.php">媒体资料库</a></li>
					</ul>
				</div>
			</div>
        </li>
        <li><span>联系我们</span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
                        <li><a href="/contact/offices.php">办公地点</a></li>
                        </ul>
				</div>
			</div>        
        </li>
        <div class="submenuWrapperBg"></div>
	</ul>
';