<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 * @var \Cake\Collection\CollectionInterface|string[] $flightData
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="flights form content">
            <?= $this->Form->create($flight) ?>
            <fieldset>
                <legend><?= __('Add Flight') ?></legend>
                <?php
                    echo $this->Form->control('leaveFrom');
                    echo $this->Form->control('goingTo');
                    echo $this->Form->control('flight_departure_time');
                    echo $this->Form->control('flight_data_id', ['options' => $flightData]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
