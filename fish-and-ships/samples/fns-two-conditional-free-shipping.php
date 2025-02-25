<?php
/**
 * This is a sample for the Advanced Shipping Rates for WC wizard
 *
 * @package Advanced Shipping Rates for WC
 */
 
$sample = array(

		'tab'       => 'fullsamples',
		'section'   => 'Free shipping',
		'name'      => 'Free shipping over ' . $this->loc_price(100, true) . ' & weight product limit',
		'case'      => 'We have heavy and light products for sale, some are expensive and some are cheap. With these two factors in mind, we want to offer free shipping in certain cases: more than ' . $this->loc_price(100, true) . ' of products in cart and none product over ' . $this->loc_weight(10, true) . '. In any other scenario, this method will not be offered.',
		'only_pro'  => true,
		
		'config'    => array(
				
						'priority'  => 10,

						'title' 					=> '2 conditional free shipping',
						//'tax_status' 				=> 'taxable', // taxable | none 
						'global_group_by' 			=> 'no',     // yes | no
						'global_group_by_method' 	=> 'all',  // none | id_sku | product_id | class | all
						'rules_charge' 				=> 'all',     // all| max | min
						'free_shipping' 			=> 'yes',     // yes | no
						'disallow_other' 			=> 'no',      // yes | no
						'volumetric_weight_factor'  => '',
						'min_shipping_price' 		=> 0,
						'max_shipping_price' 		=> 0,

						'rules'     => array(

											array(
											
												'type' => 'normal',
												
												'sel' => array(

													array(
														'method'   => 'by-weight',
														'values'   => array(
																		'min_comp' => 'greater',
																		'min'      => $this->loc_weight(10),
																		'max_comp' => 'less',
																		'max'      => 0,
																		'group_by' => array( 'none' ), // all together, required
														)
													),
													'operators' => $this->get_operator_and(),
												),
												'cost' => array(
													array(
														'method'  => 'once',
														'values'  => array(
																		'cost' => 0
														)
													)
												),
												'actions' => array(
													array(
														'method'  => 'abort',
														'values'  => array()
													)
												),
											),

											array(
											
												'type' => 'normal',
												
												'sel' => array(

													array(
														'method'   => 'by-price',
														'values'   => array(
																		'min_comp' => 'ge',
																		'min'      => $this->loc_price(100),
																		'max_comp' => 'le',
																		'max'      => 0,
																		'group_by' => array( 'all' ), // all together, required
																	  )
													),
													'operators' => $this->get_operator_and(),
												),
												'cost' => array(
													array(
														'method'  => 'once',
														'values'  => array(
																		'cost' => 0
														)
													)
												),
												'actions' => array(),
											),

						),
		),
);
