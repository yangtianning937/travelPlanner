<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Flight> $flights
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


<body>



<div class="flights index content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= __('Flights') ?></h1>
            <a href="<?= $this->Url->build(['controller'=>'Pages','action'=> 'Home?form=flight-form']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>New Flight</a>
        </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('LeaveFrom') ?></th>
                    <th><?= h('GoingTo') ?></th>
                    <th><?= h('Flight Departure Time') ?></th>
                    <th><?= __('Flight Arrival Time') ?></th>
                    <th><?= __('Price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flights as $flight): ?>
                <tr>
                    <td><?= $this->Number->format($flight->id) ?></td>
                    <td><?= h($flight->leaveFrom) ?></td>
                    <td><?= h($flight->goingTo) ?></td>
                    <td><?= h($flight->flight_departure_time) ?></td>
                    <td><?php if ($flight->has('flight_data')) { echo $flight->flight_data->destination_time; } else { echo 'N/A'; } ?></td>
                    <td><?php if ($flight->has('flight_data')) { echo $flight->flight_data->flight_price; } else { echo 'N/A'; } ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>


</div>
</body>
</html>
