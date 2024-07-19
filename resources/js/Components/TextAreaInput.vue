<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel(
    {
        type: String,
        required: true,
    });

const props = defineProps({
    autoResize: {
        type: Boolean,
        default: true
    }
})

const input = ref(null);

onMounted(() => {
    onInputChange()
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({focus: () => input.value.focus()});

function onInputChange (event) { //function that automatically set height of textarea based on content length
    if (props.autoResize) {
        input.value.style.height = 'auto';
        input.value.style.height = input.value.scrollHeight + 'px';

    }
}


</script>

<template>
    <textarea
        class="border-gray-300
<!--        dark:border-gray-700-->
<!--        dark:bg-gray-900-->
<!--        dark:text-gray-300-->
        focus:border-indigo-500
        dark:focus:border-indigo-600
        focus:ring-indigo-500
        dark:focus:ring-indigo-600
        rounded-md
        shadow-sm"
        v-model="model"
        ref="input"
        @input="onInputChange"
    ></textarea>
</template>

<style>

</style>
