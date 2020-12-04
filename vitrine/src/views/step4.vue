<template>

  <div>
    <br>
    <div class="explication" >
      Votre mariage a lieu dans 6 mois ! C'est le moment de confirmer, faire le point avec vos partenaires, faire les papiers nécessaires...
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title class="right">Avez-vous contacté tous les professionnels ?<img id="popover-target-2" class="pointinfo mb-5" src="../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div> Confirmez la venue de tous vos partenaires, si il manque le traiteur, dépêchez-vous, plus la date du mariage s'approche, plus il est difficile de trouver des professionnels.</div>
          <br>
          <br>
          <b-card-title class="right">Avez-vous commencé les essayages ?<img id="popover-target-3" class="pointinfo mb-5" src="../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div> Si ce n'est pas le cas, pensez à prendre rendez-vous pour essayer votre robe de mariée, et pour monsieur, son costume.</div>

        </b-col>
        <b-col>
          <b-card-title class="right">Faites un point administratif.<img id="popover-target-4" class="pointinfo mb-5" src="../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div> C'est le moment de lister tous ce qui a déjà été fait. Renvoyez les papiers manquants, les demandes de devis...</div>
          <br>
          <br>
          <b-card-title class="right">Commencez votre liste de mariage !<img id="popover-target-5" class="pointinfo mb-5" src="../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div>  La liste de mariage est une tradition qui consiste à permettre aux invités de participer
            <br>
            à la fondation du foyer des époux. De nombreux site internet peuvent vous aider à la faire.</div>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<img  class="pointinfo" src="../../public/right-arrow.png" align="right"></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../public/stepbystep/4.png" alt="step1">

  </div>
</template>

<script>

export default {
  name: 'step1'
}
window.parent.document.title = 'Étape 4'

</script>

<style scoped>
.backgroundaboutwedding {
  background-image: url("../../public/cheers.jpg");
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
