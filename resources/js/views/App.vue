<template>
  <div class="app bg-stone-900 text-white">
      <header>
          <nav>
              <ul>
                  <li>Home</li>
                  <li>Posts</li>
                  <li>Categories</li>
              </ul>
          </nav>
      </header>
      <router-view></router-view>
      <footer>
          <p>Footer Placeholder</p>
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