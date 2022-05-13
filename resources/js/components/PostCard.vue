<template>
  <div class="post-card rounded-lg border border-gray-800 shadow-md p-5">
      <figure>
          <img src="https://picsum.photos/350/150" class="w-full object-cover" alt="">
      </figure>
      <div class="card-body">
          <h3 class="card-title pt-2 text-[#DAFFED]">{{post.title}}</h3>
          <p class="italic pt-2 text-[#ADFC92]" v-if="post.category">{{post.category.name}}</p>
          <ul class="tags flex gap-2 flex-wrap pt-2">
              <li class="rounded-full bg-[#473198] text-white px-2" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
          </ul>
          <router-link class="bg-[#ADFC92] text-black px-2 mt-5" tag="button" :to="{name: 'post.show', params: {slug: post.slug} }">Dettagli</router-link>
      </div>
  </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: false
        }
    }
}
</script>

<style lang="scss" scoped>

</style>>