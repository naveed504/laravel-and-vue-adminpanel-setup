<template>
     <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Create New Book</h6>  
                 <router-link to="/books"  class="text-white text-capitalize ps-3 customnewbtn">Go Back </router-link>             
              </div>
            </div>

            
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-7">
                        <form @submit.prevent="updateBook" role="form">
                            <label class="form-label">Book Name</label>
                            <div class="input-group input-group-outline mb-3">                           
                            <input type="text" class="form-control" v-model="book.book_name">
                            <input type="hidden" class="form-control" v-model="book.id">
                            </div>
                            <label class="form-label">Book Author</label>
                            <div class="input-group input-group-outline mb-3">                            
                            <input type="text" class="form-control" v-model="book.book_author">
                            </div>     
                             <label class="form-label">Book Publisher</label>
                             <div class="input-group input-group-outline mb-3">                           
                            <input type="text" class="form-control" v-model="book.book_publisher">
                            </div>                       
                            <div class="form-check form-check-info text-start ps-0">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                            </label>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Save Book Record</button>
                            </div>
                        </form>
                    </div>
                     <div class="col-md-5">
                         <img :src="'/assets/img/5000.webp'"  class="img img-responsive imgcustmsetting"/>
                     </div>
                </div>
            
            </div>
          </div>
        </div>
      </div>
      </div>
</template>
<script>
export default {
    data() {
        return {
            book: {}
        }
    },
    created() {
        this.axios.get(`/api/singlebook/${this.$route.params.id}`).then((res)=>{
            this.book = res.data;
            console.log(this.book)
        });
    },
    methods:{
        updateBook() {
            this.axios.post('/api/updateBook/', this.book)
            .then(
                response => ( this.$router.push({name:'books'}) )
            )
            .catch(err => console.log(err))
            .finally(()=>this.loadin=false)
          
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
.imgcustmsetting{
    width:100%;
    height:220px;
    object-fit: cover;
    border-radius: 10px;
}
</style>