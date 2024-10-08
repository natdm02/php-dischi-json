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
        <div id="app">
            <h2>lista dischi</h2>

            <ul>
                <li v-for= "(disco,index) in data" :key="index">
                    {{ disco.titolo }} - {{ disco.autore }}

                </li>
            </ul>
        </div>
    </main>

</body>














<!--javascript-->
<script src="./asset/js/script.js" defer></script>
</html>