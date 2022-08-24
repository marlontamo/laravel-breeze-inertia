<template>
    <Head title="Image View" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Image View 
               </h2>
        </template>

        <div>
          <center>
          <img :src="showImage() + image.image" alt="" width="500" height="300">
          </center>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    methods: {
        showImage() {
            return "/storage/";
        }
    },
    props: {
        image: String,
    },
     
 
};
</script>