<template>
    <div class="container py-5">
        <h2 class="text-3xl text-[#DAFFED]" v-if="post">{{post.title}}</h2>
        <p class="italic pt-2 text-[#ADFC92]" v-if="post.category">{{post.category.name}}</p>
        <p class="py-5">{{post.content}}</p>
        <ul class="tags flex gap-2 pt-2">
            <li class="rounded-full bg-[#473198] text-white px-2" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            post: null
        }
    },
    beforeMount() {

        axios.get(`/api/posts/${this.$route.params.slug}`)
        .then( res => {
            const {post} = res.data
            this.post = post
        })
        .catch( err => {
            console.warn(err)
        })

    }
}
</script>

<style lang="scss" scoped>

</style>