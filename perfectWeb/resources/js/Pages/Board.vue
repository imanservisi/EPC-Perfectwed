<template>
    <app-layout>
    <google-map />
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
