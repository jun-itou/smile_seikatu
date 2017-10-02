<!DOCTYPE html>
<html>
<head>
	<title>商品管理ページ</title>
</head>
<body>

<h3>商品管理ページ</h3>
<form method="post" action="seachItem">
	<p>商品名</p>
	<input type="text" name="name">
	<input type="submit" value="検索">
</form>
<br>
<?=
		$this->Html->link(
		                '新規登録',
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'createItem',
		                ]
		        );
		?>
<table>
	<tr>
		<th>商品ID</th><th>商品名</th><th>商品名カナ</th><th>更新日時</th>
	</tr>
	<?php foreach($allItems as $key => $value): ?>
	<tr>
	<td><?=
		$this->Html->link(
		                $value['Items']['itemsID'],
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'selectId',
		                	$value['Items']['itemsID'],
		                ]
		        );
	?></td>
	<td><?= $value['Items']['Name']?></td>
	<td><?= $value['Items']['Kana']?></td>
	<td><?= $value['Items']['Modified']?></td>
	</tr>
	<?php endforeach?>
</table>
<img src="<?= DS.'smile_seikatu'.DS.'product'.DS.'japanese'.DS.'miyasato.png'?>">
</body>
</html>