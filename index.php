<php? 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    
    <!-- qui andrà il contenuto dell'applicazione -->
    <div id="app">
        <ul>
            <li v-for="todo, index in todoList" :key="index">{{ todo.name }}</li>
        </ul>
        <input type="text" name="item" id="item" placeholder="Aggiungi una task!" v-model="item">
        <button @click="Add">Invia!</button>
    </div>

        
    <!-- importo vue.js -->    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- importo axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js" integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- importo il mio script -->
    <script src="./script.js" type="text/javascript"></script>
</body>

</html>