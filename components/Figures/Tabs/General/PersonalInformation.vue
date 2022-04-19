<template>
	<table class="CPMainTable w-100">
		<thead>
			<tr class="CPHeader">
				<th colspan="2">Personal Information</th>
			</tr>
			<tr>
				<th>
					Name:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-name"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
					Referred By:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-referby"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
					Home:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-home"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
				    Mobile:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-mobile"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
					Email:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-email"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="email"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
					Wager Alerts:
				</th>
				<th>
					<b-form inline>
						<b-form-input
							id="inline-form-wager-alerts"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
						>
						</b-form-input>
    				</b-form>
				</th>
			</tr>
            <tr>
				<th>
					Rating:
				</th>
				<th>
					<b-form inline>
                        <b-form-select 
                            id="inline-form-rating"
							class="mb-2 mr-sm-2 mb-sm-0 w-100"
                            size="sm"
							type="text"
                            v-model="selected"
                            :options="options"
                        >

                        </b-form-select>
    				</b-form>
				</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</template>
<script>
export default {
    data() {
        return {
            selected: null,
            options: [
            { value: null, text: 'Please select an option' },
            { value: 'a', text: 'This is First option' },
            { value: 'b', text: 'Selected Option' },
            { value: { C: '3PO' }, text: 'This is an option with object value' },
            { value: 'd', text: 'This one is disabled', disabled: true }
            ]
        }
    },
}
</script>