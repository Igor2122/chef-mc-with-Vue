<template>
  <div class="users">
    <div class="loading" v-if="loading">
      Loading...
      <!-- <img src="https://i.gifer.com/1amw.gif" alt="loading-gif-animation"> -->
    </div>

    <div v-if="error" class="error">
        <p>{{ error }}</p>
        <p>
            <button @click.prevent="fetchData">
            Try Again
            </button>
        </p>
    </div>


<table v-if="tasks" class="table">
  <thead>
    <tr>
      <th scope="col">Order#:</th>
      <th scope="col">Task Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody v-for="{ id, description, task, status } in tasks">
    <tr>
      <th scope="row">{{ id }}</th>
      <td>{{ task }}</td>
      <td>{{ status }}</td>
      <td>{{ description }}</td>
    </tr>
  </tbody>
</table>







    <!-- <ul v-if="tasks">
      <li v-for="{ task, status } in tasks">
        <strong>Task:</strong> {{ task }},
        <strong>Completed:</strong> {{ status }}
      </li>
    </ul> -->
  </div>
</template>









<script>
import axios from 'axios';
export default {
  data() {
    return {
      loading: false,
      tasks: null,
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
        this.error = this.tasks = null;
        this.loading = true;
        axios
            .get('/api/tasks')
            .then(response => {
               this.loading = false;
               this.tasks = response.data;
            }).catch(error => {
                this.loading = false;
                this.error = error.response.data.message || error.message;
            });
    }
  }
}
</script>
