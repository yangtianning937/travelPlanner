<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Data $data
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Data'), ['action' => 'edit', $data->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Data'), ['action' => 'delete', $data->id], ['confirm' => __('Are you sure you want to delete # {0}?', $data->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="data view content">
            <h3><?= h($data->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Departure') ?></th>
                    <td><?= h($data->departure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination') ?></th>
                    <td><?= h($data->destination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Name') ?></th>
                    <td><?= h($data->hotel_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Address') ?></th>
                    <td><?= h($data->hotel_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($data->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Flight Price') ?></th>
                    <td><?= $this->Number->format($data->flight_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hotel Price') ?></th>
                    <td><?= $this->Number->format($data->hotel_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departure Time') ?></th>
                    <td><?= h($data->departure_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Destination Time') ?></th>
                    <td><?= h($data->destination_time) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Flights') ?></h4>
                <?php if (!empty($data->flights)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('LeaveFrom') ?></th>
                            <th><?= __('GoingTo') ?></th>
                            <th><?= __('Flight Departure Time') ?></th>
                            <th><?= __('Flight Data Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($data->flights as $flights) : ?>
                        <tr>
                            <td><?= h($flights->id) ?></td>
                            <td><?= h($flights->leaveFrom) ?></td>
                            <td><?= h($flights->goingTo) ?></td>
                            <td><?= h($flights->flight_departure_time) ?></td>
                            <td><?= h($flights->flight_data_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flights', 'action' => 'view', $flights->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flights', 'action' => 'edit', $flights->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flights', 'action' => 'delete', $flights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flights->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Hotels') ?></h4>
                <?php if (!empty($data->hotels)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('GoingTo') ?></th>
                            <th><?= __('Hotel Data Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($data->hotels as $hotels) : ?>
                        <tr>
                            <td><?= h($hotels->id) ?></td>
                            <td><?= h($hotels->goingTo) ?></td>
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
</div>
