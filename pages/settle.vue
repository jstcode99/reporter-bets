<template>
  <b-container fluid>
    <b-form inline class="mt-2 mb-3">
        <b-input-group class="mt-3">
            <b-form-select
                id="inline-form-display"
                v-model="selected"
                :options="options"
                size="sm"
                class="mr-1"
            />
            <b-input-group-append>
                <b-button size="sm" variant="secondary">Last Week</b-button>
                <b-button size="sm" variant="danger">Current Week</b-button>
            </b-input-group-append>
        </b-input-group>
    </b-form>
    <b-pagination
        size="sm"
        v-model="currentPage"
        :total-rows="rows"
        :per-page="perPage"
        aria-controls="my-table"
    />
    <b-table
        striped
        small
        hover
        class="p-2 m-2"
        :items="items"
    />
    <b-row>
        <b-col cols="12" class="d-flex justify-content-center">
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="my-table"
            />
        </b-col>
    </b-row>
  </b-container>
</template>

<script>
import { defineComponent, ref } from '@nuxtjs/composition-api'

export default defineComponent({
    setup() {
        const currentPage = ref(0)
        const rows = ref(5)
        const perPage = ref(5)
        const fields = ref([
            { key: 'user', label: 'User ID', sortable: true },
            { key: 'name', label: 'Name', sortable: true },
            { key: 'settle', label: 'Settle Figure', sortable: true },
            { key: 'settled', label: 'Settled', sortable: true },
        ])
        const items = ref([
            {
                user: '....',
                name: '....',
                settle: '....',
                settled: '....',
            },
        ])
        const selected = ref(null)
        const options = ref([
            { value: null, text: 'Current Week' },
            { value: 'a', text: 'This is First option' },
            { value: 'b', text: 'Selected Option' },
            { value: { C: '3PO' }, text: 'This is an option with object value' },
            { value: 'd', text: 'This one is disabled', disabled: true }
        ])

        return {
            currentPage,
            rows,
            perPage,
            fields,
            items,
            selected,
            options,
        }
    }
})
</script>