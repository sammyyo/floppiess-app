<template>
  <div class="main">
    <Slider/>
    <div class="mainpage">
     <h1>Product List</h1>
     <div v-if="!isShowingCart" id="products" class="row">
      <div class="main-conteiner">
        <div class="items" v-for="product in products" :key="product.id" :class="groupWrapper">
          <img class="product-pics" v-bind:src="product.pictures"/>
           <div class="caption">
              <h4 class="group-inner">
                {{product.name}}</h4>
              <p class="group-inner">
              {{product.description}}</p>
              <div class="row">
                <p>
                {{product.price | currency}}</p>
              </div>
                <div  class="size">
                    <p>Size:</p>
                   <select>
                    <option value="small">36 - 40</option>
                    <option value="big">40 - 46</option>
                   </select>
              </div>
              <div class="justify-right">
                <div class="number-in-stock" :class="{ few: product.inStock < 10 && product.inStock > 0, none: product.inStock == 0 }" >
                    {{ product.inStock }} in stock
                </div>
                  <button class="btn" @click="addProductToCart(product)">Add to cart</button>
              </div>
            </div>
        </div>
      </div >
     </div>
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
      groupWrapper: "list-group-item",
      isShowingCart: false,
      cart: {
      items: []
    },
      products:[
        {
          id: 1,
          pictures: require('../../public/products/product1.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 11,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 1,
          pictures: require('../../public/products/product2.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 16,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 2,
          pictures: require('../../public/products/product3.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 15,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 3,
          pictures: require('../../public/products/product4.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 4,
          pictures: require('../../public/products/product5.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 5,
          pictures: require('../../public/products/product6.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 6,
          pictures: require('../../public/products/product7.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 7,
          pictures: require('../../public/products/product8.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 8,
          pictures: require('../../public/products/product9.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 9,
          pictures: require('../../public/products/product10.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 10,
          pictures: require('../../public/products/product11.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 11,
          pictures: require('../../public/products/product12.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        },
        {
          id: 12,
          pictures: require('../../public/products/product13.png'),
          name: 'Avobana Blue',
          description: 'For the eyes only',
          price: 12,
          inStock: 0,
          sizes: ['36-40', '40-46']
        }
      ]
    } 
  },
   computed:{
    cartTotal: function() {
      var total = 0;
      this.cart.items.forEach(function(item) {
        total += item.quantity * item.product.price;
      });
      return total;
    },
    taxAmount: function() {
      return this.cartTotal * 10 / 100;
    }
  },
  filters: {
    currency: function(value) {
      var formatter = new Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "USD",
        minimumFractionDigits: 0
      });
      return formatter.format(value);
    }
  },
  methods:{
    removeItemFromCart: function(cartItem) {
      var index = this.cart.items.indexOf(cartItem);
      
      if (index !== -1) {
        this.cart.items.splice(index, 1);
      }
    },
    checkout: function() {
      if (confirm('Are you sure that you want to purchase these products?')) {
        this.cart.items.forEach(function(item) {
          item.product.inStock += item.quantity;
        });
        
        this.cart.items = [];
      }
    },
    addProductToCart: function(product) {
      var cartItem = this.getCartItem(product);
      
      if (cartItem != null) {
        cartItem.quantity++;
      } else {
        this.cart.items.push({
          product: product,
          quantity: 1
        });
      }
      product.inStock--;
    },
    increaseQuantity: function(cartItem) {
      cartItem.product.inStock--;
      cartItem.quantity++;
    },
    decreaseQuantity: function(cartItem) {
      cartItem.quantity--;
      cartItem.product.inStock++;
      if (cartItem.quantity == 0) {
        this.removeItemFromCart(cartItem);
      }
    },
    getCartItem: function(product) {
      for (var i = 0; i < this.cart.items.length; i++) {
        if (this.cart.items[i].product.id === product.id) {
          return this.cart.items[i];
        }
      }
      
      return null;
    },
    listWrapper:function(){
      this.groupWrapper = "list-group-item"
    },
    gridWrapper:function(){
      this.groupWrapper = "grid-group-item"
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.mainpage{
    width: 100%;
.main-conteiner{
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 0;
  }
.items{
    flex-grow: 1;
    flex-basis: 35em;
    text-align: center;
    padding: 1.5em;
    margin: 0.7em;
  }
}
</style>
