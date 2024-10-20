<script setup>
    import { Head, Link } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Welcome"/>
    <div class="my-5 text-center">
        <Link :href="route('login')" class="btn btn-primary mx-2">Login</Link>
        <Link :href="route('register')" class="btn btn-info mx-2">Register</Link>
    </div>
</template>


