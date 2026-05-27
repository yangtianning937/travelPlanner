<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reservation> $reservations
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="reservations index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Reservations') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> New Reservation</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('customer_id') ?></th>
                    <th><?= h('flight_id') ?></th>
                    <th><?= h('hotel_id') ?></th>
                    <th><?= h('service_id') ?></th>
                    <th><?= h('package_id') ?></th>
                    <th><?= h('reservation_type') ?></th>
                    <th><?= h('trip_duration') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                    <td><?= $reservation->has('customer') ? $this->Html->link($reservation->customer->id, ['controller' => 'Customers', 'action' => 'view', $reservation->customer->id]) : '' ?></td>
                    <td><?= $reservation->has('flight') ? $this->Html->link($reservation->flight->id, ['controller' => 'Flights', 'action' => 'view', $reservation->flight->id]) : '' ?></td>
                    <td><?= $reservation->has('hotel') ? $this->Html->link($reservation->hotel->id, ['controller' => 'Hotels', 'action' => 'view', $reservation->hotel->id]) : '' ?></td>
                    <td><?= $reservation->has('service') ? $this->Html->link($reservation->service->id, ['controller' => 'Services', 'action' => 'view', $reservation->service->id]) : '' ?></td>
                    <td><?= $reservation->has('package') ? $this->Html->link($reservation->package->id, ['controller' => 'Packages', 'action' => 'view', $reservation->package->id]) : '' ?></td>
                    <td><?= h($reservation->reservation_type) ?></td>
                    <td><?= h($reservation->trip_duration) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</div>
