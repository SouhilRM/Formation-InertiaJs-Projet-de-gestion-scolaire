<template>

    <div class="row">
    <div class="col">
        <div class="page-description">
            <h1>index Niveau scolaire</h1>
        </div>
    </div>
    </div>

    <div class="row">
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

    </div>
    </div>
       
</template>

<script setup>

    import CreateNS from "./CreateNS.vue"

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

    defineProps(['niveauScolaire'])
</script>