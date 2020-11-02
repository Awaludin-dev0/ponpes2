<template>
    <div>
        <!-- <router-link to="/datasantri">Data Santri</router-link> -->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.$store.state.islogin)
            console.log('Dashboard')
        }
    }
</script>
