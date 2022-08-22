<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Post Lists
            </h2>
        </template>

        <div class="py-12">
            <div class="container mx-auto sm:px-6 lg:px-8">
                <div
                    class="
                        overflow-hidden
                        bg-white
                        shadow-sm
                        max-w-7xl
                        sm:rounded-lg
                    "
                >
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Title</td>
                                <td class="px-4 py-2">Description</td>
                                <td class="px-4 py-2">Action</td>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts.data" :key="post.id">
                                    <td class="px-4 py-2">{{ post.id }}</td>
                                    <td class="px-4 py-2">{{ post.title }}</td>
                                    <td class="px-4 py-2">
                                        {{ post.description }}
                                    </td>
                                    <td class="px-4 py-2 flex">
                                    <p
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                                    @click="view(post.id)"  
                                    >View
                                    </p>
                                    <p
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                                     @click="edit(post.id)"
                                    
                                    >Edit
                                    </p>
                                    <p 
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"
                                    @click="remove(post.id)"
                                    >Delete
                                    </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <pagination class="mt-6" :links="posts.links" />
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
    methods: {
        view(e){ 
            window.location.href = "http://localhost:8000/post/"+e;
            },
        edit(id){
            window.location.href = "http://localhost:8000/post/"+id;
        },
        remove(i){
             window.location.href = "http://localhost:8000/post/"+i;
        }
        }
};
</script>


<style scoped>
.pbtnview{
        background: red;
    padding: 5px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;

}
.pbtnview:hover{
     background: red;
    padding: 3px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
}
.pbtnedit{
        background: rgb(188, 174, 174);
    padding: 5px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;

}
.pbtnedit:hover{
     background: rgb(188, 174, 174);
    padding: 3px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;

}
.pbtndelete{
     background: rgb(37, 9, 9);
    padding: 5px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
}
.pbtndelete:hover{
    background: rgb(37, 9, 9);
    padding: 3px;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
}

</style>