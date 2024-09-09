const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            url: 'server.php',
        }
    },
    methods: {
        //effettuo chiamata per ottenre la to do list dal file server.php
        getList() {
            axios.get(this.url).then((answer) => {
                this.todoList = answer.data;
            });
        }
    },
    created() {
        //faccio partire la funzione
        this.getList();
    }
}).mount('#app');