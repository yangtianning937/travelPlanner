<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Enquiry> $enquiries
 */
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);

?>
<div class="enquiries index content">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= __('Enquiries') ?></h1>
                        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New Enquiries</a>
            </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= h('id') ?></th>
                    <th><?= h('customer_name') ?></th>
                    <th><?= h('customer_email') ?></th>
                    <th><?= h('customer_topic') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $enquiry): ?>
                <tr>
                    <td><?= $this->Number->format($enquiry->id) ?></td>
                    <td><?= h($enquiry->customer_name) ?></td>
                    <td><?= h($enquiry->customer_email) ?></td>
                    <td><?= h($enquiry->customer_topic) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquiry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
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
