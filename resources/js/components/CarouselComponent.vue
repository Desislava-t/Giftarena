<template>
    <!--Carousel-->
    <div id="carouselIndicators" class="carousel slide swiper-container" data-ride="carousel">
        <!--Carousel indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <!--./Carousel indicators-->

        <!--Carousel content-->
        <div class="carousel-inner">
            <!--Carousel image-->
            <div class="carousel-item active">
                <a class="swiper-textOffer" href="#" aria-label="Design and construction of swimming pools">Проектиране
                    и изграждане на басейни</a>
                <img class="swiperImg d-block w-100" src="images/carousel/2.jpg" alt="swimming pool">
            </div>
            <!--./Carousel image-->

            <!--Carousel image-->
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="construction of spa">Изграждане на спа</a>
                <img class="swiperImg d-block w-100" src="images/carousel/1.jpg" alt="construction of spa">
            </div>
            <!--./Carousel image-->

            <!--Carousel image-->
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="Complete construction">Цялостно строителство</a>
                <img class="swiperImg d-block w-100" src="images/carousel/4.jpg" alt="Complete construction">
            </div>
            <!--./Carousel image-->
        </div>
        <!--./Carousel content-->

        <!--Carousel btn-->
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev"
           aria-label="carousel control">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next"
           aria-label="carousel control">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--./Carousel btn-->

    </div>
    <!--./Carousel-->

</template>

<script>
    export default {
        name: "CarouselComponent"
    }
</script>

<style scoped>
    .swiper-container {
        width: 100%;
        height: auto;
    }

    .swiper-textOffer {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);

        color: #ffffff;
        font-size: 2em;
        box-shadow: 0px 8px 22px #000;
        text-shadow: 15px 32px 15px #000;
    }

    .swiper-textOffer:hover {
        text-decoration: none;
        color: #ffffff;
    }

    @media only screen and (max-width: 700px) {
        .swiper-textOffer {
            font-size: 1.1em;
        }
    }


</style>