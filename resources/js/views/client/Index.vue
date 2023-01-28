<template>
  <content>
    <content-header>
      <search />
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
            <table-head>Ort</table-head>
            <table-head>Status</table-head>
            <table-head>&nbsp;</table-head>
          </template>
          <template #table-body>
            <table-row>
              <table-cell>Agentur für Kommunikation</table-cell>
              <table-cell>Zürich</table-cell>
              <table-cell>
                <pill class="is-warning">Pendent</pill>
              </table-cell>
              <table-cell class="text-right">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </table-cell>
            </table-row>
            <table-row>
              <table-cell>AhornGarten</table-cell>
              <table-cell>Russikon</table-cell>
              <table-cell>
                <pill class="is-success">Aktiv</pill>
              </table-cell>
              <table-cell class="text-right">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </table-cell>
            </table-row>
            <table-row>
              <table-cell>Cham Group AG</table-cell>
              <table-cell>Winterthur</table-cell>
              <table-cell>
                <pill class="is-danger">Inaktiv</pill>
              </table-cell>
              <table-cell class="text-right">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </table-cell>
            </table-row>
          </template>
        </table-container>
      </content-section>
    </content-main>
  </content>
</template>
<script>
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

export default {
  components: {
    Content,
    ContentHeader,
    ContentMain,
    ContentSection,
    Search,
    Pill,
    TableContainer,
    TableHead,
    TableRow,
    TableCell,
    ButtonSecondary,
    UserGroup
  }
}
</script>