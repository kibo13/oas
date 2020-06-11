<?php

function getRole()
{
  $why = Auth::user()->roles()->pluck('slug');
  $why->contains('zheu1') ? $user_id = 1 : '';
  $why->contains('zheu2') ? $user_id = 2 : '';
  $why->contains('zheu3') ? $user_id = 3 : '';
  $why->contains('zheu4') ? $user_id = 4 : '';
  $why->contains('zheu5') ? $user_id = 5 : '';

  $why->contains('admin') ? $user_id = 9 : '';
  $why->contains('oas')   ? $user_id = 9 : '';
  $why->contains('hh')    ? $user_id = 9 : '';
  $why->contains('audit') ? $user_id = 9 : '';
  $why->contains('pts')   ? $user_id = 9 : '';

  return $user_id;
}
