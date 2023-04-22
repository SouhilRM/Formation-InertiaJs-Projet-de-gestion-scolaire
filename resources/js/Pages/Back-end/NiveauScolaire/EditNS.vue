<template>
    <!-- Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5">Edition du niveau scolaire " {{ form.nom }} "</h1>
            <button @click="closeModal" type="button" class="btn-close" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
            <form id="soumettreNS">
            <div class="form-group">
                <label for="">Intitulé :</label>
                <input type="text" class="form-control" v-model="form.nom" :class="{'is-invalid' : form.nameError}">
                <span v-if="form.nameError" class="invalid-feedback error">{{ form.nameError }}</span>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button @click="closeModal" type="button" class="btn btn-secondary">Anuler</button>
            <button form="soumettreNS" type="button" class="btn btn-primary">Confirmer</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script setup>
    import axios from "axios";
    import { reactive,watch } from "vue";

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
        nameError: ""
    })

    //ici on ne mets pas nos props dans un tab[] on prefere utiliser les {} car on specifie plus
    const props = defineProps({
        niveauScolaireId: {
            type: Number,
            required: true
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
</script>