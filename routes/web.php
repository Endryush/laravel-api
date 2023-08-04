<?php

use Illuminate\Support\Facades\DB;

Route::get('/users', function () {
   try {
      $users = DB::connection('mongodb')->collection('users')->get();

      return response()->json($users, 200);
   } catch (\Throwable $th) {
    return response()->json($th ,500);
   }
});
