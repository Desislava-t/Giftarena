<template>
    <div class="container">
        <h3 class="text-dark text-uppercase text-center border-bottom pt-5">Новини</h3>

        <div class="card-group">
            <div v-for="getPosts in getPost" class="card mr-4 box">
                <div class="card-body">
                    <p class="card-title">
                        {{ getPosts.title }}
                    </p>
                    <p class="card-text">
                        {{ getPosts.content }}
                    </p>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "PostHomePageComponent",
        data() {
            return {
                getPost: [],
            }
        },
        mounted() {
            this.getPostFromAdmin();
        },
        methods: {
            getPostFromAdmin() {
                const self = this;
                axios.get('api/getpost')
                    .then(function (response) {
                        self.getPost = response.data;
                    })
                    .catch(function (error) {

                    })
            },
        }
    }
</script>

<style scoped>
    .card {
        border: none !important;
    }

    .card-title {
        font-size: 20px;
    }

    .box {
        box-sizing: border-box;
        border-radius: 10px;
        background-color: #333366;
        text-align: center;
    }


</style>