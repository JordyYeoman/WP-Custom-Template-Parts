<?php
// custom fields I want to use
?>
<div class="sales-square">
    <div class="sales-square-main-image-container">
        <img class="sales-square-img" src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
    </div>
    <div class="sales-square-content"></div>
</div>
<style>
    .sales-square {
        box-sizing: border-box;
        background-color: #ffb6c130;
        width: 100%;
        height: 750px;
    }

    .sales-square-main-image-container {
        width: 60%;
        background-color: #ffb6c130;
    }

    .sales-square-main-image-container .sales-square-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .sales-square-content {
        width: 100%;
    }

    @media(min-width: 320px) {}

    @media(min-width: 768px) {}

    @media(min-width: 1024px) {}

    @media(min-width: 1200px) {}

    @media(min-width: 1560px) {}
</style>