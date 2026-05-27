<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 */


 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<div class="Enquiries index content">
    <div class="w-75 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Enquiry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="enquiries view content">
        <h3>Enquiries ID:      <?= h($enquiry->id) ?></h3>
        <div class="w-50 p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Customer Name') ?></th>
                    <td><?= h($enquiry->customer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($enquiry->customer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Topic') ?></th>
                    <td><?= h($enquiry->customer_topic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($enquiry->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($enquiry->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
