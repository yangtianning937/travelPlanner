<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageData $packageData
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="packageData form content">
            <?= $this->Form->create($packageData) ?>
            <fieldset>
                <legend><?= __('Add Package Data') ?></legend>
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
