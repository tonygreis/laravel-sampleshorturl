require('./bootstrap');

window.Vue = require('vue');
import SmartTable from 'vuejs-smart-table'
import VueClipboard from 'vue-clipboard2'

Vue.use(VueClipboard);
Vue.use(SmartTable);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-links', require('./components/admin/Links').default);
Vue.component('copy-url', require('./components/CopyUrl').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
