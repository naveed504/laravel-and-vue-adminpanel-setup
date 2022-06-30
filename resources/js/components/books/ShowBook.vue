<template>
     <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Show All Books </h6>  
                 <router-link to="/addnew"  class="text-white text-capitalize ps-3 customnewbtn"> Add New </router-link>             
              </div>
            </div>

            
            <div class="card-body ">
 
              <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Book Author</th>
                    <th>Book Publisher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
              
                <tr v-for="(product, index) in products" :key="product.id" >
                    <td>{{index+1}}</td>
                    <td>{{product.book_name}}</td>
                    <td>{{product.book_author}}</td>
                    <td>{{product.book_publisher}}</td>
                    <td>
                      <router-link :to="{name: 'editbook', params: {id: product.id}}" class="btn btn-success">Edit</router-link>
                    <button class="btn btn-danger" @click="deleteProduct(product.id)">Delete</button>
                    </td>                   
                </tr>
            </tbody>
        </table>
             
            </div>
          </div>
        </div>
      </div>
      </div>
</template>
<script>
export default {
    data(){
          return{products:[]}
    },
    created(){
          this.axios.get('/api/fetchallbooks/').then(
            response => { this.products = response.data;
          });
    }, 
    methods: {
      deleteProduct(id){
               
            }
    }
}

</script>
<style scoped>
.customnewbtn{
    float: right;
    margin-top: -30px;
    margin-right: 20px;
    font-weight: bold;
}
</style>