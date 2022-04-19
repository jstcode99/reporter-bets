<template>
    <div>
        <table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
            <thead>
                <tr class="CPHeader">
                    <th colspan="2">Transactions</th>
                </tr>
                <tr>
                    <th class="2">
                        <div class="pl-5 pr-5 pt-2 pb-2 ml-5 mr-5 mt-2 mb-1">
                            <label for="inline-form-display" class="mr-1 text-12">
                                Transaction:
                            </label>
                             <b-input-group class="mt-3">
                                <template #append>
                                    <b-button variant="success" size="sm">CB</b-button>
                                </template>
                                <b-form-select
                                    id="inline-form-display"
                                    v-model="selected"
                                    :options="options"
                                    size="sm"
                                    class="mr-1"
                                />
                            </b-input-group>
                            <label for="inline-form-amount" class="mr-1 text-12">
                                Amount:
                            </label>
                            <b-form-input
                                id="inline-form-amount"
                                class="mb-2 mr-sm-2 mb-sm-0"
                                size="sm"
                                type="text"
                            />
                            <label for="inline-form-amount" class="mr-1 text-12">
                                Brief Description:
                            </label>
                            <b-form-input
                                id="inline-form-brief-description"
                                class="mb-2 mr-sm-2 mb-sm-0"
                                size="sm"
                                type="text"
                            />
                            <p class="mr-2" style="font-size: 12px; color: #000000;">Private Notes:(Customers do not see this)</p>
                            <b-form-textarea
                                id="textarea"
                                v-model="text"
                                rows="3"
                                size="sm"
                            />
                            <div class="d-flex justify-content-center mt-2">
                                <b-button variant="success">Submit</b-button>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return {
            text: '',
            selected: null,
            options: [
                { value: null, text: 'Please select an option' },
                { value: 'a', text: 'This is First option' },
                { value: 'b', text: 'Selected Option' },
                { value: { C: '3PO' }, text: 'This is an option with object value' },
                { value: 'd', text: 'This one is disabled', disabled: true }
            ],
        }
    },
}
</script>