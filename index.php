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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.js' integrity='sha512-lsA4IzLaXH0A+uH6JQTuz6DbhqxmVygrWv1CpC/s5vGyMqlnP0y+RYt65vKxbaVq+H6OzbbRtxzf+Zbj20alGw==' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div id="app">
    <header>
      <img src="./assets/img/logopngegg.png" alt="">
      <h1>Musica da cani</h1>
      <div>
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Aggiungi un disco</button>
      </div>
      <div class="offcanvas offcanvas-bottom text-bg-dark" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
          <div data-bs-dismiss="offcanvas" @click='addDisc()' class="btn btn-danger mx-2  ">Invia</div>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">

          <div class="row">
            <div class="col-6 my-3 ">
              <input v-model="newDisc.title" class="input-canvas w-100 " type="text" placeholder="Titolo Campo Obbligatorio">
            </div>
            <div class="col-6 my-3 ">
              <input v-model="newDisc.cover" class="input-canvas w-100 " type="text" placeholder="Link Copertina">
            </div>
            <div class=" col-6">
              <input v-model="newDisc.genre" class="input-canvas w-100 " type="text" placeholder="Genere">
            </div>
            <div class=" col-6">
              <input v-model="newDisc.year" class="input-canvas w-100 " type="text" placeholder=Anno"">
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div v-for="(disc,index) in discs" :key="disc.id" @click.stop="selectedDisc(disc)" class="col-4 my-3 ">
            <div class="card text-bg-dark position-relative ">
              <img :src="disc.cover" class="card-img" :alt=disc.title>
              <i @click.stop="delDisc(index)" class="fa-solid fa-delete-left position-absolute "></i>
              <div :class="{'info': discSelected === disc}" class="card-img-overlay text-center d-flex flex-column-reverse color-info">
                <h4 class="card-text">Anno: {{disc.year}}</h4>
                <h4 class="card-text">Genere: {{disc.genre}}</h4>
                <h2 class="card-title">{{disc.title}}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>
  <script src="script.js"></script>
</body>

</html>