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
            <table-head-item>Name</table-head-item>
            <table-head-item>Ort</table-head-item>
            <table-head-item>Status</table-head-item>
            <table-head-item>&nbsp;</table-head-item>
          </template>
          <template #table-body>
            <tr class="border-b border-gray-100 group">
              <td class="bg-white group-hover:bg-gray-50 p-4">Agentur für Kommunikation</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">Zürich</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">
                <div class="bg-yellow-200 text-yellow-600 text-xs rounded-full px-3 py-1 font-mono inline-flex w-auto">Pendent</div>
              </td>
              <td class="text-right bg-white group-hover:bg-gray-50 p-4">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </td>
            </tr>
            <tr class="border-b border-gray-100 group">
              <td class="bg-white group-hover:bg-gray-50 p-4">AhornGarten</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">Russikon</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">
                <div class="bg-green-200 text-green-600 text-xs rounded-full px-3 py-1 font-mono inline-flex w-auto">Aktiv</div>
              </td>
              <td class="text-right bg-white group-hover:bg-gray-50 p-4">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </td>
            </tr>
            <tr class="group">
              <td class="bg-white group-hover:bg-gray-50 p-4">Cham Group AG</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">Winterthur</td>
              <td class="bg-white group-hover:bg-gray-50 p-4">
                <div class="bg-red-200 text-red-600 text-xs rounded-full px-3 py-1 font-mono inline-flex w-auto">Inaktiv</div>
              </td>
              <td class="text-right bg-white group-hover:bg-gray-50 p-4">
                <a href="" class="text-xs text-primary-400 hover:underline underline-offset-2">Bearbeiten</a>
              </td>
            </tr>
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
import ButtonSecondary from "@/components/buttons/Secondary.vue";
import Search from "@/components/ui/Search.vue";
import TableContainer from "@/components/ui/table/Table.vue";
import TableHeadItem from "@/components/ui/table/Th.vue";
import UserGroup from "@/components/icons/UserGroup.vue";

export default {
  components: {
    Content,
    ContentHeader,
    ContentMain,
    ContentSection,
    Search,
    TableContainer,
    TableHeadItem,
    ButtonSecondary,
    UserGroup
  }
}
</script>