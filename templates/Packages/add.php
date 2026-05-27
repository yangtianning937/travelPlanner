<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Package $package
 * @var \Cake\Collection\CollectionInterface|string[] $packageData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Packages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packages form content">
            <?= $this->Form->create($package) ?>
            <fieldset>
                <legend><?= __('Add Package') ?></legend>
                <?php
                    echo $this->Form->control('package_desc');
                    echo $this->Form->control('package_data_id', ['options' => $packageData]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
