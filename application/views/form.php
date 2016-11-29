
<div class="container">


<div class="row">

	<h2 >
		Form
	</h2>
	<small>All fields are mandatory</small>
	<div class="text-danger">
		<?php echo validation_errors(); ?>
	</div>
	<br/>
	<br/>

	<form class="form" action="<?php echo site_url('welcome/form_submit') ?>" method="POST">
		
		<div class="form-group">
			<input type="text" class="form-control" value="<?php echo set_value('firstname'); ?>" name="firstname" placeholder="First Name" />
			
			<?php if( !form_error('firstname') ){ ?>
			<small class="info"> alphabets only, max 20 chars</small>
			<?php }else{ ?>
			<small class="text-danger"> <?php echo form_error('firstname'); ?> </small>
			<?php } ?>
			
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('lastname'); ?>"  name="lastname" placeholder="Last Name" />
			<small> alphabets only, max 20 chars </small>
		</div>

		<div class="form-group">
			<input type="email" class="form-control"  value="<?php echo set_value('email'); ?>"  name="email" placeholder="Email" />
			<small>Valid Email</small>
		</div>

		<div class="form-group">
			<input type="password" class="form-control"  value="<?php echo set_value('password'); ?>"  name="password" placeholder="Password" />
			<small>Password</small>
		</div>

		<div class="form-group">
			<input type="password" class="form-control" name="confirm"  value="<?php echo set_value('confirm'); ?>"  placeholder="Confirm Password" />
			<small>Confirm Password</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="code"  value="<?php echo set_value('code'); ?>"  placeholder="Code" />
			<small>Numbers only, exact 10</small>
			<p>
				
			</p>
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('mobile'); ?>"  name="mobile" placeholder="Mobile Number" />
			<small>10 digits, Indian numbers only</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control"  value="<?php echo set_value('website'); ?>"  name="website" placeholder="Website" />
			<small>Valid web address</small>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="address"  value="<?php echo set_value('address'); ?>"  placeholder="IP Address" />
			<small>Valid IP address</small>

		</div>

		<div class="form-group">
			<textarea type="text"  class="form-control" name="comment" placeholder="Comment" ><?php echo set_value('comment'); ?></textarea>
			<small>Max : 200 chars, Min : 50 chars</small>

		</div>

		<div class="form-group">
			<input type="submit" value="Submit" class="btn btn-success" />
		</div>


	</form>

</div>

	
</div>
