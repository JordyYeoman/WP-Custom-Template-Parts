<?php
$floating_squares_main_heading_text = get_field('floating_squares_main_heading_text');
$floating_squares_main_paragraph_text = get_field('floating_squares_main_paragraph_text');
$floating_squares_shop_link = get_field('floating_squares_shop_link');
$floating_squares_main_feature_image = get_field('floating_squares_main_feature_image');
$floating_squares_small_top_right_image = get_field('floating_squares_small_top_right_image');
$floating_squares_small_bottom_right_image = get_field('floating_squares_small_bottom_right_image');
$floating_squares_display = get_field('floating_squares_display');
?>
<div data-should-display-section="<?php echo $floating_squares_display; ?>" class="floating-squares-container" style="<?php if (!$floating_squares_display) {
                                                                                                                            echo 'display:none;';
                                                                                                                        }; ?>">
    <div class="basic">
        <div class="square content-square">
            <h3><?php echo $floating_squares_main_heading_text; ?></h3>
            <p><?php echo $floating_squares_main_paragraph_text; ?></p>
            <div class="floating-squares-button"><a href="<?php echo $floating_squares_shop_link; ?>">Shop Now</a></div>
        </div>
    </div>
    <div class="square main-image-container">
        <img class="main-image" src="<?php echo $floating_squares_main_feature_image; ?>" alt="" />
    </div>
    <div class="right-floating-squares">
        <div class="square hidden-on-mobile">
            <img class="secondary-image" src="<?php echo $floating_squares_small_top_right_image; ?>" alt="" />
        </div>
        <div class="square hidden-on-mobile">
            <img class="secondary-image" src="<?php echo $floating_squares_small_bottom_right_image; ?>" alt="" />
        </div>
    </div>
</div>
<style>
    /* // Floating Squares styles */
    .basic {
        height: auto;
        width: 100%;
    }

    .floating-squares-button {
        padding: 10px 24px 10px 24px;
        background-color: #262626;
        transition: ease all 0.3s;
        cursor: pointer;
        display: inline-block;
        transition: ease all 0.25s;
        max-width: 250px;
        margin: auto;
        margin-top: 0;
        margin-bottom: 0;
    }

    .floating-squares-button:hover {
        opacity: 0.9
    }

    .floating-squares-button a {
        color: #fff;
        display: block;
        width: 100%;
        height: 100%;
    }

    .floating-squares-container {
        display: flex;
        flex-direction: column;
        background-color: #ffb6c130;
        transition: ease all 0.3s;
    }

    .square {
        background-color: #ffb6c130;
        min-width: 100px;
        min-height: 100px;
        width: 100%;
        height: 250px;
        border: 1px solid white;
        transition: ease all 0.3s;
        box-sizing: border-box;
    }

    .square .secondary-image {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .square.main-image-container {
        height: 500px;
    }

    .square .main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .content-square {
        height: auto;
        padding: 32px;
        color: #666666;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .content-square h3 {
        font-weight: bold;
        font-size: 26px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .content-square p {
        line-height: 16px;
        font-size: 15px;
        transition: ease all 0.3s;
        margin: 10px;
        margin-bottom: 40px;
    }

    .square:hover {
        transform: scale(0.99);
    }

    .hidden-on-mobile {
        display: none;
    }

    @media only screen and (min-width: 320px) {}

    @media(min-width: 768px) {
        .hidden-on-mobile {
            display: block;
        }

        .floating-squares-container {
            position: relative;
            height: 500px;
            flex-direction: row;
        }

        .square {
            height: 50%;
        }

        .square.main-image-container {
            /* height: 400px; */
        }

        .square.content-square {
            height: 100%;
        }

        .right-floating-squares {
            display: flex;
            flex-direction: column;
            width: 75%;
            height: 100%;
        }

        .content-square h3 {
            font-size: 24px;
        }
    }

    @media only screen and (min-width: 1024px) {
        .content-square h3 {
            font-size: 32px;
        }
    }

    @media only screen and (min-width: 1200px) {}
</style>