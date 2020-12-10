<template>
  <div class="backgroundperfectwedding">
    <br>
    <div class="concept">GROUWImaginez et realisez le plus beau jour de votre vie</div>
    <br>
    <!-- CARD GROUP -->
    <b-card-group deck>
      <b-card class="transparent">
        <img src="../../../public/calendar.png" class="centerimg" alt="calendar">
        <br>
        <p class="title">Planification</p>
        <b-card-text class="content">
          Ajoutez tous vos rendez-vous et dates-clés de votre mariage, pour ne rien oublier.
        </b-card-text>
      </b-card>

      <b-card class="transparent">
        <img src="../../../public/money-bag.png" class="centerimg" alt="money-bag">
        <br>
        <p class="title">Budget</p>
        <b-card-text class="content">
          Calculez en fonction de vos moyens financiers chacune de vos dépenses.
        </b-card-text>
      </b-card>

      <b-card class="transparent">
        <img src="../../../public/lightbulb.png" class="centerimg" alt="lightbulb">
        <br>
        <p class="title">Conseil</p>
        <b-card-text class="content">
          Laissez vous guider étape par étape, des conseils pour réussir votre mariage vous accompagneront.
        </b-card-text>
      </b-card>

      <b-card class="transparent">
        <img src="../../../public/writing.png" class="centerimg" alt="writing">
        <br>
        <p class="title">Liste</p>
        <b-card-text class="content">
          N’oubliez aucun détail en notant tous les détails importants à la réalisation de votre aventure
        </b-card-text>
      </b-card>
    </b-card-group>
      <br>
      <br>HELLO
    <b-button class="button" > COMMENCER !</b-button>
   <!--<img src="../../../public/weddingultimate.jpg" height="2435" width="5171"/>-->
  </div>
</template>

<script>

export default {
  name: 'welcome',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.backgroundperfectwedding {
  background-image: url("../../../public/weddingultimate.jpg");
  background-size: cover;
  min-height: 100vh;
  min-width: 20vw;
  display: block;
  margin: 0 auto;
}

.transparent {
  background: none;
  border: none;
}
.title {
  font-family: "Sansita Swashed", sans-serif;
  font-weight: bold;
  font-size:1.1rem;
  color: #776D5A;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}
.content {
  font-family: 'Sansita Swashed', cursive;
  font-size:1rem;
  color: #776D5A;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  text-align: center;
}
.centerimg {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  height: 60px;
  width: 60px
}
.concept {
  font-family: Raleway, sans-serif;
  font-weight: bold;
  font-size:1.8rem;
  color: #776D5A;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}
.button {
  padding: 0.6rem;
  border-radius: 0;
  font-family: "Libian SC", sans-serif;
  font-weight: bold;
  font-size:1.8rem;
  background-color: #DA627D;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}
</style>
