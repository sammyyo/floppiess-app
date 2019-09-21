<template>
  <div class="hello">
    <h1>Dynamic CSS</h1>
    <h2>Example 1</h2>
    <h2>Example 2</h2>
    <button v-on:click="nearby = !nearby">Toggle nearby</button>
    <button v-on:click="available = !available">Toggle avialable</button>
    <div v-bind:class="compClasses">
      <span>Sammy</span>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
     available: false,
     nearby: false
      }
    },
    methods:{
   
  },
  computed:{
    compClasses:function(){
      return{
        available: this.available,
        nearby: this.nearby
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
  text-decoration: none;
  font-size: 2em;
}
span{
  background: red;
  display: inline-block;
  padding: 1em;
  color: #fff;
  margin: 1em 0;
}
.available span{
  background: green;
}
.nearby span:after{
  content: "nearby";
  margin-left: 1em;
}

</style>





