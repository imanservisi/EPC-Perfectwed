<template>
    <app-layout>
    <google-map />
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
