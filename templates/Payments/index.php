<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payment> $payments
 */

 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="payments index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Payments') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> New Payment</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('customer_id') ?></th>
                    <th><?= h('payment_type') ?></th>
                    <th><?= h('payment_account') ?></th>
                    <th><?= h('payment_date') ?></th>
                    <th><?= h('payment_amount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment): ?>
                <tr>
                    <td><?= $this->Number->format($payment->id) ?></td>
                    <td><?= $payment->has('customer') ? $this->Html->link($payment->customer->id, ['controller' => 'Customers', 'action' => 'view', $payment->customer->id]) : '' ?></td>
                    <td><?= h($payment->payment_type) ?></td>
                    <td><?= h($payment->payment_account) ?></td>
                    <td><?= h($payment->payment_date) ?></td>
                    <td><?= $this->Number->format($payment->payment_amount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
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
