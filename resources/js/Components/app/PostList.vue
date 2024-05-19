<script setup>
import PostItem from "./PostItem.vue";
const post1 = {
  user: {
    id: 1,
    name: "John Doe",
    avatar: "https://randomuser.me/api/portraits/men/8.jpg",
  },
  group: null,
  attachments: [
    {
        id:1,
        name: 'test.png',
        mime: 'image/png',
        url: 'https://picsum.photos/1000',
    },
    {
        id:2,
        name: 'test.png',
        mime: 'image/png',
        url: 'https://picsum.photos/1000',
    },
    {
        id:3,
        name: 'MyDoc.docx',
        mime: 'application/msword',
        url: 'https://picsum.photos/1000',
    },
  ],
  body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p>`,
  created_at: "2022-01-01 00:00:00",
};
const post2 = {
  user: {
    id: 1,
    name: "James Doe",
    avatar: "https://randomuser.me/api/portraits/men/5.jpg",
  },
  group: {
    id: 1,
    name: "Laravel Developers",
  },
  body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in</p>`,
  created_at: "2022-01-01 00:00:00",
};
</script>

<template>
  <div class="overflow-auto">
    <post-item :post="post1" />
    <post-item :post="post2" />
    <post-item :post="post2" />
    <post-item :post="post2" />
  </div>
</template>

<style scoped>
</style>
