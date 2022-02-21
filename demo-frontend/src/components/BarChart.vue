<script>
import { HorizontalBar } from "vue-chartjs";

export default {
  extends: HorizontalBar,
  props: {
    data: Object
  },
  mounted() {
    this.renderChart(
      this.data
    );
  }
};
</script>
