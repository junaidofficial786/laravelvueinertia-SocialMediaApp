<script setup>
import { ref } from "vue";
import TextAreaInput from "@/Components/TextAreaInput.vue";
import {router, useForm} from "@inertiajs/vue3";

const postCreating = ref(false);

const newPostForm = useForm({
    body: "",
})

function submit() {
    newPostForm.post(route('post.store'), {
        onSuccess: () => newPostForm.reset()
    })
}
</script>

<template>
  <div class="py-6 px-2 bg-white rounded-lg border mb-3">
    <TextAreaInput
      @click="postCreating = true"
      class="mb-3 w-full"
      placeholder="Click here to create new post"
      v-model="newPostForm.body"
     />

    <div v-if="postCreating" class="flex gap-2 justify-between">
      <button
        type="button"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 relative"
      >
        <input
          type="file"
          class="absolute left-0 top-0 right-0 bottom-0 opacity-0"
        />
        Attach files
      </button>
      <button
        type="submit"
        @click="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
      >
        Submit
      </button>
    </div>
  </div>
</template>

<style scoped>
</style>
