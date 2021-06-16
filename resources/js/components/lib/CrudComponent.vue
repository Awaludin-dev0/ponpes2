<template>
        <b-card-text>
            <b-row>
                <b-col class="mb-4" lg="9" sm="12">

                    <b-button variant="success" @click="$bvModal.show('modal-form')">Tambah</b-button>

                    <!-- <b-modal size="lg" id="modal-1" titleadd="title" @ok="$emit('save')">
                        <p>
                            <b-form @submit="onSubmit">
                                <slot name="modal-add" v-bind:form="{ form }"></slot>
                            </b-form>
                        </p>
                    </b-modal>

                    <b-modal size="lg">
                        <p>
                            <b-form @submit="onSubmit">
                                <slot name="modal-add" v-bind:form="{ form }"></slot>
                            </b-form>
                        </p>
                    </b-modal>
                    -->

                </b-col>
                <b-col class="text-right col-sm-12" lg="3">
                    <b-form inline>
                        <b-input placeholder="Cari.." @keyup="findData($event)" v-model="cari_data"></b-input>
                        <b-button @click="findDataBtn($event)">Cari</b-button>
                    </b-form>
                </b-col>
            </b-row>
            <b-row>
                <b-col>
                    <b-table responsive striped hover :items="items" :fields="fields">
                        <template #cell(actions)="row">
                            <b-button size="sm" @click="$emit('edit-data', [row.item, row.index, $event.target])" class="mr-1">Edit</b-button>
                        </template>
                    </b-table>
                </b-col>
            </b-row>
            <b-row>
                <b-col :style="{ 'overflow' : 'scroll' }">
                    <nav aria-label="Page Navigation">
                        <ul class="pagination justify-content-start">
                            <li :class="[ link.url === null ? 'page-item disabled' : 'page-item']"
                                v-for="link in links"
                                :aria-disabled="link.url === null ? 'true' : 'false'"
                                :tabindex="link.url === null ? -1 : ''"
                                >
                                <a class="page-link"  @click="getData(link.url, $event)" href=""><span v-html="link.label"></span></a>
                            </li>
                        </ul>
                    </nav>
                </b-col>
                <b-col class="text-right">
                    Total: {{ total_data }} Data
                </b-col>
            </b-row>
        </b-card-text>
</template>

<script>
    export default {
        props: [ 'api', 'title', 'title', 'fieldsoutside', 'form' ],
        data() {
            return {
                cari_data:'',
                items:[],
                links:[],
                total_data:0,
                number_of_pages:0,
                fields:[{}]
            }

        },
        mounted() {
            console.log('Component crud on')
            this.fetchData(this.api)

            this.fields = this.fieldsoutside
            this.fields.push({
                'key': 'actions',
                'label': 'Aksi'
            })
        },
        computed: {
        },
        methods: {
            onSubmit(evt) {

            },
            save(id, evt) {
                evt.preventDefault()

                console.log(this.form)
                let actions = id == -1 ? 'save' : 'update'
                let endpoint = id == -1 ? this.api : this.api + '/' + id
                this.$store.dispatch(actions, {endpoint: endpoint, data: this.form})
                    .then(resp => {

                    })
            },
            fetchData(url) {
                this.$store.dispatch('get', url)
                    .then(resp => {
                        this.links = resp.data.links ? resp.data.links : []
                        this.total_data = resp.data.total ? resp.data.total : resp.data.length
                        this.items = resp.data.data ? resp.data.data : resp.data
                        this.number_of_pages = this.links.length
                    })
            },
            findData(evt){
                evt.preventDefault()
                console.log(evt.keyCode)

                let url = this.api + '?cari=' + this.cari_data
                if (parseInt(evt.keyCode) == 13 || this.cari_data.length > 3) {

                    this.fetchData(url)
                    evt.preventDefault()
                }
                if (this.cari_data == '') {
                    this.fetchData(url)
                }

                return false
            },
            findDataBtn(evt) {
                evt.preventDefault()
                let url = this.api + '?cari=' + this.cari_data
                console.log(this.cari_data)
                this.fetchData(url)
            },
            getData(url, event) {
                event.preventDefault()
                console.log(url)
                if (url !== null){
                    this.fetchData(url)
                }
            },
        }
}
</script>
