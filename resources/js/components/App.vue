<template>
    <div class="container-fluid">
        <router-view name="menu"></router-view>
        <main class="py-4">
            <transition name="slide-left">
                <router-view></router-view>
            </transition>
        </main>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                logged: false,
            }
        },

        mounted() {
            console.log('App Mount')
            console.log(this.$store.state.islogin)
            if (this.$store.state.islogin) {
                this.logged = true
            } else {
                this.$router.push('/')
            }
            console.log('logged', this.logged)
        }
    }
</script>
