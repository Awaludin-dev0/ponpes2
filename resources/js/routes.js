import Login from './components/auth/LoginComponent.vue'
import DataSantri from './components/admin/DataSantriComponent.vue'
const Example = () => import('./components/ExampleComponent.vue')
import Crud from './components/lib/CrudComponent.vue'
import KelasSantriBanin from './components/admin/KelasSantriBaninComponent.vue'
import KelasBanin from './components/admin/KelasBaninComponent.vue'
import GuruBanin from './components/admin/GuruBaninComponent.vue'
import MapelKelas from './components/admin/MapelKelasComponent.vue'
import NilaiBanin from './components/guru/NilaiBaninComponent.vue'
const Pengguna = () => import('./components/admin/PenggunaComponent.vue')
import Dashboard from './components/admin/DashboardComponent.vue'
import MenuAdmin from './components/admin/MenuAdminComponent.vue'

export const routes = [
    {
        path: '/',
        component: Login
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/datasantri',
        components: {
            default: DataSantri,
            menu: MenuAdmin
        }
    },
    {
        path: '/kelassantribanin',
        components: {
            default: KelasSantriBanin,
            menu: MenuAdmin,
        }
    },
    {
        path: '/kelasbanin',
        components:{
            default: KelasBanin,
            menu: MenuAdmin
        }
    },
    {
        path: '/gurubanin',
        components:{
            default: GuruBanin,
            menu: MenuAdmin
        }
    },
    {
        path: '/pengguna',
        components: {
            default: Pengguna,
            menu: MenuAdmin
        }
    },
    {
        path: '/mapelkelas',
        components:{
            default: MapelKelas,
            menu: MenuAdmin
        }
    },
    {
        path: '/dashboard',
        redirect: '/datasantri',
        components: {
            default: Dashboard,
            menu: MenuAdmin
        }
    }
]
