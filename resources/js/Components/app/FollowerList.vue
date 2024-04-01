<script setup>

import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import {ref} from "vue";

const searchKeyword = ref()
</script>

<template>
    <h2 class="text-2xl font-bold text-center">My Followers</h2>
    <div v-if="false" class="text-gray-500 text-center">
        You have not friends yet.
    </div>
    <div v-else>
        <div class="text-center py-6">
            <TextInput model-value="" placeholder="Type to search ..." class="w-full"/>
        </div>
        <group-item image="https://picsum.photos/100" title="Elon Musk"
                    />
        <group-item image="https://picsum.photos/100" title="Mark zinger burger"
                    />
    </div>
</template>

<style scoped>

</style>
