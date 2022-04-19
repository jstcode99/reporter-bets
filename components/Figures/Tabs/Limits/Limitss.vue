<template>
	<table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
		<thead>
			<tr class="CPHeader">
				<th colspan="2">Limits</th>
			</tr>
			<tr>
				<th>
					Credit Limit:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-credit-limit"
                        class="mb-2 mr-sm-2 mb-sm-0 w-100"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
				</th>
			</tr>
            <tr>
                <th>
					Temp Credit:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-temp-credit"
                        class="mb-2 mr-sm-2 mb-sm-0 w-100"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
				</th>                
            </tr>
            <tr>
                <th>
					Until:
				</th>
				<th>
                    <b-form-datepicker id="inline-form-until" v-model="value" size="sm"></b-form-datepicker>
				</th>
            </tr>
            <tr>
                <th>
					Settle:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-settle"
                        class="mb-2 mr-sm-2 mb-sm-0 w-100"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
				</th>                
            </tr>
		</thead>
	</table>
</template>
<script>
export default {
    data() {
        return {
            value: ''
        }
    },
}
</script>