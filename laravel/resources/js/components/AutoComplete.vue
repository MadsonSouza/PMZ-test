<template>

  <autocomplete
    url="http://localhost:8080/api/products"
    anchor="name"
    label="writer"
    :on-select="getData">
  </autocomplete>

</template>


<script>

  import Autocomplete from 'vue2-autocomplete-js'

  export default {

    components: { Autocomplete },

    methods: {
      getData(obj){
        console.log(obj);
      }
    }
  };

</script>