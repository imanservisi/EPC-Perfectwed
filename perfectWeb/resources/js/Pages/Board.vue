<template>
    <app-layout>

    <div class="containerPerso">
        <b-card class="cardPerso my-3">
            <b-label for="title_project">Titre du mariage</b-label>
            <b-input name="title_project" :value="data.title_project" v-model="data.title_project" @change="updatedb()" placeholder="Titre du Mariage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="budget">Budget</b-label>
            <b-input name="budget" :value="data.budget" v-model="data.budget" @change="updatedb()"  placeholder="Budget"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_date">Date du mariage</b-label>
            <b-input name="wed_date" :value="data.wed_date" v-model="data.wed_date" @change="updatedb()"  placeholder="Date du mariage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_city">Ville du mariage</b-label>
            <b-input name="wed_city" :value="data.wed_city" v-model="data.wed_city" @change="updatedb()"  placeholder="Ville du mariage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_postal_code">Code postal du mariage</b-label>
            <b-input name="wed_postal_code"  :value="data.wed_postal_code" v-model="data.wed_postal_code" @change="updatedb()" placeholder="Code postal du mariage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_address">Adresse du mariage</b-label>
            <b-input name="wed_address" :value="data.wed_address" v-model="data.wed_address" @change="updatedb()" placeholder="Adresse du mariage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="menu">Traiteur</b-label>
            <b-input name="menu" :value="data.menu" v-model="data.menu" @change="updatedb()" placeholder="Traiteur"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="hair">Coiffeur</b-label>
            <b-input name="hair" :value="data.hair" v-model="data.hair" @change="updatedb()" placeholder="Coiffeur"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="ring">Alliances</b-label>
            <b-input name="ring" :value="data.ring" v-model="data.ring" @change="updatedb()" placeholder="Alliances"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="makeup">Maquillage</b-label>
            <b-input name="makeup" :value="data.makeup" v-model="data.makeup" @change="updatedb()" placeholder="Maquillage"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="decoration">Deco</b-label>
            <b-input name="decoration" :value="data.decoration" v-model="data.decoration" @change="updatedb()" placeholder="Deco"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wine">Vin/Champagne/Boissons</b-label>
            <b-input name="wine" :value="data.wine" v-model="data.wine" @change="updatedb()" placeholder="Vin/Champagne/Boissons"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="transport">Transport</b-label>
            <b-input name="transport" :value="data.transport" v-model="data.transport" @change="updatedb()" placeholder="Transport"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="animation">Animation</b-label>
            <b-input name="animation" :value="data.animation" v-model="data.animation" @change="updatedb()" placeholder="Animation"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="place_price">Lieu</b-label>
            <b-input name="place_price" :value="data.place_price" v-model="data.place_price" @change="updatedb()" placeholder="Lieu"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="photo">Photographe</b-label>
            <b-input name="photo" :value="data.photo" v-model="data.photo" @change="updatedb()" placeholder="Photographe"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="costume">Tenues</b-label>
            <b-input name="costume" :value="data.costume" v-model="data.costume" @change="updatedb()" placeholder="Tenues"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="announcement">Faire-parts</b-label>
            <b-input name="announcement" :value="data.announcement" v-model="data.announcement" @change="updatedb()" placeholder="Faire-parts"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="ceremony">Ceremonie(s)</b-label>
            <b-input name="ceremony" :value="data.ceremony" v-model="data.ceremony" @change="updatedb()" placeholder="Ceremonie(s)"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="flower">Fleurs</b-label>
            <b-input name="flower" :value="data.flower" v-model="data.flower" @change="updatedb()" placeholder="Fleurs"></b-input>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="nb_guest">Invitées</b-label>
            <b-input name="nb_guest" :value="data.nb_guest" v-model="data.nb_guest" @change="updatedb()" placeholder="Invitées"></b-input>
        </b-card>
    </div>
        <div>
            <div class="containerPerso mb-5">
                <div class="cardPerso my-3">
                    <div>
                        <p class="font-weight-bold text-capitalize">Hello </p>
                        <div class="font-italic">
                            <hr>
                        </div>
                        <div class="mt-2">
                            <b-button class="btn btn-success mr-1">Edit</b-button>
                            <b-button class="btn btn-danger ml-1" >Delete</b-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="gotosteps" align="center"> Suivez le guide !<a href="/step1"><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
    <google-map />
    </app-layout>
</template>

<script>
import axios from 'axios'
import AppLayout from '@/Layouts/AppLayout'
import GoogleMap from "./Google/GoogleMap"
export default {
    data () {
        return {
            data:{
                title_project:null,
                wed_date: null,
                wed_city: null,
                wed_postal_code: null,
                wed_address: null,
                budget: null,
                menu: null,
                hair: null,
                ring: null,
                makeup: null,
                decoration: null,
                wine: null,
                transport: null,
                animation: null,
                place_price: null,
                photo: null,
                costume: null,
                announcement: null,
                nb_guest: null,
                ceremony: null,
                flower: null,
                other: null,
            },
            apiProjectsUrl: 'http://localhost:8000/api/projects/'
        }
    },
    computed: {
        notes () {
            return this.$store.getters.notes
        }
    },
    methods: {
        updatedb(){
            console.log(this.data)
            axios.put(
                this.apiProjectsUrl + 1, // 1 a remplacer par project id
                    this.data
                ).then(function(response){
                    console.log(response)
                })
        }
    },
    mounted () {
        axios.get(this.apiProjectsUrl+'?user_id=1') // remplacer 1 par variable de seession
            .catch(error => console.log(error))
            .then(response => {
                // console.log(response.data.projects)
                this.data = response.data.projects[0]
                console.log(this.data)
            })
    },
    components: {
        AppLayout,
        GoogleMap
    }
}
</script>

<style scoped>
li {
    list-style-type: none;
}
@media screen and (min-width: 80rem){
    .containerPerso{
        display: grid;
        grid-template-columns: 20rem 20rem 20rem 20rem;
    }
}

@media screen and (min-width: 60rem) and (max-width: 80rem){
    .containerPerso{
        display: grid;
        grid-template-columns: 20rem 20rem 20rem;
    }
}
@media screen and (min-width: 40rem) and (max-width: 60rem){
    .containerPerso{
        display: grid;
        grid-template-columns: 20rem 20rem ;
    }
}

@media screen and (max-width: 40rem){
    .containerPerso{
        display: grid;
        grid-template-columns: 20rem;
        width: 100%;
    }

}
.cardPerso{
    width: 18rem;
    border: 5px inset #741FAA;
    padding: 5px;
    overflow: scroll;
}
.containerPerso{
    justify-content: center;
}
</style>
