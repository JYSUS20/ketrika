<template>
<div class="card card-profile-1 mb-4">

    <div class="card-body text-center">
        <div class="avatar box-shadow-2 mb-3"><img src="dist-assets/images/faces/16.jpg" alt=""></div>
        <h5 class="m-0">{{ profil.name}}</h5>
        <p class="mt-0">{{profil.email}}</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque.</p>
        <button class="btn btn-primary btn-icon m-1" type="button">
            <i class="fas fa-hand-holding-usd"></i>
            <span class="ul-btn__text" data-toggle="modal" data-target="#mande">modifier</span>
        </button>
    </div>

    <!--  Modal -->
    <div class="modal fade" id="mande" tabindex="-1" role="dialog" aria-labelledby="mande" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mande">Modal title</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  Modal content-->
                    <div class="form-group">
                        <label for="nom">name</label>
                        <input type="text" v-model="profil.name" class="form-control" id="nom" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="coment">Email</label>
                        <input type="text" v-model="profil.email" class="form-control" id="coment" placeholder="Commande">
                    </div>

                    <button type="valide" @click.prevent="saveproduit" class="btn btn-primary">Enregistrer</button>
                    <!--  end Modal content-->

                </div>
            </div>
        </div>
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
