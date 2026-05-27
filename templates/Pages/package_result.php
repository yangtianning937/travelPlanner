<?php
$this->disableAutoLayout();
?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$this->disableAutoLayout();
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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        /* style for the navigation bar */
        .navbar {
            background-color: #0E86D4;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #0E86D4;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .my-image {
            max-width: 70%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .main{
            width: 80%;margin: 0 auto;text-align: center
        }

        .main ul{
            width: 90%;margin: 0 auto;text-align: center
        }

        h2 {text-align: center;font-size: 20px;}
        h2 a {margin-right: 15px;color: navy;text-decoration: none}
        h2 a:last-child {margin-right: 0px;}
        h2 a:hover {color: crimson;text-decoration: underline}

        .navbar a.login {
            float: right;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            padding: 14px;
        }

        .navbar a.login i {
            margin-right: 5px;
        }

        .navbar a.login:hover {
            background-color: #fff;
            color: #0E86D4;
        }


    </style>
</head>
<body>

<header id="top">
    <div>
        <h1><a href="#home">Travel Planner</a></h1>

        <nav>
            <li><a class="active" href="#home"<?= $this->Url->build(['controller'=>'Pages','action'=> 'home']) ?>">Home</a></li>
            <li><a href="<?= $this->Url->build(['controller'=>'Flights','action'=> 'index']) ?>">Flights</a></li>
            <li><a href="<?= $this->Url->build(['controller'=>'Hotels','action'=> 'index']) ?>">Hotels</a></li>
            <li><a href="<?= $this->Url->build(['controller'=>'Packages','action'=> 'index']) ?>">Packages</a></li>
            <li><a href="<?= $this->Url->build(['controller'=>'Enquiries','action'=> 'add']) ?>">Contact Us</a></li>

            <li>
                <?php
                if ($this->Identity->isLoggedIn()) {
                    echo $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']);
                }else{
                    echo $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']);
                }
                ?>
            </li>

        </nav>
    </div>
</header>



<div class="main">
    <?php foreach ($res as $package) {?>
        <table>
            <tr>
                <th>Departure</th>
                <th>Destination</th>
                <th>Departure Time</th>
                <th>Destination Time</th>
                <th>Hotel Name</th>
                <th>Hotel Address</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <tr>
                <td><?= $package->departure ?></td>
                <td><?= $package->destination ?></td>
                <td><?= $package->departure_time ?></td>
                <td><?= $package->destination_time ?></td>
                <td><?= $package->hotel_name ?></td>
                <td><?= $package->hotel_address ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Booking'), ['controller' => 'Packages', 'action' => 'save_package', $package->id]) ?>
                </td>
            </tr>
        </table>
    <?php } ?>
</div>

<footer class="footer">
    Copyright © TravelPlanner 2023 Team22
</footer>

</body>

</html>
