<script setup>
import {Head} from '@inertiajs/vue3';
import GroupList from "@/Components/app/GroupList.vue";
import FollowerList from "@/Components/app/FollowerList.vue";
</script>

<template>
    <Head title="Social Media Website"/>

    <!-- layout using tailwind starts-->
    <div class="grid grid-cols-12 gap-3">
        <div class="col-span-3 py-6 px-3">
            <div class="py-8">
                <group-list/>
            </div>
        </div>
        <div class="col-span-6">
            Posts
        </div>
        <div class="col-span-3 py-6 px-3">
            <div class="py-8">
                <follower-list />
            </div>
        </div>
    </div>
    <!-- layout using tailwind ends-->
</template>
