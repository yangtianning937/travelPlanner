<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HotelData $hotelData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Hotel Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotelData form content">
            <?= $this->Form->create($hotelData) ?>
            <fieldset>
                <legend><?= __('Add Hotel Data') ?></legend>
                <?php
                    echo $this->Form->control('hotel_name');
                    echo $this->Form->control('hotel_price');
                    echo $this->Form->control('hotel_address');
                    echo $this->Form->control('hotel_city');
                    echo $this->Form->control('hotel_country');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
