/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./anchors');



window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Admin
Vue.component('admin-nav-component', require('./components/admin/partials/AdminNavComponent').default);
Vue.component('admin-content-component', require('./components/admin/partials/AdminContentComponent').default);
Vue.component('admin-content-to-do-list-component', require('./components/admin/partials/AdminContentToDoListComponent').default);
Vue.component('admin-content-site-over-view-component', require('./components/admin/partials/AdminContentSiteOverViewComponent').default);

Vue.component('admin-post-to-home-page-component', require('./components/admin/partials/AdminPostToHomePageComponent').default);
Vue.component('admin-get-subscribers-users-email-component', require('./components/admin/partials/AdminGetSubscribersUsersEmail.vue').default);
Vue.component('admin-footer-component', require('./components/admin/partials/AdminFooterComponent').default);

//.Admin

//Site
Vue.component('carousel-component', require('./components/CarouselComponent.vue').default);
Vue.component('post-home-page-component', require('./components/PostHomePageComponent.vue').default);
Vue.component('home-page-content-services-component', require('./components/HomePageContentServices.vue').default);
Vue.component('useful-information-component', require('./components/UsefulInformationComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
//.Site

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
