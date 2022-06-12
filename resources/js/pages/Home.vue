<template>
    <Layout :title="title">
        <h1>Hallo {{ title }}</h1>
        <h2>Ini Halaman Home</h2>
        <Link href="/user">user</Link>
    </Layout>
</template>

<script>
    import Layout from './../Shared/Layout.vue';
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: {
            Layout,
            Link
        },
        props: ['title']
    }
</script>