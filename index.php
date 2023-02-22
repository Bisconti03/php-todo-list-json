<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP todo list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div id="app" >

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>
                    To-do List        
                    </h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 ">
                    <ul class="list-group">
                        <li 
                            v-for="(todo, index) in todoList" class="list-group-item fs-3 d-flex justify-content-between">
                            {{todo.text}}

                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-6 ">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control fs-3" placeholder="Inserisci un elemento" aria-label="Inserisci un elemento" aria-describedby="button-addon2">
                        <button class="btn btn-outline-warning fs-3" type="button" id="button-addon2">Inserisci</button>
                    </div>
                </div>
            </div>
        

        
        </div>
        
        
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>