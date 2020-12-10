<template>
  <app-layout>
  <div>
    <br>
    <div class="explication" >
      On continue de visualiser son plus beau jour dans les moindres détails...
      <br>
      Où en est la préparation de votre thème ? Avez-vous un costume ? Votre traiteur vous a-t-il confirmé votre réservation ?
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title class="center">Choisissez votre tenue
          </b-card-title>
            <br>
            <br>
            <a href="https://www.mariee.fr/robe-mariee/pronuptia/" target="_blank"><img src="../../../public/wedding-dress.jpg" class="img" alt="mariés" height="500" width="auto" onabort="" align="center"/></a>
          <div class="info">Quelle que soit votre idée, essayez, essayez, essayez ! Les professionnels des boutiques de mariage sauront vous conseiller par rapport à vos goûts et à la saison du mariage à venir.<br>
          </div>
        </b-col>
        <b-col>
          <b-card-title class="center">Trouvez le thème parfait ! </b-card-title>
            <br>
          <a href="https://www.pinterest.fr/cotemaison/d%C3%A9co-mariage/" target="_blank"><img class="center img" src="../../../public/theme.jpg" alt="theme"></a>

      <a data-pin-do="embedBoard" class="center" data-pin-lang="fr" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.fr/deliajanemunikasari/wedding-decorations/"></a>
       </b-col>

        <b-col>
          <b-card-title class="center">Pensez au traiteur ! <img id="popover-target-3" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" alt="traiteur" align="right">
            <br>
            <br>
            <img class="center img" src="../../../public/manger.jpg" height="220" width="auto"/>
              <br>
              Tous les traiteurs à {{data.wed_city}}
      <iframe class="pull-center"
          width="400"
          height="250"
          frameborder="0" style="border:0"
          :src="this.link" allowfullscreen>
      </iframe>
              <br>
            <br>
              <b-popover class="popover" target="popover-target-3" triggers="hover" placement="top">
                  <template #title>Comment choisir son traiteur ?</template>
                  <div class="info">
                  Le traiteur est un poste d’importance, le dîner reste l’un des temps forts de votre réception de mariage. De plus, vous y consacrez une grande partie de votre budget de mariage. De ce fait, le choix est crucial. Voici quelques conseils de Bruno Gourdet de CHEF@Home pour choisir son traiteur de mariage.<br>
                  <b>Quand le traiteur collabore déjà avec le lieu de réception :</b> <br>
                  Il connaît donc parfaitement l’endroit et sera efficace d’un point de vue logistique le Jour J. Cependant, les formules qu’il propose ne sont peut-être pas en accord avec ce que vous souhaitez. Pas de panique, appelez-le rapidement pour connaître ses menus et convenir d’un rendez-vous. N’hésitez pas à faire des commentaires sur sa prestation et demandez si des changements sont possibles…
                  <br>
                  <b>Si vous avez le choix : </b><br>
                  Consultez les sites internet, les forums pour avoir l’avis des internautes et les annuaires spécialisés mariage. “Regardez aussi les blogs et les avis d’autres mariages” conseille Bruno Gourdet. Vous verrez très rapidement “qui sort du lot”. Il est possible d’utiliser le bouche à oreille ou de faire marcher votre réseau privé ou professionnel aussi.
                  <br>
                  <b>Sélectionner 4 à 5 prestataires</b>:
                  <br>
                  Ce premier contact se fait en général par téléphone. Cet entretien vous permettra de poser toutes vos questions essentielles. Ce temps-là est précieux, il déterminera la capacité du prestataire à vous conseiller. Demandez des devis et une plaquette de présentation pour étudier les différentes possibilités. La rédaction des propositions commerciales en dit souvent long sur la qualité de prestation. “Les menus doivent être clairs et sans options intempestives” précise Bruno Gourdet.<br>
                  Une fois ces devis épluchés en long, en large et en travers, rencontrez vos deux préférés et demandez une dégustation des plats. Prenez des photos et posez toutes vos questions (gestion de la vaiselle...)
                  </div>
              </b-popover>
            <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<a href='/step4'><img  class="pointinfo" src="../../../public/right-arrow.png" alt="arrow" align="right"/></a></div>
          </b-card-title>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/3.png" alt="step1">
    <a href="/step2"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
  </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import axios from 'axios'

export default {
    components: {
        AppLayout
    },
    name: 'step1',
    data () {
        return {
            data: {
                link:'',
                wed_date: null,
                wed_address: null,
                wed_city: null,
                budget: null,
                nb_guest: null,
                ceremony: null,
                title_project: null,
                user_id: this.$page.user.id,
                id: null,
                activated:1
            },
            apiProjectsUrl: 'http://localhost:8000/api/projects/',
            apiOneProjectUrl: 'http://localhost:8000/api/projectWithId/'
        }
    },
    methods: {
        createProject(){
            console.log(this.data.id)
            console.log(this.$page.user.id)
            if(this.data.id === null || this.data.id === undefined){
                axios.post(this.apiProjectsUrl, this.data)
                    .then(()=>{window.location.href = 'step2'}
                    )
            }else{
                window.location.href = 'step2';
            }
        },
        updatedb () {
            if(this.data.id === null || this.data.id === undefined) {
                axios.put(
                    this.apiProjectsUrl + this.data.id, // 1 a remplacer par project id
                    this.data
                ).then(function (response) {
                    console.log(response)
                })
            }
        },
        gotoStep2 () {
        }
    },
    mounted () {
        axios.get(this.apiOneProjectUrl + this.$page.user.id ) // remplacer 1 par variable de seession
            // remplacer 1 par variable de seession
            .catch(error => console.log(error))
            .then(response => {
                console.log(response)
                if(response.data.length!==0){
                    this.data = response.data[0]
                    this.link = 'https://www.google.com/maps/embed/v1/search?key=AIzaSyBorbHbjQajqyRY8MqVtYlImfBHKmD-vjA&q=traiteursmariagein' + this.data.wed_city
                    console.log(this.data.wed_city)
                    console.log(this.link)
                }
            })
    }
}
window.parent.document.title = 'Étape 1'

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
/*
a {
    color: green;
}
*/
.photo {
    height: 800%;
    width: auto;
    align-self: center;
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

.img {
    display: flex;
    justify-items: center;
    margin-left: auto;
    margin-right: auto;
    height: 12em;
    width: auto;
}
</style>
