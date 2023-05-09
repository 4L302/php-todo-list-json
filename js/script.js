const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "Todo List",
      todoList: [],
      apiUrl: "server.php",
      todoItem: "",
    };
  },
  methods: {
    readList() {
      axios.get(this.apiUrl).then((res) => {
        this.todolist = res.data;
      });
    },
    updateList(){
        console.log(this.todoItem);
        const data = {
            task: this.todoItem,
            done: false
        };
        axios.post(this.apiUrl, data, { headers: {'Content-Type': 'multipart/form-data'} }).then((res) => {
            this.todoItem = '';
            this.todoList = res.data;
        });
    },
  },
  mounted(){
    this.readList();
  }
}).mount('#app');
