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
      <PostsGrid />
      <footer>
          <p>Footer Placeholder</p>
      </footer>
  </div>
</template>

<script>
import PostsGrid from './Post.index.vue'

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