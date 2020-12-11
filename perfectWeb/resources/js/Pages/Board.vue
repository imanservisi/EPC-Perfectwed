<template>
    <app-layout>
        <br>
        <div class="explication" align="center">
            Votre mariage est dans :
            <br>
        </div>
        <flip-countdown v-if="datetest!= null":deadline="datetest"></flip-countdown>
        <div class="card cardbudget">
            <br>
        <div class="explication" align="center">
           Informations générales :
        </div>
        </div>
        <div class="containerPerso">
        <b-card class="cardPerso my-3">
            <b-label for="title_project"><strong>Nom du mariage :</strong>
                <br>
                {{ data.title_project }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-1 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-1" title="Modifiez le nom de votre mariage" >
                    <b-input name="title_project" :value="data.title_project" v-model="data.title_project" @change="updatedb()" placeholder="Titre du Mariage"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_date"><strong>Date :</strong>
                <br>
                {{ data.wed_date }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-2 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-2" title="Modifiez la date de votre mariage" >
                    <b-input name="wed_date" :value="data.wed_date" v-model="data.wed_date" @change="updatedb()"  placeholder="Date du mariage"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="nb_guest"><strong>Nombres d'invités :</strong> {{ data.nb_guest }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-3 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-3" title="Modifiez le nombre d'invités" >
                    <b-input type="number" name="nb_guest" :value="data.nb_guest" v-model="data.nb_guest" @change="updatedb()" placeholder="Invitées"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_city"><strong>Ville :</strong> {{ data.wed_city }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-4 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-4" title="Modifiez la ville du mariage" >
                    <b-input name="wed_city" :value="data.wed_city" v-model="data.wed_city" @change="updatedb()"  placeholder="Ville du mariage"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_postal_code"><strong>Code postal :</strong> {{ data.wed_postal_code }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-5 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-5" title="Modifiez le code postal de votre mariage" >
                    <b-input name="wed_postal_code"  :value="data.wed_postal_code" v-model="data.wed_postal_code" @change="updatedb()" placeholder="Code postal du mariage"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-label for="wed_address"><strong>Adresse :</strong> {{ data.wed_address }}</b-label>
            <div>
                <b-button-sm v-b-modal.modal-6 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-6" title="Modifiez l'adresse du mariage" >
                    <b-input name="wed_address" :value="data.wed_address" v-model="data.wed_address" @change="updatedb()" placeholder="Adresse du mariage"></b-input>
                </b-modal>
            </div>
        </b-card>
        </div>
        <br>
        <div class="card cardbudget">
            <div class="explication" align="center">
                <strong>  Dépenses </strong>
            </div>
            <div class="card-body">
        <div class="text-center">
            <div for="budget" class="cardbudget" align="center"> Budget prévu : {{ this.data.budget }} € &ensp;
                <b-button-sm v-b-modal.modal-21 > <img src="../../../public/edit.png" class="mx-auto" width="20px"></b-button-sm>
            </div>
        </div>
                <div class="text-center">
                    <div for="budget" class="cardbudget" align="center"> Budget total des notes : {{this.sumbudget}} € &ensp;
                    </div>
                </div>
            <div id="Refresh" for="budget" class="cardbudget text-center" align="center">Budget restant : <Budget :project="this.data"> </Budget> €</div>
            </div>
        </div>
        <div class="containerPerso">
        <b-card class="cardPerso my-3">
            <b-label for="menu">
                <img src="../../../public/dish.png" class="image">
                <br>
                <strong>Traiteur :</strong> {{ data.menu }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-7 >
                <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-7" title="Modifiez le menu de votre mariage" >
                    <b-input type="number" name="menu" :value="data.menu" v-model="data.menu" @change="updatedb()" placeholder="Traiteur"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <b-col>
            <b-label for="hair">
                <img src="../../../public/haircut.png" class="image">
                <br>
                <strong>Coiffeur :</strong> {{ data.hair }} €</b-label>
            </b-col>
            <b-col>
            <div>
                <b-button-sm v-b-modal.modal-8 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-8" title="Prix du coiffeur" >
                    <b-input type="number" name="hair" :value="data.hair" v-model="data.hair" @change="updatedb()" placeholder="Coiffeur"></b-input>
                </b-modal>
            </div>
            </b-col>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/ring.png" class="image">
            <br>
            <b-label for="ring"><strong>Alliances :</strong> {{ data.ring }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-9 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-9" title="Prix des alliances" >
                    <b-input type="number" name="ring" :value="data.ring" v-model="data.ring" @change="updatedb()" placeholder="Alliances"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/makeup.png" class="image">
            <br>
            <b-label for="makeup"><strong>Maquillage :</strong> {{ data.makeup }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-10 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-10" title="Prix du maquillage" >
                    <b-input type="number" name="makeup" :value="data.makeup" v-model="data.makeup" @change="updatedb()" placeholder="Maquillage"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/garland.png" class="image">
            <br>
            <b-label for="decoration"><strong>Décoration :</strong> {{(data.decoration)}} €</b-label><!-- <b-label for="decoration">Décoration : {{data.decoration}} €</b-label> -->

            <div>
                <b-button-sm v-b-modal.modal-11 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-11" title="Prix de la décoration" >
                    <b-input type="number" name="decoration" :value="0" :min="0" :max="100" v-model="data.decoration" @change="updatedb()" placeholder="Décoration"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/cheers.png" class="image">
            <br>
            <b-label for="wine"><strong>Boissons :</strong> {{ data.wine }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-12 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-12" title="Prix des boissons" >
                    <b-input type="number" name="wine" :value="data.wine" v-model="data.wine" @change="updatedb()" placeholder="Vin/Champagne/Boissons"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/transportation.png" class="image">
            <br>
            <b-label for="transport"><strong>Transport :</strong> {{ data.transport }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-13 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-13" title="Prix des transports" >
                    <b-input type="number" name="transport" :value="data.transport" v-model="data.transport" @change="updatedb()" placeholder="Transport"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/shining.png" class="image">
            <br>
            <b-label for="animation"><strong>Animation :</strong> {{ data.animation }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-14 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-14" title="Prix des animations" >
                    <b-input type="number" name="animation" :value="data.animation" v-model="data.animation" @change="updatedb()" placeholder="Animation"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/wedding-arch.png" class="image">
            <br>
            <b-label for="place_price"><strong>Lieu :</strong> {{ data.place_price }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-15 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-15" title="Prix des lieux" >
                    <b-input type="number" name="place_price" :value="data.place_price" v-model="data.place_price" @change="updatedb()" placeholder="Lieu"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/photographer.png" class="image">
            <br>
            <b-label for="photo"><strong>Photographe :</strong> {{ data.photo}} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-16 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-16" title="Prix du photographe" >
                    <b-input type="number" name="photo" :value="data.photo" v-model="data.photo" @change="updatedb()" placeholder="Photographe"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/wedding-dress.png" class="image">
            <br>
            <b-label for="costume"><strong>Tenues : </strong>{{ data.costume }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-17 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-17" title="Prix des costumes" >
                    <b-input type="number" name="costume" :value="data.costume" v-model="data.costume" @change="updatedb()" placeholder="Tenues"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/email.png" class="image">
            <br>
            <b-label for="announcement"><strong>Faire-parts :</strong> {{ data.announcement }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-18 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-18" title="Prix des faire-parts" >
                    <b-input type="number" name="announcement" :value="data.announcement" v-model="data.announcement" @change="updatedb()" placeholder="Faire-parts"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/home.png" class="image">
            <br>
            <b-label for="ceremony"><strong>Ceremonie :</strong> {{ data.ceremony }} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-19 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-19" title="Prix des faire-parts" >
                    <b-input type="number" name="ceremony" :value="data.ceremony" v-model="data.ceremony" @change="updatedb()" placeholder="Ceremonie(s)"></b-input>
                </b-modal>
            </div>
        </b-card>
        <b-card class="cardPerso my-3">
            <img src="../../../public/flowers.png" class="image">
            <br>
            <b-label for="flower"><strong>Fleurs :</strong> {{ data.flower}} €</b-label>
            <div>
                <b-button-sm v-b-modal.modal-20 >
                    <img src="../../../public/edit.png" class="modify"></b-button-sm>
                <b-modal id="modal-20" title="Prix des fleurs" >
                    <b-input type="number" name="flower" :value="data.flower" v-model="data.flower" @change="updatedb()" placeholder="Fleurs"></b-input>
                </b-modal>
            </div>
        </b-card>
            <b-modal id="modal-21" title="Budget" >
                <b-input type="number" name="budget" :value="data.budget" v-model="data.budget" @change="updatedb()"  placeholder="Budget"></b-input>
            </b-modal>
    </div>
    </app-layout>
</template>

<script>
import axios from 'axios'
import AppLayout from '@/Layouts/AppLayout'
import Budget from "./Budget"
import FlipCountdown from 'vue2-flip-countdown'

export default {
    data () {
        return {
            data:{
                id: null,
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
            apiProjectsUrl: 'http://localhost:8000/api/projects/',
            apiOneProjectUrl: 'http://localhost:8000/api/projectWithId/'
        }
    },
    computed: {
        notes () {
            return this.$store.getters.notes
        },
        datetest: function () {
            return this.data.wed_date;
        },
        sumbudget() {
            return (parseInt(this.data.menu) + parseInt(this.data.hair) + parseInt(this.data.ring) + parseInt(this.data.makeup) + parseInt(this.data.decoration) + parseInt(this.data.wine) + parseInt(this.data.transport) + parseInt(this.data.animation) + parseInt(this.data.place_price) + parseInt(this.data.photo) + parseInt(this.data.costume) + parseInt(this.data.announcement) + parseInt(this.data.ceremony) + parseInt(this.data.flower));
        }
        //difference() {
            //let num1, num2;
           // num1 = this.data.budget;
            //num2 = this.data.menu+this.data.hair+this.data.ring+this.data.makeup+this.data.decoration+this.data.wine+this.data.transport+this.data.animation+this.data.place_price+this.data.photo+this.data.costume+this.data.announcement+this.data.ceremony+this.data.flower+this.data.other;
            //return (num1 - num2)

       // }
    },
    methods: {
        updatedb(){
            console.log(this.data)
            axios.put(
                this.apiProjectsUrl + this.data.id, // 1 a remplacer par project id
                    this.data
                )
        },
    },
    mounted () {
        console.log(this.$page.user.id)
        console.log(this.apiOneProjectUrl + this.$page.user.id )
        axios.get(this.apiOneProjectUrl + this.$page.user.id ) // remplacer 1 par variable de seession
            .catch(error => console.log(error))
            .then(response => {
                 this.data = response.data[0]
            })
    },
    components: {
        AppLayout,
        Budget,
        FlipCountdown
    }
}

</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

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
    padding: 5px;
    border-style: none;
    box-shadow: -1px 7px 184px 1px rgba(125, 25, 120, 0.21);
    font-family: 'Poppins', sans-serif;
    font-size:0.9rem

}
.containerPerso{
    justify-content: center;
}
b-label {
    font-size: 1.1em;
    text-align: center;
    justify-content: center;
}

.cardbudget {
    float: none;
    font-family: 'Poppins', sans-serif;text-align: center;
    font-size:1.1rem;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    background:none;
    color: #7d1978;


}

.modify {
    display: flex;
    margin-left: auto;
    height: 30px
}

.image {
    display: flex;
    text-align: center;
    margin-right:auto;
    height: 60px
}
.explication {
    transition-delay : 0.5s;
    transition-property: right, opacity;
    transition-duration: 2s;
    line-height: 2.5rem;
    text-align: center;
    font-family: 'Sansita Swashed', sans-serif;
    font-size:1.3rem;
    color: #7D1978;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.line {
    text-align: center;
    font-family: sans-serif;
    font-weight: 10000
}
</style>
