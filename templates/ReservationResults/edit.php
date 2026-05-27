<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReservationResult $reservationResult
 * @var string[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reservationResult->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reservationResult->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reservation Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservationResults form content">
            <?= $this->Form->create($reservationResult) ?>
            <fieldset>
                <legend><?= __('Edit Reservation Result') ?></legend>
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
