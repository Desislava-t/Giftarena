<template>
    <div class="container mt-5">
        <div class="card">
            <!--Site Store Overview-->
            <div class="card-header">
                <h3 class="card-title text-dark text-center">Site Overview</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <!--./Site Store Overview-->

            <!--Conversion rate-->
            <!--d-flex -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                        <i class="fas fa-redo"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold text-dark">
                      <i class="fas fa-arrow-up text-success"></i> 20%
                    </span>
                        <span class="text-muted text-uppercase">Conversion rate</span>
                    </p>
                </div>
                <!-- ./d-flex -->
                <!--./Conversion rate-->

                <!--Registration rate-->
                <!--d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-warning text-xl">
                        <i class="fas fa-user-plus text-warning"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold text-dark">
                        <i class="fas fa-arrow-up text-warning"></i>8%
                    </span>
                        <span class="text-muted text-uppercase">Registration rate</span>
                    </p>
                </div>
                <!-- ./d-flex -->
                <!--./Registration rate-->

                <!--Subscriber rate-->
                <!-- ./d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-danger text-xl">
                        <i class="fas fa-at text-danger"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold text-dark">
                     <i class="fas fa-arrow-down text-danger"></i> 3%
                    </span>
                        <span class="text-muted text-uppercase">Subscriber rate</span>
                    </p>
                </div>
                <!-- ./d-flex -->
                <!--./Subscriber rate-->
            </div>
        </div>
        <!--./Site Overview-->
    </div>
</template>

<script>
    export default {
        name: "AdminContentSiteOverViewComponent"
    }
</script>

<style scoped>
    /*Site Overview*/
    .card-tools {
        float: right;
    }

    /*.Site Overview*/
</style>