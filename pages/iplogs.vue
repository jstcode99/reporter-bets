<template>
    <b-container fluid>
        <br>
        <h6>IP Logs</h6>
        <b-form inline class="pt-2">
            <b-input-group
                class="mr-3"
                size="sm"
                prepend="from"
            >
                <b-form-input
                    id="date-to"
                    v-model="from"
                    type="text"
                    placeholder="YYYY-MM-DD"
                    autocomplete="off"
                />
                <b-input-group-append>
                    <b-form-datepicker
                        size="sm"
                        v-model="from"
                        button-only
                        right
                    />
                </b-input-group-append>
            </b-input-group>
            <b-input-group
                class="mr-3"
                size="sm"
                prepend="to"
            >
                <b-form-input
                    id="date-to"
                    v-model="to"
                    type="text"
                    placeholder="YYYY-MM-DD"
                    autocomplete="off"
                />
                <b-input-group-append>
                    <b-form-datepicker
                        size="sm"
                        v-model="to"
                        button-only
                        right
                    />
                </b-input-group-append>
            </b-input-group>
        </b-form>
        <b-table
            class="pt-2"
            :items="items"
            :fields="fields"
            :sort-by.sync="sortBy"
            :sort-desc.sync="sortDesc"
            bordered
            striped
            small
            responsive="sm"
        >
        </b-table>
    </b-container>
</template>
<script>
import { defineComponent, ref } from '@nuxtjs/composition-api'

export default defineComponent({
    setup() {
        const from = ref(new Date().toLocaleString())
        const to = ref(new Date().toLocaleString())
        const sortBy = ref('age')
        const sortDesc = ref(false)
        const fields = ref([
            { key: 'ip', label: 'IP Address', sortable: true },
            { key: 'client', label: 'Cliente', sortable: true },
        ]) 
        const items = ref( [
            { ip: '400.212.121.001', client: 'Dickerson Macdonald' },
            { ip: '201.212.121.001', client: 'Larsen Shaw' },
            { ip: '809.212.121.001', client: 'Geneva Wilson' },
            { ip: '308.212.121.001', client: 'Jami Carney' }
        ])

        return {
            from,
            to,
            sortBy,
            sortDesc,
            fields,
            items,
        }
    },
})
</script>