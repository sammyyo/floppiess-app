<template>
  <div class="header">
    <nav class="navbar">
      <ul class="navbar-nav">
          <li><router-link to="/" exact>Home</router-link></li>
          <li><router-link to="/gallary" exact>Gallary</router-link></li>
          <li><router-link to="/collections" exact>Collections</router-link></li>
          <li><router-link to="/blogs" exact>Blog</router-link></li>
         <div class="navbar-item shopping-cart" @click="showCheckoutModal">
            <li><router-link to="/cart" exact class="disabled">
            <i class="fa fa-cart-plus" ></i>Cart
            </router-link></li>
          </div>
        <!-- mobile -->
      <div v-show="isMenuOpen" class="navbar-end">
        <VmMenu></VmMenu>
      </div>
      <!-- For desktop -->
      <div class="navbar-end is-hidden-mobile">
        <VmMenu></VmMenu>
      </div>
          <VmSearch></VmSearch>
          <VmLang></VmLang>
      </ul>
    </nav>
  </div>
</template>

<script>
import VmLang from '@/plugins/Lang';
import i18n from '@/plugins/i18n';
import VmMenu from '../components/menu/Menu';
 import VmSearch from './Search';
export default {
    components: {
      VmSearch,
      VmMenu,
      VmLang
    },
  data(){
    return {
        };
      },
      // computed: {
      // numProductsAdded () {
      //   return this.$store.getters.productsAdded.length;
      //   }
      // },
      methods: {
        changeLocale(locale) 
        {i18n.locale = locale;
        },
        showCheckoutModal () {
        this.$store.commit('showCheckoutModal', true);
        }
      }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.navbar{
  box-sizing: border-box;
  display: flex;
  position: fixed;
  width: 100%;
  height: 8%;
  background: #ffffff;
  z-index: 9999;
  top: 0;
}
.navbar-nav{
  list-style-type: none;
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex: 1;
  cursor: pointer;
}
.router-link-active{
  background:#9cbb55;
  color: #ffffff;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}

li {
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
  font-size: 0.6rem;
  font-weight: bold;   
  color: antiquewhite;
  font-family: Arial, Helvetica, sans-serif;
}
li a:hover{
  background: #df8208;
  color: #ffffff;
  transition: all 0.4s ease-in-out;
}
a {
  color: #000;
  text-decoration: none;
  padding: 0.6em 0.6em;
  border-radius: 1em;
}
  button {
  padding: 0.3em;
  border: 1px solid green;
  font-size: 0.7em;
  margin: 0.7em;
  }

</style>


