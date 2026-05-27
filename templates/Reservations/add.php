<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $flights
 * @var \Cake\Collection\CollectionInterface|string[] $hotels
 * @var \Cake\Collection\CollectionInterface|string[] $services
 * @var \Cake\Collection\CollectionInterface|string[] $packages
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="reservations form content">
            <?= $this->Form->create($reservation) ?>
            <fieldset>
                <legend><?= __('Add Reservation') ?></legend>
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
