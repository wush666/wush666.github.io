<?php
  $kefu_list=[
      '通用场景'=>[

        'aiqi'=>'艾琪，温柔女声',
        'aicheng'=>'艾诚，标准男声',
        'aida'=>'艾达，标准男声',
        'aijia'=>'艾佳，标准女声',
        'siqi'=>'思琪，温柔女声',
        'sijia'=>'思佳，标准女声',
        'sicheng'=>'思诚，标准男声',
        'ruoxi'=>'若兮，温柔女声',
        'ninger'=>'宁儿，温柔女声',
        'ruilin'=>'瑞琳，标准女声',
        // 'xiaomeng'=>'小梦，标准女声(删)',
        // 'xiaowei'=>'小威，标准男声(删)',
        'xiaoyun'=>'小云，标准女声',
        'xiaogang'=>'小刚，标准男声',
      ],
      '客服场景'=>[
        'aixia'=>'艾夏，自然女声',
        'aiyue'=>'艾悦，温柔女声',
        'aiya'=>'艾雅，严厉女声',
        'aijing'=>'艾婧，严厉女声',
        'aimei'=>'艾美，甜美女声',
        'siyue'=>'思悦，温柔女声',
        'aiyu'=>'艾雨，自然女声',
        'xiaomei'=>'小美，甜美女声',
        'yina'=>'伊娜，浙普女声',
        'sijing'=>'思婧，严厉女声',
        // 'xiaoxue'=>'小雪，温柔女声(删)',
        // 'amei'=>'阿美，甜美女声(删)',
        'Aina'=>'艾娜，浙普女声(新)',
        'Aishuo'=>'艾硕，自然男声',
				'zhishuo'=>'知硕，普通话男声',
				'zhiya'=>'知雅，普通话女声',
      ],
      '童声场景'=>[
        'aitong'=>'艾彤，儿童音',
        'aiwei'=>'艾薇，萝莉女声',
        'aibao'=>'艾宝，萝莉女声',
        'xiaobei'=>'小北，萝莉女声',
        'sitong'=>'思彤，儿童音',
        'jielidou'=>'杰力豆，治愈童声',
      ],
      '英文场景'=>[
        'Luca'=>'Luca,英音男声',
        'Luna'=>'Luna,英音女声',
        'Emily'=>'Emily,英音女声',
        'Eric'=>'Eric,英音男声',
        'Olivia'=>'Olivia,英音女声',
        'William'=>'William,英音男声',
        'Wendy'=>'Wendy,英音女声',
        // 'Halen'=>'Halen,英音女声(删)',
        'Harry'=>'Harry,英音男声',
        'Abby'=>'Abby,美音女声(新)',
        'Andy'=>'Andy,美音男声(新)',
        'Lydia'=>'Lydia,英中女声(新)',
      ],
      '方言场景'=>[
        'shanshan'=>'姗姗，粤语女声',
        'Xiaoyue'=>'小玥，四川话女声',
        'qingqing'=>'青青，台湾话女声',
        'cuijie'=>'翠姐，东北话女声',
        'xiaoze'=>'小泽，湖南男声',
        'jiajia'=>'佳佳，粤语女声',
				'taozi'=>'桃子，粤语女声',
				'dahu'=>'大虎，东北话男声',
				'aikan'=>'艾侃，天津话男声',
				'kelly'=>'Kelly,香港粤语女声',
      ]
  ];

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>免费无限量-文字合成语音</title>
	<link rel="apple-touch-icon" sizes="76x76" href="../img/logo_r.jpg">
	<link rel="icon" type="image/png" href="../img/icon.jpg">
	<script src='https://cdn.staticfile.org/jquery/3.4.1/jquery.min.js'></script>
	<style>
		*{
			padding:0;
			margin:0;
		}
		body{
			background: #181919;
			color:#fff;
		}
		ul,li{
			list-style: none;
		}

		h1{
			text-align: center;
			font-weight: 400;
			margin-top: 50px;
		}
		h4{
			text-align: center;
			font-weight: 400;
			margin-top: 20px;
		}
		form{
			width: 100%;
			max-width: 1100px;
			border-top:2px solid #4b4b4b;
			margin:40px auto;
			padding-top:20px;
		}
	
		#left{
			width:49%;
			height:410px;
			float:left;
			background:black;
		}
		#left p{
			color:#8f8f8f;
			font-size: 12px;
			margin-left:10px;
		}
		#text{
			background:black;
			border:none;
			outline:none;
			resize: none;
			width:96%;
			height:90%;
			color:white;
			padding:2%;
			font-size:18px;
			font-family:'楷体';
		}
		#right{
			width:50%;
			height:410px;
			float:right;
			background: black;
		}
		#right ul{
			display:none;
			background: #181919;
			width:96%;
			margin-left:2%;
			padding-bottom:10px;
		}
		#right .title{
			margin-top:10px;
		}
		#right .title li{
			font-size: 14px;
			width:18%;
			text-align: center;
			color:#fff;
			line-height: 28px;
			display: inline-block;
			cursor:pointer;
		}
		#right .title .select{
			border-radius: 5px;
			color:#ff6a00;
			background:#252525;
		}
		#right .list{
			height:200px;
		}
		#right .list li{
			position: relative;
			font-size: 13px;
			width:28%;
			height:40px;
			padding-left: 20px;
			text-align: left;
			color:#fff;
			line-height: 40px;
			cursor:pointer;
			display: inline-block;
		}
		
		#right .list img{
			vertical-align: middle;
		}
		#right .list li.select{
			background:#ff6a00;
		}
		#right .list .select:before{
			content: "";
		    position: absolute;
		    background-image: url(data:image/png;base64,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);
		    background-size: contain;
		    background-repeat: no-repeat;
		    background-position: 50%;
		    left: 6px;
		    top: 50%;
		    height: 12px;
		    width: 12px;
		    transform: rotate(-10deg) translateY(-6px);
		}
		#right button{
			display: block;
			width:150px;
			height:35px;
			line-height: 35px;
			background:#ff6a00;
			border:none;
			font-size: 15px;
			color:#fff;
			margin-top:20px;
			margin-left:2%;
		}
		#right button .play{
		    display: inline-block;
		    border: 7px solid transparent;
		    border-left: 12px solid #fff;
		    position: relative;
		    top: -1px;
		    vertical-align: middle;
		}

		#audio{
			width: 100%;
			max-width: 1100px;
			height:80px;
			margin:0 auto;
			text-align: center;
		}
	</style>

	<style>
		.slider {
			margin-top:15px;
			width:94%;
			margin-left:3%;
		}
		.slider .slider-inner{
			width:calc(100% - 90px);
			background: hsla(0,0%,100%,.1);
		    height: 3px;
		    position: relative;
		    display: inline-block;
		    top:-2px;
		}
		.slider .slider-name{
			font-size: 15px;
			width:40px;
			display: inline-block;
		}
		.slider .slider-active{
			background:#ff6a00;
			height:3px;
			width:50%;
			position: relative;
		}
		.slider .slider-cursor{
			border-radius: 50%;
			width:10px;
			height:10px;
			background:#ff6a00;
			position: absolute;
			right:-5px;
			top:-3.5px;
			cursor: pointer;
		}
		.slider .slider-num{
			display: inline-block;
			font-size: 15px;
		}
		
		#bg{
			width:100%;
			height:100%;
			position: fixed;
			left:0;
			top:0;
			background: black;
			opacity:0.6;
			display: none;
		}
		#bg .box{
			width:150px;
			height:40px;
			border-radius: 20px;
			margin:400px auto 0;
			background:#fff url(./loading.gif) no-repeat 10px center;
			background-size:25px;
			text-align: left;
			text-indent: 40px;
			line-height: 40px;
			font-family: 楷体;
			font-size: 18px;
			color:black;
		}

		#footer{
			height:35px;
			line-height:35px;
			background: #333;
			color:#afafaf;
			font-size:13px;
			text-align:center;
		}
		#footer a{
			color:#afafaf;
		}

	</style>

