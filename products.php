<?php include("header.php"); ?>

<h2 class="page-title">محصولات</h2>

<div class="products-grid">

<?php
for ($i = 1; $i <= 25; $i++) {
    echo "
    <div class='product-card'>
        <a href='product_detail.php?id=$i'>
            <div class='image-placeholder'></div>
        </a>
        <div class='product-info'>
            <h3>مدل موتور $i</h3>
            <button class='btn-add'>افزودن به سبد خرید</button>
        </div>
    </div>
    ";
}
?>

</div>

<?php include("footer.php"); ?>
