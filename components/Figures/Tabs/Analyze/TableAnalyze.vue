<template>
  <div class="w-100 p-2 m-2">
    <b-form inline class="p-2">
        <b-form-select
            id="inline-form-display"
            v-model="selected"
            :options="options"
            size="sm"
            class="mr-1"
        />
    </b-form>
    <b-table
        striped
        small
        hover
        class="p-2 m-2"
        :items="items"
    />
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: [
          { Riskt: 'Macdonald ............', Win: 40, Result: 0, Selection: '...', Line: '...', ClosingLine: '...', LineDifferencie: '...', OddsDiference: '...' },
        ],
        selected: null,
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option' },
          { value: { C: '3PO' }, text: 'This is an option with object value' },
          { value: 'd', text: 'This one is disabled', disabled: true }
        ]
      }
    }
  }
</script>