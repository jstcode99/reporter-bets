<template>
	<table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
		<thead>
			<tr class="CPHeader">
				<th colspan="5">General Limit</th>
			</tr>

			<tr>
				<th>
				</th>
                <th class="text-center">
					<span class="mr-2 text-12">Min:</span>
				</th>
                <th class="text-center">
					<span class="mr-2 text-12">Max:</span>
				</th>
                <th class="text-center">
					<span class="mr-2 text-12">Factor:</span>
				</th>
                <th class="text-center">
					<span class="mr-2 text-12">Per Game</span>
				</th>
			</tr>

            <tr>
                <th>
                    All
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-all"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-all"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-factor-all"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-per-game-all"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
            </tr>

            <tr>
                <th>
                    Straight
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-straight"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-straight"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-factor-straight"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-per-game-straight"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
            </tr>

            <tr>
                <th>
                    Live Sports
                </th>
                <th class="bg-light">
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-live-sports"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th class="bg-light">
                </th>
                <th class="bg-light">
                </th>
            </tr>

            <tr>
                <th>
                    Parlay
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-parlay"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-parlay"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-factor-parlay"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-per-game-parlay"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
            </tr>

            <tr>
                <th>
                    Teaser
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-teaser"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-teaser"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-factor-teaser"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-per-game-teaser"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
            </tr>

            <tr>
                <th>
                    IfBet
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-ifBet"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-ifBet"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-factor-ifBet"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-per-game-ifBet"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
            </tr>

            <tr>
                <th>
                    Horses
                </th>
                <th>
                    <b-form-input
                        id="inline-form-min-horses"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th>
                    <b-form-input
                        id="inline-form-max-horses"
                        class="mb-2 mr-sm-2 mb-sm-0"
                        size="sm"
                        type="text"
                    >
                    </b-form-input>
                </th>
                <th class="bg-light">
                </th>
                <th class="bg-light">
                </th>
            </tr>
		</thead>
	</table>
</template>