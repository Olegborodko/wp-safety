<?php
function setURL($field)
{
  if (gettype($field) == 'array') {
    return $field['url'];
  } else {
    return '';
  }
}