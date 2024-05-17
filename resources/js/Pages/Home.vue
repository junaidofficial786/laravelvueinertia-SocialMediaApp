<script setup>
import { Head } from "@inertiajs/vue3";
import GroupList from "@/Components/app/GroupList.vue";
import FollowerList from "@/Components/app/FollowerList.vue";
import PostList from "@/Components/app/PostList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";
</script>

<template>
  <Head title="Social Media Website" />

  <!-- layout using tailwind starts-->
  <div class="grid lg:grid-cols-12 gap-3 p-4">
    <div class="lg:col-span-3 lg:order-1 h-full overflow-auto">
      <group-list />
    </div>
    <div class="lg:col-span-3 lg:order-3 h-full overflow-auto">
      <follower-list />
    </div>
    <div class="lg:col-span-6 lg:order-2 h-full overflow-auto">
      <create-post />
      <post-list />
    </div>
  </div>
  <!-- layout using tailwind ends-->
</template>
