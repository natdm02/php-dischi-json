<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./asset/css/mine.css">
    <!--vuejs-->
    <script src="https://unpkg.com/vue@3" defer></script>
    <!--javascript-->
    <script src="./asset/js/script.js" defer></script>
    <!--axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>

    <title>php-dischi-json</title>
</head>
<body>

    <main>
        <div class="col-8 m-auto d-flex flex-column justify-content-center align-items-center h-100" id="app">
            <h1>dischi</h1>

                <div class="bg-light col-12 d-flex flex-wrap p-3 justify-content-between gap-2" id="container">
                    <div v-for="(item, index) in data" key="index" class="card col-3 p-2 text-center">
                        <img :src="item.poster" alt="">
                        <div>{{item.title}}</div>
                        <div>{{item.author}}</div>
                        <div>{{item.year}}</div>
                    </div>
                </div>
                        
        </div>
    </main>
</body>
</html>