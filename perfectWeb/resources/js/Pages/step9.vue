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
          <b-card-title class="right">Remerciez tous vos partenaires, amis et famille.<img id="popover-target-4" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div class="info">
            Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas;
          </div>
          <br>
          <br>
          <b-card-title class="right">Laissez-nous un avis sur votre expérience avec My Perfect Wedding !<img id="popover-target-5" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div>
          </div>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je retourne au Board !<a href='/board'><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/9.png" alt="step9">
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

<script>

