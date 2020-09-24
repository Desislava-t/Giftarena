<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Създай пост
                    </div>
                    <!--form-->
                    <form action="api/admin-create-post-to-home-page" method="POST"
                          @submit.prevent="addPostToHomePage()">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="titlePost">Заглавие</label>
                                <input type="text" id="titlePost" class="form-control" v-model="title">
                            </div>
                            <div class="form-group">
                                <label for="contentPost">Съдържание</label>
                                <textarea id="contentPost" v-model="content" cols="10" rows="5"
                                          class="d-blok w-100"></textarea>
                            </div>
                            <div class="card-footer">
                                <button class="btn main-button" type="submit" aria-label="btn submit">Запис</button>
                            </div>
                        </div>
                    </form>
                    <!--./form-->

                    <div class="form-group">
                        <div v-if="hasErrors" class="alert alert-danger alert-dismissible m-2 fade show" role="alert">
                            {{ errors.title[0] }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div v-if="hasErrors" class="alert alert-danger alert-dismissible m-2 fade show" role="alert">
                            {{ errors.content[0] }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div v-if="hasSuccess" class="alert alert-success alert-dismissible m-2 fade show" role="alert">
                            Успешно публикувахте!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AdminPostToHomePageComponent",
        data() {
            return {
                title: '',
                content: '',
                errors: [],
                hasErrors: false,
                hasSuccess: false,
            }
        },
        methods: {
            addPostToHomePage() {
                const self = this;
                axios.post('api/admin-create-post-to-home-page', {
                    title: self.title,
                    content: self.content,
                })
                    .then(function (response) {
                        if (response.status === 200) {
                            self.title = '';
                            self.content = '';
                            self.hasSuccess = true;
                            self.hasError = false;
                        }
                    })
                    .catch(function (error) {
                        self.errors = error.response.data.errors;
                        self.hasSuccess = false;
                        self.hasError = true;
                    })
            }
        }
    }
</script>

<style scoped>

</style>