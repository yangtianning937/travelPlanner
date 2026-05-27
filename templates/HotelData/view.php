<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HotelData $hotelData
 */


 echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
 echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);
?>
<div class="packageData index content">
    <div class="w-75 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Html->link(__('Edit Hotel Data'), ['action' => 'edit', $hotelData->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hotel Data'), ['action' => 'delete', $hotelData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotelData->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hotel Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hotel Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotelData view content">
            <h3>PackageData ID:      <?= h($hotelData->id) ?></h3>
            <div class="w-50 p-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Hotel Name') ?></th>
                    <td><?= h($hotelData->hotel_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Address') ?></th>
                    <td><?= h($hotelData->hotel_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel City') ?></th>
                    <td><?= h($hotelData->hotel_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Country') ?></th>
                    <td><?= h($hotelData->hotel_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hotelData->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Price') ?></th>
                    <td><?= $this->Number->format($hotelData->hotel_price) ?></td>
                </tr>
            </table>
            </div>
            <div class="w-100 p-3">
            <div class="related">
                <h4><?= __('Related Hotels') ?></h4>
                <?php if (!empty($hotelData->hotels)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Hotel Desc') ?></th>
                            <th><?= __('Hotel Data Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hotelData->hotels as $hotels) : ?>
                        <tr>
                            <td><?= h($hotels->id) ?></td>
                            <td><?= h($hotels->hotel_desc) ?></td>
                            <td><?= h($hotels->hotel_data_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hotels', 'action' => 'view', $hotels->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hotels', 'action' => 'edit', $hotels->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotels', 'action' => 'delete', $hotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotels->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
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
