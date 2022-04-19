<template>
    <div>
        <table class="CPMainTable w-100" cellpadding="0" cellspacing="0">
            <thead>
                <tr class="CPHeader">
                    <th colspan="2">Notifications</th>
                </tr>
                <tr>
                    <th class="2">
                        <div class="pl-5 pr-5 pt-2 pb-2 ml-5 mr-5 mt-2 mb-1">
                            <b-row>
                                <b-col md="6">
                                    <p class="mr-1">
                                        <b>Notifications:</b> (Customer see this on the internet)
                                    </p>
                                    <b-form-textarea
                                        id="textarea"
                                        v-model="text"
                                        rows="6"
                                        size="sm"
                                    />
                                </b-col>
                                <b-col md="6">
                                    <p class="mr-1">
                                        <b>Private Notes:</b> (Customers do not see this)
                                    </p>
                                    <b-form-textarea
                                        id="textarea"
                                        v-model="text"
                                        rows="6"
                                        size="sm"
                                    />
                                </b-col>
                                <b-col md="6">
                                    <b-form inline class="mt-2">
                                        <label for="inline-form-amount" class="mr-1 text-12">
                                            Times to Display:
                                        </label>
                                        <b-form-input
                                            id="inline-form-times-to-display"
                                            class="mb-2 mr-sm-2 mb-sm-0"
                                            size="sm"
                                            type="text"
                                        />
                                    </b-form>
                                    <br>
                                    <p>Times Shown: 2</p>
                                </b-col>
                            </b-row>


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