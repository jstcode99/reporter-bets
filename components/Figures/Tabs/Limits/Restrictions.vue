<template>
	<table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
		<thead>
			<tr class="CPHeader">
				<th colspan="2">Restrictions</th>
			</tr>
			<tr>
				<th>
					Straight Early Limit:
				</th>
				<th>
					<b-form inline>
                        <b-form-input
                            id="inline-form-straight-early-limit"
                            class="mb-2 mr-sm-2 mb-sm-0"
                            size="sm"
                            type="text"
                        >
                        </b-form-input>
                        <label class="mr-sm-2" for="inline-form-straight-early-limit">Ultil</label>
                        <b-form-input
                            id="inline-form-hours-before-post"
                            class="mb-2 mr-sm-2 mb-sm-0"
                            size="sm"
                            type="text"
                        >
                        </b-form-input>
                        <label class="mr-sm-2" for="inline-form-hours-before-post">Hours before post</label>
                    </b-form>
				</th>
			</tr>
            <tr>
                <th>
					Overnight Limit:
				</th>
				<th>
                    <b-form inline>
                        <b-form-input
                            id="inline-form-overnight-limit"
                            class="mb-2 mr-sm-2 mb-sm-0"
                            size="sm"
                            type="text"
                        >
                        </b-form-input>
                        12 AM CT to 6 AM CT
                    </b-form>
				</th>                
            </tr>
            <tr>
                <th>
					Max Contest Payout:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-max-contest-payout"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
				</th>
            </tr>
            <tr>
                <th>
					Max Contest Odds:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-max-contest-odds"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
				</th>                
            </tr>
            <tr>
                <th>
					Min Contest Odds:
				</th>
				<th>
                    <b-form-input
                        id="inline-form-min-contest-odds"
                        class="mb-2 mr-sm-2 mb-sm-0"
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