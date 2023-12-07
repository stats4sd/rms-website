
/** LODASH **/
import _ from 'lodash';
window._ = _;

/** AXIOS **/
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


/** ALPINE (for Laravel Filament) **/
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

Alpine.plugin(collapse)

window.Alpine = Alpine

Alpine.start()
