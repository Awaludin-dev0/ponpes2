import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
Vue.use(Vuex)

axios.defaults.baseURL = '/api'

export const store = new Vuex.Store({
    state() {
        return {
            islogin: false,
            username:''
        }
    },
    getters: {
        isLoginState: state => {
            return state.isLogin
        }
    },
    mutations: {
        login(state) {
            state.islogin = true
            console.log('state: ', state.islogin)
        },
        set_username(state, data) {
            state.username = data
        }

    },
    actions: {
        get:({commit, dispatch}, endpoint) => {
            return new Promise((resolve, reject)=>{
                axios.get(endpoint).then(resp => resolve(resp))
                .catch(err => reject(err))
            })
        },
        save:({commit, dispatch}, data) => {
            return new Promise((resolve, reject) => {
                axios.post(data.endpoint, data.data)
                    .then(resp = resolve(resp))
                    .catch(err => reject(err))
            })
        },
        update:({commit, dispatch}, data) => {
            return new Promise((resolve, reject) => {
                axios.put(data.endpoint, data.data)
                    .then(resp = resolve(resp))
                    .catch(err => reject(err))
            })
        },
        login:({commit, dispatch}, data) => {
            return new Promise((resolve, reject) => {
                axios.post('/loginsubmit', data)
                    .then(resp => {
                        console.log(resp)
                        commit('login')
                        commit('set_username', resp.data.name)
                        axios.defaults.headers.common['Authorization'] = 'Bearer ' + resp.data.auth_token
                        resolve(resp)
                    })
                    .catch(err => reject(err))
            })
        },
    }
})
