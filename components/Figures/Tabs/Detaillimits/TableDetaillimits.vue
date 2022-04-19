<template>
  <div>
      <b-row>
          <b-col md="12" class="mb-1">
               <b-form inline>
                    <label class="sr-only" for="inline-form-detail-limits">Detail Limits For:</label>
                    <b-form-select
                        id="inline-form-detail-limits"
                        v-model="selected"
                        :options="options"
                        size="sm"
                        class="mr-1"
                    />
               </b-form>
          </b-col>
          <b-col cols="12" class="mb-1">
                <div class="d-flex justify-content-end">
                    <b-button class="mr-1" size="sm" variant="danger">Remove All Values</b-button>
                    <b-button class="mr-1" size="sm" variant="success">Refresh</b-button>
                    <b-button class="mr-1" size="sm" variant="success">Submit</b-button>
                </div>
          </b-col>
          <b-col cols="12">
            <b-table
                striped
                hover
                :items="items"
                :fields="fields"
                :tbody-tr-class="rowClass"
            >
                <template #cell(callCenter)="data">
                    <b-form-input
                        size="sm"
                        class="w-50"
                        v-model="data.value"
                        type="number"
                    />
                </template>
                <template #cell(internet)="data">
                    <b-form-input
                        size="sm"
                        class="w-50"
                        v-model="data.value"
                        type="number"
                    />
                </template>
                <template #cell(circled)="data">
                    <b-form-input
                        size="sm"
                        class="w-50"
                        v-model="data.value"
                        type="number"
                    />
                </template>
            </b-table>
          </b-col>
      </b-row>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        selected: null,
        options: [
            { value: null, text: 'Please select an option' },
            { value: 'a', text: 'This is First option' },
            { value: 'b', text: 'Selected Option' },
            { value: { C: '3PO' }, text: 'This is an option with object value' },
            { value: 'd', text: 'This one is disabled', disabled: true }
        ],
        fields: [
            {
                label: 'Sport',
                key: 'sport',
                sortable: false
            },
            {
                label: 'Period',
                key: 'period',
                sortable: false
            },
            {
                label: 'Wager Target',
                key: 'wagerTarget',
                sortable: false
            },
            {
                label: 'Call Center',
                key: 'callCenter',
                sortable: false
            },
            {
                label: 'Internet',
                key: 'internet',
                sortable: false
            },
            {
                label: 'Circled',
                key: 'circled',
                sortable: false
            },
        ],
        items: [
            { sport: 'Set All Value', period: 'REMOVE', wagerTarget: '', callCenter: '', internet: '', circled: '', age: '' },
            {
                sport: 'Australia Football',
                period: 'Game',
                wagerTarget: 'PS',
                callCenter: '9000',
                internet: '9000',
                circled: '0',
                age: '0',
            },
            {

                sport: 'Australia Football',
                period: '1st Half',
                wagerTarget: 'PS',
                callCenter: '9000',
                internet: '9000',
                circled: '0',
                age: '0',
            },
            {
                sport: 'Australia Football',
                period: '2nd Half',
                wagerTarget: 'PS',
                callCenter: '9000',
                internet: '9000',
                circled: '0',
                age: '0',
            },
            {
                sport: 'Australia Football',
                period: 'Quarters',
                wagerTarget: 'PS',
                callCenter: '9000',
                internet: '9000',
                circled: '0',
                age: '0',
            },
        ]
      }
    },
    methods: {
      rowClass(item, type) {
        console.log(item, type);
        if (!item || type !== 'row') return ''
        switch (item.period) {
            case 'Game':
                return ''
            break;
            case '1st Half':
                return 'table-primary'
            break;
            case '2st Half':
                return 'table-success'
            break;
            case 'Quarters':
                return 'table-warning'
            break;
            case 'REMOVE':
                return 'table-danger'
            break;
            default:
                return ''
            break;
        }
      }
    }
  }
</script>