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
            <?= $this->Html->link(__('List Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="data form content">
            <?= $this->Form->create($data) ?>
            <fieldset>
                <legend><?= __('Add Data') ?></legend>
                <?php
                    echo $this->Form->control('departure');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('flight_price');
                    echo $this->Form->control('departure_time');
                    echo $this->Form->control('destination_time');
                    echo $this->Form->control('hotel_name');
                    echo $this->Form->control('hotel_price');
                    echo $this->Form->control('hotel_address');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
