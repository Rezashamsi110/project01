<?php include("header.php"); ?>

<?php
$id = $_GET['id'];
?>

<div class="detail-wrapper">

    <div class="detail-image image-placeholder-large"></div>

    <div class="detail-content">
        <h1>مدل موتور <?php echo $id; ?></h1>
        <p class="price">قیمت: 85,000,000 تومان</p>

        <ul class="specs">
            <li>حجم موتور: 150cc</li>
            <li>مصرف سوخت: 2.1 لیتر</li>
            <li>نوع ترمز: دیسکی</li>
            <li>سال تولید: 2025</li>
        </ul>

        <button class="btn-primary big">افزودن به سبد خرید</button>
    </div>

</div>

<?php include("footer.php"); ?>