<script>
$(function(){
	if(localStorage.cache_text!='undefined'){
		$('#text').html(localStorage.cache_text)
	}
	
	$('#right .title:nth-child(1)').show()
	$('#right .list:nth-child(2)').show()

	$('#right .title li').click(function(){
		var i=$(this).index()+2
		$('#right .title li').removeClass('select')
		$(this).addClass('select')
		$('#right .list').hide()
		$('#right .list:nth-child('+i+')').show()
	})

	$('#right .list li').click(function(){
		$(this).siblings('li').removeClass('select')
		$(this).addClass('select')
	})

	var flag=true;
	$('#right button').click(function(){
		if(!flag) return false;
		var filename='Audio_'+Number(Math.random().toString().substr(3, 3) + Date.now()).toString(36)

		$('#audio').html('')
		var text=$.trim($('#text').val())
		var index=$('#right .title .select').index()+2
		var name=$('#right .list:nth-child('+index+') .select').attr('name')
		var volume=$('.sound').html()
		var speech_rate=$('.speech').html()
		if(!text.length || text=='请输入要合成的源文本'){
			alert('请输入要合成的文本');return false;
		}
		localStorage.cache_text=text
		$('#bg').show();
		flag=false;
		$.ajax({
			url:'./nls_to.php',
			type:'post',
			data:{'text':text,'voice':name,'filename':filename,'volume':volume,'speech_rate':speech_rate},
			dataType:'text',
			// timeout: 500000,
			success:function(e){
				$('#bg').hide();
				// if(e=='1'){
					$('#audio').html('<audio src="'+filename+'.mp3" controls="controls">您的浏览器不支持 audio 标签，请升级浏览器。</audio>')
				// }else{
				// 	alert('音频合成失败，请重试，如多次生成仍失败，请联系管理员')
				// }
				flag=true
			}
		})
		return false;
	})
	

	$('.slider .slider-cursor').mousedown(function(){
		var that=$(this).parent('.slider-active').parent('.slider-inner')
		var vo=that.next('.slider-num').hasClass('sound')
		$(document).mousemove(function(e){
			var length=that.width()
			var width=e.pageX-that.offset().left

			var sound=parseInt(width/length*100)
			var speech=parseInt(width/length*1000-500)
			if(vo){
				if(sound<=0){
					that.children('.slider-active').css('width','0')
					that.next('.sound').html(0)
				}else if(sound>=100){
					that.children('.slider-active').css('width',length)
					that.next('.sound').html('100')
				}else{
					that.children('.slider-active').css('width',width)
					that.next('.sound').html(parseInt(width/length*100))
				}
			}else{
				if(speech<=-500){
					that.children('.slider-active').css('width','0')
					that.next('.speech').html('-500')
				}else if(speech>=500){
					that.children('.slider-active').css('width',length)
					that.next('.speech').html('500')
				}else{
					that.children('.slider-active').css('width',width)
					that.next('.speech').html(parseInt(width/length*1000-500))
				}
			}
		})
		$(document).mouseup(function(){
	      $(document).off('mousemove');
	    });
	})


	$('.slider .slider-inner').click(function(e){
		var length=$(this).width()
		var width=e.pageX-$(this).offset().left
		$(this).children('.slider-active').css('width',width)
		$(this).next('.sound').html(parseInt(width/length*100))
		$(this).next('.speech').html(parseInt(width/length*1000-500))
	})	

})
</script>
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?ec43843c50e18248486b840aec649cb2";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
</head>
<body>
	<div id="menu" style="margin:10px;">
			<a target="_blank" href="/" style="color:white;font-size:16px;text-decoration: none;border-bottom: 2px solid #fff;">首页</a>&nbsp;
		</div>
	<h1>文本合成语音</h1>
	<h4>---音频文件生成后支持自由下载，更多音色不定时更新</h4>
	<form action="">
		<div id="left">
			<textarea name="text" id="text" placeholder="">请输入要合成的源文本</textarea>
			<p>单次最多可输入<font style="color:#e6a243;">300</font>个字，超出部分合成将被截断</p>
		</div>
		<div id="right">
			<ul class="title">
			  <?php
			  foreach($kefu_list as $k=>$v){
			  	if($k=='通用场景'){
			  		echo "<li class='select'>{$k}</li>";
			  	}else{
			  		echo "<li>{$k}</li>";
			  	}
			  }
			  ?>
			</ul>

			<?php
			$j=1;
			foreach($kefu_list as $k=>$list){
				$i=0;
				echo '<ul class="list">';
				foreach($list as $name=>$kefu){
					$img_url=strstr($kefu,'男')?$j.'2.png':$j.'1.png';
					if(!$i){
						echo "<li class='select' name='{$name}'><img src='./{$img_url}' width='30'></img> {$kefu}</li>";
					}else{
						echo "<li name='{$name}'><img src='./{$img_url}' width='30'></img> {$kefu}</li>";
					}
					$i++;
				}
				echo '</ul>';
				$j++;
			}
			?>

			
			<div class="slider">
				<div class="slider-name">音量</div>
				<div class="slider-inner">
					<div class="slider-active">
						<div class="slider-cursor"></div>
					</div>
				</div>
				<div class="slider-num sound">50</div>
			</div>

			<div class="slider">
				<div class="slider-name">语速</div>
				<div class="slider-inner">
					<div class="slider-active">
						<div class="slider-cursor"></div>
					</div>
				</div>
				<div class="slider-num speech">0</div>
			</div>

			<button ><div class="play"></div>立即合成</button>
		</div>
		<div style="clear:both;"></div>
	</form>

	<div id="audio"></div>
	
	<div id="bg">
		<div class="box">合成中。。。</div>
	</div>
	
	<div id="footer">
			&copy; 2023 mohuanai.com杭州魔幻科技 版权所有 &nbsp;
			<a href="https://beian.miit.gov.cn/" target="_blank">浙ICP备2023050729号-1</a></div>
</body>
</html>