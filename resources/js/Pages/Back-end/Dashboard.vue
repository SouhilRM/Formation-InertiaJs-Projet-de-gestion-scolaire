<template>

    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-primary">
                            <i class="material-icons-outlined">paid</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Today's Sales</span>
                            <span class="widget-stats-amount">$38,211</span>
                            <span class="widget-stats-info">471 Orders Total</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                            <i class="material-icons">keyboard_arrow_down</i> 4%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-warning">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Active Users</span>
                            <span class="widget-stats-amount">23,491</span>
                            <span class="widget-stats-info">790 unique this month</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 12%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-danger">
                            <i class="material-icons-outlined">file_download</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Downloads</span>
                            <span class="widget-stats-amount">140,390</span>
                            <span class="widget-stats-info">87 items downloaded</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 7%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-4">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">In Progress Tasks<span class="badge badge-success badge-style-light">37% total</span></h5>
                </div>
                <div class="card-body">
                    <span class="text-muted m-b-xs d-block">showing 5 out of 9 in progress tasks.</span>
                    <ul class="widget-list-content list-unstyled">
                        <li class="widget-list-item widget-list-item-green">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">article</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Dashboard UI optimisations
                                </a>
                                <span class="widget-list-item-description-progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-blue">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">verified_user</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Mailbox cleanup
                                </a>
                                <span class="widget-list-item-description-progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 57%;" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-purple">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">watch_later</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Header scroll bugfix
                                </a>
                                <span class="widget-list-item-description-progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-yellow">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">extension</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    Localization for file manager
                                </a>
                                <span class="widget-list-item-description-progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </span>
                            </span>
                        </li>
                        <li class="widget-list-item widget-list-item-red">
                            <span class="widget-list-item-icon"><i class="material-icons-outlined">invert_colors</i></span>
                            <span class="widget-list-item-description">
                                <a href="#" class="widget-list-item-description-title">
                                    New E-commerce UX/UI design
                                </a>
                                <span class="widget-list-item-description-progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-popular-product">
                <div class="card-body">
                    <div class="widget-popular-product-container">
                        
                        <div class="widget-popular-product-tags">
                            <span class="badge rounded-pill badge-secondary badge-style-light">Science</span>
                            <span class="badge rounded-pill badge-success badge-style-light">Lifestyle</span>
                            <span class="badge rounded-pill badge-danger badge-style-light">People</span>
                        </div>
                        <div class="widget-popular-product-content">
                            <a href="#" class="widget-popular-product-title">Banana Donut</a>
                            <p class="widget-popular-product-text m-b-md">Quisque congue risus sit amet pellentesque fermentum. Etiam nibh erat, convallis ac dui nec, imperdiet dignissim nulla. Ut tincidunt tellus sit amet elit viverra porttitor. Mauris at tellus a nisl accumsan egestas suscipit..</p>
                            <span class="widget-popular-product-rating">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                                <span class="widget-popular-product-rating-num">4.4</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-bank-card" style="height: 220px;">
                <div class="card-body">
                    <div class="widget-bank-card-container widget-bank-card-visa d-flex flex-column">
                        <div class="widget-bank-card-logo"></div>
                        <span class="widget-bank-card-balance-title">
                            BALANCE
                        </span>
                        <span class="widget-bank-card-balance">
                            $5,688
                        </span>
                        <span class="widget-bank-card-number mt-auto">
                            **** **** **** 4408
                        </span>
                    </div>
                </div>
            </div>
            <div class="card widget widget-bank-card" style="height: 220px;">
                <div class="card-body">
                    <div class="widget-bank-card-container widget-bank-card-mastercard d-flex flex-column">
                        <div class="widget-bank-card-logo"></div>
                        <span class="widget-bank-card-balance-title">
                            BALANCE
                        </span>
                        <span class="widget-bank-card-balance">
                            $12,079
                        </span>
                        <span class="widget-bank-card-number mt-auto">
                            **** **** **** 0999
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
</template>