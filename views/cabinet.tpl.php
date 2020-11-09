<ul class="nav">
    <li>
        <a href="/cabinet/products">Товари</a>
    </li>
    <li>
        <a href="/cabinet/users">Користувачі</a>
    </li>
</ul>



<title><?php echo $pageData['title']?></title>



<h2>Кількість продуктів - <?php echo $pageData['productsCount']?></h2>

<table>
    <tbody>
    <?php foreach ($pageData['products'] as $key=>$value) {
        echo "<tr>";
        echo "<td>".$value['id'] . "</td>";
        echo "<td>".$value['name'] . "</td>";
        echo "<td>".$value['price'] . "</td>";
    }
    ?>
    </tbody>
</table>



<a href="/cabinet/logout/">exit</a>