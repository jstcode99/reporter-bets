<template>
    <b-container fluid>
        <b-row>
            <b-col cols="12" class="mb-3">
                <h5>Position Report</h5>
            </b-col>
            <b-col cols="12" class="mb-2">
                <b-form inline class="p-2 float-right">
                    <b-input-group prepend="Sort By" size="sm">
                        <b-form-select
                            id="inline-form-sort-by"
                            v-model="selected"
                            :options="options"
                            size="sm"
                            class="mr-1"
                        />
                    </b-input-group>
                    <b-input-group prepend="Graded games" size="sm">
                        <b-form-select
                            id="inline-form-graded-games"
                            v-model="selected"
                            :options="options"
                            size="sm"
                            class="mr-1"
                        />
                        <b-input-group-append>
                            <b-button size="sm" variant="secondary">Show Count</b-button>
                        </b-input-group-append>
                    </b-input-group>
                </b-form>
            </b-col>
            <b-col cols="12">
                <b-tabs content-class="mt-3">
                    <b-tab title="Today" active>
                        <PositionTabsTodayTableToday />
                    </b-tab>
                    <b-tab title="Games">
                        <PositionTabsGamesTableGames />
                    </b-tab>
                    <b-tab title="Contest">
                        <PositionTabsContestTableContest />
                    </b-tab>
                    <b-tab title="Live Sports">
                        <PositionTabsLiveSportsTableLiveSports />
                    </b-tab>
                </b-tabs>
            </b-col>
            <b-col cols="12">
                <b-form class="p-2">
                    <b-form-checkbox
                        v-model="status"
                        name="checkbox-1"
                    >
                        Show Percentage
                    </b-form-checkbox>
                    <b-button class="float-right" size="sm" variant="secondary">
                        PDF
                    </b-button>
                </b-form>
            </b-col>
        </b-row>
    </b-container>
</template>
<script>
export default {
    data() {
        return {
            status: false,
            selected: null,
            options: [
                { value: null, text: 'Rotation' },
                { value: 'a', text: 'This is First option' },
                { value: 'b', text: 'Selected Option' },
                { value: { C: '3PO' }, text: 'This is an option with object value' },
                { value: 'd', text: 'This one is disabled', disabled: true }
            ]
        }
    },
}
</script>