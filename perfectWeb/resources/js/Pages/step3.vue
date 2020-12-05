<template>
  <app-layout>
  <div>
    <br>
    <div class="explication" >
      On continue de visualiser son plus beau jour dans les moindres détails...
      <br>
      Ou en est la préparation de votre thème ? Avez-vous un costume ? Votre traiteur vous a t'il confirmé sa présence ?
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title class="right">Choisissez votre tenue <img id="popover-target-2" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <img src="../../../public/dresscostume.png" height="250" width="auto" align="center"/>
          <div>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor risus ut nisi porttitor sodales.</div>
        </b-col>
        <b-col>
          <b-card-title class="center">Trouvez le thème parfait ! </b-card-title>
          <a data-pin-do="embedBoard" class="center" data-pin-lang="fr" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.fr/deliajanemunikasari/wedding-decorations/"></a>
        </b-col>

        <b-col>
          <b-card-title class="right">Pensez au traiteur ! <img id="popover-target-3" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
            <br>
            <br>
            <img class="center" src="../../../public/manger.jpg" height="220" width="auto"/>
            <br>
            <br>
            <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></div>
          </b-card-title>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/3.png" alt="step1">
  </div>
    </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'

export default {
            components: {
            AppLayout
            },
  name: 'step3'
}
window.parent.document.title = 'Étape 3'

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
