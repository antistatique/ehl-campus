<div class="row-fluid user-data">
	<div class="span9">
		<h2>About me</h2>
		<?php print render($user_profile['field_about_me']); ?>

		<table class="table table-striped table-user">
			<tbody>
				<?php if(isset($user_profile['field_birthdate'])): ?>
				<tr><td>Age</td><td><span class="badge badge-info"><?php print render($user_profile['field_birthdate']); ?></span></td></tr>
				<?php endif; ?>
				<?php if(isset($user_profile['field_school'])): ?>
				<tr><td>University</td><td><span class="badge badge-info"><?php print render($user_profile['field_school']); ?></span></td></tr>
				<?php endif; ?>
				<?php if(isset($location_static_map)): ?>
				<tr><td>Location</td><td><?php print $location_static_map; ?></td></tr>
				<?php endif; ?>
				<?php if(isset($user_profile['field_social_link'])): ?>
				<tr><td>Other profiles</td><td><span class="badge badge-info"><?php print render($user_profile['field_social_link']); ?></span></td></tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
	<?php if($current_user_profile): ?>
	<div class="span3">
		<p>
			<a class="btn" href="<?php print url('user/' . $profile_uid . '/edit', array('query' => array('destination'=> 'user/' . $profile_uid))); ?>">Edit my profile</a>
		</p>
	</div>
	<?php endif; ?>
</div>

