<template>
    <div class="container">
        <!--row-->
        <div class="row">
            <!--User registration-->
            <div class="col-6">
                <!--box -->
                <div class="small-box bg-primary">
                    <h3>44</h3>
                    <p>User registration</p>
                    <div class="icon">
                        <i class="fas fa-user-plus ion"></i>
                    </div>
                    <!--box footer link-->
                    <div class="box-footer">
                        <a href="admin-register-users" target="_blank" aria-label="register users"
                           class="text-decoration-none">More information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    <!--./box footer link-->
                </div>
                <!--./box -->
            </div>
            <!--.User registration-->

            <!--Subscribed users-->
            <div class="col-6">
                <!--box-->
                <div class="small-box bg-danger">
                    <h3>102</h3>
                    <p>Subscribed users</p>
                    <div class="icon">
                        <i class="fas fa-at ion"></i>
                    </div>
                    <!--box-footer-->
                    <div class="box-footer">
                        <a href="admin-subscribers" target="_blank" aria-label="subscribed users"
                           class="text-decoration-none">More information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    <!--./box-footer-->
                </div>
                <!--./box-->
            </div>
            <!--./Subscribed users-->

            <div class="w-100"></div>

            <!--Unique Visitor-->
            <div class="col-6">
                <!--box-->
                <div class="small-box bg-success">
                    <h3>63%</h3>
                    <p>Unique Visitor</p>
                    <div class="icon">
                        <i class="fas fa-chart-pie ion"></i>
                    </div>
                    <!--box-footer-->
                    <div class="box-footer">
                        <a href="#" aria-label="more information link Unique Visitor" class="text-decoration-none">More
                            information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    <!--./box-footer-->
                </div>
                <!--./box-->
            </div>
            <!--./Unique Visitor-->

            <!--New Message-->
            <div class="col-6">
                <div class="small-box bg-primary">
                    <h3>25</h3>
                    <p>New Messages</p>
                    <div class="icon">
                        <i class="fas fa-envelope-open ion"></i>
                    </div>
                    <div class="box-footer">
                        <a href="#" aria-label="more information link new message" class="text-decoration-none">More
                            information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--.New Message-->

        </div>
        <!--.row-->

        <!--row-->
        <div class="row">
            <!--Bounce Rate-->
            <div class="col-6">
                <div class="small-box bg-danger">
                    <h3>53%</h3>
                    <p>Bounce Rate</p>
                    <div class="icon">
                        <i class="fas fa-chart-line ion"></i>
                    </div>

                    <div class="box-footer">
                        <a href="#" aria-label="more information link Bounce Rate" class="text-decoration-none">More
                            information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--./Bounce Rate-->

            <!--Email Advertising-->
            <div class="col-6">
                <div class="small-box bg-success">
                    <h3>Create</h3>
                    <p>Email Advertising</p>
                    <div class="box-footer">
                        <a href="#" aria-label="more information link email advertising" class="text-decoration-none">More
                            information
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--./Email Advertising-->

        </div>
        <!--.row-->
    </div>
</template>

<script>
    export default {
        name: "AdminContentComponent"
    }
</script>

<style scoped>
    h3, p, .box-footer {
        text-align: center;
    }

    .bg-primary,
    .bg-success,
    .bg-danger {
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
    }

    .box-footer {
        background: rgba(0, 0, 0, .1);
        color: rgba(255, 255, 255, .8);
    }

    .col-6 {
        margin-top: 1em;
    }

    .small-box .icon > i {
        position: absolute;
    }

    .icon .ion {
        font-size: 50px;
        top: 18%;
        left: 34px;
        color: rgba(0, 0, 0, 0.4);
        transition: 0.3s;
    }

    .icon .ion:hover {
        font-size: 55px;

    }

    @media only screen and (max-width: 600px) {
        .icon .ion {
            font-size: 22px;
            top: 7%;
            left: 34px;
        }
    }

    @media only screen and (max-width: 330px) {
        .icon .ion {
            font-size: 18px;
            top: 7%;
            left: 29px;
        }
    }


</style>