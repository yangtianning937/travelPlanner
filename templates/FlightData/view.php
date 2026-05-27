<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightData $flightData
 */


 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<div class="flightData index content">
    <div class="w-75 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Html->link(__('Edit Flight Data'), ['action' => 'edit', $flightData->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flight Data'), ['action' => 'delete', $flightData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightData->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flight Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flight Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="flightData view content">
        <h3>FlightData ID:      <?= h($flightData->id) ?></h3>
        <div class="w-50 p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Departure') ?></th>
                    <td><?= h($flightData->departure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($flightData->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('FlightData ID') ?></th>
                    <td><?= $this->Number->format($flightData->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flight Price') ?></th>
                    <td><?= $this->Number->format($flightData->flight_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departure Time') ?></th>
                    <td><?= h($flightData->departure_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination Time') ?></th>
                    <td><?= h($flightData->destination_time) ?></td>
                </tr>
            </table>
        </div>
        <div class="w-75 p-3">
            <div class="related">
                <h4><?= __('Related Flights') ?></h4>
                <?php if (!empty($flightData->flights)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Flights ID') ?></th>
                            <th><?= __('Leaving From') ?></th>
                            <th><?= __('Going To') ?></th>
                            <th><?= __('Flight Departure Time') ?></th>
                            <th><?= __('Flight Data ID') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($flightData->flights as $flights) : ?>
                        <tr>
                            <td><?= h($flights->id) ?></td>
                            <td><?= h($flights->leaveFrom) ?></td>
                            <td><?= h($flights->goingTo) ?></td>
                            <td><?= h($flights->flight_departure_time) ?></td>
                            <td><?= h($flights->flight_data_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flights', 'action' => 'view', $flights->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flights', 'action' => 'edit', $flights->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flights', 'action' => 'delete', $flights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flights->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-75 p-3">
            <div class="related">
                <h4><?= __('Related Packages') ?></h4>
                <?php if (!empty($flightData->packages)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Package ID') ?></th>
                            <th><?= __('Flight ID') ?></th>
                            <th><?= __('Hotel ID') ?></th>
                            <th><?= __('Service ID') ?></th>
                            <th><?= __('Package Description') ?></th>
                            <th><?= __('Package Data ID') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($flightData->packages as $packages) : ?>
                        <tr>
                            <td><?= h($packages->id) ?></td>
                            <td><?= h($packages->flight_id) ?></td>
                            <td><?= h($packages->hotel_id) ?></td>
                            <td><?= h($packages->service_id) ?></td>
                            <td><?= h($packages->package_desc) ?></td>
                            <td><?= h($packages->package_data_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Packages', 'action' => 'view', $packages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Packages', 'action' => 'edit', $packages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Packages', 'action' => 'delete', $packages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
