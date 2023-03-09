<template>
  <div id="product">
    Продукты
  </div>
</template>

<script>
export default {
  name: "Product",
  mounted() {
    $(document).trigger('change')
  }
}
</script>

<style scoped>

</style>