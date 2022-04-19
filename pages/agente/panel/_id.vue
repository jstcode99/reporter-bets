<template>
    <div>
        <b-row>
            <b-col class="border bg-light p-2 mb-1">
                <h6>GANATEST</h6>
            </b-col>
            <b-col class="border bg-light p-2 mb-1">
                <h6>Balance: <span class="text-danger">-2,000.00</span></h6>
            </b-col>
            <b-col class="border bg-light p-2 mb-1">
                <h6>Agente: <span class="text-dark">AGENTTEST1</span></h6>
            </b-col>
            <b-col class="border bg-light p-2 mb-1">
                <h6>Pending: <span class="text-dark">0.00</span></h6>
            </b-col>
        </b-row>
        <b-tabs content-class="mt-3">
            <b-tab title="General" active>
                <b-row>
                    <b-col md="6">
                        <b-row>
                            <b-col md="12">
                                <FiguresTabsGeneralSetting />
                            </b-col>
                            <b-col md="12">
                                <FiguresTabsGeneralPersonalInformation />
                            </b-col>
                            <b-col md="12">
                                <FiguresTabsGeneralPrivateNotes />
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col md="6">
                        <b-col md="12">
                            <FiguresTabsGeneralAccoutAccess />
                        </b-col>
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="Limits">
                <b-row>
                    <b-col md="6">
                        <b-row>
                            <b-col md="12">
                                <FiguresTabsLimitsLimitss />
                            </b-col>
                            <b-col md="12">
                                <FiguresTabsLimitsRestrictions />
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col md="6">
                        <b-col md="12">
                            <FiguresTabsLimitsGeneralLimit />
                        </b-col>
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="Wagers">
                <b-row>
                    <FiguresTabsWagersTableWagers />
                </b-row>
            </b-tab>
            <b-tab title="Pending">
                <b-row>
                    <FiguresTabsPendingTablePending />
                </b-row>
            </b-tab>
            <b-tab title="Transactions">
                <b-row>
                    <b-col md="12">
                        <FiguresTabsTransactionsFormTransactions />
                    </b-col>
                    <b-col md="12">
                        <FiguresTabsTransactionsTableTransanctions />
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="History">
                <b-row>
                    <b-col md="12">
                        <FiguresTabsHistoryTableHistory />
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="Notifications">
                <b-row>
                    <b-col md="12">
                        <FiguresTabsNotificationsFormNotifications />
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="Free Play">
                <b-row>
                    <b-col md="12">
                        <FiguresTabsFreePlayFormFreePlay />
                    </b-col>
                    <b-col md="12">
                        <FiguresTabsFreePlayTableFreePlay />
                    </b-col>
                </b-row>
            </b-tab>
            <b-tab title="Detail limits">
                <FiguresTabsDetaillimitsTableDetaillimits />
            </b-tab>
            <b-tab title="Analyze">
                <FiguresTabsAnalyzeTableAnalyze />
            </b-tab>
        </b-tabs>
    </div>
</template>