
  const { createApp } = Vue

  createApp({
    data() {
      return {
        todoList: [],
        apiUrl: './api.php',
      }
    },

    methods: {
        getTodo(){
        axios
        .get(this.apiUrl)
        .then((response) => {
            
            this.todoList = response.data;
        });
    },
    },

    created() {
        this.getTodo();
    },
  }).mount('#app')
