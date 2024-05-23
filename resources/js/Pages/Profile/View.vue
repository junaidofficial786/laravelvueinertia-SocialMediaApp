<style>
</style>

<template>
  <authenticated-layout>
    <div class="container mx-auto h-full overflow-auto">
      <div class="relative bg-white">
        <img
          src="https://i.pinimg.com/564x/3a/b7/ea/3ab7eac12701d0ca0e2ed6f668b70987.jpg"
          class="w-full h-[200px] object-cover"
          alt=""
        />

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
          <TabList  class="flex bg-white">
            <Tab v-if="isMyProfile" v-slot="{ selected }" as="template"
              ><tab-item text="About" :selected="selected"
            /></Tab>
            <Tab v-slot="{ selected }" as="template"
              ><tab-item text="Posts" :selected="selected"
            /></Tab>
            <Tab v-slot="{ selected }" as="template"
              ><tab-item text="Followers" :selected="selected"
            /></Tab>
            <Tab v-slot="{ selected }" as="template"
              ><tab-item text="Followings" :selected="selected"
            /></Tab>
            <Tab v-slot="{ selected }" as="template"
              ><tab-item text="Photos" :selected="selected"
            /></Tab>
          </TabList>

          <TabPanels class="mt-2">
            <TabPanel v-if="isMyProfile" class="">
              <Edit :mustVerifyEmail="mustVerifyEmail" :status="status" />
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content </TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content </TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content </TabPanel>
            <TabPanel class="bg-white p-3 shadow"> Followers content </TabPanel>
          </TabPanels>
        </TabGroup>
      </div>
    </div>
  </authenticated-layout>
</template>

<script setup>
import {computed, ref} from "vue";
import Edit from "./Edit.vue";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import { usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TabItem from "./Partials/TabItem.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const authUser = usePage().props.auth.user;

const props = defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
  user: {
    type: Object
  }
});

const isMyProfile = computed(() =>  authUser && authUser.id === props.user.id)


</script>
