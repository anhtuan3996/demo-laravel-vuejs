<template>
  <div id="app">
    <ChartDemo />
  </div>
</template>

<script>
import ChartDemo from './components/ChartDemo.vue'

export default {
  name: 'App',
  components: {
    ChartDemo
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
