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
    <?php foreach ($products as $product):?>
     <tr>
        <td> <?= $product['Product']["ItemsID"] ;?> </td>
        <td> <?= $product['Product']["Items_kanji"] ;?> </td>
        <td> <?= $product['Product']["Items_kana"] ;?> </td>
        <td> <?= $product['Product']["Items_tanka"] ;?> </td> 
        <td> <?= $product['Product']["Itemstax_rate"] ;?> </td>
        <td> <?= $product['Product']["ItemsCountry"] ;?> </td>
        <td> <?= $product['Product']["ItemsMaterial"] ;?> </td>
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