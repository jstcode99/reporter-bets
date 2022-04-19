<template>
    <b-row>
        <b-col cols="12">
            <h4>Lines</h4>
        </b-col>
        <b-col cols="12">
            <b-row>
                <b-col
                    cols="6"
                    v-for="(line, index) in lines" :key="index"
                >
                    <table
                        class="list-lines"
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
</template>
<script>
export default {
    data() {
        return {
            lines: [
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
            ]
        }
    },
}
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