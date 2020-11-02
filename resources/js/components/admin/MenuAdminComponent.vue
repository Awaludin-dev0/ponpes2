<template>
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
                        <router-link to='/datasantri' class="nav-link">Santri</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/kelassantribanin' class="nav-link">Kelas Santri</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/gurubanin' class="nav-link">Guru Banin</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/mapelkelas' class="nav-link">Mata Pelajaran</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to='/pengguna' class="nav-link">Pengguna</router-link>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                        <!-- <li class="nav-item">
                            <router-link to='/login' class="nav-link">Login</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link to='/register' class="nav-link" >Register</router-link>
                        </li> -->

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ username }}</a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <router-link to="/logout" class="dropdown-item">Logout</router-link>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        data () {
            return {
                username:''
            }
        },
        mounted() {
            this.username = this.$store.state.username
            console.log(this.username)
        }
    }
</script>
