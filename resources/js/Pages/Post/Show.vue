<template>
    <Head title="Single Post" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                View Single Post
            </h2>
        </template>

        <div class="">
            <div class="container mx-auto sm:px-6 lg:px-8">
                <div
                    class="
                        w-full
                        overflow-hidden
                        bg-white
                        shadow-sm
                        max-w-7xl
                        sm:rounded-lg
                    "
                >
                <span class="circle">{{posts.id}}</span>
                <h1 class="w-56 bg-white shadow rounded px-1 py-1">Title: {{posts.title}}</h1>
                <strong class="w-56 bg-white shadow rounded px-1 py-1">Description: {{posts.description}}</strong>
                <code class="w-56 bg-white shadow rounded px-1 py-1">created_at {{posts.created_at}}</code>
                <code class="w-56 bg-white shadow rounded px-1 py-1">updated_at {{posts.updated_at}}</code>
                
                    <div class="p-6 bg-white border-b border-gray-200">
                       
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
    BreezeAuthenticatedLayout,
    Head,
    Pagination,
    Link,
    
},
    props: {
        posts: Object,
    },
   
};
</script>
<style scoped>
.circle{
    border:1px solid #000;
    border-radius:25px;
    display: inline-block;
    padding:5px;
}

</style>


