<template>
    <b-container fluid>
        <br>
        <h6>Cash Flow</h6>
        <b-form inline class="mt-2 mb-3">
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
        <h6>Customer Transactions:</h6>
        <b-table
            class="p-0 m-0"
            :items="items"
            :fields="fields"
            :sort-by.sync="sortBy"
            :sort-desc.sync="sortDesc"
            bordered
            striped
            small
            responsive="sm"
            foot-clone
            foot-row-variant="warning"
        >
            <template #foot(amount)>
                <span>Total: {{ totalAmount }}</span>
            </template>
        </b-table>
    </b-container>
</template>
<script>
import { defineComponent, ref, computed } from '@nuxtjs/composition-api'

export default defineComponent({
    setup() {
        const from = ref(new Date().toLocaleString())
        const to = ref(new Date().toLocaleString())
        const sortBy = ref('age')
        const sortDesc = ref(false)
        const fields = ref([
            { key: 'user', label: 'Client Code', },
            { key: 'date', label: 'Date', },
            { key: 'type', label: 'type', },
            { key: 'description', label: 'Description', },
            { key: 'amount', label: 'Amount', },
        ]) 
        const items = ref( [
            {
                user: 'Dickerson Macdonald',
                date: new Date().toLocaleString(),
                type: 'Deposit',
                description: '.....',
                amount: 0.00,
            },
            {
                user: 'Larsen Shaw',
                date: new Date().toLocaleString(),
                type: 'Deposit',
                description: '.....',
                amount: 60.00,
            },
            {
                user: 'Geneva Wilson',
                date: new Date().toLocaleString(),
                type: 'Deposit',
                description: '.....',
                amount: 1.05000,
            },
            {
                user: 'Jami Carney',
                date: new Date().toLocaleString(),
                type: 'Deposit',
                description: '.....',
                amount: 0.00,
            }
        ])

        const sumKey = (key) => {
            let sum = items.value
                .map(item => item[key])
                    .reduce((prev, curr) => parseFloat(prev) + parseFloat(curr), 0);
            return sum
        }

        const totalAmount = computed(() => sumKey('amount'))

        return {
            from,
            to,
            sortBy,
            sortDesc,
            fields,
            items,

            // totals
            sumKey,
            totalAmount,
        }
    },
})
</script>