<template>
    <div>
        <h1>PRODUTOS</h1>
        <div>
        <b-card-group deck>
            <div v-for="product in products" v-bind:key="product.id" >
                <b-card img-src="./images/default.png" img-alt="Card image" img-top>
                    <div class="card-body">
                        <h4 class="card-title">{{ product.name }}</h4>
                        <p class="card-text">R${{ formatPrice(product.price) }}</p>
                        <div class="float-right">
                        <button @click = 'addToCart(product)'>
                            <b-icon-cart-plus font-scale="2"></b-icon-cart-plus>
                        </button>
                        </div>
                    </div>
                </b-card>
            </div>    
        </b-card-group>
        </div>
        
    </div>
</template>

<script>
import config from './../../config/config'
export default {
    data() {
        return {
            products: []
        };
    },
    methods: {
        formatPrice(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        }
    },
    created() {
        axios.get(`${config.apiUrl}/productsRand`)
        .then(response => {
        this.products = response.data    
        })
        .catch(e => {
        this.errors.push(e)
        })
    }
}
/*
const state = {
  added: [],
  products: []
}
const getters = {
  allProducts: state => state.all,
  getNumberOfProducts: state => (state.all) ? state.all.length : 0,
  cartProducts: state => {
    return state.added.map(({ id, quantity }) => {
      const product = state.all.find(p => p.id === id)
return {
        name: product.name,
        price: product.price,
        quantity
      }
    })
  }
}

const actions = {
  addToCart({ commit }, product){
    commit(types.ADD_TO_CART, {
      id: product.id
    })
  }
}
*/
</script>