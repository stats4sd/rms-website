
/** LODASH **/
import _ from 'lodash';
window._ = _;

/** AXIOS **/
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
