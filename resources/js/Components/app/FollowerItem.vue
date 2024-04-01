<script setup>
defineProps({
    image: String,
    title: String,
    description: String,
})
</script>

<template>
    <div class="flex items-start gap-3 mb-3 hover:bg-gray-100 cursor-pointer p-3">
        <img :src="image" alt="group image" class="w-[32px] rounded-full">
        <div>
            <h3 class="text-2xl">{{ title }}</h3>
        </div>
    </div>
</template>

<style scoped>
</style>
