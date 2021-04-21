import Vue from 'vue';
import Bus from './bus'

window.Echo.channel('laravel_database_post-created')
    .listen('PostCreated', (e) => {

        Bus.$emit('post.created',e.post)

        Vue.$vToastify.success(`Novo Post ${e.post.title}`,'Novo Post')
    })
