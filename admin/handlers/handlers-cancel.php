<?php
ob_start();

require_once ("../../app.php");

use TechStore\Classes\Models\Order;

if ($request->getHas('id')) {

  $id = $request->get('id');
  $ord = new Order;
  $ord->update("status = 'cancelled'" , $id);

    $session->set('success' , 'order cancelled');
    $request->aredirect("order.php?id=" . $id);
}


ob_end_flush();
