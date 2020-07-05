/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        isHidden: false,
        selectedOption:'',
        markup: 0,
        insurance: 0,
        principal: 0,
        principal_left: 0,
        totalPrincipal: 0,
    },
    methods:{
        markUp: function(event) {
            this.markup = event.target.value;
            this.totalPrincipal = Number(this.markup)
        },
        insuranceFunc: function(event) {
            this.insurance = event.target.value;
            this.totalPrincipal = Number(this.insurance) + Number(this.markup)
        },
        principalFunc: function(event) {
            this.principal = event.target.value;
            this.totalPrincipal = Number(this.principal) + Number(this.insurance) + Number(this.markup)
        },
    }
});

