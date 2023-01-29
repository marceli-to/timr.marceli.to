<template>
  <content>
    <content-header>
      <search 
        @change="doSearch($event)" 
        @reset="getClients()"
      />
      <button-secondary 
        @click="$router.push('/projects')" 
        :label="'Create client'">
        <template #icon>
          <user-group class="w-4 h-4" />
        </template>
      </button-secondary>
    </content-header>
    <content-main>
      <content-section>
        <table-container>
          <template #table-head>
            <table-head>Name</table-head>
            <table-head>Acronym</table-head>
            <table-head>City</table-head>
            <table-head>&nbsp;</table-head>
          </template>
          <template #table-body>
            <template v-for="client in clients" :key="client.id">
              <table-row>
                <table-cell>{{ client.name }}</table-cell>
                <table-cell>{{ client.acronym }}</table-cell>
                <table-cell>{{ client.city }}</table-cell>
                <table-cell class="text-right">
                  <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
                </table-cell>
              </table-row>
            </template>
          </template>
        </table-container>
      </content-section>
    </content-main>
  </content>
</template>
<script setup>
import Content from "@/components/layout/Content.vue";
import ContentHeader from "@/components/layout/ContentHeader.vue";
import ContentMain from "@/components/layout/ContentMain.vue";
import ContentSection from "@/components/layout/ContentSection.vue";
import TableContainer from "@/components/ui/table/Table.vue";
import TableHead from "@/components/ui/table/Th.vue";
import TableRow from "@/components/ui/table/Tr.vue";
import TableCell from "@/components/ui/table/Td.vue";
import ButtonSecondary from "@/components/buttons/Secondary.vue";
import Search from "@/components/ui/Search.vue";
import Pill from "@/components/ui/Pill.vue";
import UserGroup from "@/components/icons/UserGroup.vue";
import useClients from "@/composables/clients";
import { onMounted } from "vue";
const { clients, getClients, destroyClient, searchClients } = useClients();

onMounted(getClients);

const deleteClient = async (id) => {
  if (!window.confirm('Are you sure?')) {
    return
  }
  await destroyClient(id);
  await getClients();
}

const doSearch = async (keyword) => {
  console.log(keyword.length)
  await searchClients(keyword);
}

</script>