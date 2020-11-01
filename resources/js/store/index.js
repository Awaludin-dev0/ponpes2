import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
Vue.use(Vuex)

axios.defaults.baseURL = '/api'

export const store = new Vuex.Store({
    state: {

    },
    getters: {

    },
    mutations: {

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
                axios.post('/loginsubmit', data.data)
                    .then(resp = resolve(resp))
                    .catch(err => reject(err))
            })
        },
    }
})
