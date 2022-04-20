<template>
  <b-container fluid>
    <b-form class="p-2">
        <b-row>
            <b-col cols="6">
                <p class="text-center font-weight-bold">
                    Agent: {{agent}}
                </p>
            </b-col>
            <b-col cols="6">
                <p class="text-center font-weight-bold">
                    Balance: {{balance}}
                </p>
            </b-col>
            <b-col cols="12">
                <label for="textarea-message">
                    Internet Notifications (All Customers will see online)
                </label>
                <b-form-textarea
                    id="textarea-message"
                    v-model="message"
                    placeholder="Enter message..."
                    rows="10"
                />
            </b-col>
            <b-col cols="12" class="pt-2 d-flex justify-content-center">
                <b-button variant="success" size="sm" class="center">
                    Submit
                </b-button>
            </b-col>
        </b-row>
    </b-form>
  </b-container>
</template>

<script>
import { defineComponent, ref } from '@nuxtjs/composition-api'

export default defineComponent({
    setup() {
        const message = ref('')
        const agent = ref('AGENTTES1')
        const balance = ref('18.880,10')
        return {
            message,
            agent,
            balance,
        }
    }
})
</script>