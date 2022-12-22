<?php
/**
 * The menu item dto.
 */
class ItemDto
{

  function __construct(params)
  {
    $this->id = params['id'];
    $this->name = params['name'];
    $this->price = params['price'];
    $this->recepie = params['recepie'];
    $this->picture = params['picture'];
  }
}