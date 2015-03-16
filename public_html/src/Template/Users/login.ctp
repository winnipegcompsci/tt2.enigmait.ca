<!-- File: src/Template/Users/login.ctp -->

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
						<?= $this->Flash->render('auth'); ?>
						<?= $this->Form->create() ?>
							<fieldset>
								<?= $this->Form->input('username') ?>
								<?= $this->Form->input('password') ?>
							</fieldset>
						<?=  $this->Form->button(__('Login')); ?>
						<?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>