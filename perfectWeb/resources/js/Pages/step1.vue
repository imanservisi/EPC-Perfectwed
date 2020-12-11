<template>
    <app-layout>
        <div>
            <br>
            <div class="explication" >
                Vous souhaitez réaliser vous-même votre plus beau rêve. Bravo ! Il est temps de commencer à planifier votre mariage... C’est le
                <br>
                moment d’indiquer les premières informations nécessaires à sa réalisation. Vous n’êtes pas sûrs de certaines informations ?
                <br>
                Ce n’est pas grave ! Vous pourrez les modifier plus tard dans votre tableau de bord.
            </div>
            <br>
            <b-container>
                <div>
                    <p class="center">Les champs avec <abbr class="abbr">*</abbr> sont obligatoires.</p>
                </div>
            </b-container>
            <br>
            <b-container fluid >
                <b-row>
                    <b-col class="center">
                        <abbr class="abbr">*</abbr>
                        <b-calendar label-help="" @context="updatedb()" name="wed_date"  :value="data.wed_date" v-model="data.wed_date"  label-no-date-selected="Choisissez la date de votre mariage"></b-calendar>
                        <br><br>
                        <div class="info"><abbr class="abbr">*</abbr><U>Nom de votre projet :</U></div>
                        <br>
                        <b-form-input
                            id="inline-form-input-name" name="title_project" @change="updatedb()" :value="data.title_project" v-model="data.title_project" class="mb-2 mr-sm-2 mb-sm-0" placeholder="Quel est le nom de votre projet ?"
                        ></b-form-input>

                    </b-col>

                    <b-col>
                        <div class="info"><abbr class="abbr">*</abbr><U>Lieu :</U></div>
                        <p class="info">Pour le mariage civil, quelques choix s'offrent à vous. La règle est simple :<br>
                            le mariage est célébré dans une commune avec laquelle au moins l'un des
                            deux époux a des liens durables, de façon directe ou indirecte (c'est-à-dire
                            via un parent). A vous ensuite de justifier de ces liens.</p>

                        <b-form-input
                            id="inline-form-input-name" name="wed_city" @change="updatedb()" :value="data.wed_city" v-model="data.wed_city" class="mb-2 mr-sm-2 mb-sm-0" placeholder="Quel est le lieu de votre mariage ?"
                        ></b-form-input>
                        <br> <br>
                        <div class="info"><abbr class="abbr">*</abbr><U>Nombre d'invités :</U></div>

                        <p class="info">A vous de choisir, mais fixez vous des limites, car le budget peut vite monter !<br>
                            Une solution pour limiter les frais peut être de faire un vin d'honneur avec<br>
                            beaucoup d'invités et de ne garder que les proches pour le repas.</p>

                        <b-form-input
                            id="inline-form-input-name" type="number" name="wed_city" @change="updatedb()" :value="data.nb_guest" v-model="data.nb_guest" class="mb-0 mr-sm-2 mb-sm-0" placeholder="Combien de personnes souhaitez-vous inviter ?"
                        ></b-form-input>

                        <br> <br>

                        <b-popover class="popover" target="popover-target-1" triggers="hover" placement="top">
                            <template #title>Quels sont les différents types de cérémonies ?</template>
                            <div class="info">
                                Les types de cérémonies de mariage sont désormais diversifiés. <br>
                                Les couples qui souhaitent se marier se demandent quelle option choisir pour la célébration de leur mariage.<br>
                                Voici les différents types de cérémonies pour vous aider à choisir.<br>
                                <b>La cérémonie civile :</b> <br>
                                Cette cérémonie est la première étape que franchissent les mariés afin d’établir leur union.
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
                                C’est un moment plus émouvant et romantique que la cérémonie civile, où les deux partenaires partagent leur histoire d’amour.
                                Il n’y a pas de rituel obligatoire, mais les futurs mariés choisissent eux-mêmes
                                comment ils vont procéder à la célébration de leur mariage. Ils peuvent y ajouter une touche de personnalisation
                                qui leur convient.
                            </div>
                        </b-popover>
                    </b-col>
                    <b-col>
                        <div class="info"><U>Cérémonie(s) (civile, religieuse...) :</U>  <img id="popover-target-1" class="pointinfo" align="right" src="../../../public/PointinfoPINK.png" ></div>

                        <p class="info">Là encore, c'est une question de choix. Mais rappelez-vous que si vous ne faites qu'un mariage religieux, il ne sera pas reconnu par la loi. <br>
                            Vous n'aurez donc aucun des droits y afférant (congés, impôts...)</p>

                        <br> <br>
                        <div class="info"><abbr class="abbr">*</abbr><U>Budget prévisionnel :</U></div>

                        <br>
                        <p class="info">Il vaut mieux le définir très vite ou vous risquez les mauvaises surprises. Cela vous aidera également à définir vos priorités pour tous les choix à faire.</p>

                        <b-form-input
                            type="number" name="budget"  :value="data.budget" v-model="data.budget"
                            @change="updatedb()"
                            id="inline-form-input-name"
                            class="mb-0 mr-sm-2 mb-sm-0"
                            placeholder="Budget prévisionnel"
                        ></b-form-input>
                        <br>
                        <br><!--|| (data.ceremony===null || data.ceremony===undefined)-->
                        <div v-if="(data.budget===null || data.budget===undefined) || (data.wed_date===null || data.wed_date===undefined) || (data.title_project===null || data.title_project===undefined) || (data.nb_guest===null || data.nb_guest===undefined)" class="etapesuivante" align="center" ><b-button class="etapesuivante"> Pour passer à l'étape suivante, remplissez les champs obligatoires &ensp;<img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></b-button></div>
                        <div v-else class="etapesuivante" align="center" ><b-button @click="createProject()" > Je valide mon projet et je passe à l'étape suivante !<img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></b-button></div>
                    </b-col>
                </b-row>
            </b-container>
            <img class="centerimg mt-3 mb-3" src="../../../public/stepbystep/1.png" alt="step1">
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
                wed_date: null,
                wed_address: null,
                budget: null,
                nb_guest: null,
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

.explication {
    transition-delay : 0.5s;
    transition-property: right, opacity;
    transition-duration: 2s;
    line-height: 2rem;
    text-align: center;
    font-family: 'Sansita Swashed', sans-serif;
    font-size:1.2rem;
    color: #776D5A;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.info {
    font-family: 'Raleway', sans-serif;
    font-size:0.9rem;
}

.popover {
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
    font-family: 'Raleway', sans-serif;
    font-size:1.7rem;
}

.etapesuivante {
    font-family: 'Sansita Swashed', sans-serif;
    font-size: 1rem;
    color: black;
    background: none;
    border: none;

}

.abbr {
    font-size: 120%;
    color: red;
    font-family: sans-serif;
}
.bg {
    background-color: rgba(63,37,52,0.24);
}
</style>
