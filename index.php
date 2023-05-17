<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DanDan Store</title>
    <link rel="stylesheet" href="css/headerstyles.css">
    <link rel="stylesheet" href="css/footerstyles.css">
    <link rel="stylesheet" href="css/indexstyles.css">
</head>
<body>
<?php require "html/header.php"?>

<section class="greetings">
    <h1>Ласкаво просимо в DanDan Store!</h1>
    <p>=== Ми пропонуємо широкий асортимент якісних товарів ===</p>
    <a href="#featured-products" class="btn">Перейти до покупок</a>
</section>

<section class="banner">
    <img src="pic/indexbanner.png" alt="Доставка">
</section>

<section id="featured-products" class="featured-products">
    <h2>Популярні товари</h2>
    <div class="product">
        <img src="pic/narutofigure.png" alt="Товар 1">
        <h3>Naruto Uzumaki Figure</h3>
        <p>Ціна: $19.99</p>
    </div>
    <div class="product">
        <img src="pic/sasukefigure.png" alt="Товар 2">
        <h3>Sasuke Uchiha Figure</h3>
        <p>Ціна: $24.99</p>
    </div>
    <div class="product">
        <img src="pic/remfigure.png" alt="Товар 3">
        <h3>Rem Figure</h3>
        <p>Ціна: $14.99</p>
    </div>
</section>

<?php require "html/footer.php"?>
</body>
</html>
