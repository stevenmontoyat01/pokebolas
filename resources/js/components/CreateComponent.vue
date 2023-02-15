<template>
   <div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Agregar Pokemon</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form @submit.prevent="SavedPokemon">
                  <div class="form-group">
                     <label>Pokemon</label>
                     <input type="text" class="form-control" placeholder="Ingresa el nombre del pokemon" v-model="name">
                  </div>
                  <div class="form-group">
                     <label>Picture</label>
                     <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model="fileAvatar">
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
   export default {
      data(){
         return {
            name:null ,
            fileAvatar:null
         }
      },
      methods:{
         SavedPokemon:function(){
            axios.post('http://127.0.0.1:8000/pokemones',{
            name:this.name,
            fileAvatar:this.fileAvatar
         })
         .then(function(res){
            console.log(res)
            $('addPokemon').modal('hide')
         })
         .catch(function(err){
            console.log(err)
         })
      }
      }
   }
</script>

<style>

</style>