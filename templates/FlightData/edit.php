<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightData $flightData
 */
?>
<div class="packageData index content">
    <div class="w-50 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flightData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flightData->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Flight Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flightData form content">
            <?= $this->Form->create($flightData) ?>
            <fieldset>
                <legend><?= __('Edit Flight Data') ?></legend>
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
