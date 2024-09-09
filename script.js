const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            url: 'server.php',
            item: "",
        }
    },
    methods: {
        //effettuo chiamata per ottenre la to do list dal file server.php
        getList() {
            axios.get(this.url).then((answer) => {
                this.todoList = answer.data;
                console.log(this.todoList);
            });
        },
        Add() {
            const data = {
                todoItem: {

                    id: '',
                    done: false,
                    name: this.item
                }
            }

            axios.post(this.url, data, { headers: { 'content-type': 'multipart/form-data' } }).then((answer => {
                this.item = '';
                this.item = answer.data;
            }))
        }
    },
    mounted() {
        //faccio partire la funzione
        this.getList();
    }
}).mount('#app');