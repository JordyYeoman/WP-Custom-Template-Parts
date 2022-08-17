<?php
// custom fields I want to use
?>
<div class="overflow-squares-container overflow-squares-max-w">
    <div class="overflow-square-left">
        <div class="overflow-square-relative">
            <img class="overflow-square-img" src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
        </div>
    </div>
    <div class="overflow-square-bg"></div>
    <div class="overflow-square-center">
        <h3>Amazing Veils on sale</h3>
        <p>Corned beef t-bone turducken pork belly. Ribeye salami chicken chuck drumstick chislic, sausage cow pork jerky bresaola porchetta filet mignon. Meatloaf biltong turkey boudin pork belly. Salami venison pork chop, rump pork loin bacon cupim kevin strip steak pork belly.</p>
        <div class="overflow-square-button"><a href="">Shop Now</a></div>
    </div>
    <div class="overflow-square-right">
        <div class="overflow-square-relative">
            <img class="overflow-square-img" src="https://images.pexels.com/photos/3568520/pexels-photo-3568520.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
        </div>
    </div>
</div>
<style>
    a {
        text-decoration: none;
        color: inherit;
    }

    .overflow-square-bg {
        width: 90%;
        height: 100%;
        position: absolute;
        top: 2.5%;
        left: 10%;
        transition: ease all 0.25s;
        opacity: 0.2;
        background-color: #ffb6c130;
        display: none;
    }

    .overflow-square-relative {
        width: 100%;
        height: 100%;
        position: relative;
        transition: ease all 0.25s;
    }

    .overflow-square-img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
        transition: ease all 0.25s;
    }

    .overflow-square-button {
        padding: 10px 24px 10px 24px;
        background-color: #262626;
        transition: ease all 0.3s;
        cursor: pointer;
        display: inline-block;
        transition: ease all 0.25s;
    }

    .overflow-square-button a {
        color: #fff;
    }

    .overflow-square-button:hover {
        background-color: #ffb79f;
    }

    .overflow-squares-max-w {
        margin: auto;
        max-width: 1560px;
        transition: ease all 0.25s;
    }

    .overflow-squares-container {
        padding-top: 50px;
        width: 100%;
        height: auto;
        box-sizing: border-box;
        position: relative;
        transition: ease all 0.25s;
    }

    .overflow-square-left {
        width: 100%;
        height: 500px;
        transition: ease all 0.25s;
        background-color: #ffb6c130;
    }

    .overflow-square-center {
        display: block;
        width: 100%;
        height: 250px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        transition: ease all 0.25s;
        box-sizing: border-box;
        height: auto;
        justify-content: center;
    }

    .overflow-square-center h3 {
        text-align: center;
        font-weight: bold;
        font-size: 26px;
    }

    .overflow-square-center p {
        text-align: center;
    }

    .overflow-square-right {
        width: 100%;
        height: 550px;
        right: 0;
        top: -2.5%;
        transition: ease all 0.25s;
        background-color: #ffb6c130;
        display: none;
    }

    @media(min-width: 320px) {}

    @media(min-width: 768px) {
        .overflow-square-bg {
            display: block;
        }

        .overflow-squares-container {
            height: 500px;
            margin-bottom: 150px;
        }

        .overflow-square-left {
            position: absolute;
            width: 475px;
            height: 350px;
            z-index: 10;
            left: 5%;
        }

        .overflow-square-center h3 {
            margin: 0;
        }

        .overflow-square-center {
            width: 450px;
            height: auto;
            display: flex;
            position: absolute;
            left: 30%;
            z-index: 15;
            -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.15);
            box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.15);
            bottom: -5%;
            transform: translateX(-75px);
            background-color: #fff;
        }

        .overflow-square-right {
            width: 400px;
            height: 500px;
            right: 0;
            z-index: 0;
            display: block;
            position: absolute;
        }
    }

    @media(min-width: 992px) {
        .overflow-square-button {
            max-width: 150px;
            align-self: center;
        }

        .overflow-square-left {
            width: 550px;
            height: 400px;
        }

        .overflow-square-center {
            height: 250px;
            bottom: -15%;
            left: 30%;
        }

        .overflow-square-right {
            width: 475px;
            height: 600px;
            right: 5%;
        }
    }

    @media(min-width: 1024px) {}

    @media(min-width: 1200px) {
        .overflow-square-center {
            left: 35%;
        }

        .overflow-square-right {
            width: 800px;
            right: 0;
        }
    }
</style>