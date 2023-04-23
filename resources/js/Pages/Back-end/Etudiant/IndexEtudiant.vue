<template>

    <div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Liste des étudiants</h1>
        </div>
    </div>
    </div>

    <div class="card">
    <div class="card-header">
        <h5 class="card-title">Liste des niveaux scolaires.</h5>
    </div>
    <div class="card-body">
        <table id="datatable1" class="display" style="width:100%">

            <thead>
                <tr>
                    <th width="25%">Etudiant</th>
                    <th width="25%">Nom</th>
                    <th width="20%">Niveau scolaire</th>
                    <th width="15%">Age</th>
                    <th width="15%">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="etudiant in etudiants" :key="etudiant.id">
                    <td>ici photot</td>
                    <td>{{ etudiant.nom }} {{ etudiant.prenom }}</td>
                    <td>{{ etudiant.niveau_scolaire.nom }}</td>
                    <td>{{ etudiant.age }}</td>
                    <td class="d-flex">
                        <button class="btn btn-info me-4">
                            <i class="fa-solid fa-pencil"></i>
                        </button>

                        <button class="btn btn-danger me-4">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>
</div>
       
</template>

<script setup>

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

    defineProps(['etudiants'])

</script>