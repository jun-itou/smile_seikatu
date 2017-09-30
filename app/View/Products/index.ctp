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

    <?php foreach ($products as $product):?>
     <tr>
        <td> <?= $product['Product']["itemsID"] ;?> </td>
        <td> <?= $product['Product']["Name"] ;?> </td>
        <td> <?= $product['Product']["Kana"] ;?> </td>
        <td> <?= $product['Product']["Tanka"] ;?> </td> 
        <td> <?= $product['Product']["Tax_rate"] ;?> </td>
        <td> <?= $product['Product']["Country"] ;?> </td>
        <td> <?= $product['Product']["Material"] ;?> </td>
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
    <input type="text" name="kana">
    <input type="submit">
    </form>

</footer>

</body>
</html>