<template>
  <div class="w-100 p-2 m-2">
    <b-form inline class="p-2">
        <label for="inline-form-display text-12" class="mr-1">
            <small>Display: </small>
        </label>
        <b-form-select
            id="inline-form-display"
            v-model="selected"
            :options="options"
            size="sm"
            class="mr-1"
        />
        <b-button
            variant="success"
            size="sm"
            class="mr-5"
        >
            Load
        </b-button>
    
        <b-input-group prepend="Search" class="mb-2 mr-sm-2 mb-sm-0 mr-1" size="sm">
            <b-form-input
                id="inline-form-search"
                placeholder="search"
                size="sm"
            />
        </b-input-group>
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
          { description: 'Macdonald ............', RiskWin: 40 },
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