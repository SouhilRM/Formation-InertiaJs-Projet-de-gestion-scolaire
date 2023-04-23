<template>
    <!-- Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5">Edition du niveau scolaire " {{ props.niveauScolaireNom }} "</h1>
            <button @click="closeModal();resetError()" type="button" class="btn-close" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
            <form id="updateNS" @submit.prevent="update">
            <div class="form-group">
                <label for="">Intitulé :</label>
                <input type="text" class="form-control" v-model="form.nom" :class="{'is-invalid' : nameError}">
                <span v-if="nameError" class="invalid-feedback error">{{ nameError }}</span>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button @click="closeModal();resetError()" type="button" class="btn btn-secondary">Anuler</button>
            <button form="updateNS" type="submit" class="btn btn-primary">Confirmer</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script setup>
    import axios from "axios";
    import { reactive,watch,ref } from "vue";
    import { router } from '@inertiajs/vue3';
    import { sweetAlert } from "../Components/Sweet";

    function openModal(){
        getNiveauScolaireById()
        $('#editModal').modal('show')
    }
    function closeModal(){
        $('#editModal').modal('hide')
        emit("modalClosed")
    }
    const emit = defineEmits(["modalClosed"])

    const form = reactive({
        id: "",
        nom: "",
    })

    //ici on ne mets pas nos props dans un tab[] on prefere utiliser les {} car on specifie plus
    const props = defineProps({
        niveauScolaireId: {
            type: Number,
            required: true
        },
        niveauScolaireNom: {
            type: String
        },
        showModel: {
            type: Boolean,
            default: false
        }
    })

    function getNiveauScolaireById(){
        axios.get(route("niveauscolaire.edit",{ niveauScolaire: props.niveauScolaireId }))
             .then((response)=>{
                //console.log("response : ", response.data);
                form.id = response.data.id
                form.nom = response.data.nom
             })
             .catch((error)=>{
                console.log(error);
             })
    }

    watch(
        () => props.showModel,
        (newVal,oldVal) =>{
            if(newVal === true){
                openModal()
            }
            else{
                closeModal()
            }
        }
    )

    const nameError = ref("")
    function resetError(){
        nameError.value = null
    }

    function update() {
        router.put(
            //via l'url: `/niveauscolaire/update/${props.niveauScolaire.niveauScolaireId}`,
            //via la route: 
            route('niveauscolaire.update', { niveauScolaire: props.niveauScolaireId }),
            form,
            {
                onSuccess: (page) =>{
                    closeModal()
                    resetError()
                    sweetAlert('success',"Niveau scolaire modifié avec succès.")
                },

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