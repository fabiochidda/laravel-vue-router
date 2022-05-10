<template>
    <div>
        <div class="container grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
        <div class="container">
            <ul class="flex gap-4 py-8 justify-end items-center">
                <li @click="fetchPosts(n)" :class="[currentPage === n ? 'bg-[#ADFC92] text-black' : 'bg-gray-800', 'flex items-center justify-center h-10 w-10 rounded-full cursor-pointer']" v-for="n in lastPage" :key="n">{{n}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import PostCard from '../components/PostCard.vue'

export default {
    components: {
        PostCard,
    },

    data() {
        return {
            posts: [],
            lastPage: 0,
            currentPage: 1,
        }
    },
    methods: {
        fetchPosts(page = 1) {
            axios.get('/api/posts',{
                params: {
                    page
                }
            })
            .then( res=> {
                const {posts} = res.data

                const {data, last_page, current_page} = posts

                this.posts = data

                this.currentPage = current_page

                this.lastPage = last_page
            })
            .catch(err=> {
                console.warn(err)
            })
        }
    },
    mounted() {
        this.fetchPosts();
    }

}
</script>

<style lang="scss" scoped>

</style>>