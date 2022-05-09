<template>
  <div>
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

</style>>