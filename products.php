<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>محصولات جدید</title>
  <link rel="preconnect" href="//fdn.fontcdn.ir"><link rel="preconnect" href="//v1.fontapi.ir"><link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
  <style>
    body {
      font-family: Vazir, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 20px;
    }
    .carousel {
      display: flex;
      overflow-x: auto;
      gap: 16px;
      padding: 20px;
    }
    .product-card {
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      width: 240px;
      flex: 0 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 16px;
    }
    .product-card img {
      width: 100%;
      border-radius: 10px;
    }
    .product-title {
      color: red;
      font-weight: bold;
      margin: 12px 0 4px;
      text-align: center;
    }
    .product-category {
      color: gray;
      font-size: 0.9em;
      margin-bottom: 12px;
    }
    .product-price {
      font-size: 1.1em;
      margin-bottom: 8px;
    }
    .buy-button {
        font-family: Vazir;
      background-color: red;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 8px 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .buy-button:hover {
      background-color: darkred;
    }
  </style>
</head>
<body>

<h2>جدیدترین‌ها</h2>

<div class="carousel">
  <div class="product-card">
    <img src="https://cp.niliplus.ir/dist/img/product/487a61ae-50cd-48e7-92a4-cde77ddcbf15/2775aaed-1465-418a-a568-719f25e3643f.jpeg" alt="دامن">
    <div class="product-title">دامن خامه دوزی وارداتی</div>
    <div class="product-category">اولال</div>
    <div class="product-price">۷۹۹,۰۰۰ تومان</div>
    <button class="buy-button">خرید</button>
  </div>
  <div class="product-card">
    <img src="https://cp.niliplus.ir/dist/img/product/a7ec0bc5-a35e-4f97-a7cb-923757747647/0465d41e-0035-43e1-a59a-302c267bd5fa.jpeg" alt="کراپ">
    <div class="product-title">کراپ گره ای</div>
    <div class="product-category">شومیز</div>
    <div class="product-price">۳۸۰,۰۰۰ تومان</div>
    <button class="buy-button">خرید</button>
  </div>
  <div class="product-card">
    <img src="https://cp.niliplus.ir/dist/img/product/0591b047-1df6-4074-ae63-65fbbd632361/410ccc5a-b408-4868-8825-8e224068e29b.jpeg" alt="مانتو">
    <div class="product-title">مانتو پری ساده</div>
    <div class="product-category">مانتو</div>
    <div class="product-price">۱,۰۹۸,۰۰۰ تومان</div>
    <button class="buy-button">خرید</button>
  </div>
  <div class="product-card">
    <img src="https://cp.niliplus.ir/dist/img/product/0591b047-1df6-4074-ae63-65fbbd632361/410ccc5a-b408-4868-8825-8e224068e29b.jpeg" alt="مانتو">
    <div class="product-title">مانتو پری ساده</div>
    <div class="product-category">مانتو</div>
    <div class="product-price">۱,۰۹۸,۰۰۰ تومان</div>
    <button class="buy-button">خرید</button>
  </div>
  <div class="product-card">
    <img src="https://cp.niliplus.ir/dist/img/product/0591b047-1df6-4074-ae63-65fbbd632361/410ccc5a-b408-4868-8825-8e224068e29b.jpeg" alt="مانتو">
    <div class="product-title">مانتو پری ساده</div>
    <div class="product-category">مانتو</div>
    <div class="product-price">۱,۰۹۸,۰۰۰ تومان</div>
    <button class="buy-button">خرید</button>
  </div>
  <!-- بقیه محصولات مشابه اضافه شوند -->
</div>

</body>
</html>
