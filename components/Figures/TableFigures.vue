<template>
    <div>
        <b-table striped hover :items="items">
            <template #cell(id)="data">
                <b>
                    <NuxtLink :to="`/agente/panel/${data.value}`">
                        {{ data.value }}
                    </NuxtLink>
                </b>
            </template>
        </b-table>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        items: [
          { id: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { id: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { id: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { id: 38, first_name: 'Jami', last_name: 'Carney' }
        ]
      }
    }
  }
</script>