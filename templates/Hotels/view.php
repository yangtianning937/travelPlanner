<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hotel $hotel
 */
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
<div class="hotels index content">
    <div class="w-50 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Html->link(__('List Hotels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hotel'), ['controller'=>'Pages', 'action' => 'Home?form=hotel-form'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotels view content">
            <h3><?= h($hotel->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hotel Name') ?></th>
                    <td><?= h($hotel->hotel_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Address') ?></th>
                    <td><?= h($hotel->hotel_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel City') ?></th>
                    <td><?= h($hotel->hotel_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Country') ?></th>
                    <td><?= h($hotel->hotel_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Data') ?></th>
                    <td><?= $hotel->has('hotel_data') ? $this->Html->link($hotel->hotel_data->id, ['controller' => 'HotelData', 'action' => 'view', $hotel->hotel_data->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hotel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Price') ?></th>
                    <td><?= $this->Number->format($hotel->hotel_price) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($hotel->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Flight Id') ?></th>
                            <th><?= __('Hotel Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Package Id') ?></th>
                            <th><?= __('Reservation Type') ?></th>
                            <th><?= __('Trip Duration') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hotel->reservations as $reservations) : ?>
                        <tr>
                            <td><?= h($reservations->id) ?></td>
                            <td><?= h($reservations->customer_id) ?></td>
                            <td><?= h($reservations->flight_id) ?></td>
                            <td><?= h($reservations->hotel_id) ?></td>
                            <td><?= h($reservations->service_id) ?></td>
                            <td><?= h($reservations->package_id) ?></td>
                            <td><?= h($reservations->reservation_type) ?></td>
                            <td><?= h($reservations->trip_duration) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
