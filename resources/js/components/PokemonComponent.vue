<template>
   <div id="first_content_trainners" > 
         <spinner v-show="loading"></spinner>
            <div class="cards_trainners" v-for="(pokemon,index) in pokemones" :key="index" >
               <img v-bind:src="pokemon.avatar" alt="">
               <h2>{{pokemon.name}}</h2>
               <div class="container_parrf">
                  <p></p>
               </div>
               <div class="container_buttom">
                  <a href="/trainner/"><button type="submit">vermas...</button></a>
               </div>
            </div>
   </div>
</template>



<script>
   export default{
      data(){
         return{
            pokemones:[],
            loading:true
         }
      },

      mounted() {
            axios.get('http://127.0.0.1:8000/pokemones')
            .then((res)=>{
               this.pokemones = res.data,
               this.loading=false
            })
      }
   }
</script>
