<?php
$sales_square_section_feature_image = get_field('sales_square_section_feature_image');
$sales_square_section_main_title = get_field('sales_square_section_main_title');
$sales_square_section_body_text = get_field('sales_square_section_body_text');
$sales_square_shop_link = get_field('sales_square_shop_link');
?>
<div class="sales-square">
    <div class="sales-square-main-image-container">
        <img class="sales-square-img" src="<?php echo $sales_square_section_feature_image; ?>" alt="" />
    </div>
    <div class="sales-square-content">
        <h3><?php echo $sales_square_section_main_title; ?></h3>
        <p><?php echo $sales_square_section_body_text; ?></p>
        <div class="sales-square-button"><a href="<?php echo $sales_square_shop_link; ?>">Shop Now</a></div>
    </div>
</div>
<style>
    .sales-square {
        box-sizing: border-box;
        background-color: #ffb6c130;
        width: 100%;
        height: 450px;
    }

    .sales-square-main-image-container {
        width: 100%;
        background-color: #ffb6c130;
    }

    .sales-square-main-image-container .sales-square-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .sales-square-button {
        display: inline-block;
    }

    .sales-square-button {
        padding: 10px 24px 10px 24px;
        background-color: #262626;
        transition: ease all 0.3s;
        cursor: pointer;
        display: inline-block;
        transition: ease all 0.25s;
    }

    .sales-square-button a {
        color: #fff;
    }

    .sales-square-content {
        width: 90%;
        margin: auto;
        margin-top: -20%;
        position: relative;
        background-color: white;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
        -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.15);
        box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.15);
    }

    .sales-square-content h3 {
        margin: 5px;
    }

    @media(min-width: 320px) {}

    @media(min-width: 768px) {
        .sales-square {
            width: 100%;
            height: 550px;
            display: flex;
        }

        .sales-square-main-image-container {
            width: 60%;
        }

        .sales-square-content {
            margin-top: 0;
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .sales-square-content h3 {
            text-align: center;
            font-weight: bold;
            font-size: 26px;
        }
    }

    @media(min-width: 1024px) {}

    @media(min-width: 1200px) {}

    @media(min-width: 1560px) {}
</style>