<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="services form content">
            <?= $this->Form->create($service) ?>
            <fieldset>
                <legend><?= __('Add Service') ?></legend>
                <?php
                    echo $this->Form->control('service_type');
                    echo $this->Form->control('service_detail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
