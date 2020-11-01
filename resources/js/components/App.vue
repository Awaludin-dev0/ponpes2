<template>
    <div class="container-fluid">
        <template v-if="logged">
            <nav class="navbar navbar-expand-md navbar-expand-lg navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <router-link to='/datasantri'>Santri</router-link>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->

                                <li class="nav-item">
                                    <router-link to='/login' class="nav-link">Login</router-link>
                                </li>

                                <li class="nav-item">
                                    <router-link to='/register' class="nav-link" >Register</router-link>
                                </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <router-link to="/logout" class="dropdown-item">Logout</router-link>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </template>
        <main class="py-4">
            <router-view></router-view>
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

            /* if (!this.logged) {
                this.$router.push('login')
            }*/
        }
    }
</script>
