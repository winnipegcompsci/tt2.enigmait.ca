<!-- File: src/Template/Users/index.ctp -->

<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
				<?php 
					foreach($users as $user) {
						echo "<pre>" . print_r($user, TRUE) . "</pre>";
					}
				?>
            </div>
			<div class="col-md-3">
				Actions
			</div>
        </div>
    </div>