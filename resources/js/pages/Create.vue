<template>
    <Layout :title="title">
        <h1>{{ title }}</h1>
        <form @submit.prevent="post">
            <div class="mb-3">
                <label for="">Nama</label>
                <input type="text" v-model="user.name" class="form-control">    
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" v-model="user.email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="text" v-model="user.password" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </Layout>
</template>

<script>
    import Layout from './../Shared/Layout.vue';
    export default {
        components: {
            Layout,
        },
        props: ['title'],
        data(){
            return {
                user: {}
            }
        },
        methods: {
            post(){
                this.$inertia.post('/user', this.user)
            }
        }
    }
</script>