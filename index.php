<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CDN AXIOS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js' integrity='sha512-pmaEGtUAy7E5gRmwjLqQAD/QWw0dL4Z59b6b+2HQkqQwQ+HcPLLb9/KbUNo5zr10WuXmbivK9nYVZOyDkMgZMg==' crossorigin='anonymous'></script>
  <!-- CDN AXIOS -->
  <!-- CDN BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <!-- CDN BOOTSTRAP -->
  <!-- CDN VUE -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- CDN VUE -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header></header>
  <main>
    <div id="app" class="container">
      <div class="row">
        <div v-for="disc in discs" :key="disc.id" @click="selectedDisc(disc)" class="col-4 my-3 ">
          <div class="card text-bg-dark">
            <img :src="disc.cover" class="card-img" :alt=disc.title>
            <div :class="{'info':discSelected===disc}" class="card-img-overlay text-center d-flex flex-column-reverse color-info">
              <h4 class="card-text">Anno: {{disc.year}}</h4>
              <h4 class="card-text">Genere: {{disc.genre}}</h4>
              <h2 class="card-title">{{disc.title}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="script.js"></script>
</body>

</html>