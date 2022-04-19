<template>
    <b-row>
        <b-col cols="12">
            <b-row>
                <b-col cols="6">
                    <b-form-group label="Warger Type" v-slot="{ ariaDescribedby }">
                        <b-form-checkbox-group
                            id="wargert-type"
                            v-model="selected"
                            :options="options"
                            :aria-describedby="ariaDescribedby"
                            name="flavour-1"
                        />
                    </b-form-group>
                </b-col>
                <b-col cols="6">
                    <b-form inline class="mt-4">
                        <label for="inline-form-amount" class="mr-1">Amount higher than</label>
                        <b-form-input
                            size="sm"
                            id="inline-form-amount"
                            class="mr-sm-2 mb-sm-0"
                            type="number"
                        />
                        <b-button size="sm" variant="outline-success">Clear wargers</b-button>
                    </b-form>
                </b-col>
            </b-row>
        </b-col>
        <b-col cols="12">
            <b-table
                striped
                hover
                small
                :items="items"
                :fields="fields"
            />
        </b-col>
    </b-row>
</template>
<script>
export default {
    data() {
        return {
            selected: [], // Must be an array reference!
            options: [
                { text: 'Strights', value: 'strights' },
                { text: 'Parlays', value: 'parlays' },
                { text: 'Reverses', value: 'reverses' },
                { text: 'Teasers', value: 'teasers' },
                { text: 'If Bets', value: 'ifbets' }
            ],
            fields: [
                { key: 'customerID', label: 'Customer ID' },
                { key: 'detail', label: 'Detail' },
                { key: 'riskWin' , label: 'Risk / Win' },
                { key: 'taken' , label: 'Taken' },
                { key: 'time' , label: 'time' },
            ],
            items: [
                {
                    id: '....',
                    detail: '....',
                    riskWin: '....',
                    taken: '....',
                    time: '....',
                    _cellVariants: { customerID: 'success' }
                },
            ]
        }
    },
}
</script>