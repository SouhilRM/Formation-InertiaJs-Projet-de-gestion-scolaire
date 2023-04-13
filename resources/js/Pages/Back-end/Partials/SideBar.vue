<template>
    <div class="app-sidebar">

        <div class="logo">
            <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
            <div class="sidebar-user-switcher user-activity-online">
                <a href="#">
                    <img src="../../../../assets/images/avatars/avatar.png">
                    <span class="activity-indicator"></span>
                    <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
                </a>
            </div>
        </div>

        <div class="app-menu">
            <ul class="accordion-menu">

                <li class="sidebar-title">
                    Projet
                </li>

                    <li :class="{ 'active-page' : $page.component === 'Back-end/Dashboard'}">
                        <Link :href="route('Dashboard')"><i class="material-icons-two-tone">dashboard</i>Dashboard</Link>
                    </li>

                    <li :class="{ 'active-page' : $page.component === 'Back-end/NiveauScolaire/IndexNS'}">
                        <Link :href="route('niveauscolaire.index')"><i class="material-icons-two-tone">star</i>Niveaux Scolaires</Link>
                    </li> 

                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Etudiants<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        
                        <ul>
                            
                            <li>
                                <Link :href="route('etudiant.index')" :class="{ 'active' : $page.component === 'Back-end/Etudiant/IndexEtudiant' }">Liste des étudiants</Link>
                            </li>
                            <li>
                                <Link :href="route('etudiant.create')" :class="{ 'active' : $page.component === 'Back-end/Etudiant/CreateEtudiant' }">Ajouter un étudiant</Link>
                            </li>
                        </ul>
                        
                    </li>

                     
                    
                    
                    <li>
                        <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end">87</span></a>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Pages<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="settings.html">Settings</a>
                            </li>
                            <li>
                                <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="sign-in.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li>
                
                
                <li class="sidebar-title">
                    Other
                </li>
                <li>
                    <a href="#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
                </li>

            </ul>
        </div>

    </div>
    <!-- <ul v-if="$page.component.startsWith('Back-end/Etudiant/')">
       <h1>hhooooooooooooooooooooooyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy sub-menu</h1>
    </ul> -->
</template>

<script setup>
    import { Link } from '@inertiajs/vue3' 
</script>
