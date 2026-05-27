<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Package $package
 */


 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Travel Planner
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'history']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css('home-model.css') ?>
    <?= $this->Html->script('jquery-3.6.4.min.js'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Poppins:wght@400;700&family=Rozha+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="webroot/css/history.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<header id="top">
        <h1><a href="<?= $this->Url->build(['controller'=>'Pages','action'=> 'home']) ?>">Travel Planner</a></h1>

        <nav>
            <ul>

                <li><a href="<?= $this->Url->build(['controller'=>'Flights','action'=> 'index']) ?>">Flights History</a></li>
                <li><a href="<?= $this->Url->build(['controller'=>'Hotels','action'=> 'index']) ?>">Hotels History</a></li>
                <li><a href="<?= $this->Url->build(['controller'=>'Packages','action'=> 'index']) ?>">Packages History</a></li>
                <li><a href="<?= $this->Url->build(['controller'=>'Enquiries','action'=> 'add']) ?>">Contact Us</a></li>

                <li>
                
                    <?php

                    if ($this->Identity->isLoggedIn()) {
                        if ($this->Identity->get('id') == 1) {
                            echo $this->Html->link(__('Admin Portal   |'), ['controller' => 'Users', 'action' => 'index']);
                            echo $this->Html->link(__('|      Logout'), ['controller' => 'Users', 'action' => 'logout']);
                        }
                        else {
                            echo $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']);
                        }
                    }else{
                        echo $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']);
                    }
                    ?>
                </li>
            </ul>

        </nav>

       
</header>
<div class="packages index content">
    <div class="w-50 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Html->link(__('List Packages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Package'), ['controller'=>'Pages', 'action' => 'Home?form=package-form'], ['class' => 'side-nav-item']) ?>
    </div>
    <div class="column-responsive column-80">
        <div class="packages view content">
        <h3>Package ID:      <?= h($package->id) ?></h3>
        <div class="w-75 p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Package ID') ?></th>
                    <td><?= $this->Number->format($package->id) ?></td>
                </tr>
                <tr>
                    <th><?= h('LeaveFrom') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->departure; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= h('GoingTo') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->destination; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= h('Flight Departure Time') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->departure_time; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= __('Flight Arrival Time') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->destination_time; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Name') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->hotel_name; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Address') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->hotel_address; } else { echo 'N/A'; } ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?php if ($package->has('package_data')) { echo $package->package_data->total_price; } else { echo 'N/A'; } ?></td>
                </tr>
            </table>
        </div>

    </div>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
