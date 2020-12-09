<template>
    <div>
        <span> {{ this.difference }}</span>
    </div>

</template>

<script>
import axios from "axios";

export default {
    name: "Budget",
    data () {
        return {

        }
    },
    props:['project'],

    computed: {
        difference() {
            let num1, num2;
            this.$forceUpdate();
            num1 = this.project.budget;
            num2 = this.project.menu + this.project.hair + this.project.ring + this.project.makeup + this.project.decoration + this.project.wine + this.project.transport + this.project.animation + this.project.place_price + this.project.photo + this.project.costume + this.project.announcement + this.project.ceremony + this.project.flower + this.project.other;
            return (num1 - num2)

        }
    }
}

</script>

<style scoped>

</style>
