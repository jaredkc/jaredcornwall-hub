<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/Pagination.vue";

defineProps(['posts']);
</script>

<template>
  <AppLayout title="Posts">
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
          <ul>
            <li v-for="post in posts.data" :key="post.id">{{ post.title }}</li>
          </ul>
        </div>

        <Pagination :meta="posts.meta" class="mt-2" />
      </div>
    </div>
  </AppLayout>
</template>