<template>
  <main class="container mt-5">
    <nav class="navbar navbar-expand-lg bg-light">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <Link class="nav-link active" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link active" href="/about">About</Link>
        </li>
      </ul>
    </nav>
    <article>
      <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}
      </div>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  },
  props: ['title'],
  watch: {
    title: {
      immediate: true,
      handler(title){
        document.title = title
      }
    }
  }
}
</script>