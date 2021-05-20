<template>
    <div class="container-fluid mt-2">
        <Navbar v-if="this.loggedIn()"/>
        <router-view/>
    </div>
</template>


<script>
    import Navbar from './Navbar';

    export default {
        name: "Welcome",
        components: {Navbar},
        methods: {
            loggedIn() {
                return localStorage.getItem('token');
            }
        }
    }
</script>