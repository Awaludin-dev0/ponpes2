<template>
    <b-container>
        <b-row class="justify-content-center">
            <b-col md="5" sm="12">
                <b-card class="shadow-sm">
                    <b-row class="mb-4">
                        <b-col class="text-center">
                            <h3>Sistem Pondok Al Islamiyah Sambas</h3>
                        </b-col>
                    </b-row>
                    <b-form @submit="Login($event)">
                        <b-form-group>
                            <b-input placeholder="email" type="email" v-model="email"></b-input>
                        </b-form-group>
                        <b-form-group>
                            <b-input type="password" placeholder="Kata Kunci" v-model="password"></b-input>
                        </b-form-group>
                        <b-button variant="primary" type="submit">Log In</b-button>
                    </b-form>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        data() {
            return {
                email:'',
                password:''
            }
        },
        methods: {
            Login(evt) {
                evt.preventDefault()
                this.$store.dispatch('login', {
                    email : this.email,
                    password: this.password
                }).then(resp => {
                    this.$router.push('dashboard')
                })
            }
        }
    }
</script>
