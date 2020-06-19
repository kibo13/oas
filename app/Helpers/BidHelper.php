<?php

function getBranch()
{
  $why = Auth::user()->roles()->pluck('slug');

  if ($why->contains('zheu1')) {

    $branch_id = 1;

  } elseif ($why->contains('zheu2')) {

    $branch_id = 2;

  } elseif ($why->contains('zheu3')) {

    $branch_id = 3;

  } elseif ($why->contains('zheu4')) {

    $branch_id = 4;

  } elseif ($why->contains('zheu5')) {

    $branch_id = 5;

  } else {

    $branch_id = 6;

  }

  return $branch_id;
}
