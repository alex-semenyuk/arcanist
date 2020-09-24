<?php

final class ArcanistStringConfigOption
  extends ArcanistScalarConfigOption {

  public function getType() {
    return 'string';
  }

  public function getStorageValueFromStringValue($value) {
    return (string)$value;
  }

  public function getDisplayValueFromValue($value) {
    return $value;
  }

  public function getStorageValueFromValue($value) {
    return $value;
  }

}
