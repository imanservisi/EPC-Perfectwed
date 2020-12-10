<template>
  <app-layout>
  <div>
    <br>
    <div class="explication" >
      Comment s'est passé votre mariage ?
    </div>
    <br>
    <b-container fluid >
      <b-row>
        <b-col>
            <b-card-title class="right">Récupérez les photos de vos invités !
            </b-card-title>
            <div class="info">
                Pensez aussi à récupérer les photos du professionnel, afin de garder un souvenir de ce jour si particulier.<br>
                <a href="https://photos.google.com" target="_blank">Un endroit pour mutualiser toutes les photos</a>
            </div>
            <br>
            <br>
          <b-card-title class="right">Remerciez tous vos partenaires, amis et famille.
          </b-card-title>
          <div class="info">
            Les remerciements sont aussi important que les faire-part. Beaucoup de monde a participé à cet évènement, il faut leur dire que vous l'avez vu et apprécié.
          </div>
          <br>
          <br>
          <b-card-title class="right">Laissez-nous un avis sur votre expérience avec My Perfect Wedding !
          </b-card-title>
          <div class="info">
              Votre avis nous est précieux pour faire évoluer notre site. Vous pouvez également nous attribuer une note :<br>
              <a href="https://fr.trustpilot.com/" target="_blank">Pour donner votre avis, c'est ici</a>
          </div>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je retourne au Board !<a href='/board'><img class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/9.png" alt="step9">
      <a href="/step8"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
  </div>
  </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'

export default {
            components: {
            AppLayout
        },
  name: 'step9'
}
window.parent.document.title = 'Étape 9'

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap');

  .backgroundaboutwedding {
      background-image: url("../../../public/cheers.jpg");
      background-size: cover;
      margin: 0 auto 0 auto;
      min-height: 100vh;
      min-width: 20vw;
      display: block;

  }

.left {
    height: 3%;
    width: 3%;
}

  .explication {
      transition-delay : 0.5s;
      transition-property: right, opacity;
      transition-duration: 2s;
      line-height: 2.5rem;
      text-align: center;
      font-family: 'Sansita Swashed', sans-serif;
      font-size:1.3rem;
      color: #776D5A;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
  }

  .info {
      font-family: 'Raleway', sans-serif;
      font-size:1rem;
  }

  #decl:hover, nav:hover {
      right: 25em;
      opacity:1;
  }

  .centerimg {
      display: flex;
      justify-items: center;
      margin-left: auto;
      margin-right: auto;
      height: 100px;
  }
  .center{
      align-content: center;
      align-items: center;
      text-align: center;
      font-family: 'Raleway', sans-serif;
      font-size:1.7rem;
  }

  .right {
      font-family: 'Raleway', sans-serif;
      font-size:1.7rem;
  }

  .pointinfo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      height: 60px;
      width: 60px;
      max-width: 800px;

  }
  .popover {
      max-width: 800px;
  }

  .etapesuivante {
      font-family: 'Sansita Swashed', sans-serif;
      font-size: 2rem;
      color: #776D5A;
  }
  </style>


