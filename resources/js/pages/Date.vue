<script>
import axios from 'axios'
import { BASE_URL } from '../data/data'
import { store } from '../data/store'

export default {
    name: "Date",
    data() {
        return {
            BASE_URL,
            store,
            active_base_url: BASE_URL + '/api/posts'
        }
    },
    methods: {
        getApi(url) {
            axios.get(url)
                .then(result => {
                    console.log(result.posts);
                })
        },

    },
    mounted() {
        this.getApi(this.active_base_url);
    }
}


</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Concerti</h1>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Luogo</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(links, index) in store.links" :key="index">
                    <td>{{ links.date }}</td>
                    <td>{{ links.title }}</td>
                    <td>{{ links.text }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    color: white;
    height: 100vh;
    background-image: url('../assets/violinome.jpg');
    background-size: cover;
}

</style>