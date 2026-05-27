<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageData $packageData
 */
?>
<div class="packageData index content">
    <div class="w-50 p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Actions') ?></h1>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $packageData->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $packageData->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Package Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packageData form content">
            <?= $this->Form->create($packageData) ?>
            <fieldset>
                <legend><?= __('Edit Package Data') ?></legend>
                <?php
                    echo $this->Form->control('departure');
                    echo $this->Form->control('destination');
                    echo $this->Form->control('departure_time');
                    echo $this->Form->control('destination_time');
                    echo $this->Form->control('hotel_name');
                    echo $this->Form->control('hotel_address');
                    echo $this->Form->control('total_price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
