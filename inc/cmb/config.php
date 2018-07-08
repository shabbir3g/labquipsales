<?php  


	function amader_meta(){

			$team = new_cmb2_box([
				'title'		=> 'Team Member Box',
				'id'		=> 'Team-member-box',
				'object_types'	=> ['team']
			]);

		$team -> add_field([
			'name'			=> 'Job Title',
			'id'			=> 'jt',
			'type'			=> 'text'
		]);

		$team -> add_field([
			'name'			=> 'Facebook',
			'id'			=> 'fb',
			'type'			=> 'text'
		]);

		$team -> add_field([
			'name'			=> 'Twitter',
			'id'			=> 'tw',
			'type'			=> 'text'
		]);

		$team -> add_field([
			'name'			=> 'Linked In',
			'id'			=> 'lin',
			'type'			=> 'text'
		]);
	}
	add_action('cmb2_init','amader_meta');









?>