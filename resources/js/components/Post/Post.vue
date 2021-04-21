<template>
<div>
    <h4>Primeiro post</h4>
    <div v-for="(post,indice) in posts.data" :key="indice">
        {{ post.title}}
        <hr>
    </div>
</div>
</template>

<script>
import axios from 'axios'
import Bus from '../../bus'

export default {
    mounted() {
        this.loadPosts()
        Bus.$on('post.created', post => this.posts.data.unshift(post))
    },
    data(){
        return {
            posts:{
                data:[]
            }
        }
    },
    methods:{
        loadPosts(){
            axios.get('/api/posts')
            .then(response => {
                this.posts = response.data
            })
            .catch(response => {
                this.$vToastify.error('Falha ao  carregar os post','Novo Post')
            })
        }
    }
}
</script>

<style scoped>

</style>
