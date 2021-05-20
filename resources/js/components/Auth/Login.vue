<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Вход</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" v-model="formData.email">
                            <p class="text-danger" v-text="errors.email"></p>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" name="password" v-model="formData.password">
                            <p class="text-danger" v-text="errors.password"></p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button @click="login" class="btn btn-primary">Вход</button>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button @click="register" class="btn btn-primary">Создать аккаунт</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                formData: {
                    email: '',
                    password: ''
                },
                errors: {}
            }
        },
        methods: {
            login() {

                axios.post('/api/login', this.formData).then((response) => {
                    localStorage.setItem('token', response.data.token);
                    axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('token');
                    this.$router.push('/');
                }).catch((errors) => {
                    this.errors = errors.response.data.errors;
                });

            },
            register() {
                this.$router.push('register');
            }
        }
    }
</script>