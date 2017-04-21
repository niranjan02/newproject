<!-- 
		
			<div class="pmd-card-title card-header-border text-center">
              <div class="register-card">
			<form class="formAdd" method="POST" action="/newproject/cakephp/users/sign_up/">	
			  <div class="pmd-card-body">

			  <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">First Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="text" name="firstname" class="form-control"  value="">
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="text" name="lastname" class="form-control"  value="">
                        </div>
                    </div>
              
              	<div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="text" name="username" class="form-control"  value="">
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                            <input type="text" name="email" class="form-control"  value="">
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                            <input type="text" name="password" class="form-control" value="">
                        </div>
                    </div>
              </div>
			  
			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
			  <input type="submit" class="form-control" value="Submit" class="btn pmd-ripple-effect btn-primary btn-block">
			  	<p class="redirection-link">Already have an account? <a href="javascript:void(0);" class="register-login">Sign In</a>. </p>
			  </div>
			</form>
		</div>
	</div> -->


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
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">First Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <?php echo $this->Form->input('firstname', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                           <?php echo $this->Form->input('lastname', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">account_circle</i></div>
                           <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                           <?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock</i></div>
                           <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>

                </div>
                <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                     <?php
                        echo $this->Form->submit('Sign Up', array('class' => 'btn pmd-ripple-effect btn-primary btn-block signup', 'title' => 'Sign Up'));
                        echo $this->Form->end();
                        ?>
                    <div class="shiftdown">
                    <p class="redirection-link">Already have an account?
                    <?php
                       echo $this->Html->link('Sign In',array("controller" => "users", 
                                              "action" => "login",
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