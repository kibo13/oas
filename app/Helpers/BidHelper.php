<?php

function getBranch()
{

  $why = Auth::user()->role->slug;

  // if coming zheu1
  if ($why == 'zheu1') {

    $branch_id = 1;
    
  }
  // if coming zheu2
  elseif ($why == 'zheu2') {

    $branch_id = 2;

  }

  // if coming zheu3
  elseif ($why == 'zheu3') {

    $branch_id = 3;

  }

  // if coming zheu4
  elseif ($why == 'zheu4') {

    $branch_id = 4;

  }

  // if coming zheu5
  elseif ($why == 'zheu5') {

    $branch_id = 5;

  }

  // if coming oas
  elseif ($why == 'oas') {

    $branch_id = 9;

  }

  // if coming other 
  else {

    $branch_id = 9;

  }
 
  return $branch_id;
}
