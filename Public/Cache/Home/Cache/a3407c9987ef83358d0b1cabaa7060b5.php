<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo ($seo["title"]); ?></title>
        <meta name="keywords" content="<?php echo ($seo["keywords"]); ?>">
        <meta name="description" content="<?php echo ($seo["description"]); ?>">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Skins/basic.css?v=<?php echo (VERSION); ?>" />
		<link href="__PUBLIC__/Assets/css/font.css?v=<?php echo (VERSION); ?>" rel="stylesheet" type="text/css" />
		<link href="__PUBLIC__/Assets/css/font-ie7.css?v=<?php echo (VERSION); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Skins/<?php echo C('DEFAULT_THEME');?>/css.css?v=<?php echo (VERSION); ?>" />
		<link href="__PUBLIC__/Skins/favicon.ico" rel="shortcut icon">
        <script type="text/javascript" src="__PUBLIC__/Skins/jquery.min.js?v=<?php echo (VERSION); ?>"></script>
        <script type="text/ecmascript" src="__PUBLIC__/Skins/common.js?v=<?php echo (VERSION); ?>"></script>
		<style>
			.wrap{width:<?php echo $config['width'] ?>px;min-width:<?php echo $config['width'] ?>px;}
			<?php if(empty($config["category_show_description"])): ?>.time-list li{height:32px;}<?php endif; ?>
		</style>
    
<!-- vr345.com Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?e1f2965d9d0e36e96aeb3ee7c62c1920";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript">
/*
 var scrollFunc=function(e){ 

  e=e || window.event; 
  if(e.wheelDelta){
    
    if(e.wheelDelta==120)
    {
      //向上滚动事件
	  document.getElementById("topnav").style.display="block";
      
    }else
    { 
      //向下滚动事件
	  document.getElementById("topnav").style.display="none";
      
    } 
  }else if(e.detail){
    //Firefox 
    if(e.detail==-3) { 
      //向上滚动事件<br> 
      document.getElementById("topnav").style.display="block";
      
    }else { 
      //向下滚动事件<br>
      document.getElementById("topnav").style.display="none";
      
    } 
  } 
 };
 if(document.addEventListener){ 
  //adding the event listerner for Mozilla
   document.addEventListener("DOMMouseScroll" ,scrollFunc, false);
   }
   //IE/Opera/Chrome 
   window.onmousewheel=document.onmousewheel=scrollFunc;
   */



</script>

</head>
    <body data-spy="scroll" data-target="#nav-plane" data-offset="140">
        <div id="topbar">
            <div class="wrap">
                <div class="top-info left">
                    <span class="welcome"><?php echo ($config["sub_title"]); ?></span>
                </div>
                <div class="top-link right">
                   <!--#<a href="javascript:;" onClick="addFav('http://<?php echo ($_SERVER["HTTP_HOST"]); ?>','<?php echo ($config["title"]); ?>')"><i class="icon-folderopen"></i>按Ctrl+D收藏</a> -->
                </div>
            </div>
        </div><!--#topbar-->
        
        <div id="topmain">
            <div class="wrap">
                <div class="logo left">
                	<a href="<?php echo U('/');?>"><img src="<?php if(empty($config["logo"])): ?>__PUBLIC__/Skins/logo.png<?php else: ?>__PUBLIC__/Uploads<?php echo ($config["logo"]); endif; ?>" alt="<?php echo ($config["title"]); ?>" /></a>
                </div>
                <div class="search">
	<form id="search" action="http://<?php echo ($_SERVER['HTTP_HOST']); echo C('ROOT_FILE');?>" target="_self">
		<div class="opt" id="search-opt">
			<a href="javascript:;"><img id="search-img" src="__PUBLIC__/Assets/img/favicon.ico"></a>
			
		</div>
		<input type="text" id="search-kw" class="search-input" name="kw" placeholder="<?php echo lang('search');?>" autocomplete="off" value="<?php echo ($_GET['kw']); ?>">
		<input name="ie" type="hidden" value="utf-8">
		<input name="a" type="hidden" value="search">
		<input type="submit" class="search-button" value="">
	</form>
