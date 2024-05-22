<style>
</style>

<template>
  <authenticated-layout>
    <div class="container mx-auto h-full overflow-auto">
      <div class="relative h-[200px]">
        <img
          src="https://i.pinimg.com/564x/3a/b7/ea/3ab7eac12701d0ca0e2ed6f668b70987.jpg"
          class="w-full h-[200px] object-cover"
          alt=""
        />

        <img
          src="https://w7.pngwing.com/pngs/364/361/png-transparent-account-avatar-profile-user-avatars-icon-thumbnail.png"
          class="absolute left-[48px] w-[128px] h-[128px] rounded-full -bottom-[48px]"
          alt=""
        />
      </div>
      <div class="sm:px-0">
        <TabGroup>
          <TabList class="flex pl-[200px] bg-white">
            <Tab v-slot="{ selected }" as="template"
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
            <TabPanel class="">
              <Edit :mustVerifyEmail="mustVerifyEmail" :status="status"/>
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow">
              Followers content
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow">
              Followers content
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow">
              Followers content
            </TabPanel>
            <TabPanel class="bg-white p-3 shadow">
              Followers content
            </TabPanel>
          </TabPanels>
        </TabGroup>
      </div>
    </div>
  </authenticated-layout>
</template>

<script setup>
import { ref } from "vue";
import Edit from "./Edit.vue";
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import { usePage } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TabItem from "./Partials/TabItem.vue";

const user = usePage().props.auth.user;

defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});
</script>
