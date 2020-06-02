<template>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
         <input name="searchtext" value="" class="form-control" type="text">
        <span class="navbar-text">{{user.name}}</span>
    </div>
</template>
<script>
import config from './../../config/config'
export default {
    data() {
        return {
            user: []
        };
    },
    created() {
        axios.get(`${config.apiUrl}/user/1`)
        .then(response => {
        this.user = response.data    
        })
        .catch(e => {
        this.errors.push(e)
        })
    }
}
</script>