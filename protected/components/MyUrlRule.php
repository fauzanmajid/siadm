<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class MyUrlRule extends CUrlRule
{
    public function createUrl($manager,$route,$params,$ampersand)
    {
        foreach($params as $key=>$value)
            if((array)$value === $value)
                return false;

        return parent::createUrl($manager,$route,$params,$ampersand);
    }
}