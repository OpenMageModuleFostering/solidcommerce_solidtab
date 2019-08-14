<?php

class SolidCommerce_SolidTab_AdminControllersHere_SolidTab2Controller extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		//Get current layout state
		$this->loadLayout();
		
		//Create core block based on solidcommerce/sc_inventory.phtml template (view) file
		//Note the location "adminhtml"... needs to be there since this is admin controller
		$block = $this->getLayout()->createBlock(
			'Mage_Core_Block_Template',
			'SolidCommerce_SolidTab_Block_EditSpecial',
			array('template' => 'solidcommerce/sc_order.phtml')
		);
		
		
		
		
		$this->getLayout()->getBlock('content')->append($block);
		//Below example does the same thing, and looks cooler :)
		//$this->_addContent($block);
		
		//Release layout stream... lol... sounds fancy
		$this->renderLayout();
	}
}