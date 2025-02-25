<?php
/**
 * This is a sample for the Advanced Shipping Rates for WC wizard
 *
 * @package Advanced Shipping Rates for WC
 */
 
$sample = array(

		'tab'       => 'snippets',
		'section'   => 'Multiple conditions',
		'name'      => 'Flat rate for light products and +' . $this->loc_price(100, true) . ' in cart',
		'case'      => 'It will add a rule that always give flat rate of ' . $this->loc_price(10, true) . ' when the products in cart SUM ' . $this->loc_price(100, true) . ' or more and there aren\'t large, heavy or bulky products: less than ' . $this->loc_weight(50, true) . ', ' . $this->loc_size(100, true) . ', ' . $this->loc_volume(1000000, true),
		'only_pro'  => true,
		
		'config'    => array(
				
						'priority'  => 5,

						'rules'     => array(

											array(
											
												'type' => 'normal',
												
												'sel' => array(

													array(
														'method'   => 'by-price',
														'values'   => array(
																		'min_comp'	=> 'ge',
																		'min' 		=> $this->loc_price(100),
																		'max_comp'	=> 'le',
																		'max'		=> 0,
																		'group_by'	=> array( 'all' )
														)
													),

													array(
														'method'   => 'by-weight',
														'values'   => array(
																		'min_comp' => 'greater',
																		'min'      => 0,
																		'max_comp' => 'less',
																		'max'      => $this->loc_weight(50),
																		'group_by' => array( 'none' ), // no grouping, required
																	  )
													),
													array(
														'method'   => 'max-dimension',
														'values'   => array(
																		'min_comp' => 'greater',
																		'min'      => 0,
																		'max_comp' => 'less',
																		'max'      => $this->loc_size(100),
																		'group_by' => array( 'none' ), // no grouping, required
																	  )
													),
													array(
														'method'   => 'by-volume',
														'values'   => array(
																		'min_comp' => 'greater',
																		'min'      => 0,
																		'max_comp' => 'less',
																		'max'      => $this->loc_volume(1000000),
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
												'actions' => array(
															'method'  => 'break',
															'values'  => array()
												),
											),
						),
		),
);
