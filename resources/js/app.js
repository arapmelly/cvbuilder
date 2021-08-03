/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

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

Vue.component('cvbuilder-component', require('./components/CVBuilderComponent.vue').default);
Vue.component('editor-component', require('./components/EditorComponent.vue').default);
Vue.component('preview-component', require('./components/PreviewComponent.vue').default);


Vue.component('personal-component', require('./components/sections/PersonalComponent.vue').default);
Vue.component('objective-component', require('./components/sections/ObjectiveComponent.vue').default);
Vue.component('work-component', require('./components/sections/WorkComponent.vue').default);
Vue.component('education-component', require('./components/sections/EducationComponent.vue').default);
Vue.component('skill-component', require('./components/sections/SkillComponent.vue').default);
Vue.component('referee-component', require('./components/sections/RefereeComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


const app = new Vue({
    el: '#vue-app',
    data: {
        name: 'John Doe',
        designation: 'Software Engineer',
        address: '111 Lorem Street, 34785, Ipsum City',
        phone: '+91 9874563210',
        email: 'johndoe@gmail.com',
        date: '',
        objective: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim viverra nibh sed varius. Proin bibendum nunc in sem ultrices posuere. Aliquam ut aliquam lacus.',
        sdate: '',
        edate: '',
        schoolname: '',
        schoolocation: '',
        schoolscore: '',
        sdate1: '',
        sdate1: '',
        hschoolname: '',
        hschoolocation: '',
        hschoolscore: '',
        sdate2: '',
        edate2: '',
        collegename: '',
        collegelocation: '',
        collegescore: '',
        c: '',
        java: '',
        htmlcss: '',
        js: '',
        php: '',
        db: '',
        ach1: '',
        ach2: '',
        ach3: '',
        companyname1: '',
        comdesignation1: '',
        sdate3: '',
        edate3: '',
        companylocation1: '',
        cdes1: ''

    },
    methods: {


    }
});