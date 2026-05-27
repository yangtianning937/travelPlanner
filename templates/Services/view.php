<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td><?= h($service->service_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Detail') ?></th>
                    <td><?= h($service->service_detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Packages') ?></h4>
                <?php if (!empty($service->packages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Flight Id') ?></th>
                            <th><?= __('Hotel Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Package Desc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($service->packages as $packages) : ?>
                        <tr>
                            <td><?= h($packages->id) ?></td>
                            <td><?= h($packages->flight_id) ?></td>
                            <td><?= h($packages->hotel_id) ?></td>
                            <td><?= h($packages->service_id) ?></td>
                            <td><?= h($packages->package_desc) ?></td>
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
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($service->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Flight Id') ?></th>
                            <th><?= __('Hotel Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Package Id') ?></th>
                            <th><?= __('Reservation Type') ?></th>
                            <th><?= __('Trip Duration') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($service->reservations as $reservations) : ?>
                        <tr>
                            <td><?= h($reservations->id) ?></td>
                            <td><?= h($reservations->customer_id) ?></td>
                            <td><?= h($reservations->flight_id) ?></td>
                            <td><?= h($reservations->hotel_id) ?></td>
                            <td><?= h($reservations->service_id) ?></td>
                            <td><?= h($reservations->package_id) ?></td>
                            <td><?= h($reservations->reservation_type) ?></td>
                            <td><?= h($reservations->trip_duration) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
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
