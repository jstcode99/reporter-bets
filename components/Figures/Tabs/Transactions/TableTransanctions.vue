<template>
    <b-table
		striped
		small
		bordered
		head-variant="light"
		:items="items"
	/>
</template>
<script>
export default {
	data() {
		return {
			items: [
                { Actions: 40, Date: '3/08 12:04:43 AM 3/07', Description: 'Zero Balance Debit (End Week)', Source: 'Call Center', Type: 'Withdrawal', Amount: '1.00' },
                { Actions: 21, Date: '3/08 12:04:43 AM 3/07', Description: 'Zero Balance Debit (End Week)', Source: 'Call Center', Type: 'Deposit', Amount: '100.00' },
                { Actions: 89, Date: '3/08 12:04:43 AM 3/07', Description: 'Zero Balance Debit (End Week)', Source: 'Call Center', Type: 'Deposit', Amount: '3.00' },
                { Actions: 38, Date: '3/08 12:04:43 AM 3/07', Description: 'Zero Balance Debit (End Week)', Source: 'Call Center', Type: 'Deposit', Amount: '6.00' }
            ]
		}
	},
}
</script>