<template>
    <div>
        <h1>Правила</h1>

        <table id="data-table" class="table table-hover table-bordered table-stripped">
            <thead>
            <tr>

                <th>Пункт</th>
                <th>Правило</th>
                <th>Наказание</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="rule in rules" :key="rule.id">
                <td>{{ rule.number }}</td>
                <td>{{ rule.rule }}</td>
                <td>{{ rule.punishment }}</td>
                <td class="text-nowrap">
                    <b-button variant="success">Править</b-button>
                    <b-button variant="danger">Удалить</b-button>
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
                rules: [],
                rule: {
                    id: '',
                    number: '',
                    rule: '',
                    punishment: ''
                },
                pagination: []
            }
        },
        mounted() {
            this.loadRules();
        },
        methods: {
            loadRules() {
                axios.get('/api/rules').then(response => {
                    this.rules = response.data.data;
                });
            }
        },
        name: "Rules"
    }
</script>

<style scoped>

</style>