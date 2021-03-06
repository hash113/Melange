<?php
session_start();
require 'oAuthInterface.php';
$oAuth = new oAuthLogin();
?>

<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-proximanova1proximanova2-n3-active wf-proximanova1proximanova2-n4-active wf-proximanova1proximanova2-i4-active wf-proximanova1proximanova2-n7-active wf-proximanova1proximanova2-n8-active wf-proximanova1proximanova2-n9-active wf-chaparralpro1chaparralpro2-n3-active wf-chaparralpro1chaparralpro2-n4-active wf-active" lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	-->
	
	
	<title>Melange: apology</title>
	
	<!-- Typekit -->
	<script async="" src="./js/ga.js"></script>
	<script type="text/javascript" src="./js/qhr0pzy.js"></script>
	<style type="text/css"></style>
	<style type="text/css">
	.tk-proxima-nova{font-family:proxima-nova-1,proxima-nova-2,sans-serif;}
	.tk-chaparral-pro{font-family:chaparral-pro-1,chaparral-pro-2,sans-serif;}
	</style>
	<!--link rel="stylesheet" type="text/css" href="./styles/propertybox.css"/-->
	<link rel="stylesheet" href="./css/qhr0pzy-d.css">
	<link href="./css/modern.css" rel="stylesheet">
	<link href="./css/header.css" rel="stylesheet">
	<link href="./css/logcon.css" rel="stylesheet">
	
	<script type="text/javascript">
	try{Typekit.load();}catch(e){}
	</script>
	
	<!-- modernizr -->
	<script src="./js/modernizr-1.7.min.js"></script>
	


<!-- CCS globals -->
<link rel="stylesheet" href="./css/global.css">


<!-- css home -->
<link rel="stylesheet" href="./css/style.css">

<style></style><style></style><script type="text/javascript" src="./js/injected.js"></script>




<title> MELANGE button generator </title>
<link rel="stylesheet" type="text/css" href="./styles/button-gen.css">
<link rel="stylesheet" href="./styles/jquery.gradientPicker.css" type="text/css" />
<!--<link rel="stylesheet" href="./vendor/jqPlugins/colorpicker/css/colorpicker.css" type="text/css" /> -->
<link rel="stylesheet" href="./styles/colorpicker_1.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="./themes/blackboard.css">

	<script src="./js/rainbow.js"></script>
	<script src="./js/css.js"></script>
	<script src="./js/generic.js"></script>

	<script src="./js/jquery-1.7.js"></script> 
	<script src="./js/jqueryUI-custom.js"></script>
	<script src="./js/colorpicker.js"></script>
	<script src="./js/jquery.gradientPicker.js"></script>




<script>

