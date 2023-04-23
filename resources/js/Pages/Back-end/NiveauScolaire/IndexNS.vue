<template>

    <div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Liste des niveaux scolaires</h1>
        </div>
    </div>
    </div>

    <div class="row">
        <!-- <span>notre ID : {{ editingElementId }}</span> ce truc est la juste pour verifier si on recupere bien notre id à achaque click-->
    <div class="col">
        <div class="me-2 mb-4 text-end">
            <CreateNS />
        </div>
        <div class="card">
            
            <div class="card-header">
                <h5 class="card-title">Liste des niveaux scolaires.</h5>
            </div>
            <div class="card-body">
                <table id="datatable1" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th width="80%">Name</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr v-for="nv in niveauScolaire" :key="nv.id">

                            <td>{{ nv.nom }}</td>
                            
                            <td class="d-flex">

                                <button class="btn btn-info me-4" @click="openEditModal(nv.id,nv.nom)">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>

                                <button class="btn btn-danger me-4" @click="confirmationDeleteNS(nv.id)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </td>
                        </tr>
                        
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    </div>

    <EditNS 
        :niveau-scolaire-id="editingElementId"
        :niveau-scolaire-nom="editingElementNom"
        :show-model="showModel"
        @modal-closed="ModalClosed"
    />
       
</template>

<script setup>

    import CreateNS from "./CreateNS.vue";
    import { ref } from "vue";
    import EditNS from "./EditNS.vue";
    import { sweetConfirm,sweetAlert } from "../Components/Sweet";
    import { router } from '@inertiajs/vue3';

    //datatable.js
        $(document).ready(function () {

            "use strict";

            $('#datatable1').DataTable();

            $('#datatable2').DataTable({
                "scrollY": "300px",
                "scrollCollapse": true,
                "paging": false
            });

            $('#datatable3').DataTable({
                "scrollX": true
            });

            $('#datatable4 tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#datatable4').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });
        });
    //end-datatable.js

    //le defineProps si tu ne défini pas tes props càd leur type,required,default,... tu mets juste un tableau [] avec le nom de tes props dedans dans le cas contraire tu utilises les {} comme on a fait avec les props de EditNS.vue
    defineProps(['niveauScolaire'])

    const editingElementId = ref(0)
    const editingElementNom = ref("")
    const showModel = ref(false)

    function openEditModal(id,nom){
        editingElementId.value = id
        editingElementNom.value = nom
        showModel.value = true
    }

    function ModalClosed(){
        editingElementId.value = 0
        showModel.value = false
    }

    function deleteNS(id){
        router.delete(
            route('niveauscolaire.delete', { niveauScolaire: id }),
            {
                onSuccess: (page) =>{
                    sweetAlert('success',"Niveau scolaire supprimé avec succès.")
                },

                onError: (errors) => {
                    //console.log(errors);
                    sweetAlert('error',errors.message)
                }
            }
        )
    }
    function confirmationDeleteNS(id){
        sweetConfirm("Etes-vous sur de vouloir supprimer ce niveau scolaire ?",()=>deleteNS(id))
    }
</script>