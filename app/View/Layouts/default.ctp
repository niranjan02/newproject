<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php echo $this->Html->css('bootstrap.min.css'); ?>
<?php echo $this->Html->css('propeller.min.css'); ?>
<?php echo $this->Html->css('propeller-theme.css'); ?>
<?php echo $this->Html->css('custom.css'); ?>
<!-- <?php //echo $this->Html->css('propeller-admin.css'); ?> -->
<?php echo $this->Html->css('pmd-select2.css'); ?>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>  
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth" style="background-color:#4285f4">

	<div class="container-fluid">
	
		<div class="navbar-header">
		<h1>INSCRIPTS</h1>
			
		  </a>
		</div>
		<div class="col-md-offset-10 col-md-2">
		 <?php
            if ($this->Session->read('Auth.User')) {
             echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
             }
            ?>
         </div>   

	</div>

</nav>

<!-- Sidebar Starts -->
<!-- <div class="pmd-sidebar-overlay"></div> -->

<!-- Left sidebar -->
<!-- <aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
			<li> 
			<a class="pmd-ripple-effect" href="/cakephp/users/display/">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18" 
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body"><font color="white">Display</font></span>
			</a> 
		</li> -->

	<!-- <li > 
			<a class="pmd-ripple-effect" href="/cakephp/users/display/">	
				<i class="material-icons pmd-sm md-light">widgets</i><span class="media-body">Display</span>
				
			</a> 
		</li> -->
				<!-- <li> 
			<a class="pmd-ripple-effect" href="/cakephp/users/add/">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18" 
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body"><font color="white">Add</font></span>
			</a> 
		</li>

				<li> 
			<a class="pmd-ripple-effect" href="/cakephp/users/report/">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18" 
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body"><font color="white">Report</font></span>
			</a> 
		</li>
		
	</ul>
</aside> --><!-- End Left sidebar -->
<!-- Sidebar Ends -->  

	<div id="container"  style='margin-top: 100px'>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- <div id="footer">
			<?php //echo $this->Html->link(
				// 	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				// 	'http://www.cakephp.org/',
				// 	array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				// );
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div> -->
	</div>
	<!-- <?php //echo $this->element('sql_dump'); ?> -->

    <?php echo $this->Html->script('propeller.min.js'); ?>
<script>
	function progress(percent, $element) {
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	} 
	
	progress(50, $('.cash-progressbar'));
	progress(30, $('.card-progressbar'));
	progress(60, $('.wallet-progressbar'));
	progress(40, $('.credit-progressbar'));
	progress(10, $('.other-progressbar'));
</script>
<?php echo $this->Html->script('bootstrap.min.js'); ?>
 <script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery-1.12.2.min.js"></script>
	
</script>

</body>
</html>
