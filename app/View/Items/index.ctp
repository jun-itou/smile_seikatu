
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>酢まいる生活</title>
<<<<<<< HEAD
		<link rel="stylesheet" type="reset/css" href="./css/reset.css">
		<link rel="stylesheet" type="text/css" href="./css/top.css">
	</head>
	<body>
		<header>
        <!---ナビゲーションメニュー                    -->
            <nav>
                <ul id="menu">
                    <li id="menu01"><a href="#" title="">All VINES</a></li>
                    <li id="menu02"><a href="#" title="">Japanese VINES</a></li>
                    <li id="menu03"><a href="#" title="">World VINES</a></li>
                    <li id="menu04"><a href="#" title="">Recipie</a></li>
                    <li id="menu05"><a href="#" title="">Beuty</a></li>
                    <li id="menu06"><a href="#" title="">Contact</a></li>
                    <li id="login"><a href=""><img src="./img/sign-in-up.png"></a></li>
                    <li id="cart"><a href=""><img src="./img/cart.png"></a></li>
                </ul>
            </nav>
         <!---../ナビゲーションメニュー         終了             -->
        <!---メインヴィジュアル                      -->
            <div id="main-visual">
                <video src="./img/closeupcloudy.mp4" poster="./img/sky.png" id="bgvid" autoplay loop></video>
                <ul id="mid-cont">
                    <img src="./img/logo_black.png" alt="" name="logo">
                    <p><strong>いつも おいしく、 うつくしく</strong></p>
                    <p><strong>飾らない笑顔を日常に。</strong></p>
                </ul>
            </div>
         <!---./メインヴィジュアル  終了  -->
        </header>
		<div class="wrapper">
			<main>
                <div id="new-item">
                    <h2>New VINES</h2>
                        <?foreach($NewItemData as $key => $value):?>
                            <div class="new-item1">
                                <?= $value['Items']['Name'];?>
                            </div>
                        <?endforeach?>
                </div>
=======
		<link rel="stylesheet" type="reset/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="TOP.css">
	</head>
	<body>
		<div class="wrapper">
			<header>			
				<div class="header">
					<h1>TOP画像</h1>
				</div>
			</header>

			<main>
				<div class="new_item">
					<h1>新商品</h1>
					
					<?
					foreach($NewItemData as $key => $value):?>
						<div class="new_item1">	
							<?= $value['Items']['Name'];?>	
						</div>
					<?endforeach?>
				</div>
>>>>>>> 213d44571ac5a464e814f4c0a8e3647a86926c5a

				<div class="japanese_vin">
					<p>Japanese VIN's</p>
					<ul>
						<li class="li">JAP1</li>
						<li class="li">JAP2</li>
						<li class="li">JAP3</li>
					</ul>
				</div>

				<div class="world_vin">
				<?php var_dump($ForeignCountriesVine) ?>
					<p>World VIN's</p>
					<!-- <ul>
						<li class="li">W1</li>
						<li class="li">W2</li>
						<li class="li">W3</li>
					</ul> -->
				</div>

				<div class="recipe">
					<p>Recipe</p>
				<!-- 	<ul>
						<li class="li">cooking1</li>
						<li class="li">cooking2</li>
						<li class="li">cooking3</li>
					</ul> -->
				</div>


				<div class="beauty">
					<p>Beauty</p>
				<!-- 	<ul>
						<li class="li">B1</li>
						<li class="li">B2</li>
						<li class="li">B3</li>
					</ul> -->
				</div>

				<div class="sns_photo">
					<p>SNS PHOTO</p>
				
				</div>

			</main>

<<<<<<< HEAD
    <!---  フッター                           -->
        <footer>
            <ul id="foot-logo">
                <a href="#"><img src="./img/logo_black.png"></a>
             </ul>
            <ul id="foot-menu">
                <li id="foot-menu01"><a href="#" title="">All VINES</a></li>
                <li id="foot-menu02"><a href="#" title="">Japanese VINES</a></li>
                <li id="foot-menu03"><a href="#" title="">World VINES</a></li>
                <li id="foot-menu04"><a href="#" title="">Recipie</a></li>
                <li id="foot-menu05"><a href="#" title="">Beuty</a></li>
                <li id="foot-menu06"><a href="#" title="">Contact</a></li>
            </ul>
            <ul id="sns">
                <li id="facebook"><a href=""><img src="./img/logo_fb.png"></a></li>
                <li id="twiiter"><a href=""><img src="./img/logo_tw.png"></a></li>
                <li id="insta"><a href=""><img src="./img/logo_insta.png"></a></li>
            </ul>
         </footer>
        <address>
            <p>Copyright © 2017 JimsVINES All Rights Reserved.</p>
         </address>
        <!---  ./フッター            終了               -->
=======
			<footer>
				
			</footer>

>>>>>>> 213d44571ac5a464e814f4c0a8e3647a86926c5a
		</div>
	</body>
</html>

