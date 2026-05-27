<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReservationResult $reservationResult
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reservation Result'), ['action' => 'edit', $reservationResult->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation Result'), ['action' => 'delete', $reservationResult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationResult->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservation Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation Result'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservationResults view content">
            <h3><?= h($reservationResult->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reservation') ?></th>
                    <td><?= $reservationResult->has('reservation') ? $this->Html->link($reservationResult->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $reservationResult->reservation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Result Desc') ?></th>
                    <td><?= h($reservationResult->result_desc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reservationResult->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
