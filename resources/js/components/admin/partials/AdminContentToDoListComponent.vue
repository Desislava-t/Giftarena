<template>
    <div class="container">
        <!-- TO DO List -->
        <div class="card mt-5">
            <div class="card-header ui-sortable-handle">
                <h3 class="card-title text-dark text-center">
                    To Do List
                    <i class="ion ion-clipboard mr-1"></i>

                </h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle ui-sortable-handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <!-- checkbox -->
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                            <label for="todoCheck1"></label>
                        </div>
                        <!-- todo text -->
                        <span class="text">Design a nice theme</span>
                        <small class="badge badge-danger">
                            <i class="far fa-clock"></i>
                            2 mins
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="done">
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                            <label for="todoCheck2"></label>
                        </div>
                        <span class="text">Make the theme responsive</span>
                        <small class="badge badge-info">
                            <i class="far fa-clock"></i>
                            4 hours
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo3" id="todoCheck3">
                            <label for="todoCheck3"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-warning">
                            <i class="far fa-clock"></i>
                            1 day
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo4" id="todoCheck4">
                            <label for="todoCheck4"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-success">
                            <i class="far fa-clock"></i>
                            3 days
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo5" id="todoCheck5">
                            <label for="todoCheck5"></label>
                        </div>
                        <span class="text">Check your messages and notifications</span>
                        <small class="badge badge-primary">
                            <i class="far fa-clock"></i>
                            1 week
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                        <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo6" id="todoCheck6">
                            <label for="todoCheck6"></label>
                        </div>
                        <span class="text">Let theme shine like a star</span>
                        <small class="badge badge-secondary">
                            <i class="far fa-clock"></i>
                            1 month
                        </small>
                        <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- ./card-body -->
            <div class="card-footer clearfix">
                <button type="button" class="btn float-right">
                    <i class="fas fa-plus"></i>
                    Add item
                </button>
            </div>
        </div>
        <!-- ./card -->
        <!-- ./TO DO List -->
    </div>
</template>

<script>
    export default {
        name: "AdminContentToDoListComponent"
    }
</script>

<style scoped>
    /*To Do List btn add item*/
    .btn {
        background-color: #2B6CB0;
    }

    /*. To Do List btn add item*/

    .card-header {
        cursor: move !important;
    }
</style>