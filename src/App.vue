<template>
  <div id="app">
    <Header/>
    <div class="logo"  data-aos="zoom-in">
      <img alt="logo" src="./assets/logo.svg">
    </div>
    <router-view/>
    <nuxt/> 
    <nuxt-link/>
    <!-- <VmLoginModal></VmLoginModal>
    <VmRegistrationModal></VmRegistrationModal>
    <VmCheckoutModal></VmCheckoutModal> -->
    <Footer/>
  </div>
</template>

<script>
import Header from './components/Header';
import Footer from './components/Footer';
// import VmLoginModal from '@/components/modal/Login';
// import VmRegistrationModal from '@/components/modal/Registration';
// import VmCheckoutModal from '@/components/modal/Checkout';
export default {
  name: 'app',
  components: {
    Header,
    Footer,
    // VmLoginModal,
    // VmRegistrationModal,
    // VmCheckoutModal
  }
}
</script>

<style lang="scss">
body{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}
.logo{
 margin-top: 4.8em;
}
.logo img{
   height: 7em;
   flex: start;
 }
</style>
