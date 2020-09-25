<template>
    <div class="container">
        <h3 class="text-dark text-uppercase text-center border-bottom p-3">
            Проектиране, строителство и ремонт
        </h3>
        <!--row-->
        <div class="row">
            <!--col-->
            <div class="col-sm-6 mt-4">
                <!--card-->
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <p class="card-title pt-3 text-uppercase">
                                Строителсво на сгради
                            </p>
                            <div class="icon">
                                <i class="fas fa-home ion"></i>
                            </div>
                            <p class="card-text p-2">
                                Строителна фирма Goldenstroy предлага цялостно изграждане на сгради във
                                Варна,Пловдив и Хасково - строителство на жилищни сгради, търговски обекти, офиси, къщи
                                и др.
                            </p>
                            <div class="box-footer p-2">
                                <i class="fas fa-arrow-circle-right ion"></i>
                                <a href="#" aria-label="read more">Прочети повече</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--./card-->

            </div>
            <!--./col-->

            <!--col-->
            <div class="col-sm-6 mt-4">
                <!--card-->
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <p class="card-title pt-3 text-uppercase">
                                Ремонти
                            </p>
                            <div class="icon">
                                <i class="fas fa-paint-roller ion"></i>
                            </div>
                            <p class="card-text p-2">
                                Ремонти на апартаменти и къщи във
                                Варна,Пловдив и Хасково - монтаж на гипсокартон и окачени тавани, ремонти на баня,
                                лепене на плочки, шпакловане, боядисване,
                                декорации и т.н.
                            </p>

                            <div class="box-footer p-2">
                                <i class="fas fa-arrow-circle-right ion"></i>
                                <a href="#" aria-label="read more">
                                    Прочети повече
                                </a>
                            </div>

                        </div>
                    </div>
                    <!--./card-->
                </div>
            </div>
            <!--./col-->

            <!--col-->
            <div class="col-sm-6 mt-4">
                <!--card-->
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <p class="card-title pt-3 text-uppercase">
                                Реализирани проекти
                            </p>
                            <div class="icon">
                                <i class="fas fa-project-diagram ion"></i>
                            </div>
                            <p class="card-text p-2">
                                Завършени ремонти и построени сгради - вижте портфолио с
                                цялостни довършителни работи, основни ремонти във Варна,Пловдив и Хасково.
                            </p>
                            <div class="box-footer p-2">
                                <i class="fas fa-arrow-circle-right ion"></i>
                                <a href="#" aria-label="read more">
                                    Прочети повече
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--./card-->
            </div>
            <!--./col-->

            <!--col-->
            <div class="col-sm-6 mt-4">
                <!--card-->
                <div class="card">
                    <div class="card-body">
                        <div class="box">
                            <p class="card-title pt-3 text-uppercase">
                                Проектиране и инженеринг
                            </p>
                            <div class="icon">
                                <i class="fas fa-city ion"></i>
                            </div>
                            <p class="card-text p-2">
                                Все повече наши клиенти избират „проектиране, инженеринг и строителство“ като цялостна
                                услуга, тъй като този подход осигурява редица предимства.
                            </p>
                            <div class="box-footer p-2">
                                <i class="fas fa-arrow-circle-right ion"></i>
                                <a href="#" class="" aria-label="read more">
                                    Прочети повече
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--./card-->
            </div>
            <!--./col-->

        </div>
        <!--./row-->

    </div>

</template>

<script>
    export default {
        name: "HomePageContentServices"
    }
</script>

<style scoped>
    h5, p, .box-footer {
        text-align: center;
    }

    .card {
        border: none !important;
    }

    .card-body {
        padding: 0 !important;
    }

    .card-title {
        font-size: 20px;
    }

    .box-footer {
        background: rgba(0, 0, 0, .1);
    }


    .box .icon > i {
        float: left;
    }

    .icon .fa-city {
        font-size: 30px;
    }

    .icon .ion {
        font-size: 50px;
        bottom: 0px;
        position: relative;
        left: 5px;
        color: rgba(255, 255, 255, 0.9);
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    .ion {
        color: #ffffff;
    }

    .box {
        background-color: #333366;
        border-radius: 10px;
    }

    @media only screen and (max-width: 600px) {
        .icon .ion {
            display: none;
        }
    }

    /*@media only screen and (max-width: 330px) {*/
    /*.icon .ion {*/
    /*font-size: 18px;*/
    /*top: 7%;*/
    /*left: 29px;*/
    /*}*/
    /*}*/

</style>