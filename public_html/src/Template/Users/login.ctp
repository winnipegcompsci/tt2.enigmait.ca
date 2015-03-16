<!-- File: src/Template/Users/login.ctp -->

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
						<!--
						<form role="form">
                            <fieldset>
								
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
								
                                <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']); ?>" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
						-->
						<?= $this->Flash->render('Auth'); ?>
						<?= $this->Form->create() ?>
							<fieldset>
								<legend><?= __('Please enter your username and password') ?></legend>
								<?= $this->Form->input('username') ?>
								<?= $this->Form->input('password') ?>
							</fieldset>
						<?=  $this->Form->buton(__('Login')); ?>
						<?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>