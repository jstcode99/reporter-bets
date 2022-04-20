<template>
    <b-container fluid>
        <br>
        <h6>Performance</h6>
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
            foot-clone
            foot-row-variant="warning"
        >
            <template #foot(id)>
                <span>
                    {{ total }}
                </span>
            </template>
            <template #foot(user)>
                <span>
                    Totals
                </span>
            </template>
            <template #foot(count)>
                <span>
                    {{ totalCount }}
                </span>
            </template>
            <template #foot(net)>
                <span>
                    {{ totalNet }}
                </span>
            </template>
            <template #foot(volume)>
                <span>
                    {{ totalVolume }}
                </span>
            </template>
            <template #foot(average)>
                <span>
                    {{ totalAverage }}
                </span>
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
            { key: 'id', label: '#', sortable: true },
            { key: 'user', label: 'user ID', sortable: true },
            { key: 'name', label: 'Name', sortable: true },
            { key: 'count', label: 'Count', sortable: true },
            { key: 'net', label: 'Net', sortable: true },
            { key: 'volume', label: 'Volume', sortable: true },
            { key: 'average', label: 'Average Bet', sortable: true },
        ]) 
        const items = ref( [
            {
                id: '400',
                user: 'Dickerson Macdonald',
                name: 'Dickerson',
                count: 5,
                net: 10.500,
                volume: 0.00,
                average: 0.00,
            },
            {
                id: '201',
                user: 'Larsen Shaw',
                name: 'Larsen',
                count: 5,
                net: -10.500,
                volume: 60.00,
                average: 336.00,
            },
            {
                id: '809',
                user: 'Geneva Wilson',
                name: 'Geneva',
                count: 5,
                net: 10.500,
                volume: 1.05000,
                average: 1.05000,
            },
            {
                id: '308',
                user: 'Jami Carney',
                name: 'Jami',
                count: 5,
                net: -10.500,
                volume: 0.00,
                average: 10.00,
            }
        ])

        const sumKey = (key) => {
            let sum = items.value
                .map(item => item[key])
                    .reduce((prev, curr) => parseFloat(prev) + parseFloat(curr), 0);
            return sum
        }

        const total = computed(() => items.value.length)
        const totalCount = computed(() => sumKey('count'))
        const totalNet = computed(() => sumKey('net'))
        const totalVolume = computed(() => sumKey('volume'))
        const totalAverage = computed(() => sumKey('average'))

        return {
            from,
            to,
            sortBy,
            sortDesc,
            fields,
            items,

            // totals
            sumKey,
            total,
            totalCount,
            totalNet,
            totalVolume,
            totalAverage,
        }
    },
})
</script>