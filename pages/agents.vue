<template>
    <b-container fluid>
        <h6>Agents</h6>
        <b-row>
            <b-col cols="12">
                <b-form inline>
                    <b-input-group prepend="Search" size="sm">
                        <b-form-input
                            id="inline-form-search"
                            placeholder="search"
                            size="sm"
                        />
                    </b-input-group>
                </b-form>
            </b-col>
            <b-col cols="12">
                <b-table
                    class="pt-2"
                    :items="items"
                    :fields="fields"
                    bordered
                    striped
                    small
                    responsive="sm"
                >
                    <template #cell(id)="data">
                        <b-button
                            size="sm"
                        >
                            Open ({{ data.value }})
                        </b-button>
                    </template>
                </b-table>
            </b-col>
        </b-row>
    </b-container>
</template>
<script>
import { defineComponent, ref } from '@vue/composition-api'

export default defineComponent({
    setup() {
        const fields = ref([
            { key: 'agent', label: 'Agent ID', },
            { key: 'name', label: 'Name', },
            { key: 'balance', label: 'Balance', },
            { key: 'id', label: 'Select Agent', },
        ]) 
        const items = ref( [
            {
                id: 1,
                agent: 'Dickerson Macdonald',
                name: 'Dickerson',
                balance: 0.00,
            },
            {
                id: 2,
                agent: 'Larsen Shaw',
                name: 'Larsen',
                balance: 336.00,
            },
            {
                id: 3,
                agent: 'Geneva Wilson',
                name: 'Geneva',
                balance: 1.05000,
            },
            {
                id: 4,
                agent: 'Jami Carney',
                name: 'Jami',
                balance: 10.00,
            }
        ])

        return {
            fields,
            items,
        }
    },
})
</script>
