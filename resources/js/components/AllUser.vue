<template>
    <div>
        <h2 class="text-center">Lista de Usuarios</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: user.id }}" class="btn btn-success btn-outline">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteuser(user.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                users: []
            }
        },
        created() {
            this.axios
                .get('https://macrobyte.test/api/users/')
                .then(response => {
                    this.users = response.data;
                });
        },
        methods: {
            deleteuser(id) { 
                this.axios
                    .delete(`https://macrobyte.test/api/users/${id}`)
                    .then(response => {
                        let i = this.users.map(data => data.id).indexOf(id);
                        this.users.splice(i, 1)
                    });
            }
        }
    }
</script>