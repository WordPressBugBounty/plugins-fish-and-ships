<?php
/**
 * This is a sample for the Advanced Shipping Rates for WC wizard
 *
 * @package Advanced Shipping Rates for WC
 */
 
$sample = array(

		'tab'       => 'snippets',
		'section'   => 'Dimensions or volume',
		'name'      => 'Add extra charge for large products',
		'case'      => 'If any product measure more than ' . $this->loc_size(100, true) . ' an extra charge of ' . $this->loc_price(30, true) . ' will be added.',
		'only_pro'  => false,
		
		'config'    => array(
				
						'priority'  => 5,

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
												'cost' => array(
															array(
																'method'  => 'once',
																'values'  => array(
																				'cost' => $this->loc_price(30)
																			 )
															)
												),
												'actions' => array(),
											),
						),
		),
);
