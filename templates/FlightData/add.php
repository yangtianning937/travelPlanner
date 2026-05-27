<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightData $flightData
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="flightData form content">
            <?= $this->Form->create($flightData) ?>
            <fieldset>
                <legend><?= __('Add Flight Data') ?></legend>
                <?php
                    echo $this->Form->control('departure');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('departure_time');
                    echo $this->Form->control('destination_time');
                    echo $this->Form->control('flight_price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
