<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Core\Configure;

$appLocale = Configure::read('App.defaultLocale');

$this->assign('title', 'Reset Password');
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="<?= $appLocale ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?> - Travel Planner
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<main class="main">
    <div class="container login">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <div class="users form content">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <legend><?= __('Reset Your Password') ?></legend>
                        <?= $this->Flash->render() ?>
                        <?php
                        echo $this->Form->control('password', [
                            'type' => 'password',
                            'label' => 'New Password',
                            'required' => true,
                            'autofocus' => true,
                            'value' => ''
                        ]);
                        echo $this->Form->control('password_confirm', [
                            'type' => 'password',
                            'label' => 'Repeat New Password',
                            'required' => true,
                            'value' => ''
                        ]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Reset Password')) ?>
                    <?= $this->Form->end() ?>
                    <hr style="margin: 2rem 0 3rem 0">
                    <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline']) ?>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
</footer>
</body>
</html>

