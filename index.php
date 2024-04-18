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
    <!--axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>php-dischi-json</title>
</head>
<body>


    <main>
    <div class="col-8 m-auto d-flex flex-column justify-content-center align-items-center h-100" id="app">
                <div class="d-flex align-items-center">
        <!-- Icona di Spotify -->
                <img src="spotify-icon.png" alt="Spotify Icon" class="spotify-icon mr-2" style="width: 40px; height: auto; margin-right: 10px;">
                <h1 class="mb-0">DISCHI</h1>
                </div>

                <div class="col-12 d-flex flex-wrap pt-3 pb-3 justify-content-evenly gap-2" id="container">
                    <div v-for="(item, index) in data" :key="index" class="card col-3 p-2 text-center" @click="showcard(index)">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">

                            <img :src="item.poster" alt="">
                                <h5>{{item.title}}</h5>
                                <h5>{{item.author}}</h5>
                                <h5>{{item.year}}</h5>
                        </a>
                    </div>
                </div> 

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
        </div>
    </main>
</body>
<!--javascript-->
<script src="./asset/js/script.js" defer></script>
</html>