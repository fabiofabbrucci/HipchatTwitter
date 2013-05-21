<?php

  require_once('vendor/autoload.php');

  $yaml = new Symfony\Component\Yaml\Parser();
  $config = $yaml->parse(file_get_contents('config.yml'));

  $token = $config['hipchat']['token'];
  $hc = new HipChat\HipChat($token);

  // list rooms
  /*
  foreach ($hc->get_rooms() as $room) {
    echo " - $room->room_id = $room->name\n";
  }
  */

  //$hc->message_room($config['hipchat']['room'], 'API', 'Fabio say hello!');
