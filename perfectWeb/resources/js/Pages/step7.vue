<template>
  <app-layout>
  <div>
    <br>
    <div class="explication" >
      La date de votre mariage est de plus en plus proche. Vérifiez les derniers détails.
    </div>
    <br>
    <br>
    <b-container fluid >
      <b-row>
        <b-col class="right">
          <b-card-title class="right">Quel temps fera t-il pour mon mariage ?
          </b-card-title>
              <div class="info">
                  En été comme en hiver, mieux vaut être prévenu. Fera-t-il froid ? Y aura-t-il de la pluie ? Faut il prévoir une sécurité ?<br>
                  <a target="_blank" :href="this.link">Quelle météo pour le Jour J à <strong>{{data.wed_city}}</strong> ?</a>
              </div>
          <br>
          <br>
          <b-card-title class="right">Avez-vous prévu une répétition ?
          </b-card-title>
          <div class="info">
            Ce n'est pas une obligation, mais il faut l'avoir prévue à l'avance, pour que tout le monde soit disponible. Par contre, ne vous froissez pas si certains services ne le font pas (mairie, église). Il n'est pas toujours facile d'avoir l'accès à des lieux publics.
          </div>

        </b-col>
        <b-col>
          <b-card-title class="right">Dernières retouches<img id="popover-target-4" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div class="info">
            Il est grand temps que votre costume/robe soit prêt et récupéré. Si ce n'est pas déjà fait, reprenez contact avec la boutique pour finaliser.
          </div>
          <br>
          <br>
          <b-card-title class="right">Planification/Définition des tâches de chacun<img id="popover-target-5" class="pointinfo mb-5" src="../../../public/PointinfoPINK.png" align="right">
          </b-card-title>
          <div class="info">
            Qui va conduire les mariés ? Qui prépare la salle et quand ? Qui amène les alliances ? Tous ces petits détails doivent être réfléchis et délégués (qui a parlé des témoins ?)
          </div>
          <br>
          <br>
          <div class="etapesuivante" align="center"> Je passe à l'étape suivante !<a href='/step8'><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
        </b-col>
      </b-row>
    </b-container>
    <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/7.png" alt="step1">
      <a href="/step6"><img class="left" src="../../../public/left-arrow.png" alt="arrow" align="left"/></a>
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
    name: 'step7',
    data () {
        return {
            data: {
                wed_date: null,
                wed_address: null,
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
                    console.log(this.data)
                    this.link = 'https://meteofrance.com/recherche/' + this.data.wed_city
                }
            })
    }
}
window.parent.document.title = 'Étape 7'

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
