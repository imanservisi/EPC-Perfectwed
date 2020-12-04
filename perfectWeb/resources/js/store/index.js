import Vue from 'vue'
import Vuex from 'vuex'

import wed from './modules/wed'

Vue.use(Vuex)
export default new Vuex.Store ({
    modules:{
        wed
    }
})
