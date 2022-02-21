<template>
  <div class="hello">
    <h1>Demo Chart 1</h1>
    <BarChart :data="firstChartData" v-if="isLoadingFirstChartData" />
    <h1>Demo Chart 2</h1>
    <BarChart :data="secondChartData" v-if="isLoadingSecondChartData" />
  </div>
</template>

<script>
import BarChart from '@/components/BarChart'

export default {
  name: 'ChartDemo',
  components: {
    BarChart
  },
  computed: {
    firstChartData() {
      return this.$store.getters.firstChartData
    },
    isLoadingFirstChartData() {
      return this.$store.getters.isLoadingFirstChartData
    },
    secondChartData() {
      return this.$store.getters.secondChartData
    },
    isLoadingSecondChartData() {
      return this.$store.getters.isLoadingSecondChartData
    }
  },
  mounted() {
    this.getFirstChart()
    this.getSecondChart()
  },
  methods: {
    getFirstChart() {
      this.$store.dispatch('getFirstChart')
    },
    getSecondChart() {
      this.$store.dispatch('getSecondChart')
    }
  },

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
