<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageData $packageData
 */

 
 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<div class="packageData index content">
    <div class="w-75 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Html->link(__('Edit Package Data'), ['action' => 'edit', $packageData->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Package Data'), ['action' => 'delete', $packageData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageData->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Package Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Package Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packageData view content">
            <h3>PackageData ID:      <?= h($packageData->id) ?></h3>
            <div class="w-50 p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Departure') ?></th>
                    <td><?= h($packageData->departure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($packageData->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Name') ?></th>
                    <td><?= h($packageData->hotel_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Address') ?></th>
                    <td><?= h($packageData->hotel_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('PackageData Id') ?></th>
                    <td><?= $this->Number->format($packageData->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Price') ?></th>
                    <td><?= $this->Number->format($packageData->total_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departure Time') ?></th>
                    <td><?= h($packageData->departure_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination Time') ?></th>
                    <td><?= h($packageData->destination_time) ?></td>
                </tr>
            </table>
            </div>
            <div class="w-100 p-3">
            <div class="related">
                <h4><?= __('Related Packages') ?></h4>
                <?php if (!empty($packageData->packages)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Package ID') ?></th>
                            <th><?= __('Flight ID') ?></th>
                            <th><?= __('Hotel ID') ?></th>
                            <th><?= __('Service ID') ?></th>
                            <th><?= __('Package Description') ?></th>
                            <th><?= __('Package Data ID') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($packageData->packages as $packages) : ?>
                        <tr>
                            <td><?= h($packages->id) ?></td>
                            <td><?= h($packages->flight_id) ?></td>
                            <td><?= h($packages->hotel_id) ?></td>
                            <td><?= h($packages->service_id) ?></td>
                            <td><?= h($packages->package_desc) ?></td>
                            <td><?= h($packages->package_data_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Packages', 'action' => 'view', $packages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Packages', 'action' => 'edit', $packages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Packages', 'action' => 'delete', $packages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packages->id)]) ?>
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
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
</div>
