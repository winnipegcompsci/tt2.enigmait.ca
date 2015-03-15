<!-- src/Template/Users/add.ctp -->
<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input('username', ['class'=>'form-control', 'placeholder' => 'Enter New Username']) ?>
        <?= $this->Form->input('password', ['class'=>'form-control', 'placeholder' => 'Enter New Password']) ?>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author'],
			'class' => 'form-control',
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>