<!DOCTYPE html>
<html>
<head>
	<title>管理ページTOP</title>
</head>
<body>

<h1>管理ページTOP</h1>
<table>
	<tr>
	</tr>
	<tr>
		<td>
		<?=
		$this->Html->link(
		                '管理者管理',
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'master',
		                ]
		        );
		?>
		</td>
		<td>
		<?=
		$this->Html->link(
		                '顧客管理',
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'master',
		                ]
		        );
		?>
		</td>
	</tr>
	<tr>
		<td>
		<?=
		$this->Html->link(
		                '商品管理',
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'itemsMaster',
		                ]
		        );
		?>
		</td>
		<td>
		<?=
		$this->Html->link(
		                'ブログ管理',
		                [
		                	'controller' => 'Masters',
		                	'action'     => 'master',
		                ]
		        );
		?>
		</td>
	</tr>
</table>

</body>
</html>