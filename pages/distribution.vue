<template>
  <b-container fluid>
    <b-form inline class="p-2">
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
    <b-pagination
        size="sm"
        v-model="currentPage"
        :total-rows="rows"
        :per-page="perPage"
        aria-controls="my-table"
    />
  </b-container>
</template>

<script>
  export default {
    data() {
      return {
        currentPage: 0,
        rows: 5,
        perPage: 5,
        items: [
          { Agent: 'Macdonald ............', Anithing: '',  AnithingTwo: '', AnithingThree: '',},
        ],
        selected: null,
        options: [
          { value: null, text: 'Current Week' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option' },
          { value: { C: '3PO' }, text: 'This is an option with object value' },
          { value: 'd', text: 'This one is disabled', disabled: true }
        ]
      }
    }
  }
</script>