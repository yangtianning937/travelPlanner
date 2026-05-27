<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hotel $hotel
 * @var string[]|\Cake\Collection\CollectionInterface $hotelData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hotel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hotels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hotels form content">
            <?= $this->Form->create($hotel) ?>
            <fieldset>
                <legend><?= __('Edit Hotel') ?></legend>
                <?php
                    echo $this->Form->control('hotel_name');
                    echo $this->Form->control('hotel_price');
                    echo $this->Form->control('hotel_address');
                    echo $this->Form->control('hotel_city');
                    echo $this->Form->control('hotel_country');
                    echo $this->Form->control('hotel_data_id', ['options' => $hotelData]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
