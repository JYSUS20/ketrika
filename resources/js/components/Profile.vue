<template>
<div class="card card-profile-1 mb-4">

    <div class="card-body text-center">
        <div class="avatar box-shadow-2 mb-3"><img src="dist-assets/images/faces/16.jpg" alt=""></div>
        <h5 class="m-0">Jassica Hike</h5>
        <p class="mt-0">UI/UX Designer</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
        <button class="btn btn-primary btn-rounded">Contact Jassica</button>
        <div class="card-socials-simple mt-4"><a href=""><i class="i-Linkedin-2"></i></a><a href=""><i class="i-Facebook-2"></i></a><a href=""><i class="i-Twitter"></i></a></div>
    </div>
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
