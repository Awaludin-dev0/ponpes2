<template>
    <b-card>
        <b-card-text>
            <b-row>
                <b-col class="mb-4" lg="9" sm="12">
                    <b-button variant="success" v-b-modal.modal-1>Tambah</b-button>

                    <b-modal size="lg" id="modal-1" title="Tambah Data Santri" @ok="save(-1, $event)">
                        <p>
                            <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                                <b-form-group label="Nama Santri" label_for="nama_santri">
                                    <b-form-input v-model="form.nama_santri" required placeholder="Masukkan Nama Santri"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Nomor Induk" label_for="nomor_induk">
                                    <b-form-input v-model="form.nomor_induk" required placeholder="Masukkan Nomor Induk"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Tempat Lahir" label_for="tempat_lahir">
                                    <b-form-input v-model="form.tempat_lahir" required placeholder="Masukkan Tempat Lahir"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Tanggal Lahir" label_for="tanggal_lahir">
                                    <input type="date" v-model="form.tanggal_lahir" class="form-control">
                                </b-form-group>
                                <b-form-group label="Jenis Kelamin" label_for="jenis_kelamin">
                                    <b-form-select v-model="form.jenis_kelamin" :options="options"></b-form-select>
                                </b-form-group>
                                <b-form-group label="Alamat Santri" label_for="alamat_santri">
                                    <b-form-textarea v-model="form.alamat_santri" required placeholder="Alamat Santri"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="No Telepon Santri" label_for="nomor_telepon">
                                    <b-form-input type="number" v-model="form.nomor_telepon" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Di terima di kelas">
                                    <b-form-select v-model="form.diterima_diponpes_dikelas" :options="kelas"></b-form-select>
                                </b-form-group>
                                <b-form-group label="Di terima di kelas tanggal" label_for="diterima_diponpes_tgl">
                                    <input type="date" v-model="form.diterima_diponpes_tgl" class="form-control">
                                </b-form-group>
                                <b-form-group label="Sekolah asal" label_for="sekolah_asal">
                                    <b-form-input v-model="form.sekolah_asal" required placeholder="Sekolah Asal"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Status dalam Keluarga" label_for="status_dalam_keluarga">
                                    <b-form-input v-model="form.status_dalam_keluarga" required placeholder="Status dalam Keluarga"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Anak ke" label_for="anak_ke">
                                    <b-form-input type="number" v-model="form.anak_ke" required placeholder="anak_ke"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Ayah" label_for="ayah">
                                    <b-form-input v-model="form.ayah" required placeholder="Masukkan Nama Ayah"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Ibu" label_for="ibu">
                                    <b-form-input v-model="form.ibu" required placeholder="Masukkan Nama Ibu"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Alamat Ortu" label_for="alamat_ortu">
                                    <b-form-textarea v-model="form.alamat_ortu" required placeholder="Alamat Ortu"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="No Telepon Ortu" label_for="nomor_telepon_ortu">
                                    <b-form-input type="number" v-model="form.nomor_telepon_ortu" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Ayah" label_for="pekerjaan_ayah">
                                    <b-form-input v-model="form.pekerjaan_ayah" required placeholder="Pekerjaan Ayah"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Ibu" label_for="pekerjaan_ibu">
                                    <b-form-input v-model="form.pekerjaan_ibu" required placeholder="Pekerjaan Ibu"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Alamat Wali" label_for="alamat_wali">
                                    <b-form-textarea v-model="form.alamat_wali" required placeholder="Alamat Wali"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="Nama Wali" label_for="nama_wali">
                                    <b-form-input v-model="form.nama_wali" required placeholder="Nama Wali"></b-form-input>
                                </b-form-group>
                                <b-form-group label="No Telepon Wali" label_for="nomor_telepon_wali">
                                    <b-form-input type="number" v-model="form.nomor_telepon_wali" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Wali" label_for="pekerjaan_wali">
                                    <b-form-input v-model="form.pekerjaan_wali" required placeholder="Pekerjaan Wali"></b-form-input>
                                </b-form-group>



                            </b-form>
                        </p>
                    </b-modal>

                    <b-modal size="lg" id="modal-edit" title="Edit Data Santri" @ok="save(form.id, $event)">
                        <p>
                            <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                                <b-form-group label="Nama Santri" label_for="nama_santri">
                                    <b-form-input v-model="form.nama_santri" required placeholder="Masukkan Nama Santri"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Nomor Induk" label_for="nomor_induk">
                                    <b-form-input v-model="form.nomor_induk" required placeholder="Masukkan Nomor Induk"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Tempat Lahir" label_for="tempat_lahir">
                                    <b-form-input v-model="form.tempat_lahir" required placeholder="Masukkan Tempat Lahir"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Tanggal Lahir" label_for="tanggal_lahir">
                                    <input type="date" v-model="form.tanggal_lahir" class="form-control">
                                </b-form-group>
                                <b-form-group label="Jenis Kelamin" label_for="jenis_kelamin">
                                    <b-form-select v-model="form.jenis_kelamin" :options="options"></b-form-select>
                                </b-form-group>
                                <b-form-group label="Alamat Santri" label_for="alamat_santri">
                                    <b-form-textarea v-model="form.alamat_santri" required placeholder="Alamat Santri"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="No Telepon Santri" label_for="nomor_telepon">
                                    <b-form-input type="number" v-model="form.nomor_telepon" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Di terima di kelas">
                                    <b-form-select v-model="form.diterima_diponpes_dikelas" :options="kelas"></b-form-select>
                                </b-form-group>
                                <b-form-group label="Di terima di kelas tanggal" label_for="diterima_diponpes_tgl">
                                    <input type="date" v-model="form.diterima_diponpes_tgl" class="form-control">
                                </b-form-group>
                                <b-form-group label="Sekolah asal" label_for="sekolah_asal">
                                    <b-form-input v-model="form.sekolah_asal" required placeholder="Sekolah Asal"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Status dalam Keluarga" label_for="status_dalam_keluarga">
                                    <b-form-input v-model="form.status_dalam_keluarga" required placeholder="Status dalam Keluarga"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Anak ke" label_for="anak_ke">
                                    <b-form-input type="number" v-model="form.anak_ke" required placeholder="anak_ke"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Ayah" label_for="ayah">
                                    <b-form-input v-model="form.ayah" required placeholder="Masukkan Nama Ayah"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Ibu" label_for="ibu">
                                    <b-form-input v-model="form.ibu" required placeholder="Masukkan Nama Ibu"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Alamat Ortu" label_for="alamat_ortu">
                                    <b-form-textarea v-model="form.alamat_ortu" required placeholder="Alamat Ortu"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="No Telepon Ortu" label_for="nomor_telepon_ortu">
                                    <b-form-input type="number" v-model="form.nomor_telepon_ortu" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Ayah" label_for="pekerjaan_ayah">
                                    <b-form-input v-model="form.pekerjaan_ayah" required placeholder="Pekerjaan Ayah"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Ibu" label_for="pekerjaan_ibu">
                                    <b-form-input v-model="form.pekerjaan_ibu" required placeholder="Pekerjaan Ibu"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Alamat Wali" label_for="alamat_wali">
                                    <b-form-textarea v-model="form.alamat_wali" required placeholder="Alamat Wali"></b-form-textarea>
                                </b-form-group>
                                <b-form-group label="Nama Wali" label_for="nama_wali">
                                    <b-form-input v-model="form.nama_wali" required placeholder="Nama Wali"></b-form-input>
                                </b-form-group>
                                <b-form-group label="No Telepon Wali" label_for="nomor_telepon_wali">
                                    <b-form-input type="number" v-model="form.nomor_telepon_wali" required placeholder="Masukkan Nomor Telepon"></b-form-input>
                                </b-form-group>
                                <b-form-group label="Pekerjaan Wali" label_for="pekerjaan_wali">
                                    <b-form-input v-model="form.pekerjaan_wali" required placeholder="Pekerjaan Wali"></b-form-input>
                                </b-form-group>



                            </b-form>
                        </p>
                    </b-modal>

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
                            <b-button size="sm" @click="edit(row.item, row.index, $event.target)" class="mr-1">Edit</b-button>
                        </template>
                    </b-table>
                </b-col>
            </b-row>
            <b-row>
                <b-col class="overflow-auto" sm="12">
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
                <!--
                <b-col class='overflow-auto' v-if="show-link">
                    <a :class="[ link.url === null ? 'link-mute' : 'links-lnk' ]" v-for="link in links" @click="getData(link.url, $event)" href=""><span v-html="link.label"></span></a>
                </b-col>
                -->
                <b-col class="text-right">
                    Total: {{ total_data }} Santri
                </b-col>
            </b-row>
            <!-- <b-row>
                <div class="overflow-auto">
                    <b-pagination-nav :linkGen="LinkGen" :number-of-pages="number_of_pages" use-router></b-pagination-nav>
                </div>
            </b-row> -->
        </b-card-text>
    </b-card>
