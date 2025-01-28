<?php
/**
 * This is a sample for the Advanced Shipping Rates for WC wizard
 *
 * @package Advanced Shipping Rates for WC
 */
 
$sample = array(

		'tab'       => 'snippets',
		'section'   => 'Advanced: Shipping boxes packer & messages',
		'name'      => 'Shipping boxes with fragile products apart',
		'case'      => 'We have two different box sizes. The algorithm will choose the best one according to the products to be shipped. If there are fragile products, they will go in separate boxes from the rest.',
		'choose'    => array(
						array(
							'type'   => 'shipping_class',
							'label'  => 'Choose the fragile products shipping class:'
						),
						array(
							'type'   => 'shipping_box',
							'label'  => 'Choose the small box:'
						),
						array(
							'type'   => 'shipping_box',
							'label'  => 'Choose the mid/big box:'
						),
					),
		'note'		=> 'Later you can add more boxes or change whatever.',
		'only_pro'  => true,
		
		'config'    => array(
				
						'priority'  => 10,

						'rules'     => array(

											array(
											
												'type' => 'normal',
												
												'sel' => array(
													array(
														'method'   => 'in-class',
														'values'   => array(
																		'classes' => array(0),
																		'group_by' => array( 'all' ),
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
														'method'   => 'boxes',
														'values'   => array(
																		'active'     => array( 1, 1 ),
																		'price'      => array( $this->loc_price(20), $this->loc_price(30) ),
																		'max_qty'    => array( 0, 0 ),
																		'skip_prods'         => 1,
																		'all_fit'            => 0,
																		'strategy_cheapest'  => 60,
																		'strategy_nboxes'    => 20,
																		'strategy_volume'    => 20,
														)
													),
												),
											),

											array(
											
												'type' => 'normal',
												
												'sel' => array(
													array(
														'method'   => 'always',
														'values'   => array()
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
														'method'   => 'boxes',
														'values'   => array(
																		'active'     => array( 1, 1 ),
																		'price'      => array( $this->loc_price(15), $this->loc_price(25) ),
																		'max_qty'    => array( 0, 0 ),
																		'skip_prods'         => 1,
																		'all_fit'            => 0,
																		'strategy_cheapest'  => 60,
																		'strategy_nboxes'    => 20,
																		'strategy_volume'    => 20,
														)
													),
												),
											),
											
											array(
											
												'type' => 'normal',
												
												'sel' => array(
													array(
														'method'   => 'always',
														'values'   => array()
													),
													'operators' => $this->get_operator_and(),
												),
												
												'cost' => array(
													array(
														'method'  => 'qty',
														'values'  => array(
																		'cost' => $this->loc_price(10)
														)
													)
												),
												
												'actions' => array(

													array(
														'method'   => 'description',
														'values'   => array(
																		'description'     => 'There are products that do not fit in the boxes'
														)
													),
												),
											),
						),
		),
);
