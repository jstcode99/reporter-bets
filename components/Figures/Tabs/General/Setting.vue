<template>
	<table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
		<thead>
			<tr class="CPHeader">
				<th colspan="2">Setting</th>
			</tr>
			<tr>
				<th>
					<b-form inline>
						<span class="mr-2" style="font-size: 12px; color: #000000;">Password:</span>
						<b-form-input
							id="inline-form-password"
							class="mb-2 mr-sm-2 mb-sm-0 w-75"
							placeholder="123456"
							type="password"
							size="sm"
						>
						</b-form-input>
    				</b-form>
				</th>
				<th>
					<b-form inline>
        				<b-form-checkbox class="mb-2 mr-sm-2 mb-sm-0" size="sm" style="font-size: 12px; color: #000000;">Password required to confirm</b-form-checkbox>
    				</b-form>
				</th>
			</tr>
		</thead>
	</table>
</template>