<template>
 <footer>
    <div class="begin">
    <div class="logo">
        <img alt="logo" src="../assets/logo.svg">
    </div>
    <div class="news-letter">
       <i class="fa fa-envelope"></i>
       <input class="tbox" type="email" name="" value="" placeholder="Enter your email">
       <button class="btn" type="button" name="button">Subcribe</button>
    </div>
    </div>
    <div class="social-media">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-pinterest"></a>
      <a href="#" class="fa fa-linkedin"></a>
    </div>
   <p> Copyright &copy; 2019 Floppiess</p>
 </footer>
</template>


<script>
export default {
   props:{
    title:{
      type: String
    }
  },
  data(){
    return{
      }
    },
    methods:{
     
  },
  computed:{
     
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
 footer{
   background: #222;
   height: 100%;
   width: 100%;
 }
   
 .begin{
   display: flex;
   justify-content: space-between;
 }
 .logo img{
   height: 5em;
   padding-left: 0.6em;
 }
 .news-letter{
   margin-top: 0.4em;
   padding-right: 2em;
 }
 .tbox,.btn{
   border: none;
   outline: none;
 }
  .fa-envelope {
    background: #ffffff;
    color: #000000;
 }
  .tbox{
  width: 0px;
  transition: 0.6s;
  }
  .news-letter:hover > .tbox,.tbox:focus{
    width: 10em;
    border: 1px solid black;
    border-radius: 5px;
    padding: 7px;
  }
  .btn{
    background: #ffffff;
    border: 1px solid black;
    border-radius: 5px;
    padding: 0.5em;
    text-transform: uppercase;
    cursor: pointer;
  }
 
 p{
   color: #9cbb55;
   text-align: center;
 }
 .fa {
  margin: 0.3em;
  padding: 0.6em;
  font-size: 1.3em;
  width: 1em;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}
.fa:hover {
  opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-pinterest{
  background: #CC2127;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
</style>
