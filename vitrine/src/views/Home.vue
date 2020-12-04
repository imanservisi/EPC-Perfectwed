<template>
  <div class="home">
    <HelloWorld/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/accueil.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld
  }
}

window.parent.document.title = 'Accueil'
</script>
