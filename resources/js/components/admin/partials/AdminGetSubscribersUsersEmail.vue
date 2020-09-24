<template>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header mb-2">
                    Абонирани потребители за известия
                </div>
                <div class="card-body">
                    <table class="table table-striped table-dark">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Email</th>
                        </tr>
                        </thead>
                        <tbody v-for="emails in getemail">
                        <tr>
                            <th scope="row">{{ emails.id }}</th>
                            <td>{{ emails.email }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "getTestComponents",
        data() {
            return {
                getemail: [],
            }
        },
        mounted() {
            this.getUsersEmail();
        },
        methods: {
            getUsersEmail() {
                const self = this;
                axios.get('./api/getemail')
                    .then(function (response) {
                        self.getemail = response.data;
                    })
                    .catch(function (error) {
                        // console.log(error);
                    })
            },
        }
    }
</script>

<style scoped>

</style>