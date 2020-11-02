<template>
    <b-card>
        <b-modal size="lg" id="modal-form" title="title" @ok="save(form.id, $event)">
            <p>
                <b-form>
                    <b-form-group label="Nama Pengguna" label_for="name">
                        <b-form-input v-model="form.name" required placeholder="Masukkan Nama Pengguna" :options="santri"></b-form-input>
                    </b-form-group>
                    <b-form-group label="Email" label_for="kelas_banin_id">
                        <b-form-input type="email" v-model="form.email" required placeholder="Masukkan Email"></b-form-input>
                    </b-form-group>
                    <b-form-group label="Password" label_for="password" description="Kosongkan apabila tidak ingin mengubah password">
                        <b-form-input type="password" v-model="form.password" required placeholder="Masukkan Password min 8 karakter" :options="kelas"></b-form-input>
                    </b-form-group>
                    <b-form-group label="Jenis Kelamin" label_for="jenis_kelamin">
                        <b-form-select v-model="form.jenis_kelamin" required :options="jeniskelamin"></b-form-select>
                    </b-form-group>
                    <b-form-group label="Role" label_for="roles">
                        <b-form-select v-model="form.role" required :options="roles"></b-form-select>
                    </b-form-group>
                </b-form>
            </p>
        </b-modal>

        <crudcomp api="/pengguna" title="Data Kelas Santri" :fieldsoutside="fields" v-model="form" @edit-data="onEdit($event)">
        </crudcomp>
    </b-card>
</template>

<script>
    import Crudcomp from '../lib/CrudComponent.vue'

    export default {
        data() {
            return {
                form: {
                    name:'',
                    email:'',
                    password:'',
                    role:''
                },
                santri:[],
                kelas:[],
                fields: [
                    {
                        key: 'name',
                        label: "Nama Pengguna"
                    },
                    {
                        key: 'email',
                        label: 'Email'
                    },
                    {
                        key: 'role',
                        label: 'Role'
                    }
                ],
                api:'/pengguna',
                roles: ['guru', 'ortu', 'kepsek', 'user','admin'],
                jeniskelamin: ['Laki-laki', 'Perempuan'],
            }
        },
        components: { Crudcomp },
        mounted() {
            console.log(this.$store.state.islogin)
            /* if (this.$store.state.isLogin === false) {
                this.$router.push('/')
            }*/

            this.form.id = -1
            this.$store.dispatch('get', '/santribanin')
                .then(resp => {
                    let data = resp.data.data
                    for (let dt in data) {
                        this.santri.push({
                            text: data[dt].nama_santri,
                            value: data[dt].id
                        })
                    }
                })
            this.$store.dispatch('get', '/kelasbanin')
            .then(resp => {
                let data = resp.data
                for (let dt in data) {
                    this.kelas.push({
                        text: data[dt].nama_kelas,
                        value: data[dt].id
                    })
                }
            })
        },
        watch: {
        },
        methods: {
            save(id, event) {
                // alert('Hi')
                // return false
                console.log('save kelas santri')
                event.preventDefault()

                console.log(this.form)
                let actions = id == -1 ? 'save' : 'update'
                let endpoint = id == -1 ? this.api : this.api + '/' + id
                this.$store.dispatch(actions, {endpoint: endpoint, data: this.form})
                    .then(resp => {
                        console.log($actions)
                        this.$bvModal.hide('modal-form')
                        // this.$refs['modal-form'].hide()
                        this.item = []
                    })
            },
            edit(item, index, target) {
                /* this.form = item
                console.log("Hi")
                this.$bvModal.show('modal-edit')*/
            },
            onEdit(evt) {
                console.log('Hi')
                // console.log(evt[0])
                this.form = {
                    id : evt[0].id,
                    name: evt[0].name,
                    email: evt[0].email,
                    role: evt[0].role
                }
                console.log('form', this.form)
                this.$bvModal.show('modal-form')
            }
        }

    }
</script>
