import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    welcomeContent: '',
  },
  mutations: {
    updateWelcomeContent(state, content) {
      state.welcomeContent = content;
    },
  },
});
