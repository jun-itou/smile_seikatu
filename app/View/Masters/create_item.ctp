<!DOCTYPE html>
<html>
<head>
	<title>新規登録</title>
</head>
<script type="text/javascript">
	
</script>
<body>
<?=
	$this->Html->link(
	                '戻る',
	                [
	                	'controller' => 'Masters',
	                	'action'     => 'itemsMaster',
	                ]
	        );
?>		
<table>
<?= $this->Form->create('Items', array('type'=>'file', 'enctype' => 'multipart/form-data')); ?>
	<tr>
		<th>商品名</th>
		<td><?= $this->Form->text('Name'); ?></td>
	</tr>
	<tr>
		<th>商品名カナ</th>
		<td><?= $this->Form->text('Kana'); ?></td>
	</tr>
	<tr>
		<th>価格</th>
		<td><?= $this->Form->text('Tanka'); ?></td>
	</tr>
	<tr>
		<th>消費税</th>
		<td><?= $this->Form->text('Tax_rate'); ?></td>
	</tr>
	<tr>
		<th>産地</th>
		<td><?= $this->Form->text('Country'); ?></td>
	</tr>
	<tr>
		<th>原材料</th>
		<td><?= $this->Form->text('Material'); ?></td>
	</tr>
	<tr>
		<th>メーカー</th>
		<td><?= $this->Form->text('Maker'); ?></td>
	</tr>
	<tr>
		<th>カテゴリー</th>
		<td><?= $this->Form->select('Category_flg',[1=>'国産',2=>'外国産'],['empty'=>'選択してください']); ?>
		</td>
	</tr>
	<tr>
		<th>商品詳細</th>
		<td><?= $this->Form->textarea('Txt'); ?></td>
	</tr>
	<tr>
		<th>商品画像</th>
		<td>
			<?=
				$this->Form->input('Img_data', array('label' => false, 'type' => 'file', 'multiple'));
			?>
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