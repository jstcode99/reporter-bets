<template>
  <b-row>
        <b-col cols="6">
                <b-button-group size="sm">
                    <b-button
                        v-for="(btn, idx) in buttons"
                        :key="idx"
                        :pressed.sync="btn.state"
                        :variant="btn.state ? 'danger' : 'secondary'"
                    >
                        {{ btn.caption }}
                    </b-button>
                </b-button-group>
        </b-col>
        <b-col cols="6">
            <b-button-group size="sm">
                <b-button
                    v-for="(btn, idx) in buttons2"
                    :key="idx"
                    :pressed.sync="btn.state"
                    :variant="btn.state ? 'danger' : 'secondary'"
                >
                    {{ btn.caption }}
                </b-button>
            </b-button-group>
        </b-col>
        <b-col cols="12">
            <b-form inline class="p-2">
                <b-form-checkbox
                    v-model="status"
                    class="mr-2"
                >
                    Show Percentage
                </b-form-checkbox>
                <b-button variant="warning" size="sm">
                    Display all
                </b-button>
            </b-form>
        </b-col>
        <b-col cols="12">
            <b-table
                :items="items"
                :fields="fields"
                small
                head-variant="dark"
            />
        </b-col>
  </b-row>
</template>

<script>
  export default {
    data() {
      return {
        buttons: [
          { caption: 'Football', state: true },
          { caption: 'BaseBall', state: false },
          { caption: 'BasketBall', state: false },
          { caption: 'Hockey', state: false },
          { caption: 'Soccer', state: false },
          { caption: 'Soccer - Minor', state: false },
          { caption: 'Other', state: false },
        ],
        buttons2: [
          { caption: 'Game', state: true },
          { caption: '1st Halft', state: false },
          { caption: '2end Halft', state: false },
          { caption: 'Quarters', state: false },
        ],
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
    },
  }
</script>