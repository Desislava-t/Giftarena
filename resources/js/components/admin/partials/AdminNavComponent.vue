<template>
    <!--fixed nav-->
    <div class="pos-f-t mb-5">
        <!--nav logo-->
        <nav class="navbar main-nav">
            <a href="admin-gabriel" class="nav-link text-decoration-none text-white text-uppercase"
               aria-label="admin dashboard">
                <!--{{ Auth::user()->name }}-->
            </a>
            <a href="./" class="nav-link" target="_blank" aria-label="goldenstroymb.com"
               title="Отиди на goldenstroymb.com начална страница" rel="noopener">
                GoldenstroyMB
            </a>
            <!--nav btn collapse-->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify btn-menu"></i>
            </button>
            <!--./nav btn collapse-->
        </nav>
        <!--./nav-->

        <!--collapse menu-->
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="main-nav p-4">
                <nav>
                    <ul class="list-group">
                        <li class="nav-item">
                            <a href="./admin-goldenstroy" class="nav-link" aria-label="admin dashboard"
                               rel="noopener">
                                <i class="fas fa-home pr-1"></i>
                                Табло
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin-post-page" class="nav-link"
                               aria-label="admin CRUD publication and page" rel="noopener">
                                <i class="fas fa-pencil-alt pr-1"></i>
                                Публикации
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin-subscribers" class="nav-link" aria-label="subscribed users"
                               rel="noopener">
                                <i class="fas fa-user-plus"></i>
                                Subscribers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin-register-users" class="nav-link" aria-label="admin CRUD users"
                               rel="noopener">
                                <i class="fas fa-users pr-1"></i>
                                Регистрирани потребители
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin CRUD slider page" rel="noopener">
                                <i class="fas fa-images pr-1"></i>
                                Слайд
                            </a>
                        </li>

                        <!--dropdown -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenu" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               aria-label="admin CRUD publication and page" rel="noopener">
                                <i class="fas fa-list pr-1"></i>
                                Категории
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                                <a href="#" class="dropdown-item" aria-label="page for us">За нас</a>
                                <a href="#" class="dropdown-item" aria-label="page services">Услуги</a>
                                <a href="#" class="dropdown-item" aria-label="page gallery">Галерия</a>
                                <a href="#" class="dropdown-item" aria-label="page contacts">Контакти</a>
                            </div>
                        </li>
                        <!--./dropdown -->

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin user profile" rel="noopener">
                                <i class="fas fa-user pr-1"></i>
                                Потребителски профил
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin message" rel="noopener">
                                <i class="fas fa-envelope pr-1"></i>
                                Съобщения
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin google adwords profile" rel="noopener">
                                <i class="fab fa-google pr-1"></i>
                                Adwords
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" target="_blank" class="nav-link"
                               aria-label="facebook page"
                               rel="noopener">
                                <i class="fab fa-facebook-f pr-1"></i>
                                @goldenstroymb
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin instagram profile" rel="noopener">
                                <i class="fab fa-instagram pr-1"></i>
                                Instagram
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="admin twitter profile" rel="noopener">
                                <i class="fab fa-twitter pr-1"></i>
                                Twitter
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--./collapse menu-->

        <!--btn logout-->
        <div class="btn-group dropleft">
            <button type="button" class="btn main-button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" aria-label="button logout">
                <i class="fas fa-cogs"></i>
            </button>
            <div class="dropdown-menu">
                <li class="nav-item dropdown">

                    <a class="dropdown-item" href="logout" @click.prevent="logout()">
                        Изход
                    </a>
                </li>
            </div>
        </div>
        <!--./btn logout-->

    </div>
    <!--./fixed nav-->

</template>

<script>
    export default {
        name: "AdminNavComponent",
        methods: {
            logout() {
                axios.post('/logout')
                    .catch(error => {
                        window.location.href = './';
                    });
            }
        }
    }
</script>

<style scoped>

</style>