<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservations view content">
            <h3><?= h($reservation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $reservation->has('customer') ? $this->Html->link($reservation->customer->id, ['controller' => 'Customers', 'action' => 'view', $reservation->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Flight') ?></th>
                    <td><?= $reservation->has('flight') ? $this->Html->link($reservation->flight->id, ['controller' => 'Flights', 'action' => 'view', $reservation->flight->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel') ?></th>
                    <td><?= $reservation->has('hotel') ? $this->Html->link($reservation->hotel->id, ['controller' => 'Hotels', 'action' => 'view', $reservation->hotel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $reservation->has('service') ? $this->Html->link($reservation->service->id, ['controller' => 'Services', 'action' => 'view', $reservation->service->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $reservation->has('package') ? $this->Html->link($reservation->package->id, ['controller' => 'Packages', 'action' => 'view', $reservation->package->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reservation Type') ?></th>
                    <td><?= h($reservation->reservation_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trip Duration') ?></th>
                    <td><?= h($reservation->trip_duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservation Results') ?></h4>
                <?php if (!empty($reservation->reservation_results)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reservation Id') ?></th>
                            <th><?= __('Result Desc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reservation->reservation_results as $reservationResults) : ?>
                        <tr>
                            <td><?= h($reservationResults->id) ?></td>
                            <td><?= h($reservationResults->reservation_id) ?></td>
                            <td><?= h($reservationResults->result_desc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ReservationResults', 'action' => 'view', $reservationResults->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ReservationResults', 'action' => 'edit', $reservationResults->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReservationResults', 'action' => 'delete', $reservationResults->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationResults->id)]) ?>
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
