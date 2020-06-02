import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import axios from "axios";
import VueAxios from 'vue-axios'

//autocomplete
require('vue2-autocomplete-js/dist/style/vue2-autocomplete.css')
import Autocomplete from 'vue2-autocomplete-js'

//import * as types from './mutations

require('./bootstrap');

Vue.use(VueAxios, axios)
// Install BootstrapVue
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
window.Vue = require('vue');

// regitro de componentes
import Navbar from './components/Navbar'
import ProductList from './components/ProductList'
import Cart from './components/Cart'

const app = new Vue({
  el: '#app',
  components: {
    'autocomplete': Autocomplete,
    'navbar': Navbar,
    'product-list': ProductList,
    'cart': Cart,  
  }
});
      
      // mutations
      /*const mutations = {
        [types.ADD_TO_CART] (state, { id }) {
              const record = state.added.find(p => p.id === id)
        if (!record) {
                state.added.push({
                  id,
                  quantity: 1
                })
              } else {
                record.quantity++
              }
            }
        }
        
        export default new Vuex.Store({
          state,
          strict: debug,
          getters,
          actions,
          mutations
        })*/
