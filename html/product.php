<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Название товара - Мой интернет-магазин</title>

    <link rel="stylesheet" href="/css/headerstyles.css">
    <link rel="stylesheet" href="/css/footerstyles.css">
    <link rel="stylesheet" href="/css/productstyles.css">
</head>
<body>
<?php require "header.php"?>
<main>
    <div class="product">
        <h1>Название товара</h1>
        <img src="/pic/narutofigure.png" alt="Изображение товара">
        <p>Описание товара: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Цена: $99.99</p>
        <button>Добавить в корзину</button>
    </div>
</main>
<?php require "footer.php"?>
</body>
</html>
