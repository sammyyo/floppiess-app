<template>
  <div class="main">
    <Slider/>
    <div class="mainpage">
     <h1>Product List</h1>
      <ul>
        <li v-for="product in products" :key="product.id">
          <img class="product-pics" v-bind:src="product.pictures"/>
          {{product.price}}
        </li>
      </ul>
    </div>
  </div>  
</template>

<script>
import Slider from "./Slider";
export default {
  props: ['product'],
  components: {
    Slider,
  },
  data(){
    return{
      addToCartLabel: 'Add to cart',
      viewDetailsLabel: 'Details',
      removeFromCartLabel: 'Remove from cart',
      addToFavouriteLabel: 'Add to favourite',
      removeFromFavouriteLabel: 'Remove from favourite',
      selected: 1,
      quantityArray: [],
      products:[
        {
          id: 1,
          pictures: require('../../public/products/product1.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 11,
        },
        {
          id: 1,
          pictures: require('../../public/products/product2.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 16,
        },
        {
          id: 2,
          pictures: require('../../public/products/product3.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 15,
        },
        {
          id: 3,
          pictures: require('../../public/products/product4.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 4,
          pictures: require('../../public/products/product5.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 5,
          pictures: require('../../public/products/product6.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 6,
          pictures: require('../../public/products/product7.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 7,
          pictures: require('../../public/products/product8.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 8,
          pictures: require('../../public/products/product9.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 9,
          pictures: require('../../public/products/product10.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 10,
          pictures: require('../../public/products/product11.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 11,
          pictures: require('../../public/products/product12.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        },
        {
          id: 12,
          pictures: require('../../public/products/product13.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
        }
      ]
    } 
  },
   mounted () {
    for (let i = 1; i <= 20; i++) {
      this.quantityArray.push(i);
    }
    if (this.$props.product.quantity > 1) {
      this.selected = this.$props.product.quantity;
    }
  },
  computed: {
    isUserLogged () {
      return this.$store.getters.isUserLoggedIn;
    }
  },

  methods: {
    addToCart (id) {
      let data = {
        id: id,
        status: true
      }
      this.$store.commit('addToCart', id);
      this.$store.commit('setAddedBtn', data);
    },
    removeFromCart (id) {
      let data = {
        id: id,
        status: false
      }
      this.$store.commit('removeFromCart', id);
      this.$store.commit('setAddedBtn', data);
    },
    saveToFavorite (id) {
      let isUserLogged = this.$store.state.userInfo.isLoggedIn;
      if (isUserLogged) {
        this.$store.commit('addToFavourite', id);
      } else {
        this.$store.commit('showLoginModal', true);
      }
    },
    removeFromFavourite (id) {
      this.$store.commit('removeFromFavourite', id);
    },
    onSelectQuantity (id) {
      let data = {
        id: id,
        quantity: this.selected
      }
      this.$store.commit('quantity', data);
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.mainpage{
    width: 100%;
ul{
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 0;
  }
li{
    flex-grow: 1;
    flex-basis: 35em;
    text-align: center;
    padding: 1.5em;
    margin: 0.7em;
  }
}
</style>
