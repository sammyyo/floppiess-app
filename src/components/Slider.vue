
<template>
  <div id="slider">
    <div  class="slides-inner">
      <transition-group name='fade' tag='div'>
        <div v-for="i in [currentIndex]" :key='i'>
          <img :src="currentImg.url" />
        </div>
      </transition-group>
          <a class="prev" @click="prev">&#10094;</a>
          <a class="next" @click="next">&#10095;</a>
    </div>
  </div>
</template>

<script>
import { setInterval } from 'timers';
export default {
  name: "Slider",
  components:{
  },
  data(){
    return{
      images:[
      {
        id: 0,
        url: require('../assets/images/img1.png')
      },
      {
        id: 1,
        url: require('../assets/images/img2.png')
      },
      {
        id: 2,
        url: require('../assets/images/img3.png')
      },
      {
        id: 3,
        url: require('../assets/images/img4.png')
      },
      {
        id: 4,
        url: require('../assets/images/img5.png')
      }
      ],
      timer: null,
      currentIndex: 0,
    }
  },
  mounted: function() {
      this.startSlide();
    },
    methods: {
      startSlide: function() {
        this.timer = setInterval(this.next, 4000);
        },

      next: function() {
        this.currentIndex += 1
      },
       prev: function() {
        this.currentIndex -= 1
      }
      },
      computed: {
      currentImg: function() {
        return this.images[Math.abs(this.currentIndex) % this.images.length];
      }
    }
  
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
#slider{
 margin:0;
.slides-inner{
   margin: auto;
   position: relative;
   width: 80%;
img {
   width: 100%;
    }
.prev, .next {
   cursor: pointer;
   position: absolute;
   top: 50%;
   width: auto;
   padding: 1em;
   color: #ffffff;
   opacity: 1;
   font-weight: bold;
   font-size: 1.3em;
   transition: 0.7s ease;
   border-radius: 0 4px 4px 0;
   text-decoration: none;
}
.next {
  right: 0;
}
.prev {
  left: 0;
}
.prev:hover, .next:hover {
  background-color: rgba(0, 0, 0, 0.9);
  }
  }
}
</style>