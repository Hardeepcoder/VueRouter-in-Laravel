<template>

<div class="container" id="app">
  <div class="jumbotron">
    <h1>Laravel</h1>
    <p>Laravel is a free, open-source PHP web framework, created by Taylor Otwell
    and intended for the development of web applications following the
    model–view–controller (MVC) architectural pattern.</p>
  </div>

  <div class="row har_row text-center text-lg-left">

    <div class="col-lg-4 col-md-4 col-xs-6" v-for="project in projects">
      <router-link :to="{ name: 'Deatail', params: {id: project.slug }}" >
        <h3>{{project.heading}}</h3>
        <img class="img-fluid img-thumbnail" :src="'public/img/' +project.dp" alt="">
      </router-link>
    </div>

  </div>

</div>
</template>
<script>
export default {
   data() {
     return {
       projects:[],

     }
   },
   ready: function(){
    this.created();
  },
   created(){
     axios.get('http://localhost:8888/portfolio/projects/laravel')
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
