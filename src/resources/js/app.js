require('./bootstrap');
window.Vue = require('vue');

Vue.component('my-component', require('./components/MyComponent.vue').default);

const app = new Vue({
  el: '#app',
});
