<?php
/**
 * This is a sample for the Fish and Ships wizard
 *
 * @package Fish and Ships
 */
 
$sample = array(

		'tab'       => 'snippets',
		'section'   => 'Dimensions or volume',
		'name'      => 'Disable shipping for large products',
		'case'      => 'If any product measure more than ' . $this->loc_size(100, true) . ' the shipping method will be not offered.',
		'only_pro'  => false,
		
		'config'    => array(
				
						'priority'  => 1,

						'rules'     => array(

											array(
											
												'type' => 'normal',
												
												'sel' => array(

													array(
														'method'   => 'max-dimension',
														'values'   => array(
																		'min_comp' => 'greater',
																		'min'      => $this->loc_size(100),
																		'max_comp' => 'less',
																		'max'      => 0,
																		'group_by' => array( 'none' ), // no grouping, required
																	  )
													),
													'operators' => $this->get_operator_and(),
												),
												'cost' => $this->get_cost_zero(),
												'actions' => array(
													// Selector 1
													array(
														'method'   => 'abort',
														'values'   => array()
													),
												),
											),
						),
		),
);