
  const { createApp } = Vue

  createApp({
    data() {
      return {
        todoList: [],
        apiUrl: './api.php',
        createUrl: './create.php',
        
        newTask:{
          text: '',
          done: false
      }
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
    
    addTodo() {
      console.log(this.newTask);

      axios.post(this.createUrl, {
          todo: this.newTask
      }, {
        headers: {
            'Content-Type' : 'multipart/form-data'

        }

      }
      ).then((response) => {
        console.log(response); 

        this.todoList.push(response.data.todo);
       
        
        
      });
      
      

      
      
      

    },
    
   

    },

    created() {
        this.getTodo();
        
    },

   
  }).mount('#app')
