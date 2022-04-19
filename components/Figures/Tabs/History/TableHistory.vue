<template>
  <div class="w-100 p-2 m-2">
    <b-form inline class="p-2">
        <label class="mr-3">History:</label>
        <b-button size="sm" variant="secondary" class="mr-1">
            Football
        </b-button>
        <b-button size="sm" variant="secondary" class="mr-1">
            Monthly
        </b-button>
        <b-button size="sm" variant="danger" class="mr-1">
            Year
        </b-button>
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
        fields: [
          {
            key: 'year',
            label: '',
            sortable: true
          },
          {
            key: 'WonLost',
            label: 'Won/Lost',
            sortable: false
          },
          {
            key: 'wagers',
            label: '# of Wagers',
            sortable: true,
          },
          {
            key: 'Average Bet',
            label: 'AverageBet',
            sortable: true,
          },
          {
            key: 'Hold',
            label: 'Hold %',
            sortable: true,
          }
        ],
        items: [
            { year: '2016', WonLost: '-10,086.55', wagers: '129', Average: '255.22', Hold: '26.20' },
            { year: '2016', WonLost: '-10,086.55', wagers: '129', Average: '255.22', Hold: '26.20' },
            { year: '2016', WonLost: '-10,086.55', wagers: '129', Average: '255.22', Hold: '26.20' },
            { year: '2016', WonLost: '-10,086.55', wagers: '129', Average: '255.22', Hold: '26.20' },
        ],
      }
    }
  }
</script>