<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReservationResult $reservationResult
 * @var \Cake\Collection\CollectionInterface|string[] $reservations
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="reservationResults form content">
            <?= $this->Form->create($reservationResult) ?>
            <fieldset>
                <legend><?= __('Add Reservation Result') ?></legend>
                <?php
                    echo $this->Form->control('reservation_id', ['options' => $reservations]);
                    echo $this->Form->control('result_desc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
