<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Core\Configure;

$appLocale = Configure::read('App.defaultLocale');

$this->assign('title', 'Register new user');
$this->disableAutoLayout();  // for Home page
?>
<!DOCTYPE html>
<html lang="<?= $appLocale ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?> - Cake CMS/Auth Sample
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
    <div class="container register">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Register new user') ?></legend>
                <?= $this->Flash->render() ?>
                <?php echo $this->Form->control('email'); ?>
                <div class="row">
                    <?php
                    echo $this->Form->control('first_name', [
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    echo $this->Form->control('last_name', [
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    ?>
                </div>
                <div class="row">
                    <?php
                    echo $this->Form->control('password', [
                        'value' => '',  // Ensure password is not sending back to the client side
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    // Validate password by repeating it
                    echo $this->Form->control('password_confirm', [
                        'type' => 'password',
                        'value' => '',  // Ensure password is not sending back to the client side
                        'label' => 'Retype Password',
                        'templateVars' => ['container_class' => 'column']
                    ]);
                    ?>
                </div>
                <?php
                echo $this->Form->control('avatar', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Register')) ?>
            <?= $this->Html->link(__('Back to login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'button button-outline float-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</main>
</body>
</html>
