<?php

class SwitchField extends CheckboxField {

	public function Field($properties = array()) {
		Requirements::css('switchfield/thirdparty/switchery/switchery.min.css');

		Requirements::javascript('switchfield/thirdparty/switchery/switchery.min.js');
		Requirements::javascript('switchfield/javascript/SwitchField.js');

		return parent::Field($properties);
	}

	public function performReadonlyTransformation() {
		$field = new SwitchField_Readonly($this->name, $this->title, $this->value);
		$field->setForm($this->form);
		return $field;
	}
}

class SwitchField_Readonly extends CheckboxField_Readonly {

	public function Value() {
		return Convert::raw2xml($this->value ?
			_t('SwitchField.YESANSWER', 'Yes') :
			_t('SwitchField.NOANSWER', 'No'));
	}

}
