<script setup>

import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import {ref} from "vue";

const searchKeyword = ref()
</script>

<template>
    <h2 class="text-2xl font-bold text-center">My Groups</h2>
    <div v-if="false" class="text-gray-500 text-center">
        You have not joined any group yet.
    </div>
    <div v-else>
        <div class="text-center py-6">
            <TextInput model-value="searchKeyword" placeholder="Type to search ..." class="w-full"/>
        </div>
        <group-item image="https://picsum.photos/100" title="Laravel Developers"
                    description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"/>
        <group-item image="https://picsum.photos/100" title="Vue js Developers"
                    description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, in"/>
    </div>
</template>

<style scoped>

</style>
