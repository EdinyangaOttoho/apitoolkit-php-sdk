<?php

namespace APIToolkit;

use Apitoolkit\Common\Shared;

class APIToolkitLaravel
{
    public static  function observeGuzzle($request, $options) {
      $apitoolkit = $request->apitoolkitData;
      $msgId = $apitoolkit['msg_id'];
      return  Shared::observeGuzzle($options, $msgId);
    }
    public static function reportError($error, $request)
    {
      $apitoolkit = $request->apitoolkitData;
      $client = $apitoolkit['client'];
      Shared::reportError($error, $client);
    }
}
