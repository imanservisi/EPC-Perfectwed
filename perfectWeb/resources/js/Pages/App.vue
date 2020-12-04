<template>
  <div>
    <!--Nav partie gauche -->
    <b-navbar class="backgroundcolor">
      <b-navbar-nav>
        <b-nav-item class="myperfectweddingtext" href="#">MY PERFECT WEDDING.
          <br>
          <span class="organisezvotremariagetext"> Organisez votre mariage !</span>
        </b-nav-item>
      </b-navbar-nav>
      <b-navbar-nav class="mx-auto">
        <img src="../../../public/logobw.png" width="150rem" height="auto" alt="login"/>
      </b-navbar-nav>
      <!--Nav partie droite -->
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <b-nav-item href="#">
            <div id="app">
              <img :src="image" width="30rem" height="auto" alt="login"/>
            </div>
          </b-nav-item>
          <b-nav-item>
            <div>Identifiez-vous</div>
          </b-nav-item>
        </b-nav-form>
      </b-navbar-nav>
    </b-navbar>
  </div>
</template>
<script>
import image from '../../../public/login.png'

export default {
  data: function () {
    return {
      image: image
    }
  }
}
</script>

<style scoped>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

a {
    font-weight: bold;
    color: #2c3e50;
}

.backgroundcolor {
  background-color: #DA627D ;
}
.myperfectweddingtext {
  font-size: 1.8rem;
  font-weight: bold;
  font-family: "Raleway", sans-serif;
  color: #BE6680
}
.organisezvotremariagetext {
  font-size: 1.4rem;
  font-weight: bold;
  font-family: "Libian SC", sans-serif;
  color: #E8E6E1
}
</style>
