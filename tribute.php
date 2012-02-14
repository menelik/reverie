<?php
/*
Template Name: tribute
source:
http://www.ravisaive.in/2012/01/heart-valentines-day-card-created-using.html
*/
get_header(); ?>
 
 <style>
 #mdcontainer {
 height:500px;
 margin:0 auto;
 position:relative;
 width:500px;
 z-index:1;
 }
 .hrt-lft {
 -moz-border-radius:150px 150px 0 0;
 -webkit-border-radius:150px 150px 0 0;
 background-color:#FF0000;
 float:left;
 height:90px;
 left:85px;
 position:absolute;
 width:180px;
 }
 .hrt-rgt {
 -moz-border-radius:150px 150px 0 0;
 -webkit-border-radius:150px 150px 0 0;
 background-color:#FF0000;
 height:90px;
 position:absolute;
 right:85px;
 width:180px;
 }
 .bot {
 border-left:165px solid transparent;
 border-right:165px solid transparent;
 border-top:165px solid #FF0000;
 font-size:0;
 left:85px;
 line-height:0;
 position:absolute;
 top:90px;
 width:0;
 z-index:1000;
 }
 .arw1 {
 background-color:#333333;
 height:10px;
 left:20px;
 position:absolute;
 top:80px;
 width:195px;
 z-index:1000;
 }
 .arw2 {
 background-color:#333333;
 height:10px;
 position:absolute;
 right:20px;
 top:80px;
 width:66px;
 z-index:1000;
 }
 .pointer {
 border-color:transparent transparent transparent #000000;
 border-style:solid;
 border-width:20px;
 font-size:0;
 line-height:0;
 position:absolute;
 right:-20px;
 top:64px;
 width:0;
 z-index:1000;
 }
 .pointer2 {
 border-color:#000000 #000000 #000000 transparent;
 border-style:solid;
 border-width:20px;
 font-size:0;
 left:0;
 line-height:0;
 position:absolute;
 top:65px;
 width:0;
 z-index:200;
 }
 .pointer3 {
 border-color:#FFFFFF transparent;
 border-style:solid;
 border-width:20px;
 font-size:0;
 left:20px;
 line-height:0;
 position:absolute;
 top:65px;
 width:0;
 z-index:300;
 }
 .shade1 {
 -moz-border-radius:100px;
 -webkit-border-radius:100px;
 background-color:#FF9900;
 height:100px;
 position:absolute;
 right:120px;
 top:25px;
 width:100px;
 z-index:1200;
 }
 .shade2 {
 -moz-border-radius:100px;
 -webkit-border-radius:100px;
 background-color:#FF0000;
 height:120px;
 position:absolute;
 right:115px;
 top:35px;
 width:120px;
 z-index:1300;
 }
 .shade3 {
 -moz-border-radius:200px 300px 200px 350px;
 -webkit-border-radius:200px 300px 200px 350px;
 background-color:#FF0000;
 height:170px;
 position:absolute;
 right:60px;
 top:102px;
 width:170px;
 z-index:1300;
 }
 .shade4 {
 border-color:#FF9900 #FF9900 #FF9900 transparent;
 border-style:solid;
 border-width:0 11px 30px 40px;
 font-size:0;
 line-height:0;
 position:absolute;
 right:200px;
 top:170px;
 width:0;
 z-index:1600;
 }
 .shade5 {
 border-color:transparent #FF0000;
 border-style:solid;
 border-width:40px 37px 0 0;
 font-size:0;
 line-height:0;
 position:absolute;
 right:195px;
 top:160px;
 width:0;
 z-index:1700;
 }
 .msg-holder
 {
 margin:0 auto;
 padding:10px;
 position:relative;
 top:300px;
 width:90%;
 text-align: center;
 }
 .c {
 -moz-border-radius:15px 0 0 15px;
 -webkit-border-radius:15px 0 0 15px;
 background-color:#333333;
 height:45px;
 position:absolute;
 right:140px;
 width:45px;
 }
 .c div {
 -moz-border-radius:10px 4px 4px 10px;
 -webkit-border-radius:10px 4px 14px 10px;
 background-color:#eeeeee;
 height:22px;
 position:relative;
 right:-20px;
 top:11px;
 width:25px;
 }
 .i {
 background-color:#333333;
 height:45px;
 position:absolute;
 left:20px;
 width:17px;
 }
 .l {
 background-color:#333333;
 height:45px;
 position:absolute;
 left:65px;
 width:35px;
 }
 .l div {
 -moz-border-radius:2px 0 3px 0;
 -webkit-border-radius:2px 0 3px 0;
 background-color:#eeeeee;
 height:33px;
 left:15px;
 position:relative;
 top:0;
 width:20px;
 }
 .o {
 -moz-border-radius:10px;
 -webkit-border-radius:10px;
 background-color:#333333;
 height:45px;
 left:105px;
 position:absolute;
 width:45px;
 }
 .o div {
 -moz-border-radius:0 3px 0 3px;
 -webkit-border-radius:0 3px 0 3px;
 background-color:#eeeeee;
 height:27px;
 left:19px;
 position:relative;
 top:9px;
 width:8px;
 }
 .v {
 border-color:#333333 transparent transparent;
 border-style:solid;
 border-width:60px 30px;
 font-size:0;
 left:152px;
 line-height:0;
 position:absolute;
 top:10px;
 width:0;
 z-index:300;
 }
 .v2 {
 background-color:#eeeeee;
 bottom:0;
 height:15px;
 left:165px;
 position:absolute;
 width:30px;
 z-index:1000;
 }
 .v3 {
 border-color:#eeeeee transparent transparent;
 border-style:solid;
 border-width:60px 25px;
 clip:rect(30px, 60px, 200px, 0px);
 font-size:0;
 left:158px;
 line-height:0;
 position:absolute;
 top:-25px;
 width:0;
 z-index:300;
 }
 .e {
 background-color:#333333;
 height:45px;
 left:217px;
 position:absolute;
 width:43px;
 }
 .e2 {
 -moz-border-radius:0 0 2px 0;
 -webkit-border-radius:0 0 2px 0;
 background-color:#eeeeee;
 height:6px;
 left:15px;
 position:relative;
 top:27px;
 width:28px;
 }
 .e3 {
 -moz-border-radius:0 2px 0 0;
 -webkit-border-radius:0 2px 0 0;
 background-color:#eeeeee;
 height:5px;
 left:15px;
 position:relative;
 top:4px;
 width:28px;
 }
 .s {
 -moz-border-radius:9px 0 9px 0;
 -webkit-border-radius:9px 0 9px 0;
 background-color:#333333;
 height:45px;
 position:absolute;
 right:85px;
 width:45px;
 }
 .s2 {
 -moz-border-radius:0 3px 3px 2px;
 -webkit-border-radius:0 3px 3px 2px;
 background-color:#eeeeee;
 height:6px;
 position:relative;
 right:0;
 top:27px;
 width:25px;
 }
 .s3 {
 -moz-border-radius:3px 2px 0 3px;
 -webkit-border-radius:3px 2px 0 3px;
 background-color:#eeeeee;
 height:6px;
 position:relative;
 right:-20px;
 top:5px;
 width:25px;
 }
 .ss {
 -moz-border-radius:9px 0 9px 0;
 -webkit-border-radius:9px 0 9px 0;
 background-color:#333333;
 height:45px;
 position:absolute;
 right:30px;
 width:45px;
 }
 .ss2 {
 -moz-border-radius:0 3px 3px 2px;
 -webkit-border-radius:0 3px 3px 2px;
 background-color:#eeeeee;
 height:6px;
 position:relative;
 right:0;
 top:27px;
 width:25px;
 }
 .ss3 {
 -moz-border-radius:3px 2px 0 3px;
 -webkit-border-radius:3px 2px 0 3px;
 background-color:#eeeeee;
 height:6px;
 position:relative;
 right:-20px;
 top:5px;
 width:25px;
 }
 </style>
 
	<!-- Row for main content area -->
	<div id="content" class="row">
	
		<div id="main" class="eight columns" role="main">
			<div class="post-box">
			
			<div id="mdcontainer">
			    <div class="hrt-lft"></div>
			    <div class="hrt-rgt"></div>
			    <div class="bot"></div>
			
			    <div class="arw1"></div>
			    <div class="arw2"></div>
			    <div class="pointer"></div>
			    <div class="pointer2"></div>
			    <div class="pointer3"></div>
			
			    <div class="shade1"></div>
			    <div class="shade2"></div>
			    <div class="shade4"></div>
			    <div class="shade5"></div>
			
			    <div class="msg-holder">
			    <h1>This is not The l337est Card in the World,</h1>
			    <h2> no...</h2>
			    <p>
			    This is just a tribute0rx.<br>
			    A tribute to the most amazing person<br>
			    who has been a constant blessing to me from the first day we met<br>
			    Here's to an entire lifetime of lulz<br>
			    </p>
			        <h1>HAPPY 8th ANNIVERSARY GHAIDA ZAHRAN!</h1>
			     </div>
			</div>
			
			</div>
		</div><!-- /#main -->

		<aside id="sidebar" class="four columns" role="complementary">
			<div class="sidebar-box">
				<?php get_sidebar(); ?>
			</div>
		</aside><!-- /#sidebar -->

	</div><!-- End content row -->
	
<?php get_footer(); ?>