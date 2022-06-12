<template>
    <Layout :title="title">
        <h1>Halaman {{ title }}</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ user.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
        </table>
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
        props: ['title', 'user']
    }
</script>