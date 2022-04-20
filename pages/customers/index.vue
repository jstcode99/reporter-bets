<template>
    <b-row>
        <b-col cols="8">
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="pending-list"
            />
            <b-input-group size="sm" prepend="search" class="mb-2">
                <b-form-input></b-form-input>
            </b-input-group>
        </b-col>
        <b-col cols="4">
            <b-button size="sm" variant="secondary" class="mt-5 float-right">
                <b-icon icon="gear"></b-icon>
                Settings
            </b-button>
        </b-col>
        <b-col cols="12">
            <b-table
                id="pending-list"
                small
                :items="items"
                :fields="fields"
                :tbody-tr-class="rowClass"
                striped
                hover
            />
        </b-col>
        <b-col cols="12" class="d-flex justify-content-center">
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="pending-list"
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
            fields: [
                { key: 'id', label: 'User ID' },
                { key: 'name', label: 'Name' },
                { key: 'password' , label: 'Password' },
                { key: 'settle' , label: 'Settle' },
                { key: 'balance' , label: 'Balance' },
                { key: 'status' , label: 'Status Op/Clo' },
                { key: 'sport' , label: 'Sport CC Int Live' },
                { key: 'horses' , label: 'Horses CC Int' },
                { key: 'casino' , label: 'Casino Reg  Live' },
                { key: 'temp' , label: 'Temp Credit' },
                { key: 'FP' , label: 'FP Balance' },
                { key: 'CC' , label: 'CC Limit' },
                { key: 'int' , label: 'Int Limit' },
                { key: 'pending' , label: 'Pending' },
                { key: 'last' , label: 'Last Wager' },
                { key: 'rating' , label: 'Rating' },
                { key: 'credit' , label: 'Credit' },
                { key: 'mobile' , label: 'Mobile' },

            ],
            items: [
                {
                    id: '....',
                    name: '....',
                    password: '....',
                    settle: '....',
                    balance: '....',
                    status: '....',
                    sport: '....',
                    horses: '....',
                    casino: '....',
                    temp: '....',
                    FP: '....',
                    CC: '....',
                    int: '....',
                    pending: '....',
                    last: '....',
                    rating: '....',
                    credit: '....',
                    mobile: '....',
                },
                {
                    id: '....',
                    name: '....',
                    password: '....',
                    settle: '....',
                    balance: '....',
                    status: '....',
                    sport: '....',
                    horses: '....',
                    casino: '....',
                    temp: '....',
                    FP: '....',
                    CC: '....',
                    int: '....',
                    pending: '....',
                    last: '....',
                    rating: '....',
                    credit: '....',
                    mobile: '....',
                },
                {
                    id: '....',
                    name: '....',
                    password: '....',
                    settle: '....',
                    balance: '....',
                    status: '....',
                    sport: '....',
                    horses: '....',
                    casino: '....',
                    temp: '....',
                    FP: '....',
                    CC: '....',
                    int: '....',
                    pending: '....',
                    last: '....',
                    rating: '....',
                    credit: '....',
                    mobile: '....',
                },
            ]
        }
    },
    computed: {
      rows() {
        return this.items.length
      }
    },
    methods: {
        rowClass(item, type) {
            if (!item || type !== 'row') return ''
            switch (item.id) {
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