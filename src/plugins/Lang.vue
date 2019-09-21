<template>
  <div class="lang">  
       <div>    
        <button v-for="entry in languages" :key="entry.title" @click="changeLocale(entry.language)">
        <flag :iso="entry.flag" v-bind:squared=false />
        {{entry.title}}
        </button>
      </div>
  </div>
</template>

<script>
export default {
   name: "Lang",
  data(){
    return {
      languages: [
        { flag: 'us', language: 'en', title: 'EN' },
        { flag: 'de', language: 'de', title: 'DE' },
        { flag: 'es', language: 'es', title: 'ES' }
        ]
        };
      }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  button {
  padding: 0.3em;
  border: 1px solid green;
  font-size: 0.7em;
  margin: 0.7em;
  }

</style>


