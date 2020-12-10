<template>
  <app-layout>
  <div @click="stop">
    <div class="explication" v-on:mouseover="start">
      C'est le jour J : Félicitations !!!
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col>
          <b-card-title class="right">
          </b-card-title>
          <div class="explication">
             Amusez vous et profitez de cette journée d'exception !!
          </div>
          <br>
          <br>

          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<a href='/step9'><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
          <br> <br>

    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/8.png" alt="step1">
      <a href="/step7"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
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
    },
    stop () {
        this.$confetti.stop()
    }
  }
}
window.parent.document.title = 'Étape 8'

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
