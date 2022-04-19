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
                { Date: '3/08 12:04:43 AM 3/07', Source: 'Call Center', Type: 'Withdrawal', Description: 'Zero Balance Debit (End Week)', Amount: '1.00' },
                { Date: '3/08 12:04:43 AM 3/07', Source: 'Call Center', Type: 'Deposit', Description: 'Zero Balance Debit (End Week)', Amount: '100.00' },
                { Date: '3/08 12:04:43 AM 3/07', Source: 'Call Center', Type: 'Deposit', Description: 'Zero Balance Debit (End Week)', Amount: '3.00' },
                { Date: '3/08 12:04:43 AM 3/07', Source: 'Call Center', Type: 'Deposit', Description: 'Zero Balance Debit (End Week)', Amount: '6.00' }
            ]
		}
	},
}
</script>