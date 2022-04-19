<template>
    <b-row>
        <b-col cols="6">
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="accounts-history-table"
            />
            <p>
                <span class="mr-5">
                    <b>Agente:</b> AGENT
                </span>
                <span>
                    <b>Balance:</b> AGENT
                </span>
            </p>
            <b-input-group size="sm" prepend="search" class="mb-2">
                <b-form-input></b-form-input>
            </b-input-group>
        </b-col>
        <b-col cols="12">
            <b-table
                id="accounts-history-table"
                small
                :items="items"
                :fields="fields"
                :tbody-tr-class="rowClass"
                striped
                hover
            >
                <template #cell(balance)="data">
                    <span :class="parseInt(data.value) < 0 ? 'text-danger': 'text-success ml-1'">
                        {{ data.value }}
                    </span>
                </template>
            </b-table>
            <b-pagination
                size="sm"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="perPage"
                aria-controls="accounts-history-table"
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
                { key: 'date', label: 'Date' },
                { key: 'transactions', label: 'Transactions' },
                { key: 'description' , label: 'Description' },
                { key: 'credit' , label: 'Credit' },
                { key: 'debit' , label: 'Debit' },
                { key: 'balance' , label: 'Balance' },

            ],
            items: [
                {
                    date: '03/15/21 12:06 AM (CT)',
                    transactions: 'Deposit',
                    description: 'Agent Distribution Credit (End Week)',
                    credit: '462.14',
                    debit: '0',
                    balance: '-37,613.64',
                },
                {
                    date: '03/15/21 12:06 AM (CT)',
                    transactions: 'Deposit',
                    description: 'Agent Distribution Credit (End Week)',
                    credit: '462.14',
                    debit: '0',
                    balance: '37,613.64',
                },
                {
                    date: '03/15/21 12:06 AM (CT)',
                    transactions: 'Deposit',
                    description: 'Agent Distribution Credit (End Week)',
                    credit: '462.14',
                    debit: '0',
                    balance: '-37,613.64',
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