import axios from 'axios';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const toastConfig = {
  position: toast.POSITION.BOTTOM_RIGHT,
  hideProgressBar: true,
  autoClose: false
};

/**
 * Intercept responses
 */
axios.interceptors.response.use(function (response) {
  // Any status code that lie within the range of 2xx cause this function to trigger
  return response;
}, function (error) {
  // Any status codes that falls outside the range of 2xx cause this function to trigger
  toast.error(`${error.message} (${error.response.status})`, toastConfig);
  return Promise.reject(error);
});


/**
 * Intercept requests
 */
axios.interceptors.request.use(function (config) {
  // Do something before request is sent
  return config;
}, function (error) {
  // Show a toast with the error code and error message
  toast.error(`${error.response.status} ${error.message}`, toastConfig);
  return Promise.reject(error);
});