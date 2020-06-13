<?php

use Illuminate\Support\Facades\DB;

function waters() {
  $waters = DB::table('bids')
    ->join(
      'logs',
      'logs.bid_id',
      '=',
      'bids.id'
    )
    ->join(
      'streets',
      'streets.id',
      '=',
      'bids.street_id'
    )
    ->join(
      'branches',
      'branches.id',
      '=',
      'bids.branch_id'
    )
    ->select(
      'bids.branch_id',
      'branches.name as branch',
      'logs.date_log',
      'bids.street_id',
      'streets.name as street',
      'bids.num_home',
      'bids.num_flat',
      'logs.plot',
      'logs.home_hw',
      'logs.home_cw',
      'logs.home_h',
      'logs.crane_hw',
      'logs.crane_cw',
      'logs.crane_h'

    )
    ->where(
      'home_hw',
      '>',
      0
    )
    ->orWhere(
      'home_cw',
      '>',
      0
    )
    ->orWhere(
      'home_h',
      '>',
      0
    )
    ->orWhere(
      'crane_hw',
      '>',
      0
    )
    ->orWhere(
      'crane_cw',
      '>',
      0
    )
    ->orWhere(
      'crane_h',
      '>',
      0
    )
    ->get();

  return $waters;
}




