<template>
<div class="row">

    <div class="col-md-4" v-for=" produit in produits" :key="produit.id">

        <div class="card bg-dark text-white o-hidden mb-4"><img class="card-img" src="/ketrika/public/back/images/photo-wide-2.jpg" alt="Card image" />
            <div class="card-img-overlay">
                <h5 class="card-title text-white"></h5>

                <p class="card-text">{{ produit.nom }}</p>

            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
                <h5 class="card-title">{{ produit.nom }}</h5>
                <p class="card-text">{{ produit.coment }}</p>
                <button class="btn btn-primary btn-icon m-1" type="button">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span class="ul-btn__text" data-toggle="modal" data-target="#mande">Commande</span>
                </button>

            </div>
        </div>

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
                        <label for="nom">Name</label>
                        <input type="text" v-model="nom" class="form-control" id="nom" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="coment">Commade</label>
                        <input type="text" v-model="coment" class="form-control" id="coment" placeholder="Commande">
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" v- model="prix" class="form-control" id="prix" placeholder="Prix">
                    </div>

                    <button type="valide" @click.prevent="saveproduit" class="btn btn-primary">valide</button>
                    <!--  end Modal content-->

                </div>

            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    data() {
        return {
            produits: {}

        }
    },
    mounted() {
        this.getProduits();

    },
    methods: {
        saveproduit() {
            axios.post('save_produit', {
                    nom: this.Name,
                    coment: this.Commande,
                    prix: this.Prix,
                })
                .then(reponse => console.log(reponse));
        },

        getProduits() {
            axios.get('/ketrika/public/api/produits').then(({
                data
            }) => (this.produits = data));

        }
    }
}
</script>
