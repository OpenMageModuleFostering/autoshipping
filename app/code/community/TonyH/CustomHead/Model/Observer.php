<?php

/**
 * Auto Shipping Pro
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * @
 * @category    TonyH
 * @package     TonyH_AutoShipping
 * @author      Tony Hou
 * @copyright   Copyright (c) 2012 TonyH (http://tonyhou.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class TonyH_CustomHead_Model_Observer {

    /**
     * add shipping charge to cart
     *
     * @param Varien_Event_Observer $observer
     * @return \TonyH_AutoShipping_Model_Observer 
     */
    public function changeImage($observer) {
          $product = $observer->getProduct();
          
    }

}