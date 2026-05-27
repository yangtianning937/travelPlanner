<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __("Are you sure you want to delete this user?\n{0} {1} ({2})", $user->first_name, $user->last_name, $user->email), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3>User details of: <?= h($user->first_name) ?> <?= h($user->last_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User ID') ?></th>
                    <td colspan="3"><?= h($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td colspan="3"><?= $this->Html->link(h($user->email), "mailto:" . h($user->email)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?><br>(<?= $this->Time->timeAgoInWords($user->created) ?>)</td>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?><br>(<?= $this->Time->timeAgoInWords($user->modified) ?>)</td>
                </tr>
            </table>

            <div class="related">

                <?php if (!empty($user->blog_articles)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Title and Subtitle') ?></th>
                                <th><?= __('Timestamp') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->blog_articles as $blogArticles) : ?>
                                <tr>
                                    <td>
                                        <?= $this->Html->link(h($blogArticles->title), ['controller' => 'BlogArticles', 'action' => 'view', $blogArticles->id]) ?>
                                        <br>
                                        <?= h($blogArticles->subtitle) ?>
                                    </td>
                                    <td>
                                        <b>Created</b> <?= h($blogArticles->created) ?>
                                        <br>
                                        <b>Last update</b> <?= h($blogArticles->modified) ?>
                                    </td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'BlogArticles', 'action' => 'edit', $blogArticles->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlogArticles', 'action' => 'delete', $blogArticles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogArticles->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
