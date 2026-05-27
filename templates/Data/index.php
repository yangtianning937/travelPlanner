<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Data> $data
 */
?>
<div class="data index content">
    <?= $this->Html->link(__('New Data'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Data') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('departure') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('flight_price') ?></th>
                    <th><?= $this->Paginator->sort('departure_time') ?></th>
                    <th><?= $this->Paginator->sort('destination_time') ?></th>
                    <th><?= $this->Paginator->sort('hotel_name') ?></th>
                    <th><?= $this->Paginator->sort('hotel_price') ?></th>
                    <th><?= $this->Paginator->sort('hotel_address') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data): ?>
                <tr>
                    <td><?= $this->Number->format($data->id) ?></td>
                    <td><?= h($data->departure) ?></td>
                    <td><?= h($data->destination) ?></td>
                    <td><?= $this->Number->format($data->flight_price) ?></td>
                    <td><?= h($data->departure_time) ?></td>
                    <td><?= h($data->destination_time) ?></td>
                    <td><?= h($data->hotel_name) ?></td>
                    <td><?= $this->Number->format($data->hotel_price) ?></td>
                    <td><?= h($data->hotel_address) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $data->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $data->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $data->id], ['confirm' => __('Are you sure you want to delete # {0}?', $data->id)]) ?>
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
</div>
