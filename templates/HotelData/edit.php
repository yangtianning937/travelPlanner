<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HotelData $hotelData
 */
?>
<div class="packageData index content">
    <div class="w-50 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hotelData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hotelData->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hotel Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotelData form content">
            <?= $this->Form->create($hotelData) ?>
            <fieldset>
                <legend><?= __('Edit Hotel Data') ?></legend>
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
