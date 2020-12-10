<template>
  <app-layout>
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
          <b-card-title class="info"><U>Trouvez l'inspiration :</U></b-card-title>
            <br>
          <a href="https://www.pinterest.fr" target="_blank"><img src="../../../public/inspiration.jpg" alt="couple" class="img"/></a>
        </b-col>
        <b-col>
          <b-card-title class="info"><U>Choisissez le lieu du mariage :</U>
          </b-card-title>
          <br>
          <div class="info">Une fois prise la décision de se marier, le plus important est de fixer le lieu du mariage. Aujourd'hui le plus courant est de célébrer le mariage civil à la mairie et le mariage religieux dans un lieu de culte.</div>
          <div class="info"><a href="https://www.1001salles.com/" target="_blank">Pour trouver une salle</a></div>
          <br>
          <br>
          <b-card-title class="info"><U>Choix des témoins :</U>
            <img id="popover-target-1" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <br>
          <div class="info"> Au cours des préparatifs de votre mariage vous allez être confrontée à de nombreux choix pour la suite des événements. Choisir la bonne personne comme témoin fait partie de ces dilemmes.</div>
          <b-popover target="popover-target-1" triggers="hover" placement="top">
            <template #title>Quels est le rôle des témoins ?</template>
            <div class="info">Un témoin est un ami proche ou quelqu'un de votre famille, à qui l'on demande d'être à ses côtés pour le mariage. Il peut y en avoir 2 par marié pour la mairie et 4 pour l'église.<br>
            Son rôle est de témoigner de l'amour entre les époux. Il signe les registres (mairie, lieu de culte) au moment de la célébration.<br>
            <b>Une aide aussi dans les préparatifs</b> <br>
            Proche de vous, vous pouvez également le solliciter pour vous aider sur certaines tâches (goûter le champagne, préparer les faire-parts...).
            <br>
            <b>L'organisation de l'enterrement de vie des jeunes mariés</b><br>
            Traditionnellement, c'est au témoin de l'organiser. A vous de donner aux différentes personnes les coordonnées de tout le monde aussi. Par contre, n'hésitez pas à leur dire ce que vous n'aimeriez pas du tout faire, histoire d'éviter un flop.
            <br>
            <b>Un support le Jour J</b>:
            <br>
            Support psychologique (mais oui, vous êtes magnifiques !!) et logistique durant toute cette journée, votre témoin sera toujours là pour vous aider qu'une hécatombe arrive le Jour J. Attention, par contre, ce n'est pas lui qui organise votre mariage, donc ne lui en demandez pas trop non plus.
            </div>
          </b-popover>
        </b-col>
        <b-col>
          <b-card-title class="info"><U>Envoyez vos faire-part :</U>
          </b-card-title>
          <br>
          <div class="info">Etape clé dans l’organisation de votre mariage, le fameux faire-part sera non seulement la première annonce de votre heureux événement mais permettra également de donner le ton de votre joli jour !</div>
          <div class="info"><a href="https://www.monfairepart.com/faire-part-mariage.html" target="_blank">Pour réaliser de beaux faire-parts</a></div>
            <br>
          <br>
            <b-card-title class="info"><U>Les faire-parts, c'est pas pour nous !</U>
                <div class="info"><a href="https://facebook.com" target="_blank">
                    <img class="facebook" src="../../../public/Facebook_logo.jpg" align="right"/></a></div>

            </b-card-title>
            <br>
            <div class="info">Vous n'avez pas envie de créer des faire-parts ? Pourquoi pas ! De nombreux outils nous permettent maintenant de prévenir nos proches de ces grands évènements. Alors, par mail, par sms ou via facebook, tout est faisable.</div>
          <br>
            <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<a href='/step3'><img  class="pointinfo mb-5" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/2.png" alt="step1">
      <a href="/step1"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
  </div>
    </app-layout>
</template>
<script>
  import AppLayout from '@/Layouts/AppLayout'

export default {
            components: {
            AppLayout
        },
  name: 'step2'
}
window.parent.document.title = 'Étape 2'

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

.facebook {
    height: 10%;
    width: 10%;
    alignment: center;
    align-self: center;
}

.left {
    height: 3%;
    width: 3%;
}

.info {
    font-family: 'Raleway', sans-serif;
    font-size:1rem;
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

.img {
    display: flex;
    justify-items: center;
    margin-left: auto;
    margin-right: auto;
    height: 25em;
    width: auto;
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
  font-family: 'Sansita Swashed', sans-serif;
  font-size: 2rem;
  color: #776D5A;
}
</style>
