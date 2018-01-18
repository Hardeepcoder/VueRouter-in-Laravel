<template>
<div class="container" style="min-height:500px">
  <div class="jumbotron row" v-for="project in projects">

  <div class="col-md-6">
    <img :src="'../public/img/' + project.dp" class="img-responsive">
    </div>
    <div class="col-md-6">
      <h1 >{{project.heading}} </h1>
      <p>{{project.info}}  </p>
    </div>

  </div>
</div>

</template>

<script>
export default {

      routes: [
        { path: '/details/:id' }
      ],
      data() {
        return {
          projects:[]
        }
      },
      ready: function(){
       this.created();
     },
     created(){


       axios.get('http://localhost:8888/portfolio/reactNative/code/details/' + this.$route.params.id)
            .then(response => {
              console.log(response); // show if success
              this.projects = response.data; //we are putting data into our posts array

            })
            .catch(function (error) {
              console.log(error); // run if we have error
            });
     },


 }
</script>
