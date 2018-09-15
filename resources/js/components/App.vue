<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>   
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ name: 'about' }">Hello World</router-link> 
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ name: 'users.index' }">Users</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ name: 'product.index' }">Products</router-link>
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item">
        <router-link class="nav-link" :to="{ name: 'tasks.index' }">Task</router-link>
      </li>
    </ul>
  </div>
</nav>





<div class="container">
      <h1>Vue Router Demo App</h1>    
      <router-view></router-view>
</div>

</div>
</template>
<script>
  export default {}
</script>
