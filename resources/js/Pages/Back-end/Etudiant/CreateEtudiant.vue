<template>

    <div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Ajout d'un nouvel étudiant</h1>
        </div>
    </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Veuillez remplir les champs</h5>
        </div>

        <div class="card-body">
            
            <div class="example-container">
                <form @submit.prevent="soumettre" id="soumettreEtudiant">

                <div class="example-content">
                    <div class="row">
                        <div class="col-6 form-floating mb-3">
                            <input type="text" class="form-control" :class="{'is-invalid' : form.errors.nom}" id="floatingInput" v-model="form.nom">
                            <label for="floatingInput">Nom</label>
                            <span v-if="form.errors.nom" class="invalid-feedback error">{{ form.errors.nom }}</span>
                        </div>

                        <div class="col-6 form-floating mb-3">
                            <input type="text" class="form-control" :class="{'is-invalid' : form.errors.prenom}" id="floatingInput" v-model="form.prenom">
                            <label for="floatingInput">prenom</label>
                            <span v-if="form.errors.prenom" class="invalid-feedback error">{{ form.errors.prenom }}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 form-floating mb-3">
                            <input type="text" class="form-control" :class="{'is-invalid' : form.errors.age}" id="floatingInput" v-model="form.age">
                            <label for="floatingInput">age</label>
                            <span v-if="form.errors.age" class="invalid-feedback error">{{ form.errors.age }}</span>
                        </div>

                        <div class="col-6 row ms-1 mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="Garcon" value="Garcon" v-model="form.sex" checked>
                                    <label class="form-check-label" for="Garcon">
                                        Garcon
                                    </label>
                                    
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="Fille" value="Fille" v-model="form.sex">
                                    <label class="form-check-label" for="Fille">
                                        Fille
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                            <select class="form-select" :class="{'is-invalid' : form.errors.niveau_scolaire_id}" id="inlineFormSelectPref" v-model="form.niveau_scolaire_id">
                                <option :value="ns.id" v-for="ns in niveauxScolaires" :key="ns.id">{{ns.nom}}</option>
                            </select>
                            <span v-if="form.errors.niveau_scolaire_id" class="invalid-feedback error">{{ form.errors.niveau_scolaire_id }}</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <legend class="col-form-label col-2">Photot</legend>
                            <input class="form-control col-10" type="file" @input="showImage($event)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img :src="myImage" style="height: 200px; width: auto;">
                        </div>
                    </div>

                </div>

                </form>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" form="soumettreEtudiant">Soumettre</button>
        </div>
    </div>
       
</template>

<script setup>
    import { useForm  } from '@inertiajs/vue3';
    import { sweetAlert } from "../Components/Sweet";
    import { ref } from "vue";

    defineProps(['niveauxScolaires'])

    const form = useForm({
        nom: null,
        prenom: null,
        sex: 'Garcon',
        age: null,
        niveau_scolaire_id : null,
        photot: null,
    })

    const myImage = ref("");
    function showImage(event){
        var src = URL.createObjectURL(event.target.files[0])
        myImage.value = src
        form.photot = event.target.files[0]
    }

    function soumettre(){
        //console.log(form);
        form.post(route('etudiant.store'),{
            onSuccess: (page) =>{
                sweetAlert('success',"Etudiant ajouté avec succès.")
            },
            onError: (errors) => {
                sweetAlert('error',"Une erreur s'est produite.")
            }
        })
    }
</script>