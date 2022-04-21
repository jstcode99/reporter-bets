<template>
    <b-container fluid>
        <b-row class="mt-3">
            <b-col
                sm="12"
                md="2"
                lg="2"
                class="border-end"
            >
                <b-input-group prepend="User">
                    <b-form-input v-model="user" readonly></b-form-input>
                    <b-input-group-append>
                        <b-button variant="success">User ID</b-button>
                    </b-input-group-append>
                </b-input-group>
            </b-col>
            <b-col
                sm="12"
                md="2"
                lg="2"
                class="d-flex align-items-center" style="border-right: 1px solid"
            >
                <small class="mx-auto">Name: ....</small>
            </b-col>
            <b-col
                sm="12"
                md="2"
                lg="2"
                class="d-flex align-items-center" style="border-right: 1px solid"
            >
                <small class="mx-auto">
                    Pending:
                    <b>{{pending}}</b>
                </small>
            </b-col>
            <b-col
                sm="12"
                md="3"
                lg="3"
                class="d-flex align-items-center" style="border-right: 1px solid"
            >
                <small class="mx-auto">
                    Agent:
                    <b>{{agent}}</b>
                </small>
            </b-col>
            <b-col
                sm="12"
                md="3"
                lg="3"
                class="d-flex align-items-center" style="border-right: 1px solid"
            >
                <small class="mx-auto">
                    Balance:
                    <b>{{balance}}</b>
                </small>
            </b-col>
            <b-col cols="12">
                <hr>
            </b-col>
            <b-col cols="12">
                <b-form inline>
                    <b-button-group size="sm">
                        <b-button
                            v-for="(btn, idx) in buttons"
                            :key="idx"
                            :pressed.sync="btn.state"
                            squared
                            :variant="btn.state ? 'danger' : 'light'"
                        >
                            {{ btn.caption }}
                        </b-button>
                    </b-button-group>
                    <b-input-group prepend="Search" class="ml-3" size="sm">
                        <b-form-input
                            id="inline-form-search"
                            placeholder="search"
                            size="sm"
                        />
                    </b-input-group>
                </b-form>
            </b-col>
            <b-col cols="12" class="mt-3">
                <b-form inline>
                    <b-form-checkbox
                        v-model="openAll"
                        name="check-button"
                        switch
                    >
                        <span> {{ openAll ? 'Open' : 'All'}} </span> 
                    </b-form-checkbox>
                </b-form>
            </b-col>
            <b-col cols="12">
                <b-row>
                    <b-col
                        cols="12"
                        v-for="(line, index) in lines" :key="index"
                    >
                        <table
                            class="list-lines mb-1"
                            style="border: 1px solid"
                        >
                            <thead>
                                <tr class="thtitle">
                                    <td>
                                        {{ line.warger }}
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <div v-for="(warger, index) in line.wargers" :key="index">
                                    <tr class="wager-open-game">
                                        <td>
                                            {{ warger.game }}
                                        </td>
                                    </tr>
                                    <tr
                                        v-for="(period, index) in warger.periods"
                                        :key="index"
                                        class="period-node"
                                    >
                                        <td>
                                            {{ period.name }}
                                        </td>
                                    </tr>
                                </div>
                            </tbody>
                        </table>
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
    </b-container>
</template>
<script>
import { defineComponent, ref } from '@vue/composition-api'

export default defineComponent({
    setup() {
        const user = ref('AARON01')
        const pending = ref(0.00)
        const agent = ref('AGENTTEST!')
        const balance = ref(0.00)
        const buttons = ref([
                { caption: 'Strights', state: true },
                { caption: 'Perlay', state: false },
                { caption: 'Teasers', state: false },
                { caption: 'If Bets/Reverses', state: false },
                { caption: 'Manual Play', state: false },
                { caption: 'Pending Wagers', state: false },
        ])
        const search = ref('')
        const openAll = ref(true)

        const lines = ref([
                {
                    warger: 'Baseball',
                    wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Basketball',
                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Table Tennis',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Hockey',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Esports',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Golf',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'MMA',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Racing',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Soccer',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Soccer',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Other',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Tennis',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Cricket',
                                        wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                { 
                    warger: 'Rugby',
                    wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
                {
                    warger: 'Baseball',
                    wargers: [
                        {
                            game: 'MLB',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ]
                        },
                        {
                            game: 'NCAA Baseball',
                            periods: [
                                {
                                    id: 1,
                                    name: 'Game',
                                },
                                {
                                    id: 2,
                                    name: '1st Halft',
                                }
                            ],
                        }
                    ]
                },
        ])

        return {
            user,
            pending,
            agent,
            balance,
            buttons,
            search,
            openAll,
            lines,
        }
    },
})
</script>
<style>
    ::-webkit-scrollbar {
    width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #f1f1f1; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #555; 
    }
    .list-lines {
        width: 100%;
    }

    .list-lines tr {
        display: block;
        border-style: solid;
        border-width: 1px 0;
        border-top: none;
        border-color: #157199;
    }
    .thtitle {
        font: bold 16px;
        color: #fff !important;
        background: #0E2431;
        border-bottom: 6px solid #157199 !important;
        padding: 3px;
    }
    .wager-open-game {
        color: #000;
        font-weight: bold;
        cursor: pointer;
        padding: 3px;
    }
    .period-node {
        color: #000 !important;
        cursor: pointer;
        padding-left: 20px !important;
    }
</style>