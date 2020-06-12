<?php

function getBranch()
{
  $why = Auth::user()->roles()->pluck('slug');
  $why->contains('zheu1') ? $branch_id = 1 : '';
  $why->contains('zheu2') ? $branch_id = 2 : '';
  $why->contains('zheu3') ? $branch_id = 3 : '';
  $why->contains('zheu4') ? $branch_id = 4 : '';
  $why->contains('zheu5') ? $branch_id = 5 : '';

  $why->contains('admin') ? $branch_id = 9 : '';
  $why->contains('oas')   ? $branch_id = 9 : '';
  $why->contains('hh')    ? $branch_id = 9 : '';
  $why->contains('audit') ? $branch_id = 9 : '';
  $why->contains('pts')   ? $branch_id = 9 : '';
  $why->contains('user')  ? $branch_id = 9 : '';

  return $branch_id;
}
