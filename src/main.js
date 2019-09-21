import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import AOS from 'aos'
import 'aos/dist/aos.css'
import i18n from './plugins/i18n'
import FlagIcon from 'vue-flag-icon'


Vue.use(FlagIcon);
AOS.init();

Vue.config.productionTip = false

new Vue({
  router,
  store,
  i18n,
  render: h => h(App)
}).$mount('#app')
