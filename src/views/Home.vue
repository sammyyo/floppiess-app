<template>
  <div class="home">
    <ProductList/>
  </div>
</template>

<script>
// @ is an alias to /src
import ProductList from '@/components/ProductList.vue'
import axios from 'axios'

export default {
  name: 'home',
  components: {
  ProductList  
  },
  mounted() {
    axios.get('http://localhost/FLOPPIESS/floppiess/floppiess').then(res =>{
      console.log(res.data);
    })
  },
}
</script>

<style lang="scss">

</style>
