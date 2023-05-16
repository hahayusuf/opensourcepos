<?php

class Migration_move_expenses_categories extends CI_Migration {

	public function __construct()
	{
		parent::__construct();
	}

	public function up()
	{
		error_log('Started: enabling three decimal currencies');
		
		execute_script(APPPATH . 'migrations/sqlscripts/3.4.1_enable_three_decimal_pricing');

		error_log('Completed: enabling three decimal currencies');
	
	}
}
