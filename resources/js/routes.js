import Login from './components/auth/LoginComponent.vue'
import DataSantri from './components/admin/DataSantriComponent.vue'
const Example = () => import('./components/ExampleComponent.vue')
import Crud from './components/lib/CrudComponent.vue'
import KelasSantriBanin from './components/admin/KelasSantriBaninComponent.vue'
import KelasBanin from './components/admin/KelasBaninComponent.vue'
import GuruBanin from './components/admin/GuruBaninComponent.vue'
import MapelKelas from './components/admin/MapelKelasComponent.vue'
import NilaiBanin from './components/guru/NilaiBaninComponent.vue'

export const routes = [
    {
        path: '/login',
        component: Login
    },
    {
        path: '/datasantri',
        component: DataSantri
    },
    {
        path: '/kelassantribanin',
        component: KelasSantriBanin
    },
    {
        path: '/kelasbanin',
        component: KelasBanin
    }
]