</template>

<style>
a.links-lnk {
    margin: 2px 4px;
}
a.link-mute {
    color:gray;
}
</style>

<script>
    export default {
        data() {
            return {
                fields: [
                    {
                        key: 'nomor_induk',
                        label: 'No. Induk',
                        sortable: true,
                    },
                    {
                        key: 'nama_santri',
                        label: 'Nama Santri',
                        sortable: true,
                    },
                    {
                        key:'jenis_kelamin',
                        label:"Jenis Kelamin",
                        sortable: true,
                    },
                    {
                        key: 'tempat_lahir',
                        label: 'Tempat Lahir',
                        sortable: true,
                    },
                    {
                        key: 'tanggal_lahir',
                        label: 'Tanggal Lahir',
                        sortable: true,
                    },
                    {
                        key: 'ayah',
                        sortable: true,
                    },
                    {
                        key: 'ibu',
                        sortable: true,
                    },
                    {
                        key: 'alamat_santri',
                        label: 'Alamat',
                    },
                    {
                        key: 'nomor_telepon',
                        label: 'Telepon'
                    },
                    {
                        key: 'actions',
                        label: "Aksi"
                    }
                ],
                show_link: false,
                items:[],
                show:true,
                kelas:[],
                form: {
                    nama_santri: '',
                    nomor_induk:'',
                    tempat_lahir:'',
                    tanggal_lahir:'',
                    jenis_kelamin:'',
                    alamat_santri:'',
                    nomor_telepon:'',
                    status_dalam_keluarga:'',
                    anak_ke:'',
                    ayah:'',
                    ibu:'',
                    alamat_ortu:'',
                    alamat_wali:'',
                    nomor_telepon_ortu:'',
                    nomor_telepon_wali:'',
                    diterima_diponpes_tgl:'',
                    pekerjaan_wali:'',
                    pekerjaan_ayah:'',
                    pekerjaan_ibu:'',
                    diterima_diponpes_dikelas:null,
                    sekolah_asal:'',
                    nama_wali:''
                },
                links: [],
                total_data: 0,
                cari_data:'',
                options:[
                    {
                        text: 'Laki-laki',
                        value: 'L'
                    },
                    {
                        text: 'Perempuan',
                        value: 'P'
                    }
                ],
                number_of_pages:0,
            }
        },
        mounted() {
            console.log('Data Santri')
            console.log('data santri login state', this.$store.state.islogin)
            this.$store.dispatch('get', '/kelasbanin')
                .then(resp => {
                    console.log(resp.data)
                    let data = resp.data
                    console.log(data)
                    for(let dt in data) {
                        console.log(data[dt].nama_kelas)
                        this.kelas.push({
                            text: data[dt].nama_kelas,
                            value: data[dt].id
                        })
                    }

                    console.log(this.kelas)

                })
                this.fetchDataSantri('/datasantri')
        },

        methods: {
            onSubmit(evt) {
                evt.preventDefault()
            },
            onReset(evt) {

            },
            getData(url, event) {
                event.preventDefault()
                console.log(url)
                if (url !== null){
                    this.fetchDataSantri(url)
                }
            },
            findData(evt) {
                evt.preventDefault()
                console.log(evt.keyCode);

                let url = '/datasantri?cari=' + this.cari_data;
                if (evt.keyCode == 13 || this.cari_data.length > 3) {
                    console.log('ENTER')
                    evt.preventDefault()

                    this.fetchDataSantri(url)
                }
                if (this.cari_data == '') {
                    this.fetchDataSantri('/datasantri')
                }
            },
            findDataBtn(evt) {
                evt.preventDefault()
                let url = '/datasantri?cari=' + this.cari_data;
                this.fetchDataSantri(url)
            },
            save(id, evt) {
                evt.preventDefault()

                let data = this.form
                let dt = {
                    nama_santri: data.nama_santri,
                    nomor_induk: data.nomor_induk,
                    tempat_lahir: data.tempat_lahir,
                    tanggal_lahir: data.tanggal_lahir,
                    alamat_santri: data.alamat_santri,
                    nomor_telepon: data.nomor_telepon,
                    status_dalam_keluarga: data.status_dalam_keluarga,
                    anak_ke: data.anak_ke,
                    ayah: data.ayah,
                    ibu: data.ibu,
                    alamat_ortu: data.alamat_ortu,
                    alamat_wali: data.alamat_wali,
                    nomor_telepon_ortu: data.nomor_telepon_ortu,
                    nomor_telepon_wali: data.nomor_telepon_wali,
                    diterima_diponpes_tgl: data.diterima_diponpes_tgl,
                    pekerjaan_wali: data.pekerjaan_wali,
                    diterima_diponpes_dikelas: data.diterima_diponpes_dikelas,
                    sekolah_asal: data.sekolah_asal,
                    id: id,
                }

                console.log(dt)
                let actions = id == -1 ? 'save' : 'update'
                let endpoint = id == -1 ? '/datasantri' : '/datasantri/' + id
                this.$store.dispatch(actions, { endpoint: endpoint, data: dt })
                    .then(resp => {
                        this.$route.push('/login')
                        /* console.log('Fetch new data')
                        this.fetchDataSantri('/datasantri')
                        if (action == 'save') {
                            this.$bvModal.hide('modal-1')
                        } else {
                            this.$bvModal.hide('modal-edit')
                        }*/
                    })
            },
            fetchDataSantri(url) {
                this.$store.dispatch('get', url)
                    .then(resp => {
                        console.log('Get Data Santri')
                        this.links = resp.data.links ? resp.data.links : []
                        this.total_data = resp.data.total ? resp.data.total : resp.data.length
                        this.items = resp.data.data ? resp.data.data : resp.data
                        this.number_of_pages = this.links.length
                })
            },
            linkGen(pegeNum) {
                return pageNum === 1 ? '?datasantri' : 'datasantri?page=${pageNum}'
            },
            edit(item, index, target) {
                this.form.nama_santri = item.nama_santri,
                this.form.nomor_induk = item.nomor_induk,
                this.form.tempat_lahir = item.tempat_lahir,
                this.form.tanggal_lahir = item.tanggal_lahir,
                this.form.alamat_santri = item.alamat_santri,
                this.form.nomor_telepon = item.nomor_telepon,
                this.form.status_dalam_keluarga = item.status_dalam_keluarga,
                this.form.anak_ke = item.anak_ke,
                this.form.ayah = item.ayah,
                this.form.ibu = item.ibu,
                this.form.alamat_ortu = item.alamat_ortu,
                this.form.alamat_wali = item.alamat_wali,
                this.form.nomor_telepon_ortu = item.nomor_telepon_ortu,
                this.form.nomor_telepon_wali = item.nomor_telepon_wali,
                this.form.diterima_diponpes_tgl = item.diterima_diponpes_tgl,
                this.form.pekerjaan_wali = item.pekerjaan_wali,
                this.form.diterima_diponpes_dikelas = item.diterima_diponpes_dikelas,
                this.form.sekolah_asal = item.sekolah_asal,
                this.form.id = item.id

                this.$bvModal.show('modal-edit')
            }
        }
    }
</script>
