<style>
</style>

<template>
  <authenticated-layout>
    <div class="container mx-auto h-full overflow-auto">
      <div
        v-show="showNotification && status === 'cover-image-updated'"
        class="my-2 py-2 px-3 font-medium text-sm bg-green-500 text-white"
      >
        Your cover image has been updated
      </div>
      <div class="group relative bg-white">
        {{ errors }}
        <div v-show = 'errors.cover' class="my-2 py-2 px-3 font-medium text-sm bg-red-400 text-white">
          {{ errors.cover }}
        </div>
        <img
          :src="coverImageSrc || user.cover_url"
          class="w-full h-[200px] object-cover"
          alt=""
        />
        <div>
          <button
            v-if="!coverImageSrc"
            class="absolute top-2 right-2 bg-gray-50 hover:bg-gray-100 py-1 px-2 text-xs flex items-center opacity-0 group-hover:opacity-100"
          >
            <CameraIcon class="h-3 w-3 mr-2" />

            Update Cover Image
            <input
              type="file"
              class="absolute left-0 top-0 bottom-0 right-0 opacity-0"
              @change="onCoverChange"
            />
          </button>
          <div v-else class="flex gap-2 absolute top-2 right-2">
            <button
              @click="cancelCoverImage"
              class="bg-gray-50 hover:bg-gray-100 text-gray-800 py-1 px-2 text-xs flex items-center opacity-0 group-hover:opacity-100"
            >
              <XMarkIcon class="h-3 w-3 mr-2" />
              Cancel
            </button>
            <button
              @click="submitCoverImage"
              class="bg-gray-800 hover:bg-gray-900 text-gray-100 py-1 px-2 text-xs flex items-center opacity-0 group-hover:opacity-100"
            >
              <CheckCircleIcon class="h-3 w-3 mr-2" />
              Submit
            </button>
          </div>
        </div>
        <div class="flex">
          <img
            src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon-thumbnail.png"
            class="ml-[48px] w-[128px] h-[128px] rounded-full -mt-[64px]"
            alt=""
          />
          <div class="flex flex-1 p-4 items-center justify-between">
            <h2 class="font-bold text-lg">{{ user.name }}</h2>
            <PrimaryButton v-if="isMyProfile">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-4 mr-2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"
                />
              </svg>

              Edit Profile
            </PrimaryButton>
          </div>
        </div>
      </div>
      <div class="border-t-2 border-gray-200">
        <TabGroup>
          <TabList class="flex bg-white">
            <Tab v-if="isMyProfile" v-slot="{ selected }" as="template">
              <tab-item text="About" :selected="selected" />
            </Tab>
            <Tab v-slot="{ selected }" as="template">
              <tab-item text="Posts" :selected="selected" />
            </Tab>
            <Tab v-slot="{ selected }" as="template">
              <tab-item text="Followers" :selected="selected" />
            </Tab>
            <Tab v-slot="{ selected }" as="template">
              <tab-item text="Followings" :selected="selected" />
            </Tab>
            <Tab v-slot="{ selected }" as="template">
              <tab-item text="Photos" :selected="selected" />
            </Tab>
          </TabList>

          <TabPanels class="mt-2">
            <TabPanel v-if="isMyProfile" class="">
              <Edit :mustVerifyEmail="mustVerifyEmail" :status="status" />
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content</TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content</TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content</TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content</TabPanel>
          </TabPanels>
        </TabGroup>
      </div>
    </div>
  </authenticated-layout>
</template>

<script setup>
import { computed, ref } from "vue";
import Edit from "./Edit.vue";
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from "@headlessui/vue";
import { useForm, usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TabItem from "./Partials/TabItem.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";


import {
  CameraIcon,
  CheckCircleIcon,
  CheckIcon,
  TicketIcon,
  XMarkIcon,
} from "@heroicons/vue/20/solid";

const props = defineProps({
  errors: Object,
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
  user: {
    type: Object,
  },
});

const imagesForm = useForm({
  avatar: null,
  cover: null
})

const authUser = usePage().props.auth.user;
const isMyProfile = computed(() => authUser && authUser.id === props.user.id);
const coverImageSrc = ref("");
const showNotification = ref(true)


function onCoverChange(event) {
  imagesForm.cover = event.target.files[0];
  if (imagesForm.cover) {
    const reader = new FileReader();
    reader.onload = (e) => {
      coverImageSrc.value = reader.result;
    };
    reader.readAsDataURL(imagesForm.cover);
  }
}

function cancelCoverImage() {
  imagesForm.cover = null;
  coverImageSrc.value = null;
}

function submitCoverImage() {
  imagesForm.post(route('profile.updateCover'), {
    onSuccess: (user) => {
      console.log(user)
      cancelCoverImage()
      setTimeout(() => {
        showNotification.value = false
      }, 3000);
    }
  })
}
</script>
