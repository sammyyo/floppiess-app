<template>
  <form action="" id="menu-serach-form">
    <img alt="search-bar" src="../../public/img/search.png">
    <input type="text" class="search-input" placeholder="search" @keyup="search(value)" required/>
  </form> 
</template>

<script>
export default {
  name: 'search',
	data () {
		return {
			value: ''
		}
	},
	computed: {
		placeholder () {
			if (this.$route.path === '/wishlist') {
				return 'Search in wishlist...';
			} else {
				return 'Search...';
			}
		}
	},
	methods: {
		search (value) {
			if (value.length > 0) {
				this.$store.commit('setHasUserSearched', true);
				this.$store.commit('setProductTitleSearched', value);
			} else {
				this.$store.commit('setHasUserSearched', false);
				this.$store.commit('setProductTitleSearched', '');
			}
		}
	}
}
</script>

<style scoped lang="scss">

#menu-serach-form img{
  margin-right: 1em;
  }
input[type="text"]{
  border: 1px solid black;
  border-radius: 5px;
  padding: 7px;
  }

</style>


