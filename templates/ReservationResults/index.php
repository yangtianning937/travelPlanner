<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ReservationResult> $reservationResults
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="reservationResults index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Reservation Results') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> New Reservation Results</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('reservation_id') ?></th>
                    <th><?= h('result_desc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservationResults as $reservationResult): ?>
                <tr>
                    <td><?= $this->Number->format($reservationResult->id) ?></td>
                    <td><?= $reservationResult->has('reservation') ? $this->Html->link($reservationResult->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $reservationResult->reservation->id]) : '' ?></td>
                    <td><?= h($reservationResult->result_desc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservationResult->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservationResult->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservationResult->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationResult->id)]) ?>
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