$(document).ready(function() {


	$('#code').click(function() {
	
		var css_text = 'padding-top : '+button_css.padding_top+';'+'\npadding-bottom :'+button_css.padding_bottom+';'+'\npadding-left :'+button_css.padding_left+';';
		css_text = css_text+'\npadding-right :'+button_css.padding_right+';'+'\ncolor :'+button_css.color+';'+'\nbackground_image :'+button_css.background_image+';';
		css_text = css_text+'\nborder-radius :'+button_css.border_radius+';'+'\nfont-size :'+button_css.font_size+';'+'\nfont-family :'+button_css.font_family+';';
		css_text = css_text+'\nborder-color :'+button_css.border_color+';'+'\nborder-style :'+button_css.border_style+';'+'\nborder-width :'+button_css.border_width+';';
	
		if($('#temp_div'))
		$('#temp_div').remove();
	
		var div = document.createElement('div');
		div.id="temp_div";
		div.innerHTML = '<pre><code data-language="css">'+css_text+'</code></pre>';
		Rainbow.color(div, function() {
		document.getElementById('output').appendChild(div);
});
	
	
    	
        $('.modal-profile').fadeIn("slow");
        $('.modal-lightsout').fadeTo("slow", .9);
    });
 
    $('a.modal-close-profile, .modal-lightsout').click(function() {
        $('.modal-profile').fadeOut("slow");
        $('.modal-lightsout').fadeOut("slow");
    });

	
	
	
	
	
	var $button = $("#sample");
	
	$("#ex1").gradientPicker({
				change: function(points, styles) {
					for (i = 1; i < styles.length; ++i) {
						$button.css("background-image", styles[i]);
						button_css.background_image = styles[i];
						
					}
				},
				fillDirection: "45deg",
				controlPoints: ["white 0%",  "#888888 100%"]
			});
			
			
			
			
			$('#color').ColorPicker({
	        color: '#000000',
	        onShow: function (colpkr) {
	            $(colpkr).fadeIn(500);
	            return false;
	        },
	        onHide: function (colpkr) {
	            $(colpkr).fadeOut(500);
	            return false;
	        },
	        onChange: function (hsb, hex, rgb) {
	            $('#color').css('background-color', '#' + hex);
				document.getElementById("sample").style.color='#'+hex;
				button_css.color = '#'+hex;	        
	        
	        
	        }
	    });

	    $('#border-color').ColorPicker({
	        color: '#000000',
	        onShow: function (colpkr) {
	            $(colpkr).fadeIn(500);
	            return false;
	        },
	        onHide: function (colpkr) {
	            $(colpkr).fadeOut(500);
	            return false;
	        },
	        onChange: function (hsb, hex, rgb) {
	            $('#border-color').css('background-color', '#' + hex);
				document.getElementById("sample").style.borderColor='#'+hex;
				button_css.border_color = '#'+hex;
					        
	        
	        
	        }
	    });

	    
	    

	    
	    document.getElementById("pdtb").onchange = $.proxy(function(){ 
		    
		    
		    var val = document.getElementById('pdtb').value;
		 
		    $('#sample').css("padding-top",val+'px');
		    $('#sample').css("padding-bottom",val+'px');
		    
		    button_css.padding_top = val+'px';
		    button_css.padding_bottom = val+'px';
		    		    
		    
		    
	    },document);

			
	   document.getElementById("pdlr").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('pdlr').value;
		    $('#sample').css("padding-left",val+'px');
		    $('#sample').css("padding-right",val+'px');
		    
		    button_css.padding_left = val+'px';
		    button_css.padding_right = val+'px';
		    
		    
		    
	    },document);	
	    
	    
	     document.getElementById("ftb").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('ftb').value;
		    $('#sample').css("font-size",val+'px');
		    
		    
		    button_css.font_size = val+'px';
		
		    
		    
		    
	    },document);	
	    
	    document.getElementById("br").onchange = $.proxy(function(){ 
		    
		    var val = document.getElementById('br').value;
		    $('#sample').css("border-radius",val+'px');
		    
		    
		    button_css.border_radius = val+'px';
		
		    
		    
		    
	    },document);	
			
			

	     document.getElementById("tsub").onclick = $.proxy(function(){ 
		    
		    var val = document.getElementById('text').value;
		    $('#sample').text(val);
		    
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    
	    document.getElementById("ffsub").onclick = $.proxy(function(){ 
		    
		    var font1 = document.getElementById("font-face"); // or in jQuery use: select = this;
		var FontFace = font1.options[font1.selectedIndex].text;
		document.getElementById('sample').style.fontFamily=FontFace;
		    
		    $('#sample').text(val);
		    button_css.font_family = FontFace;
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    document.getElementById("bssub").onclick = $.proxy(function(){ 
		    
		    var bor = document.getElementById("border-style"); // or in jQuery use: select = this;
		var borstyle = bor.options[bor.selectedIndex].text;
		document.getElementById('sample').style.borderStyle=borstyle;
		    
		    $('#sample').text(val);
		    button_css.border_style = borstyle;
		    
		    		
		    
		    
		    
	    },document);	
	    
	    
	    
	    
	    document.getElementById("bw").onchange = $.proxy(function(){ 
		    
		    
		    var val = document.getElementById('bw').value;
		 
		    $('#sample').css("border-width",val+'px');
		    
		    
		    button_css.border_width = val+'px';
		  
		    
		    
	    },document);
	    
	    
	   
	    

	
	
	
});



var button_css = {
	
			padding_top:'10px',
			padding_bottom:'10px',
			color:'black',
			background_image : 'none',
			padding_left: '10px',
			padding_right : '10px',
			border_radius : '0px',
			font_family : 'tahoma',
			font_size : '12px',
			border_color : 'black',
			border_style : 'none',
			border_width : '0px'
			
	
	
	
};

</script>
</head>
<body id="top">
<!--header-->
<div class="header">

	<a href="Front.php"><div class="headertile"id="heading">
	<h1 class="heading" ><B>
	Home</h1>
	</div></a>
	<a href="about.php"><div class="headertile">
	<h1 class="heading">
	About</h1>
	</div></a>
	<a href="feedback.php"><div class="headertile">
	<h1 class="heading">
	Contact</h1>
	</div></a>
	<a href="http://www.http://cyberslicks.wordpress.com"><div class="headertile">
	<h1 class="heading">
	Blog </h1>
	</div></a>
		
		<div id="userinfo">
		<?php
		if(isset($_SESSION['logged_in']) && ($_SESSION['logged_in']==1))
		{
		if(isset($_SESSION['oauth_vendor']) && (($_SESSION['oauth_vendor']=='facebook') || ($_SESSION['oauth_vendor']=='google')))
		{
		$userData = $oAuth->getUserData();
		echo "<img  src=\"".$userData['img']."\"  width=\"30px\" height=\"30px\"style=\"margin-left:-1112px;position:absolute; top:10px;\">";
		
		}
		echo "<span id=\"stwel\">Welcome "  .$_SESSION['user_name'];
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo " <a href=\"".$oAuth->getLogoutUrl()."\"><input type=\"button\" class=\"b-awesome\" value=\"Log Out\"/></a></span>";
		//echo "<a href=\"".$oAuth->getLogoutUrl()."\">log-out</a>";
	
		}
		else {
			
			echo " <a href=\"Front.php#loginbox\"><input type=\"button\" class=\"b-awesome\" value=\"Log In\"/></span></a>";
			
			
		}
		
		
			?>
		
		</div>
		
</div>

<div id="inside">










<div class="modal-profile">
<h2>CSS</h2>
    <a class="modal-close-profile" title="Close profile window" href="#"><img src="./images/close.png" alt="Close profile window" /></a>
     <div id="output">
     
     
     </div>
  
    </div>
    
    
    <div class="modal-lightsout"></div>





<aside id="panel-left">


<div class="tool">
<heading>style &nbsp;<span>border</span></heading>
</br>
<select id="border-style">
				
				<option>none</option>
				<option>hidden</option>
				<option>dotted</option>
				<option>dashed</option>
				<option>solid</option>
				<option>double</option>
				<option>groove</option>
				<option>ridge</option>
				<option>inset</option>
				<option>outset</option>
				</select>
				
<button id="bssub" class="awesome">update</button>
				

</div>

</br>


<div class="tool">
<heading>width &nbsp;<span>border</span></heading>
</br>
<input type="range" id="bw" min="1" max="30" width="200px" value="0">


</div>

</br>
<div class="tool">
<heading>Padding &nbsp;<span>top+bottom</span></heading>
</br>
<input type="range" id="pdtb" min="1" max="80" width="200px" value="10">


</div>

</br>

<div class="tool">
<heading>Padding &nbsp;<span>left+right</span></heading>
</br>
<input type="range" id="pdlr" min="1" max="80" width="200px" value="10">


</div>


</br>
<div class="tool">
<heading>size &nbsp;<span>font</span></heading>
</br>
<input type="range" id="ftb" min="2" max="25" width="200px" value="12">


</div>



</br>


<div class="tool">
<heading>radius &nbsp;<span>border</span></heading>
</br>
<input type="range" id="br" min="1" max="30" width="200px" value="0">


</div>





</aside>
<aside id="panel-right">



</br>


<div class="tool">
<heading>Color &nbsp;<span>Font</span></heading>
</br>
<input type="button" id="color" style="background-color:#000000; border:thin solid white;height:50px;width:50px;margin-left:5px;">


</div>


</br>


<div class="tool">
<heading>background &nbsp;<span>button</span></heading>
</br>
<div class="grad_ex" id="ex1"></div>
</div>




</br>


<div class="tool">
<heading>text &nbsp;<span>button</span></heading>
</br>
<input type="input" id="text" style="background-color:#000000; border:thin solid white;margin-left:5px;color:white;outline:none;height:15px;width:150px;">
<button id="tsub" class="awesome">update</button>

</div>

</br>


<div class="tool">
<heading>family &nbsp;<span>font</span></heading>
</br>

<select id="font-face">
				<option>tahoma</option>
				<option>lucida</option>
				<option>arial black</option>
				<option>sans-serif</option>
				<option>impact</option>
</select>



<button id="ffsub" class="awesome">update</button>

</div>

</br>


<div class="tool">
<heading>Color &nbsp;<span>border</span></heading>
</br>
<input type="button" id="border-color" style="background-color:#000000; border:thin solid white;height:50px;width:50px;margin-left:5px;">


</div>

</br>




</aside>

<section id="preview">
<center> <button id="sample">button</button></center>

</section>
<br>
</br>
<center><button id="code" class="bawesome" style="margin-left:280px;">generate-code</button></center>



</div>

</body>
</html>