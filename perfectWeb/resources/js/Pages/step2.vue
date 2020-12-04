<template>
  <div>
    <br>
    <div class="explication" >
     Place à la seconde étape ! C'est le moment de rentrer dans les détails de la planification du mariage...
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title>Trouvez l'inspiration </b-card-title>
          <a data-pin-do="embedBoard" data-pin-lang="fr" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.fr/cotemaison/d%25C3%25A9co-mariage/"></a>
        </b-col>
        <b-col>
          <b-card-title>Choisissez le lieu du mariage <img id="popover-target-2" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <br>
          <div>Une fois prise la décision de se marier, le plus important est de fixer le lieu du mariage. Aujourd'hui le plus courant est de célébrer le mariage civil à la mairie et le mariage religieux dans une eglise.</div>
          <br>
          <br>
          <b-card-title>Choix des témoins
            <img id="popover-target-1" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <br>
          <div> Au cours des préparatifs de votre mariage vous allez être confrontée à de nombreux choix pour la suite des événements. Choisir la bonne personne comme témoin fait partie de ces dilemmes.</div>
          <b-popover target="popover-target-1" triggers="hover" placement="top">
            <template #title>Quels sont les différents types de cérémonies ?</template>
            Les types de cérémonies de mariage sont désormais diversifiés. <br>
            Les couples qui souhaitent se marier se demandent quelle option choisir pour la célébration de leur mariage.<br>
            Découvrons chacun les différents types de cérémonies pour vous aider à choisir.<br>
            <b>La cérémonie civile :</b> <br>
            Cette cérémonie est la première étape que franchit les mariées afin d’établir leur union.
            Habituellement, les couples passent par le mariage civil avant d’aller à l’église pour la cérémonie,
            que ce soit le même jour ou des jours différents.
            La cérémonie civile est la seule qui a de la valeur aux yeux de l’Etat,
            c’est la seule qui permettra de se marier officiellement.
            Elle a lieu dans le bureau de la mairie et la célébration est dirigée par des fonctionnaires de l’Etat.
            <br>
            <b>La cérémonie religieuse : </b><br>
            C’est la cérémonie qui est conforme à la religion et aux croyances des mariés.
            La majorité des couples qui passent par la cérémonie religieuse,
            sont des couples qui appartiennent à une communauté religieuse.
            Cette cérémonie est réalisée pour faire reconnaître le mariage devant Dieu et aussi pour recevoir
            la bénédiction de Dieu pendant la vie du couple.
            Il y a des rituels que ce concept doit suivre pendant la cérémonie.
            Ce sont les dignitaires religieux qui doivent diriger la cérémonie.
            <br>
            <b>La cérémonie laïque </b>:
            <br>
            Cette cérémonie n’est ni civile ni religieuse.
            C’est seulement une manière symbolique de célébrer l’amour sans passer par l’église.
            Ce sont les couples non croyants qui choisissent cette option.
            C’est un moment plus émouvant et romantique où les deux partenaires partagent leur histoire d’amour.
            Il n’y a pas de rituel obligatoire, mais la future mariée et le futur marié choisissent d’eux-mêmes
            comment ils vont procéder à la célébration de leur mariage. Ils peuvent y ajouter une touche de personnalisation
            qui leur convient.
          </b-popover>
          <b-popover target="popover-target-2" triggers="hover" placement="top">
            <template #title>Quels sont les différents types de cérémonies ?</template>
            Les types de cérémonies de mariage sont désormais diversifiés. <br>
            Les couples qui souhaitent se marier se demandent quelle option choisir pour la célébration de leur mariage.<br>
            Découvrons chacun les différents types de cérémonies pour vous aider à choisir.<br>
            <b>La cérémonie civile :</b> <br>
            Cette cérémonie est la première étape que franchit les mariées afin d’établir leur union.
            Habituellement, les couples passent par le mariage civil avant d’aller à l’église pour la cérémonie,
            que ce soit le même jour ou des jours différents.
            La cérémonie civile est la seule qui a de la valeur aux yeux de l’Etat,
            c’est la seule qui permettra de se marier officiellement.
            Elle a lieu dans le bureau de la mairie et la célébration est dirigée par des fonctionnaires de l’Etat.
          </b-popover>
        </b-col>
        <b-col>
          <b-card-title> Envoyez vos faire-part
            <img id="popover-target-3" class="pointinfo" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <br>
          <div>Etape clé dans l’organisation de votre mariage, le fameux faire-part sera non seulement la première annonce de votre heureux événement mais permettra également de donner le ton de votre joli jour !</div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<img  class="pointinfo mb-5" src="../../../public/right-arrow.png" align="right"></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/2.png" alt="step1">
  </div>
</template>
<script>

export default {
  name: 'step1'
}
window.parent.document.title = 'Étape 2'

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
