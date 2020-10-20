<template>
<div class="card card-profile-1 mb-4">
    {{profil.name}}

    {{profil.email}}
</div>
</template>

<script>
export default {
    mounted() {
        this.getProfile();
    },
    data() {
        return {
            profil: {}
        }
    },
    methods: {
        getProfile() {
            axios.get('/ketrika/public/api/Profile').then(({
                data
            }) => (this.profil = data));
        }
    }
}
</script>
