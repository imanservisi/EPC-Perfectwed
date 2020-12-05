<template>
  <app-layout>
  <div >
    <div class="explication" v-on:mouseover="start">
      C'est le jour J : Félicitations !!!
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col>
          <b-card-title class="right">Des commentaires, des retours ? N'hésitez pas à nous dire ce que vous avez pensé de cet accompagnement.<img id="popover-target-4" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div>
            Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas;
          </div>
          <br>
          <br>
          <b-card-title class="right">Proposez à vos invités de partager avec vous leurs photos<img id="popover-target-5" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div>Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas;
          </div>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></div>
        </b-col>
      </b-row>
    </b-container>
          <br> <br>
          <b-popover target="popover-target-4" triggers="hover" placement="top">
            <template #title>Pourquoi nous noter ?</template>
            Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas;<br>
          </b-popover>

          <b-popover target="popover-target-5" triggers="hover" placement="top">
            <template #title>Les photos de votre mariage</template>
            Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas;<br>
          </b-popover>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/8.png" alt="step1">
  </div>
    </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'

export default {
            components: {
            AppLayout
        },
  name: 'step8',
  methods: {
    start () {
      this.$confetti.start()
    }
  }
}
window.parent.document.title = 'Étape 8'

</script>

<style scoped>
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
  line-height: 1.5rem;
  text-align: center;
  font-family: "Libian SC", sans-serif;
  font-size:1.5rem;
  color: #776D5A;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
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
  font-family: "Libian SC", sans-serif;
  font-size: 2rem;
  color: #776D5A;
}
</style>
