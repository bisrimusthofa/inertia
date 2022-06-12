<template>
    <Layout :title="title">
        <h1>Hallo {{ title }}</h1>
        <h2>Ini Halaman about</h2>
    </Layout>
</template>

<script>
    import Layout from './../Shared/Layout.vue';
    export default {
        components: {
            Layout,
        },
        props: ['title']
    }
</script>