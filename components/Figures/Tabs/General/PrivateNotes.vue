<template>
	<table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
		<thead>
			<tr class="CPHeader">
				<th colspan="2">Private Notes</th>
			</tr>
			<tr>
				<th>
					<p class="mr-2" style="font-size: 12px; color: #000000;">Private Notes:(Customers do not see this)</p>
				</th>
				<th>
					<b-form-textarea
                        id="textarea"
                        v-model="text"
                        rows="3"
                        size="sm"
                    />
				</th>
			</tr>
		</thead>
	</table>
</template>
<script>
export default {
    data() {
        return {
            text: ''
        }
    },
}
</script>