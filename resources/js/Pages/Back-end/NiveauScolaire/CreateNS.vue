<template>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModel">
        <i class="fa-solid fa-plus"></i>
        Ajouter un niveau scolaire
    </button>


    <!-- Modal -->
    <div class="modal fade" id="myModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

        <div class="modal-header">
            <h1 class="modal-title fs-5">Nouveau niveau scolaire</h1>
            <button type="button" class="btn-close" @click="closeModel" aria-label="Close"></button>
        </div>

        <div class="modal-body text-start">
            <form @submit.prevent="soumettre" id="soumettreNS">
            <div class="form-group">
                <label for="">Intitulé :</label>
                <input v-model="form.nom" type="text" class="form-control">
            </div>
            </form>
        </div>

        <div class="modal-footer">
            <button @click="closeModel" type="button" class="btn btn-secondary">Fermer</button>
            <button form="soumettreNS" type="submit" class="btn btn-primary">Confirmer</button>
        </div>
        
    </div>
    </div>
    </div>



</template>

<script setup>
    import { router } from "@inertiajs/vue3";
    import { reactive } from "vue";

    const form = reactive({ nom: null, })

    function closeModel() {
        //cette fonction permet de fermer le model boots en utilisant le jquerry
        $('#myModel').modal('hide')
        //pour vider la valeur du champ
        form.nom = null
    }

    function soumettre() {
        router.post(
            '/niveauscolaire/store',
            form,
            {
                onSuccess: (page) =>{
                    closeModel();
                    console.log('tous ce passe bien');
                }
            }
        )
    }
</script>