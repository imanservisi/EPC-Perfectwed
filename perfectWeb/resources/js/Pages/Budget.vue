<template>
    <div>
        <div> {{'&ensp;' + this.difference }} </div>
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
            num2 = parseInt(this.project.menu) + parseInt(this.project.hair) + parseInt(this.project.ring) + parseInt(this.project.makeup) + parseInt(this.project.decoration) + parseInt(this.project.wine) + parseInt(this.project.transport) + parseInt(this.project.animation) + parseInt(this.project.place_price) + parseInt(this.project.photo) + parseInt(this.project.costume) + parseInt(this.project.announcement) + parseInt(this.project.ceremony) + parseInt(this.project.flower);
            return (num1 - num2)

        }
    }
}

</script>

<style scoped>

</style>
