<template>
    <div>
        <b-table
            :items="items"
            :fields="fields"
            small
            head-variant="dark"
        />
    </div>
</template>

<script>
  export default {
    data() {
      return {
        fields: [
          { key: 'Date', label: 'Date' },
          { key: 'Rotation', label: 'Rotation' },
          { key: 'Game', label: 'Game' },
          { key: 'Straight', label: 'Straight' },
          { key: 'Parlay', label: 'Parlay' },
          { key: 'Teaser', label: 'Teaser'  }
        ],
        items: [
          { Date: new Date().toLocaleString(), Rotation: 'Dickerson', Game: 'Macdonald',  Straight: '...', Parlay: '...', Teaser: '...' },
          { Date: new Date().toLocaleString(), Rotation: 'Larsen', Game: 'Shaw',  Straight: '...', Parlay: '...', Teaser: '...' },
          { Date: new Date().toLocaleString(), Rotation: 'Geneva', Game: 'Wilson',  Straight: '...', Parlay: '...', Teaser: '...' },
          { Date: new Date().toLocaleString(), Rotation: 'Jami', Game: 'Carney',  Straight: '...', Parlay: '...', Teaser: '...' }
        ]
      }
    }
  }
</script>