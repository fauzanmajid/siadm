<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Base extends CActiveRecord {

    public function log($dump) {
        $status = !UserWeb::instance()->isGuest;
        if ($status) {
            $log = new Log;
            $log->action = $dump;
            $log->time = date('Y-m-d H:i:s');
            $log->user_id = UserWeb::instance()->user()->ID;
            $status &= $log->save();
        }
        return $status;
    }

    protected function afterDelete() {
        $this->log(sprintf('Delete %s data: %s ref#%s', CHtml::modelName($this), $this->getIdentifierName(), $this->ID));
        return parent::afterDelete();
    }

    protected function afterSave() {
        $this->log(sprintf('%s %s data: %s ref#%s', $this->isNewRecord ? 'Create' : 'Update', CHtml::modelName($this), $this->getIdentifierName(), $this->ID));
        return parent::afterSave();
    }

    public function getIdentifierName() {
        return '';
    }

}
