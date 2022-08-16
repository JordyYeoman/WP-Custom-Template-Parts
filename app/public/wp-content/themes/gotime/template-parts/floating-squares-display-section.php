<?php
// custom fields I want to use
?>
<div class="floating-squares-container">
    <div class="basic">
        <div class="square content-square">
            <h3>Amazing Veils on sale</h3>
            <p>Corned beef t-bone turducken pork belly. Ribeye salami chicken chuck drumstick chislic, sausage cow pork jerky bresaola porchetta filet mignon. Meatloaf biltong turkey boudin pork belly. Salami venison pork chop, rump pork loin bacon cupim kevin strip steak pork belly.</p>
        </div>
    </div>
    <div class="square main-image-container">
        <img class="main-image" src="https://wallpapers.com/images/high/iron-man-minimalist-art-vjaph0urzrosn7a5.jpg" alt="" />
    </div>
    <div class="right-floating-squares">
        <div class="square hidden-on-mobile"></div>
        <div class="square hidden-on-mobile"></div>
    </div>
</div>
<style>
    /* // Floating Squares styles */
    .basic {
        height: auto;
        width: 100%;
    }

    .floating-squares-container {
        display: flex;
        flex-direction: column;
        background-color: lightgreen;
        transition: ease all 0.3s;
    }

    .square {
        background-color: #2eb1e4;
        min-width: 100px;
        min-height: 100px;
        width: 100%;
        height: 250px;
        border: 1px solid white;
        transition: ease all 0.3s;
        box-sizing: border-box;
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
    }

    .content-square p {
        line-height: 16px;
        font-size: 15px;
        transition: ease all 0.3s;
    }

    .square:hover {
        transform: scale(0.9);
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
            flex-direction: row;
        }

        .square {
            height: 50%;
        }

        .square.main-image-container {
            height: 400px;
        }

        .square.content-square {
            height: 100%;
        }

        .right-floating-squares {
            display: flex;
            flex-direction: column;
            width: 75%;
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