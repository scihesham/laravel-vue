<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div class="wrapper">
      <div class="container">
        <nav>
          <RouterLink to="/" class="text-success" style="margin-right: 20px;">Home</RouterLink>
          <RouterLink :to="{ name: 'skillIndex' }">Skills</RouterLink>
        </nav>
      </div>
    </div>
  </header>

  <RouterView />
</template>

