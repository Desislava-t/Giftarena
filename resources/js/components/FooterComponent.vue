<template>
    <footer class="font-small footer-color text-white pt-5 mt-5 w-100">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3">

                    <!-- Content -->
                    <p class="fonts font-weight-bold mt-3 mb-4">Giftarena</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, voluptate, voluptatum. Amet
                        debitis
                        expedita natus possimus quidem recusandae, sunt temporibus.
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3">

                    <!-- Links -->
                    <p class="fonts font-weight-bold text-uppercase mt-3 mb-4">Категории</p>

                    <ul class="list-unstyled">
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="link About us"
                               accesskey="a">
                                За нас
                            </a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="link services"
                               accesskey="u">
                                Услуги
                            </a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="link gallery" accesskey="g">
                                Галерия
                            </a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="idea of ​​home"
                               accesskey="h">
                                Идеи за дома
                            </a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="link Privacy Policy"
                               accesskey="po">
                                Политиза на поверителност
                            </a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none" href="#" aria-label="link Terms & Conditions"
                               accesskey="t">
                                Общи условия
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3">

                    <!-- Links -->
                    <p class="fonts font-weight-bold text-uppercase mt-3 mb-4">Контакти</p>
                    <ul class="list-unstyled">
                        <li class="pb-1">
                            <a class="text-white text-decoration-none" href="#" aria-label="address Plovdiv"
                               accesskey="pl">
                                <i class="mr-1 fas fa-map-marker-alt pr-1"></i>
                                Пловдив
                            </a>
                        </li>
                        <li class="pb-1">
                            <a class="text-white text-decoration-none" href="#" aria-label="address Khaskovo Haskovo"
                               accesskey="Kh">
                                <i class="mr-1 fas fa-map-marker-alt pr-1"></i>
                                Хасково
                            </a>
                        </li>
                        <li class="pb-1">
                            <a class="text-white text-decoration-none" href="#" aria-label="address Varna"
                               accesskey="v">
                                <i class="mr-1 fas fa-map-marker-alt pr-1"></i>
                                Варна
                            </a>
                        </li>
                        <li class="pb-1">
                            <a class="text-white text-decoration-none" href="#" aria-label="contact us phone number"
                               accesskey="p">
                                <i class="mr-1 fas fa-phone-volume pr-1"></i>
                                089 888 9999
                            </a>
                        </li>
                        <li class="pb-1">
                            <a class="text-white text-decoration-none" href="#"
                               aria-label="contact us with mail address" accesskey="e">
                                <i class="far fa-envelope-open mr-1 pr-1"></i>
                                mail@gmail.com
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3">

                    <!-- Links -->
                    <p class="fonts font-weight-bold text-uppercase mt-3 mb-4">Bulletin</p>
                    <!--Subscribe form-->
                    <form action="./api/subscribe" method="POST" @submit.prevent="subscribeUser()"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" v-model="email"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter email">
                            <small id="emailHelp" class="form-text email">Ние никога
                                няма да
                                споделим
                                Вашият имейл!
                            </small>
                        </div>
                        <button type="submit" class="btn main-button" aria-label="subscribe for news"
                                accesskey="subsc">Абонирай се
                        </button>
                    </form>
                    <!--.Subscribe form-->

                    <!--Subscription message-->
                    <div class="form-group">
                        <div v-if="hasErrors" class="alert alert-danger alert-dismissible m-2 fade show" role="alert">
                            {{ errors.email[0] }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div v-if="hasSuccess" class="alert alert-success alert-dismissible m-2 fade show" role="alert">
                            Успешно се абонирахте!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--.Subscription message-->

            </div>
            <!-- Grid row -->

        </div>

        <!-- Footer Links -->


        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1 text-white" href="#"
                   target="_blank"
                   aria-label="social media btn facebook" accesskey="f" rel="noreferrer" role="link">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1 text-white" href="#" aria-label="social media btn twitter"
                   accesskey="tw" rel="noreferrer" role="link">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>

            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1 text-white" href="#" aria-label="social media btn instagram"
                   accesskey="i" rel="noreferrer" role="link">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
        <!-- .Social buttons -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© Copyright: Giftarena
            <a class="text-white text-decoration-none" href="#" aria-label="Сухо строителство" accesskey="строителство">
                Сухо строителство,
            </a>
            <a class="text-white text-decoration-none" href="#" aria-label="цялостно строителство">
                цялостно строителство,
            </a>
            <a class="text-white text-decoration-none" href="#" aria-label="строителство на спа центрове">
                строителство на спа центрове,
            </a>
            <a class="text-white text-decoration-none" href="#" aria-label="басейни">
                басейни
            </a>


        </div>
        <!-- .Copyright -->
    </footer>
</template>

<script>
    export default {
        name: "FooterComponent",
        data() {
            return {
                email: '',
                errors: [],
                hasSuccess: false,
                hasErrors: false,
                subscribers: [],
            }
        },
        methods: {
            subscribeUser() {
                const self = this;
                axios.post('./api/subscribe', {
                    email: self.email
                })
                    .then(function (response) {
                        if (response.status === 200) {
                            self.email = '';
                            self.hasSuccess = true;
                            self.hasErrors = false;
                        }
                        // console.log(response);
                    })
                    .catch(function (error) {
                        self.errors = error.response.data.errors;
                        self.hasErrors = true;
                        self.hasSuccess = false;
                        // console.log(self.errors);
                    })
            },

        }

    }
</script>

<style scoped>

    a:hover, .btn-subscribe:hover {
        color: #BEE3F8 !important;
    }

    .email {
        color: #EBF8FF;
        opacity: 0.8;
    }

    .fonts {
        font-size: 20px;
    }

    /*.btn-subscribe {*/
    /*background: #2B6CB0;*/
    /*}*/
</style>