<template>
  <app-layout>
  <div>
    <br>
    <div class="explication" >
      N'oubliez pas de budgétiser chacunes de vos dépenses.
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title class="right">Place à votre EVJF / EVG !!
          </b-card-title>
          <div class="info"> C'est le moment de profiter de ses amis et d'enterrer sa vie de célibataire ! Pour ceux qui manquent d'idée, n'hésitez pas à vous adresser à des agences spécialisées.</div>
          <br>
          <br>
          <b-card-title class="right">Réception des RSVP
          </b-card-title>
          <div class="info">
            La date approche et il est temps de savoir si tata Huguette sera présente et si votre copain Charles vient accompagné ou seul. Le traiteur, en particulier, a besoin de ces informations pour pouvoir prévoir la bonne quantité de nourriture. Relancez ceux qui ne vous ont pas répondu. Vous pouvez également leur proposer des sites de logements près de chez vous.<br>
            <a href="https://www.airbnb.fr/" target="_blank">Comment se loger facilement</a>
          </div>

        </b-col>
        <b-col>
          <b-card-title class="right">C'est le moment de passer à l'action ! Concrétisez votre décoration
          </b-card-title>
          <div class="info">
            Elle doit être à votre goût et dans le thème de votre mariage.<br>
            <a href="https://www.decorationsdemariage.fr/" target="_blank">Pour vous aider à tout trouver</a>
          </div>
          <br>
          <br>
          <b-card-title class="right">Avez-vous pensé à vos plans de tables ?<img id="popover-target-1" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div class="info">Vous pouvez prendre le parti de ne pas faire de plan de table du tout, mais si vous vous lancez, nous avons quelques conseils pour vous.
          </div>
            <b-popover class="popover" target="popover-target-1" triggers="hover" placement="top">
                <template #title>Quelques conseils pour vous aider</template>
                <br>
                <b>Placer les personnes par famille ou mixez les invités</b> <br>
                Vous connaissez vos invités, à vous de voir ce qui sera le plus agréable pour tous. Si la famille est très éclatée aux 4 coins de la France, les regrouper leur fera surement plaisir, car ils n'ont pas beaucoup d'occasion de se voir.<br>
                <br>
                <b>Faire se rencontrer les inconnus</b><br>
                 Les mariages sont l'occasion de belles rencontres. Basez vous sur les affinités de chacun et les groupes se dessineront plus facilement.<br>
                <br>
                <b>Aidez vous de post-its ou cartons</b>:
                <br>
                Pour mieux visualiser et vous organiser, utilisez des post-its ou des petits cartons qui vous permettront de changer les personnes de place facilement et d'avoir une bonne vue d'ensemble.<br>
                <b>Faites une seule table pour tous les enfants, sans les placer</b>:
                <br>
                Ils vont bouger de toute façon. En les laissant libres, ils choisiront d'eux-même où se mettre en fonction des liens tissés avant le repas.<br>
                <b>Ne jamais demander leur avis aux invités !</b>:
                <br>
                Vous ne pourrez jamais faire plaisir à tout le monde.
            </b-popover>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<a href='/step6'><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
      <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/5.png" alt="step1">
      <a href="/step4"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
  </div>
    </app-layout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout'

export default {
            components: {
            AppLayout
        },
  name: 'step5'
}
window.parent.document.title = 'Étape 5'

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

.right {
    font-family: 'Raleway', sans-serif;
    font-size:1.7rem;
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
