<script setup>
import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref();
</script>

<template>
  <div class="px-3 bg-white rounded-lg border py-3 h-[400px] overflow-hidden flex flex-col">
    <h2 class="text-2xl font-bold text-center mb-4">My Groups</h2>
    <TextInput
      :model-value="searchKeyword"
      placeholder="Type to search ..."
      class="w-full"
    />
    <div class="py-8 flex-1 overflow-auto">
      <div v-if="false" class="text-gray-400 text-center flex">
        You have not joined any group yet.
      </div>
      <div v-else >
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
        <group-item
          image="https://picsum.photos/100"
          title="Vue js Developers"
          description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>
