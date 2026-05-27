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
    <?= $this->Html->css('home-model.css') ?>
    <?= $this->Html->script('jquery-3.6.4.min.js'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner</title>
    <link rel="icon" type="image/x-icon" href="/webroot/favicon1.ico">
    <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Poppins:wght@400;700&family=Rozha+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="webroot/css/home.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .paymentInput {
            width: 100% !important;
            padding: 12px 20px !important;
            margin: 8px 0 !important;
            box-sizing: border-box !important;
        }
    </style>
</head>

<body>

<header id="top">
    <div>
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

        <h2>Explore The World!</h2>

        <p>Welcome to TravelPlanner, your local travel agency! Our team of experienced travel advisors is passionate about creating unique and personalized travel experiences for our clients. From adventure-packed vacations to relaxing getaways, we specialize in crafting itineraries tailored to your interests and preferences. We believe that travel is a necessity for personal growth and cultural understanding, and we are committed to responsible and sustainable tourism. Let us help you create unforgettable memories on your next adventure!</p>

    </div>
</header>



<section id="choose-role">
    <div class="main">
        <button type="button" class="btn btn-outline-info" onclick="switchForm('flight-form')">Flight</button>
        <button type="button" class="btn btn-outline-info" onclick="switchForm('hotel-form')">Hotel</button>
        <button type="button" class="btn btn-outline-info" onclick="switchForm('package-form')">Package</button>

        <?php

        $form = 'flight-form';
        if (isset($_GET['form']) && ($_GET['form'] == 'hotel-form' || $_GET['form'] == 'package-form')) {
            $form = $_GET['form'];
        }

        if ($form == 'flight-form') {
            echo '<form id="flight-form" method="post">';
            echo '<h2>Please Enter Flight Details</h2>';
            echo '<input type="hidden" name="queryType" value="flight-result">';
            echo '<input type="text" id="from" name="from" placeholder="Flying From" required><br>';
            echo '<input type="text" id="to" name="to" placeholder="Flying To" required><br>';
            echo '<label for="date">Departure Time: </label>';
            echo '<input type="date" required id="date" name="date"><br>';
            echo '<input type="submit" value="Search">';
            echo '</form>';

        } else if ($form == 'hotel-form') {
            echo '<form id="hotel-form" method="post">';
            echo '<h2>Please Enter Hotel Destination</h2>';
            echo '<input type="hidden" name="queryType" value="hotel-result">';
            echo '<label for="destination">GoingTo: </label>';
            echo '<input type="text" id="destination" name="destination" placeholder="Destination" required><br>';
            echo '<input type="submit" value="Search">';
            echo '</form>';

        } else if ($form == 'package-form') {
            echo '<form id="package-form" method="post">';
            echo '<h2>Please Enter Package Details</h2>';
            echo '<input type="hidden" name="queryType" value="packages-result">';
            echo '<label for="from">Flying From: </label>';
            echo '<input type="text" id="from" name="from" placeholder="Flying From" required><br>';
            echo '<label for="to">Destination: </label>';
            echo '<input type="text" id="to" name="to" placeholder="Destination" required><br>';
            echo '<label for="date">Departure Time: </label>';
            echo '<input type="date" id="date" name="date"><br>';
            echo '<input type="submit" value="Search">';
            echo '</form>';
        }

        ?>

        <?php if (!empty($resultType)) { ?>
            <?php if($resultType == 'flight-result') { ?>
                    <table>
                        <tr>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Destination Time</th>
                            <th>Price</th>

                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($res as $flight) {?>
                        <tr>
                            <td><?= $flight->departure ?></td>
                            <td><?= $flight->destination ?></td>
                            <td><?= $flight->departure_time ?></td>
                            <td><?= $flight->destination_time ?></td>
                            <td><?= $flight->flight_price ?></td>
                            <td class="actions">
                                <a class="dropdown-item" onclick="toValue(<?= $flight->flight_price ?>, <?= $flight->id ?>, 'flight')" href="#" data-toggle="modal" data-target="#flightModal">
                                    Booking
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            <?php } else if ($resultType == 'hotel-result') { ?>
                    <table>
                        <tr>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Hotel price</th>
                            <th>Hotel City</th>
                            <th>Hotel Country</th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($res as $hotel) {?>
                        <tr>
                            <td><?= $hotel->hotel_name ?></td>
                            <td><?= $hotel->hotel_address ?></td>
                            <td><?= $hotel->hotel_price ?></td>
                            <td><?= $hotel->hotel_city ?></td>
                            <td><?= $hotel->hotel_country ?></td>
                            <td class="actions">
                                <a class="dropdown-item" onclick="toValue(<?= $hotel->hotel_price ?>, <?= $hotel->id ?>, 'hotel')" href="#" data-toggle="modal" data-target="#hotelModal">
                                    Booking
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            <?php } else if ($resultType == 'packages-result') { ?>
                    <table>
                        <tr>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Destination Time</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>Price</th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($res as $package) {?>
                        <tr>
                            <td><?= $package->departure ?></td>
                            <td><?= $package->destination ?></td>
                            <td><?= $package->departure_time ?></td>
                            <td><?= $package->destination_time ?></td>
                            <td><?= $package->hotel_name ?></td>
                            <td><?= $package->hotel_address ?></td>
                            <td><?= $package->total_price ?></td>
                            <td class="actions">
                                <a class="dropdown-item" href="#" onclick="toValue(<?= $package->total_price ?>,<?= $package->id ?>, 'packages')" data-toggle="modal" data-target="#packageModal">
                                    Booking
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            <?php } ?>
        <?php } ?>
</section>
<div class="modal fade" id="flightModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Payment</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" action="/process_payment" method="POST">
                    <label for="cardNumber">Card Number：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardNumber"
                        name="cardNumber"
                        placeholder="Please input card number"
                        required
                    />
                    <label for="cardName">Card Holder：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardName"
                        name="cardName"
                        placeholder="Please input your name"
                        required
                    />
                    <label for="expiryDate">Expiry Date：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="expiryDate"
                        name="expiryDate"
                        placeholder="MM/YY"
                    />
                    <label for="cvv">CVV：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cvv"
                        name="cvv"
                        placeholder="Please input CVV"
                        required
                    />
                    <label for="total">Total：</label>
                    <input
                        type="text"
                        class="paymentInput total"
                        name="total"
                        disabled
                    />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" onclick="" href="#" >Yes</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="hotelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Payment</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" action="/process_payment" method="POST">
                    <label for="cardNumber">Card Number：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardNumber"
                        name="cardNumber"
                        placeholder="Please input card number"
                        required
                    />
                    <label for="cardName">Card Holder：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardName"
                        name="cardName"
                        placeholder="Please input your name"
                        required
                    />
                    <label for="expiryDate">Expiry Date：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="expiryDate"
                        name="expiryDate"
                        placeholder="MM/YY"
                        required
                        onchange="checkDate()"
                    />
                    <label for="cvv">CVV：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cvv"
                        name="cvv"
                        placeholder="Please input CVV"
                        required
                    />
                    <label for="total">Total：</label>
                    <input
                        class="paymentInput total"
                        type="text"
                        name="total"
                        disabled
                    />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" onclick="" href="#">Yes</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Payment</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="paymentForm" action="/process_payment" method="POST">
                    <label for="cardNumber">Card Number：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardNumber"
                        name="cardNumber"
                        placeholder="Please input card number"
                        required
                    />
                    <label for="cardName">Card Holder：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cardName"
                        name="cardName"
                        placeholder="Please input your name"
                        required
                    />
                    <label for="expiryDate">Expiry Date：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="expiryDate"
                        name="expiryDate"
                        placeholder="MM/YY"
                        required
                    />
                    <label for="cvv">CVV：</label>
                    <input
                        class="paymentInput"
                        type="text"
                        id="cvv"
                        name="cvv"
                        placeholder="Please input CVV"
                        required
                    />
                    <label for="total">Total：</label>
                    <input
                        type="text"
                        class="paymentInput total"
                        name="total"
                        disabled
                    />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" onclick="" href="#">Yes</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('../vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>

<!-- Core plugin JavaScript-->

<?= $this->Html->script('../vendor/jquery-easing/jquery.easing.min.js'); ?>
<footer>
    <div>
        <h6><a href="index.html">Travel Planner</a></h6>

        <p>&copy; 2023 Travel Planner Group Pty Ltd. All Rights Reserved &bull; Privacy Policy &bull; Terms &amp; Conditions</p>

        <a href="#top">Back to top</a>
    </div>
</footer>
<script>
    // switch form
    function switchForm(form) {
        window.location.href = '?form=' + form;
    }

    function redirect(url, type) {
        if (type == 'flight') {
            var cardNumber = $("#flightModal #cardNumber").val();
            var cvv = $("#flightModal #cvv").val();
            var expiryDate = $("#flightModal #expiryDate").val();
            var cardName = $("#flightModal #cardName").val();
        } else if (type == 'hotel') {
            var cardNumber = $("#hotelModal #cardNumber").val();
            var cvv = $("#hotelModal #cvv").val();
            var expiryDate = $("#hotelModal #expiryDate").val();
            var cardName = $("#hotelModal #cardName").val();
        } else if (type == 'package') {
            var cardNumber = $("#packageModal #cardNumber").val();
            var cvv = $("#packageModal #cvv").val();
            var expiryDate = $("#packageModal #expiryDate").val();
            var cardName = $("#packageModal #cardName").val();
        }

        if (cardNumber.length != 16) {
            alert('Card Number must be 16 digits');
            return false;
        }
        if (cardName == '') {
            alert('Card Holder must be not empty');
            return false;
        }
        var reg = new RegExp("^[0-9]{2}/[0-9]{2}$");
        if (!reg.test(expiryDate)) {
            alert('Expiry Date must be MM/YY format');
            return false;
        }
        if (cvv.length != 3) {
            alert('CVV must be 3 digits');
            return false;
        }
        // redirect to url
        window.location.href = url;
    }

    function toValue(price, id, type) {
        $('.total').val(price);
        var url = "<?=\Cake\Routing\Router::url('/')?>";
        if (type == 'flight') {
            var attr = "redirect('"+url+"flights/save-flight/"+id+"', 'flight')";
            $("#flightModal a").attr('onclick', attr);
        } else if (type == 'hotel') {
            var attr = "redirect('"+url+"hotels/save-hotel/"+id+"', 'hotel')";
            $("#hotelModal a").attr('onclick', attr);
            // $("#hotelModal a").attr('href', url+"hotels/save-hotel/"+id);
        } else {
            var attr = "redirect('"+url+"packages/save-package/"+id+"', 'package')";
            $("#packageModal a").attr('onclick', attr);
            // $("#packageModal a").attr('href', url+"packages/save-package/"+id);
        }
    }
</script>
</body>
</html>
