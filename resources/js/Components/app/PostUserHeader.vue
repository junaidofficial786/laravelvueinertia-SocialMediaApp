<script setup>
defineProps({
    post: {
        type: Object,
        required: true
    },
    showTime: {
        type: Boolean,
        default: true
    }
})
</script>

<template>
    <div class="flex items-center gap-2">
        <a href="javascript:void(0)">
            <img
                :src="post.user.avatar_url"
                alt=""
                class="w-[40px] rounded-full gap-2 border-2 hover:border-blue-500 transition-all"
            />
        </a>
        <div>
            <h4>
                <a href="javascript:void(0)" class="font-bold hover:underline">{{
                        post.user.name
                    }}</a>
                <template v-if="post.group">
                    >
                    <a href="javascript:void(0)" class="font-bold hover:underline">
                        {{ post.group.name }}
                    </a>
                </template>
            </h4>
            <small v-if="showTime" class="text-gray-500">{{ post.created_at }}</small>
        </div>
    </div>
</template>

<style scoped>

</style>
