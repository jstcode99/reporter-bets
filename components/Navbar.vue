<template>
    <div>
        <b-navbar toggleable="sm" type="light" variant="light">
            <b-navbar-toggle target="nav-text-collapse">
            </b-navbar-toggle>
            <b-navbar-brand>
                <b-button v-b-toggle.menu-sidebar-page variant="link" class="text-muted">
                    <b-icon icon="list" scale="1.5" />
                </b-button>
            </b-navbar-brand>

            <b-collapse id="nav-text-collapse" is-nav>
                <b-navbar-nav>
                </b-navbar-nav>
                <b-navbar-nav class="ml-auto">
                    <b-nav-item
                        v-for="(nav, index) in navMenu"
                        :key="index"
                        exact-active-class="text-dark"
                        :to="{ path: nav.path}"
                    >
                        <b-icon :icon="nav.icon" /> {{nav.text}}
                    </b-nav-item>
                    <b-nav-form>
                        <b-form-input
                            size="sm"
                            class="mr-sm-2"
                            placeholder="Search"
                        />
                        <b-form-select
                            v-model="selected"
                            :options="options"
                            size="sm"
                        />
                    </b-nav-form>
                    <b-nav-item class="ml-1 mr-1 text-center">
                        <p class="text-success m-0" style="font-weight: 700;">
                            <small class="text-dark">BALANCE</small>
                            / 10,064.52
                        </p>
                    </b-nav-item>
                    <b-nav-item class="ml-1 mr-1" exact-active-class="text-dark">
                        <b-icon icon="envelope" scale="1"/>
                    </b-nav-item>
                    <b-nav-item-dropdown right no-caret>
                        <!-- Using 'button-content' slot -->
                        <template #button-content>
                            <b-icon icon="three-dots-vertical" />
                        </template>
                        <b-dropdown-item to="#">
                            <b-icon icon="gear" scale="0.8" /> Settings 
                        </b-dropdown-item>
                        <b-dropdown-item to="#">
                            <b-icon icon="hammer" scale="0.8" /> Rules 
                        </b-dropdown-item>
                        <b-dropdown-item to="#">
                            <b-icon icon="x-diamond" scale="0.8" /> Scores 
                        </b-dropdown-item>
                        <b-dropdown-item to="#">
                            <b-icon icon="power" scale="0.8" /> Logout 
                        </b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <b-sidebar
            id="menu-sidebar-page"
            shadow
            bg-variant="dark"
            text-variant="light"
            title="Menu"
            backdrop
        >
            <b-nav vertical class="bg-dark">
                <b-nav-item
                    v-for="(nav, index) in sideMenu"
                    :key="index"
                    link-classes="text-light"
                    active-class="bg-light text-dark"
                    :to="{ path: nav.path}"
                >
                    {{nav.text}}
                </b-nav-item>
            </b-nav>
        </b-sidebar>
    </div>
</template>
<script>
import { defineComponent, ref } from '@vue/composition-api'

export default defineComponent({
    setup() {
        const selected = ref(null)
        const options = ref([
                { value: null, text: 'AGENTE1' },
                { value: 'a', text: 'This is First option' },
                { value: 'b', text: 'Selected Option' },
                { value: { C: '3PO' }, text: 'This is an option with object value' },
                { value: 'd', text: 'This one is disabled', disabled: true }
        ])
        const navMenu = ref([
            {text: 'Home', icon: 'house-door', path: '/Dashboard'},
            {text: 'Figures', icon: 'cash', path: '/Figures'},
            {text: 'Distribution', icon: 'diagram3', path: '/Distribution'},
            {text: 'Position', icon: 'geo-alt', path: '/Position'},
        ])
        const sideMenu = ref([
            { text: 'Customer List', path: '/customers' },
            { text: 'Account History', path: '/accounts/history' },
            { text: 'Monitor', path: '/monitor' },
            { text: 'Pending', path: '/pending' },
            { text: 'View Lines', path: '/lines' },
            { text: 'Ip Log', path: '/iplogs' },
            { text: 'Contact Us', path: '---' },
            { text: 'Settle', path: '/settle' },
            { text: 'Messages', path: '/messages' },
            { text: 'Performance', path: '/performance' },
            { text: 'Deleted Wagers', path: '/deleted-wagers' },
            { text: 'Cash Flow', path: '/cash-flow' },
            { text: 'Volume', path: '/volume' },
            { text: 'Hold %', path: '/hold' },
            { text: 'Ticket Writer', path: 'ticket-writer' },
            { text: 'Agents', path: 'agents' },
            { text: 'Mail', path: '---' },
            { text: 'Agent Settle', path: '---' },
            { text: 'LC Figures', path: '---' },
            { text: 'Move Customers', path: '---' },
            { text: 'Cashier ', path: '---' },
            { text: 'Action By Player', path: '---' },
            { text: 'Scores History', path: '---' },
            { text: 'Detailed', path: '---' },
            { text: 'New Accounts', path: '---' },
            { text: 'Accounting', path: '---' },
            { text: 'Lottery', path: '---' },
        ])
        return {
            selected,
            options,
            navMenu,
            sideMenu,
        }
    },
})
</script>