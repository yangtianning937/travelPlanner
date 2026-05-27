<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\HotelData> $hotelData
 */

 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>

<div class="hotelData index content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= __('HotelData') ?></h1>
                        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i>New Hotel Data</a>
            </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('hotel_name') ?></th>
                    <th><?= h('hotel_price') ?></th>
                    <th><?= h('hotel_address') ?></th>
                    <th><?= h('hotel_city') ?></th>
                    <th><?= h('hotel_country') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotelData as $hotelData): ?>
                <tr>
                    <td><?= $this->Number->format($hotelData->id) ?></td>
                    <td><?= h($hotelData->hotel_name) ?></td>
                    <td><?= $this->Number->format($hotelData->hotel_price) ?></td>
                    <td><?= h($hotelData->hotel_address) ?></td>
                    <td><?= h($hotelData->hotel_city) ?></td>
                    <td><?= h($hotelData->hotel_country) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hotelData->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotelData->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotelData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelData->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
