<template>
    <b-card>
        <b-modal size="lg" id="modal-form" title="title" @ok="save(form.id, $event)">
            <p>
                <b-form>
                    <b-form-group label="Nama Santri" label_for="santri_id">
                        <b-form-select v-model="form.data_santri_id" required placeholder="Masukkan Nama Santri" :options="santri"></b-form-select>
                    </b-form-group>
                    <b-form-group label="Kelas Banin" label_for="kelas_banin_id">
                        <b-form-select v-model="form.kelas_banin_id" required placeholder="Masukkan Kelas" :options="kelas"></b-form-select>
                    </b-form-group>
                </b-form>
            </p>
        </b-modal>

        <crudcomp api="/kelassantribanin" title="Data Kelas Santri" :fieldsoutside="fields" v-model="form" @edit-data="onEdit($event)">
        </crudcomp>
    </b-card>
</template>

<script>
    import Crudcomp from '../lib/CrudComponent.vue'

    export default {
        data() {
            return {
                form: {
                    data_santri_id:'aaaa',
                    kelas_banin_id:'bbbb'
                },
                santri:[],
                kelas:[],
                fields: [
                    {
                        key: 'nama_santri',
                        label: "Nama Santri"
                    },
                    {
                        key: 'nama_kelas',
                        label: 'Nama Kelas'
                    }
                ],
                api:'/kelassantribanin',
            }
        },
        components: { Crudcomp },
        mounted() {
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
                    data_santri_id: evt[0].data_santri_id,
                    kelas_banin_id: evt[0].kelas_banin_id
                }
                console.log('form', this.form)
                this.$bvModal.show('modal-form')
            }
        }

    }
</script>
