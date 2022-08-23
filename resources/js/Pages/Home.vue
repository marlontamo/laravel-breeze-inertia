<template>
    <Head title="Hompage"/>
<h1>Home Page {{name}}</h1>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';


export default {
    data (){
        return {name: "marlon",
        title: "Home Page",}
    },
    components: {
    Head,
    Link,
    
},
    props: {
    
    },
   
};
</script>



