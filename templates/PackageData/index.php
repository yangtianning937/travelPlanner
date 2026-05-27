<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PackageData> $packageData
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<div class="packageData index content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= __('PackageData') ?></h1>
                        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i>  New Package Data</a>
            </div>


    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('departure') ?></th>
                    <th><?= h('destination') ?></th>
                    <th><?= h('departure_time') ?></th>
                    <th><?= h('destination_time') ?></th>
                    <th><?= h('hotel_name') ?></th>
                    <th><?= h('hotel_address') ?></th>
                    <th><?= h('total_price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packageData as $packageData): ?>
                <tr>
                    <td><?= $this->Number->format($packageData->id) ?></td>
                    <td><?= h($packageData->departure) ?></td>
                    <td><?= h($packageData->destination) ?></td>
                    <td><?= h($packageData->departure_time) ?></td>
                    <td><?= h($packageData->destination_time) ?></td>
                    <td><?= h($packageData->hotel_name) ?></td>
                    <td><?= h($packageData->hotel_address) ?></td>
                    <td><?= $this->Number->format($packageData->total_price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $packageData->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $packageData->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $packageData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageData->id)]) ?>
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
