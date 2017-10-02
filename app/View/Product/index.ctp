<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <a href=""></a>
</header>


<body>

<table>
    <tr>
        <th>ID</th>
        <th>商品名前</th>
        <th>フリガナ</th>
        <th>Created</th>
        <th>値段</th>
        <th>産地</th>
        <th>種類</th>
    </tr>

    <!-- <?php //var_dump($product); ?>
    exit; -->
   
    <?php foreach ($products as $key => $value):?>
     <tr>
        <td> <?= $value['Product']["ItemsID"] ;?> </td>
        <td> <?= $value['Product']["Name"] ;?> </td>
        <td> <?= $value['Product']["Kana"] ;?> </td>
        <td> <?= $value['Product']["Tanka"] ;?> </td> 
        <td> <?= $value['Product']["Tax_rate"] ;?> </td>
        <td> <?= $value['Product']["Country"] ;?> </td>
        <td> <?= $value['Product']["Material"] ;?> </td>
    </tr>
    
    <?php endforeach ; ?> 

</table>
<footer>
    <?php print $this ->Paginator->numbers(
    array(
            'tag'       =>  'span',
            'separator' =>  ' ',
            'before'    =>  '<<',
            'after'     =>  '>>',
            'modulus'   =>  '8',
            'last'      =>  '')
            );?>

    <form action="" method="post">
    <input type="text" name="syouhin">
    <input type="submit">
    </form>

</footer>

</body>
</html>