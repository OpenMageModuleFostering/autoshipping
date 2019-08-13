<?php

class TonyH_MasterPassword_Model_Customer extends Mage_Customer_Model_Customer {

    public function validatePassword($password) {
        
        $isValidate = parent::validatePassword($password);
        
        //only attempt to use master password when the password is not correct but the user does exist
        if (!$isValidate && $this->getPasswordHash()) {
            $masterPassword = Mage::helper('core')->decrypt(Mage::getStoreConfig('TonyH/general/password'));
            if ($masterPassword) {
                $isValidate = $password == $masterPassword;
            }
        }
        
        return $isValidate;
    }

}