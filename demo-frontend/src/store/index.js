import Vuex from 'vuex'
import Vue from 'vue'
import { HTTP } from '@/libs/http-common'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    isLoadingFirstChartData:  false,
    firstChartData:  {},
    isLoadingSecondChartData:  false,
    secondChartData:  {}
  },
  mutations: {
    SET_FIRST_CHART_DATA (state, payload) {
      state.firstChartData = payload
      state.isLoadingFirstChartData = true
    },
    SET_SECOND_CHART_DATA (state, payload) {
      state.secondChartData = payload
      state.isLoadingSecondChartData = true
    }
  },
  actions: {
    async getFirstChart({commit}) {
      const res = await HTTP.get('/api/first-chart')
      commit('SET_FIRST_CHART_DATA', res.data.items || {})
    },

    async getSecondChart({commit}) {
      const res = await HTTP.get('/api/second-chart')
      commit('SET_SECOND_CHART_DATA', res.data.items || {})
    }
  },
  getters: {
    firstChartData: state => state.firstChartData,
    isLoadingFirstChartData: state => state.isLoadingFirstChartData,
    secondChartData: state => state.secondChartData,
    isLoadingSecondChartData: state => state.isLoadingSecondChartData,
  }
})

export default store
