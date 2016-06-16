<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>
<body>
<div id="container">
	<div class="content">
	<h1> Url Shortening Service</h1>
	<?php
	$this->load->helper('form');
	echo form_open();
	?>
		<div class="table">
			<div>Shorten your URL :</div>
			<div>
				<input type="text" class="form-control" id="inputUrl" name="url">
			</div>
		</div>
		<input type="submit">
		<div class="row">
		<input type="hidden" name="urlhidden" id="hiddenURL">
			<?php
				session_start();
				if (isset($_POST['url'])) {
					$_SESSION['urlget'] = $_POST['url'];
				}
				if(isset($short_url))
					{
						echo '<br/><a href="#" onclick="openURL(\''.$_SESSION['urlget'].'\');" class="shorty_url">'.base_url().$short_url.'</a>';
					}

				if(isset($error))
					{
						echo '<div class="errors">'.$error.'</div>';
					}
				echo form_close();
			?>
		</div>
	</div>
	
</div>


</body>
</html>