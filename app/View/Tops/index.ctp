
<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>酢まいる生活</title>
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

				<div class="japanese_vin">
					<p>Japanese VIN's</p>
					<ul>
					<?php foreach ($japaneaseVine as $key => $value) :?>
						<li class="li"><?= $value['Items']['Name'] ?></li>
						<?php endforeach ?>
					</ul>
				</div>

				<div class="world_vin">
					<p>World VIN's</p>
					<ul>
					<?php foreach ($ForeignCountriesVine as $key => $value): ?>
						<li class="li"><?= $value['Items']['Name'] ?></li>
						<?php endforeach ?>
					</ul>
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

			<footer>
				
			</footer>

		</div>
	</body>
</html>

=======
ecoh $vines_datsssss
>>>>>>> fed55cce47cb1b00751bc0b4cf12782a27b1fe65
