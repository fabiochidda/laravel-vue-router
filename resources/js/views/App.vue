<template>
  <div class="app bg-stone-900 text-white">
      <header>
          <nav>
              <ul class="flex justify-center py-5">
                  <li class="text-xl rounded-md bg-[#473198] text-white px-3 py-1">
                      <router-link to="/posts">Posts</router-link>
                  </li>
              </ul>
          </nav>
      </header>
      <router-view></router-view>
      <footer>
          <div class="flex justify-center py-5">
             <p>Made By Fabio</p>
          </div>
      </footer>
  </div>
</template>

<script>
import PostsGrid from '../pages/Post.index.vue'

export default {
    components: {
        PostsGrid,
    }

}
</script>

<style lang="scss" scoped>

.app {
    min-height: 100vh;
}

</style>>