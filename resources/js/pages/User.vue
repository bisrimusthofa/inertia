<template>
    <Layout :title="title">
        <h1>Hallo {{ title }}</h1>
        <h2>Ini Halaman User</h2>
        <Link href="/user/create" as="button" class="btn btn-primary">Create</Link>
        <ul>
            <li v-for="(user, i) in users" :key="i">
                <Link :href="`/user/${user.id}`">{{ user.name }}</Link>
            </li>
        </ul>
    </Layout>
</template>

<script>
    import Layout from '../Shared/Layout.vue';
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: {
            Layout,
            Link
        },
        props: ['title', 'users']
    }
</script>