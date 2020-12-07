<template>
    <app-layout>
    <google-map />
    <div id = "budget">
        <input placeholder="Traiteur">
        <input placeholder="Coiffure">
        <input placeholder="Alliances">
        <input placeholder="Maquillage">
        <input placeholder="Deco">
        <input placeholder="Vin/Champagne/Boissons">
        <input placeholder="Transport">
        <input placeholder="Animation">
        <input placeholder="Lieu">
        <input placeholder="Photographe">
        <input placeholder="Tenues">
        <input placeholder="Faire-parts">
        <input placeholder="Ceremonie(s)">
        <input placeholder="Fleurs">
    </div>
    <div class="gotosteps" align="center"> Suivez le guide !<a href="/step1"><img  class="pointinfo" src="../../../public/right-arrow.png" align="right"></a></div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import GoogleMap from "./Google/GoogleMap"

    export default {

        components: {
            AppLayout,
            GoogleMap
        },
    }
</script>
