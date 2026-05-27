<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 * @var string[]|\Cake\Collection\CollectionInterface $flights
 * @var string[]|\Cake\Collection\CollectionInterface $hotels
 * @var string[]|\Cake\Collection\CollectionInterface $services
 * @var string[]|\Cake\Collection\CollectionInterface $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reservation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservations form content">
            <?= $this->Form->create($reservation) ?>
            <fieldset>
                <legend><?= __('Edit Reservation') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('flight_id', ['options' => $flights, 'empty' => true]);
                    echo $this->Form->control('hotel_id', ['options' => $hotels, 'empty' => true]);
                    echo $this->Form->control('service_id', ['options' => $services, 'empty' => true]);
                    echo $this->Form->control('package_id', ['options' => $packages, 'empty' => true]);
                    echo $this->Form->control('reservation_type');
                    echo $this->Form->control('trip_duration');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
