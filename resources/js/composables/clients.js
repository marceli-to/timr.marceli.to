import { ref } from 'vue';
import axios from "axios";
import { useRouter } from 'vue-router';
import { useLoadingStateStore } from '@/stores/loadingState';
import { storeToRefs } from 'pinia';

export default function useClients() {
  const clients = ref([]);
  const client = ref([]);
  const router = useRouter();
  const errors = ref('');

  const store = storeToRefs(useLoadingStateStore());

  const routes = {
    get: `/api/clients`,
    search: `/api/clients/search`
  };

  const getClients = async () => {
    let response = await axios.get(`/api/clients`);
    clients.value = response.data;
    store.loaded.value = true;

    // axios.get(`${routes.get}`).then(response => {
    //   clients.value = response.data;
    //   store.loaded.value = true;
    // });

  };

  const searchClients = async (keyword) => {
    let response = await axios.get(`${routes.search}/${keyword}`);
    clients.value = response.data;
  };

  const getClient = async (id) => {
    let response = await axios.get('/api/clients/' + id);
    client.value = response.data;
  };

  const storeClient = async (data) => {
    errors.value = ''
    try {
      await axios.post('/api/clients/', data)
      await router.push({name: 'clients.index'})
    } catch (e) {
      if (e.response.status === 422) {
        errors.value = e.response.data.errors
      }
    }
  }

  const updateClient = async (id) => {
    errors.value = ''
    try {
      await axios.put('/api/clients/' + id, client.value)
      await router.push({name: 'clients.index'})
    } catch (e) {
        if (e.response.status === 422) {
        errors.value = e.response.data.errors
      }
    }
  }

  const destroyClient = async (id) => {
    await axios.delete('/api/clients/' + id)
  }

  return {
    clients,
    client,
    errors,
    searchClients,
    getClients,
    getClient,
    storeClient,
    updateClient,
    destroyClient
  }
}