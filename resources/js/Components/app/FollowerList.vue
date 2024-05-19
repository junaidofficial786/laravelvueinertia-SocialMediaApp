<script setup>
import FollowerItem from "@/Components/app/FollowerItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref();
</script>

<template>
  <div
    class="px-3 py-3 bg-white rounded-lg border lg:h-full overflow-hidden flex flex-col"
  >
    <h2 class="text-2xl font-bold mb-4">My Followings</h2>
    <TextInput model-value="" placeholder="Type to search ..." class="w-full" />
    <div class="mt-3 lg:flex-1 h-[300px] lg:h-auto overflow-auto">
      <div v-if="false" class="text-gray-400 text-center p-3">
        You have not friends yet.
      </div>
      <div v-else>
        <div class="text-center"></div>
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item image="https://picsum.photos/100" title="Elon Musk" />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
        <follower-item
          image="https://picsum.photos/100"
          title="Mark zinger burger"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>
