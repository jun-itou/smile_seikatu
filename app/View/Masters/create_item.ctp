<!DOCTYPE html>
<html>
<head>
	<title>新規登録</title>
</head>
<script type="text/javascript">
	
</script>
<body>
<table>
<form action="createItem" method="post">
	<tr>
		<th>商品名</th>
		<td><input type="text" name="name" class="textform" maxlength="32"></td>
	</tr>
	<tr>
		<th>商品名カナ</th>
		<td><input type="text" name="name_kana" class="textform" maxlength="32"></td>
	</tr>
	<tr>
		<th>価格</th>
		<td><input type="text" name="price" class="textform" maxlength="10"></td>
	</tr>
	<tr>
		<th>消費税</th>
		<td><input type="text" name="tax" class="textform" maxlength="10"></td>
	</tr>
	<tr>
		<th>産地</th>
		<td><input type="text" name="country" class="textform" maxlength="50"></td>
	</tr>
	<tr>
		<th>原材料</th>
		<td><input type="text" name="material" class="textform" maxlength="255"></td>
	</tr>
	<tr>
		<th>メーカー</th>
		<td><input type="text" name="maker" class="textform" maxlength="255"></td>
	</tr>
	<tr>
		<th>カテゴリー</th>
		<td>
			<select name="category">
				<option value="">選択してください</option>
				<option value= "1">国産</option> 
				<option value= "2">外国産</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>商品詳細</th>
		<td><textarea name="name" cols="40" rows="4" maxlength="800" class="textform"></textarea></td>
	</tr>
	<tr>
		<th>商品画像</th>
		<td>
			<input type="text" name="name">
			<?php echo $this->Form->input('Post.image', array('label' => false, 'type' => 'file', 'multiple')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="登録">
		</td>
	</tr>
	</form>
</table>
</body>
</html>