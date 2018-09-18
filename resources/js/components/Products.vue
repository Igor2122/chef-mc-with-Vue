<template>
  <div class="users">
    <div class="loading" v-if="loading">
      Loading...
    </div>

    <div v-if="error" class="error">
        <p>{{ error }}</p>
        <p>
            <button @click.prevent="fetchData">
            Try Again
            </button>
        </p>
    </div>

    <ul v-if="products">
      <li v-for="{ title, body } in products">
        <strong>Title:</strong> {{ title }},
        <strong>Body:</strong> {{ body }}
      </li>
    </ul>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      loading: false,
      products: null,
      error: null,
    };
  },
  created() {
    this.fetchData();
  },
  methods: {
    // fetchData() {
    //   this.error = this.users = null;
    //   this.loading = true;
    //   axios
    //     .get('/api/users')
    //     .then(response => {
    //       console.log(response);
    //     });
    // }
    fetchData() {
        this.error = this.products = null;
        this.loading = true;
        axios
            .get('/api/products')
            .then(response => {
               this.loading = false;
               this.products = response.data;
            }).catch(error => {
                this.loading = false;
                this.error = error.response.data.message || error.message;
            });
    }
  }
}
</script>
