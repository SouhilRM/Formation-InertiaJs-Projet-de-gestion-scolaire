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
                <input v-model="form.nom" type="text" class="form-control" :class="{'is-invalid' : nameError}">
                <span v-if="nameError" class="invalid-feedback error">{{ nameError }}</span>
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
    import { reactive,ref } from "vue";
    import { sweetAlert } from "../Components/Sweet";

    const form = reactive({ nom: null, })
    const nameError = ref("");

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
                    sweetAlert('success',"Niveau scolaire créé avec succès.")
                },

                //petite remarque concernant la validation je l'ai fais manuellement sans utiliser inertia vue car j'ai qu'un seul champ mais je changerai de methode avec les etudiants
                onError: (errors) => {
                    //console.log(errors);
                    if(nameError != null){
                        nameError.value = errors.nom
                    }
                    sweetAlert('error',"Une erreur s'est produite.")
                }
            }
        )
    }
</script>