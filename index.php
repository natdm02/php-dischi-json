<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./asset/css/styles.css">
    <!--vuejs-->
    <script src="https://unpkg.com/vue@3" defer></script>
    <!--axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>



<body>

    <main>
        <!--montaggio app vue -->
        <div class="col-8 m-auto d-flex flex-column justify-content-center align-items-center h-100" id="app">

            <h1>dischi</h1>
            <h1 class="mb-0" style="color:black; font-family:Georgia, 'Times New Roman', Times, serif ">SPOTIFY</h1>

        <div class="col-12 d-flex flex-wrap pt-3 pb-3 justify-content-evenly gap-2" id="container">
        <!--ciclo v-for -->
        <div v-for="(item, index) in data" :key="index" class="card col-3 p-2 text-center" @click="showcard(index)">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <img :src="item.poster" alt="">
                <h5>{{item.title}}</h5>
                <h5>{{item.author}}</h5>
                <h5>{{item.year}}</h5>

            </a>
        </div>

        </div> 

        <!--modal--> 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body card text-center">

                        <img :src="dettagliodisco.poster" alt="">
                            <h5>{{dettagliodisco.title}}</h5>
                            <h5>{{dettagliodisco.author}}</h5>
                    <div class="d-flex justify-content-center gap-3">
                            <h5>YEAR: {{dettagliodisco.year}}</h5>
                            <h5>GENERE: {{dettagliodisco.genre}}</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>


<!--javascript-->
<script src="./asset/js/script.js" defer></script>
</html>