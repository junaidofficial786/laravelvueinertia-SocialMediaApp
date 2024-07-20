<template>
    <TransitionRoot appear :show="show" as="template">
        <Dialog as="div" @close="closeModal" class="relative z-10">
            <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div class="fixed inset-0 bg-black/25"/>
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div
                    class="flex min-h-full items-center justify-center p-4 text-center"
                >
                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <DialogPanel
                            class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
                        >
                            <DialogTitle
                                as="h3"
                                class="text-lg flex items-center justify-between font-medium leading-6 text-gray-900"
                            >
                                Update Post
                                <button @click="show = false" class="flex items-center justify-center hover:bg-black/10 p-2 rounded-full">
                                    <XMarkIcon class="h-4 w-4" />
                                </button>
                            </DialogTitle>
                            <div class="mt-4 mb-6">
                                <PostUserHeader :post="post" :showTime='false'/>
                                <TextAreaInput v-model="post.body" class="w-full mt-5 mb-3"/>
                            </div>

                            <div class="mt-4">
                                <button
                                    type="button"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-400 w-full focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2"
                                    @click="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import {computed, ref} from 'vue'
import {Dialog, DialogPanel, DialogTitle, MenuButton, TransitionChild, TransitionRoot,} from '@headlessui/vue'
import TextAreaInput from "@/Components/TextAreaInput.vue";
import PostUserHeader from "@/Components/app/PostUserHeader.vue";
import {XMarkIcon} from "@heroicons/vue/20/solid/index.js";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    post: {
        type: Object,
        required: true
    },
    modelValue: Boolean
})

const emit = defineEmits('update:modelValue')


const show = computed({
    get: () => props.modelValue,
    set: (value) => emit('update:modelValue', value)
})


function closeModal() {
    show.value = false
    emit('update:modelValue', false)
}


function submit() {
    const form = useForm({
        id: props.post.id,
        body: props.post.body
    })

    form.put(route('post.update', props.post), {
        preserveScroll: true,
        onSuccess: () => show.value = false
    })
}

</script>
