<template>
    <b-row>
        <b-col cols="12">
            <b-form inline>
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
                <b-form-input class="ml-5" size="sm" placeholder="Min Amount" />
            </b-form>
        </b-col>
        <b-col cols="8">
            <b-pagination
                class="mt-2"
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="pending-table"
            />
            <b-input-group size="sm" prepend="search" class="mb-2">
                <b-form-input />
            </b-input-group>
        </b-col>
        <b-col cols="12">
            <b-table
                id="pending-table"
                small
                :items="items"
                :fields="fields"
                :tbody-tr-class="rowClass"
                striped
                hover
            />
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="pending-table"
            />
        </b-col>
    </b-row>
</template>
<script>
export default {
    data() {
        return {
            perPage: 3,
            currentPage: 1,
            buttons: [
                { caption: 'Games', state: false },
                { caption: 'Contest', state: false },
                { caption: 'Hourser', state: false },
                { caption: 'Open', state: false },
                { caption: 'Free', state: false },
                { caption: 'Live', state: false },
            ],
            fields: [
                { key: 'anything1', label: 'Anything 1' },
                { key: 'anything2', label: 'Anything 2' },
                { key: 'anything3' , label: 'Anything 3' },
                { key: 'anything4' , label: 'Anything 4' },
            ],
            items: [
                {
                    anything1: '....',
                    anything2: '....',
                    anything3: '....',
                    anything4: '....',
                },
            ],
        }
    },
    computed: {
      rows() {
        return this.items.length
      }
    },
}
</script>