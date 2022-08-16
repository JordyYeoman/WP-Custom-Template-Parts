<?php
// custom fields I want to use
?>
<div class="overflow-squares-container">
    <div class="overflow-square-left"></div>
    <div class="overflow-square-center"></div>
    <div class="overflow-square-right"></div>
</div>
<style>
    .overflow-squares-container {
        padding-top: 50px;
        width: 100%;
        height: auto;
        box-sizing: border-box;
        position: relative;
    }

    .overflow-square-left {
        width: 100%;
        height: 550px;
        background-color: grey;
    }

    .overflow-square-center {
        display: none;
    }

    .overflow-square-right {
        width: 100%;
        height: 550px;
        right: 0;
        top: -2.5%;
        background-color: lightpink;
        display: none;
    }

    @media(min-width: 320px) {}

    @media(min-width: 768px) {
        .overflow-squares-container {
            height: 500px;
        }

        .overflow-square-left {
            position: absolute;
            width: 450px;
            height: 350px;
            z-index: 10;
            left: 5%;
        }

        .overflow-square-center {
            width: 350px;
            height: 200px;
            display: block;
            position: absolute;
            left: 40%;
            z-index: 15;
            bottom: 10%;
            transform: translateX(-75px);
            background-color: lightblue;
        }

        .overflow-square-right {
            width: 375px;
            height: 500px;
            right: 10%;
            z-index: 0;
            display: block;
            position: absolute;
        }
    }

    @media(min-width: 1024px) {}

    @media(min-width: 1200px) {}
</style>