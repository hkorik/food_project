		<div id="inside_form" class="float_left">
			<div id="success_message"><?php if(!empty($register_success['message'])){ echo "<p class='success_message'>{$register_success['message']}</p>"; } ?></div>	
			<h2>Add a new user</h2>
			<form action="/ci/user/process_new_user" method="post">
			  <fieldset>
			    <div class="form-group<?php if(!empty($register_errors['email'])) echo ' field_block'; ?>">
			      <?php if(!empty($register_errors['register_error'])){ echo "<p>{$register_errors['register_error']}</p>"; } ?>	
			      <label for="email">Email address:</label>
			      <?php if(!empty($register_errors['email'])){ echo "{$register_errors['email']}"; } ?>
			      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
			    </div>
		        <div class="form-group<?php if(!empty($register_errors['first_name'])) echo ' field_block'; ?>">
			      <label for="first_name">First Name:</label>
			      <?php if(!empty($register_errors['first_name'])){ echo "{$register_errors['first_name']}"; } ?>
			      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
			    </div>
		        <div class="form-group<?php if(!empty($register_errors['last_name'])) echo ' field_block'; ?>">
			      <label for="last_name">Last Name:</label>
			      <?php if(!empty($register_errors['last_name'])){ echo "{$register_errors['last_name']}"; } ?>
			      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
			    </div>
			    <div class="form-group<?php if(!empty($register_errors['password'])) echo ' field_block'; ?>">
			      <label for="password">Password:</label>
			      <?php if(!empty($register_errors['password'])){ echo "{$register_errors['password']}"; } ?>
			      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
			    </div>
		        <div class="form-group<?php if(!empty($register_errors['confirm_password'])) echo ' field_block'; ?>">
			      <label for="confirm_password">Password Confirmation:</label>
			      <?php if(!empty($register_errors['confirm_password'])){ echo "{$register_errors['confirm_password']}"; } ?>
			      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Password Confirmation">
			    </div>
			    <input class="btn green btn-default float_right" type="submit" value="Create">
			  </fieldset>
			</form>
		</div>
		<div class="float_right">
			<a class="btn blue btn-default float_right" href="<?php echo $dashboard_link ?>">Return to Dashboard</a>
		</div>
	</div>
</body>
</html>