</div> 
            </div>
        </div><!--#topmain-->
      
        <div id="topnav">
            <div class="wrap">
                <div class="nav">
                    <ul>
                        <li <?php if(str_replace('/','',ACTION_NAME) == 'index'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/index');?>" id="home" ><?php echo lang('index');?></a>
                        <?php if(is_array($navigation)): $i = 0; $__LIST__ = $navigation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if($nav['alias'] != 'vrinfo'): if($nav['alias'] != 'new'): ?><li <?php if($actionName == $nav['alias']): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/'.$nav['alias']);?>"><?php echo ($nav["name"]); ?></a></li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                       <li ><a href="http://www.vr345.cn/"target="_blank">VR资讯网</a></li></ul> 	
					</ul>
                </div>
            </div>
        </div><!--#topnav--> 



<div id="container" class="wrap homepage">

    

	

    <?php if(!empty($config["item_hot_show"])): ?><div class="section mtop">
	<h2 class="title"><i class="icon-map"></i><?php echo lang('recommend');?></h2>
	<div class="content">
		<ul class="gallery-list clearfix">
			<?php $hot = D('Item')->hotList(); ?>
			<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<div class="img" style="width:<?php echo ($config["recommend_img_width"]); ?>px"><a href="<?php echo ($vo["url"]); ?>" target="_blank" ><img src="__PUBLIC__/Uploads<?php echo ($vo["logo"]); ?>" width="100%" alt="<?php echo ($vo["title"]); ?>" /></a></div>
				<div class="description"><h2><?php echo ($vo["title"]); ?></h2><p><?php echo ($vo["description"]); ?></p></div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div><!--.section--><?php endif; ?> 

    

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="section mtop" id="<?php echo ($vo["alias"]); ?>">

        <h2 class="title">

            <i class="icon-<?php echo ($vo["icon"]); ?>"></i><?php echo ($vo["name"]); ?>

            <span class="sub-category">

                <?php if(!empty($vo["category"])): ?><a  class="current"><?php echo lang('all');?></a><?php endif; ?>

                <?php if(is_array($vo["category"])): $i = 0; $__LIST__ = $vo["category"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><a><?php echo ($cat["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

            </span>  

		   <?php if($vo['alias'] != 'other'): endif; ?>
        </h2>

        <div class="content">

            <ul class="time-list clearfix" id="title">

            	<?php if(is_array($vo["list"])): $i = 0; $__LIST__ = $vo["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li>
				    <div class="show1">
				    <a href="<?php echo ($li["url"]); ?>" target="_blank" ><?php echo ($li["title"]); ?> </a>
					</div>
					
					<div class="show2">
					<?php if($li['logo'] != ''): ?><div class="pic-ietm"><img class="dpimg" src="/Public/Uploads<?php echo ($li["logo"]); ?>" /> </div><?php endif; ?>
					<?php if($li['logo'] == ''): ?><a href="<?php echo ($li["url"]); ?>" target="_blank" class="a_dec" ><?php echo ($li["description"]); ?> </a><?php endif; ?>
					</div>
				   
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

        </div>
		

		<?php if(is_array($vo["category"])): $i = 0; $__LIST__ = $vo["category"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><div class="content" id="<?php echo ($cat['alias']); echo ($cat['tags_id']); ?>" style="display:none">

            <ul class="time-list clearfix" id="title">

			    <?php $catlist = D('Item')->getcategoryList($cat['tags_id']); ?>

				

            	<?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li>
                    <div class="show1">
					<a href="<?php echo ($li["url"]); ?>" target="_blank" ><?php echo ($li["title"]); if(($li["is_hot"]) == "1"): endif; ?></a>
					</div>
                    <div class="show2">
					<?php if($li['logo'] != ''): ?><div class="pic-ietm"><img class="dpimg" src="/Public/Uploads<?php echo ($li["logo"]); ?>" /> </div><?php endif; ?>
					<?php if($li['logo'] == ''): ?><a href="<?php echo ($li["url"]); ?>" target="_blank" class="a_dec"><?php echo ($li["description"]); ?> </a><?php endif; ?>
					</div>
				

				</li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>

		

    </div><?php endforeach; endif; else: echo "" ;endif; ?>

	

	<?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>



    

</div><!--#container-->





<script type="text/javascript">


$('.section').each(function(){

	$(this).find('.sub-category a').removeClass('current').eq(0).addClass('current')

	$(this).find('.content').hide().eq(0).show()

    $(this).find('.sub-category a').each(function(i){

		$(this).hover(function(){

		$(this).parents('.section ').find('.sub-category a').removeClass('current').eq(i).addClass('current')

		$(this).parents('.section ').find('.content').hide().eq(i).show()

	})

})

})



</script>

<style type="text/css">

#vrinfo > div > ul  li{}

</style>

<script type="text/javascript">

$(document).ready(function(){   
     $("#title .show1").mouseover(function(){
	      $(this).hide();
		  $(this).next(".show2").show();
          //$(this).slideUp("normal");
          //$(this).next(".show2").slideDown("normal");
      });
   
     $("#title .show2").mouseout(function(){
	      $(this).hide();
		  $(this).prev(".show1").show();
          //$(this).slideUp("normal");
          //$(this).prev(".show1").slideDown("normal");
      });
	  
})

</script>

<script type="text/javascript">

$(function(){

	$('.gallery-list .img').hover(function(){

		var height = $(this).outerHeight()+10;

		$(this).parent().addClass('active');

		$(this).next('.description').css('padding-top',height).stop(true,true).fadeIn();

	},function(){ $(this).next('.description').stop(true,true).fadeOut('fast',function(){ $(this).parent().removeClass('active');});});	

	$('.gallery-list a').click(function(){

		var href = $(this).attr('href');

		countClick(href);

	})

})

</script>


<div style="width: 1200px;position: relative;overflow: hidden; margin: 0 auto;">
<?php if(!empty($config["slideshow"])): ?><div class="benner mtop" id="banner" style="background:none">
	<ul>
		<?php $slideshow = M('Advert')->where('status=1')->order('sort_order desc')->select(); ?>
		<?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["link"]); ?>" target="<?php echo ($vo["target"]); ?>"><img src="__PUBLIC__/Uploads<?php echo ($vo["image"]); ?>"><div class="banner_content"><?php echo ($vo["description"]); ?></div></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/Skins/unslider.min.js"></script>
<script type="text/javascript">
$(function() { $('#banner').unslider({fluid: true,dots: true});});
</script><?php endif; ?> 




        <div id="footer">
        	<div class="wrap">
                <div class="footer-top">
                    <ul class="left">
                    	<?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> 友情链接
                             <a href="<?php echo ($vo["link"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="footer-bottom">
                	<dl class="clearfix">
                        <dd>
                        	<div class="copyright">
								<?php echo ($config["footer"]); ?>
							</div>
                            <div class="linklist">
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div><!--#footer-->
<script>
function countClick(url){
	$.post("http://<?php echo ($_SERVER['HTTP_HOST']); echo C('ROOT_FILE');?>?a=click",{url:url});
}
</script> 
    </body>
</html>