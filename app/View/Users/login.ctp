<div class="col-md-offset-4 col-md-3 shiftright">
<div class="logincard">
  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
			  <?php echo $this->Form->create('User'); ?>
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo">
						<!-- <a href="javascript:void(0);"><img src="/webroot/images/inscripts.png" alt="Logo"></a> -->
						<?php echo $this->Html->image('report.svg', ['alt' => 'CakePHP','class'=>'logo-resized']);?>
					</div>
					<h3>Sign In <span>with <strong>INSCRIPTS</strong></span></h3>
				</div>
				
				<div class="pmd-card-body">
				<?php 
				  if(isset($integer)){
				?>
					     <div class="asdf alert alert-danger" role="alert"> Invalid username or password, try again. </div>
				<?php 
				    }
				?>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                           <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </div>
				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
					 <?php
                        echo $this->Form->submit('Login', array('class' => 'btn pmd-ripple-effect btn-primary btn-block signup', 'title' => 'Login'));
                        echo $this->Form->end();
                        ?>
                    <div class="shiftdown">
					<p class="redirection-link">Don't have an account? 
					<?php
					   echo $this->Html->link('Sign Up',array("controller" => "users", 
					                          "action" => "sign_up",
					                        ));
					?>
					 </p>
                    </div>
				</div>
				
			</form>
		</div>
</div>
</div>
</div>