<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Todo-List </title>
</head>

<body>
    <div id="app">
        <section class="todo-list py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Todo List</h1>
                        <ul class="list-group list-group-flush border border-1 rounded">
                            <li class="d-flex justify-content-between align-items-center list-group-item">
                                <span class="w-100 h-100 task-item" :class="{'text-decoration-line-throught' : todo.done}" @click="toggleTaskDone()index"> {{ todo.task }}</span>
                                <span @click="deleteTask(index)" class="badge bg-danger p-2">
                                    <i class="fa-solid fa-trash"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="add-todo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" v-model="todoItem" @keyup.enter="updateList" placeholder="Nuovo elemento" aria-label="Inserisci nuovo elemento per la lista" aria-describedby="button-add">
                            <button @click="updateList" class="btn btn-outline-warning" type="button" id="button-add">Aggiungi</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>