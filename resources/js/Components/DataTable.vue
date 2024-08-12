<template>
  <DataTable :value="products" tableStyle="min-width: 50rem">
    <Column field="name" header="Name"></Column>
    <Column field="permissions" header="Permissions"></Column>
    <Column field="options" header="Options"></Column>
  </DataTable>
</template>

<script setup>
import DataTable from "primevue/datatable";
import Column from "primevue/column";
// import ColumnGroup from "primevue/columngroup"; // optional
// import Row from "primevue/row";
</script>

<style  scoped>

</style>