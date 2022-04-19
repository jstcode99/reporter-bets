<template>
    <div fluid>
        <div class="d-flex justify-content-center" style="gap:12px">
            <b-overlay :show="activePlayersShow" rounded="sm">
                <b-card
                    bg-variant="success"
                    text-variant="white"
                    header-text-variant="white"
                    footer-tag="footer"
                    footer-bg-variant="white"
                    footer-border-variant="success"
                    style="min-width: 15rem;"
                >
                    <b-card-text class="bg-success">
                        <b-row>
                            <b-col cols="3">
                                <b-icon icon="people" font-scale="3"  variant="white"></b-icon>
                            </b-col>
                            <b-col cols="9" class="mx-auto justify-content-center">
                                <h5 class="text-right mt-2">{{ activePlayers }}</h5>
                            </b-col>
                        </b-row>
                    </b-card-text>
                    <template #footer>
                        <small class="text-muted mb-0">Active players</small>
                    </template>
                </b-card>
            </b-overlay>

            <b-overlay :show="totalTodayShow" rounded="sm">
                <b-card
                    bg-variant="danger"
                    text-variant="white"
                    header-text-variant="white"
                    footer-tag="footer"
                    footer-bg-variant="white"
                    footer-border-variant="danger"
                    style="min-width: 15rem;"
                >
                    <b-card-text class="bg-danger">
                        <b-row>
                            <b-col cols="3">
                                <b-icon icon="cash-stack" font-scale="3"  variant="white"></b-icon>
                            </b-col>
                            <b-col cols="9" class="mx-auto justify-content-center">
                                <h5 class="text-right mt-2">{{ totalToday | currency }}</h5>
                            </b-col>
                        </b-row>
                    </b-card-text>
                    <template #footer>
                        <small class="text-muted mb-0">Today</small>
                    </template>
                </b-card>
            </b-overlay>

            <b-overlay :show="weeklyFiguresShow" rounded="sm">
                <b-card
                    bg-variant="danger"
                    text-variant="white"
                    header-text-variant="white"
                    footer-tag="footer"
                    footer-bg-variant="white"
                    footer-border-variant="danger"
                    style="min-width: 15rem;"
                >
                    <b-card-text class="bg-danger">
                        <b-row>
                            <b-col cols="3">
                                <b-icon icon="cash-stack" font-scale="3"  variant="white"></b-icon>
                            </b-col>
                            <b-col cols="9" class="mx-auto justify-content-center">
                                <h5 class="text-right mt-2">{{ weeklyFigures | currency }}</h5>
                            </b-col>
                        </b-row>
                    </b-card-text>
                    <template #footer>
                        <small class="text-muted mb-0">Weekly Figures</small>
                    </template>
                </b-card>
            </b-overlay>

            <b-overlay :show="deleteWagersShow" rounded="sm">
                <b-card
                    bg-variant="warning"
                    text-variant="white"
                    header-text-variant="white"
                    footer-tag="footer"
                    footer-bg-variant="white"
                    footer-border-variant="warning"
                    style="min-width: 15rem;"
                >
                    <b-card-text class="bg-warning">
                        <b-row>
                            <b-col cols="3">
                                <b-icon icon="trash" font-scale="3"  variant="white"></b-icon>
                            </b-col>
                            <b-col cols="9" class="mx-auto justify-content-center">
                                <h5 class="text-right mt-2">{{ deleteWagers }}</h5>
                            </b-col>
                        </b-row>
                    </b-card-text>
                    <template #footer>
                        <small class="text-muted mb-0">Deleted Wagers</small>
                    </template>
                </b-card>
            </b-overlay>
        </div>

        <div class="d-flex justify-content-center mt-4" style="gap:12px">
            <b-overlay :show="manualPlaysShow" rounded="sm">
                <b-card
                    border-variant="warning"
                    style="min-width: 15rem;"
                >
                    <b-card-text>
                        <b-row>
                            <b-col cols="4">
                                <div class="d-flex justify-content-center mt-3">
                                    <b-icon icon="pencil" font-scale="3"  variant="warning"></b-icon>
                                </div>
                            </b-col>
                            <b-col cols="8" class="mx-auto">
                                <b-row>
                                    <b-col cols="12" class="mx-auto">
                                        <h6 class="text-center">Manual Plays</h6>
                                        <hr>
                                    </b-col>
                                    <b-col cols="12" class="mx-auto">
                                        <div class="d-flex justify-content-center">
                                            <div class="mr-4 d-flex flex-column justify-content-center">
                                                <h6>Pending</h6>
                                                <p class="text-center mb-0">{{ manualPlays.pending }}</p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6>Graded</h6>
                                                <p class="text-center mb-0">{{ manualPlays.graded }}</p>
                                            </div>
                                        </div>
                                    </b-col>
                                </b-row>
                            </b-col>
                        </b-row>
                    </b-card-text>
                </b-card>
            </b-overlay>

            <b-card
                bg-variant="success"
                text-variant="white"
                header-text-variant="white"
                footer-tag="footer"
                footer-bg-variant="white"
                footer-border-variant="success"
                style="min-width: 15rem;"
            >
                <b-card-text class="bg-success">
                    <b-row>
                        <b-col cols="8">
                            <b-icon icon="person-x" font-scale="3"  variant="white"></b-icon>
                        </b-col>
                        <b-col cols="4" class="mx-auto">
                            <h2>0</h2>
                        </b-col>
                    </b-row>
                </b-card-text>
                <template #footer>
                    <small class="text-muted mb-0">Accounts Closed</small>
                </template>
            </b-card>
        </div>

        <div class="d-flex justify-content-center mt-4" style="gap:12px">
            <b-card header-tag="header" style="min-width: 40%;">
                <template #header>
                    <b-icon icon="people" font-scale="2"  variant="success"></b-icon>
                </template>
                <b-card-text>
                    <h6>Recent Logins</h6>
                    <hr>
                    <b-table :items="items" :fields="fields" />
                </b-card-text>
            </b-card>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            activePlayersShow: true,
            totalTodayShow: true,
            weeklyFiguresShow: true,
            deleteWagersShow: true,
            manualPlaysShow: true,

            activePlayers: 0,
            totalToday: 0,
            weeklyFigures: 0,
            deleteWagers: 0,
            manualPlays: {
                pending: 0,
                graded: 0
            },
            fields: [
                { key: 'datetime', label: 'Date / Time' },
                { key: 'ipaddress', label: 'IP Address' },
            ],
            items: [
                { datetime: 'April 04 14:58:33 PM', ipaddress: 'Dickerson'},
                { datetime: 'April 04 14:58:33 PM', ipaddress: 'Larsen'},
                { datetime: 'April 04 14:58:33 PM', ipaddress: 'Geneva'}
            ]
        }
    },
    filters: {
        currency: value => {
            return '€' + parseFloat(value).toFixed(2);
        }
    },
    methods: {
        async getData() {
            const [activePlayers, totalToday, weeklyFigures, deleteWagers, manualPlays] = await Promise.all([ 
                this.$axios.$get('active-players'),
                this.$axios.$get('total-today'),
                this.$axios.$get('weekly-figures'),
                this.$axios.$get('delete-wagers'),
                this.$axios.$get('manual-plays')
            ])
            if(activePlayers) this.activePlayersShow = !this.activePlayersShow
            this.activePlayers = activePlayers
            if(totalToday) this.totalTodayShow = !this.totalTodayShow
            this.totalToday = totalToday
            if(weeklyFigures) this.weeklyFiguresShow = !this.weeklyFiguresShow
            this.weeklyFigures = weeklyFigures
            if(deleteWagers) this.deleteWagersShow = !this.deleteWagersShow
            this.deleteWagers = deleteWagers
            if(manualPlays) this.manualPlaysShow = !this.manualPlaysShow
            this.manualPlays = manualPlays
        }
    },
    mounted() {
        this.getData()
    },
}
</script>
