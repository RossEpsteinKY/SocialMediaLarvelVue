<template>

    <div class="flex flex-col items-center py-4">

        <NewPost />

        <p v-if="loading">Loading posts...</p>
        <Post v-else v-for="post in posts.data" :key="post.data.post_id" :post="post"/>

    </div>

</template>

<script>
import NewPost from '../components/NewPost';
import Post from "../components/Post";


    export default {
        name: "NewsFeed",

        components: {
            Post,

            NewPost

        },

        data: () => {
            return{
                posts: null,
                loading:true,
            }
        },

        mounted() {
            axios.get('/api/posts')
            .then(res => {
                this.posts = res.data;
                this.loading = false;

            }).catch(error =>{
                console.log('Unable to fetch posts');
                this.loading = false;
            })
        }
    }

</script>

<style scoped>

</style>
