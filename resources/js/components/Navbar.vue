<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid">

                <router-link class="navbar-brand" to="/">Ban Admin</router-link>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/records">Записи</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/rules">Правила</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/servers">Сервера</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/users">Пользователи</router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" @click="logout" href="#">Выход</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        name: "Navbar",
        methods: {
            logout() {

                axios.post('/api/logout', {token: localStorage.getItem('token')}).then((response) => {
                    localStorage.removeItem('token');
                    this.$router.push('/login');
                }).finally(() => {
                    localStorage.removeItem('token');
                });

            }
        }
    }
</script>

<style scoped>

</style>