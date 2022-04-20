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
                    <b-nav-item exact-active-class="text-dark" to="/Dashboard">
                        <b-icon icon="house-door" /> Home
                    </b-nav-item>
                    <b-nav-item exact-active-class="text-dark" to="/Figures">
                        <b-icon icon="cash" /> Figures
                    </b-nav-item>
                    <b-nav-item exact-active-class="text-dark" to="/Distribution">
                        <b-icon icon="diagram3" /> Distribution
                    </b-nav-item>
                    <b-nav-item exact-active-class="text-dark" to="/Position">
                        <b-icon icon="geo-alt" /> Position
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
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/customers"> 
                    Customer List
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/accounts/history"> 
                    Account History
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/monitor"> 
                    Monitor
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/pending"> 
                    Pending
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/lines"> 
                    View Lines
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/iplogs"> 
                    Ip Log
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Contact Us
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/settle"> 
                    Settle
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/messages"> 
                    Messages
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/performance"> 
                    Performance
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/deleted-wagers"> 
                    Deleted Wagers
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/cash-flow"> 
                    Cash Flow
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to="/volume"> 
                    Volume
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Hold %
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Ticket Writer
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Agents
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Mail
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Agent Settle
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    LC Figures
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Move Customers
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Cashier 
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Action By Player
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Scores History
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Detailed
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    New Accounts
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Accounting 
                </b-nav-item>
                <b-nav-item link-classes="text-light" active-class="bg-light text-dark" to=""> 
                    Lottery 
                </b-nav-item>
            </b-nav>
        </b-sidebar>
    </div>
</template>
<script>
export default {
    data() {
        return {
            selected: null,
            options: [
                { value: null, text: 'AGENTE1' },
                { value: 'a', text: 'This is First option' },
                { value: 'b', text: 'Selected Option' },
                { value: { C: '3PO' }, text: 'This is an option with object value' },
                { value: 'd', text: 'This one is disabled', disabled: true }
            ]
        }
    },  
}
</script>
<style>
</style>