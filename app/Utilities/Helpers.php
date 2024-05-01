<?php

namespace App\Utilities;

class Helpers
{
    public static function errorRedirect($routeName = null, $message = null, $params = [])
    {
        if ($routeName) {
            return redirect()->route($routeName, $params)->with('error', $message)->withInput()->send();
        } else {
            return redirect()->back()->with('error', $message)->withInput()->send();
        }
    }

    public static function successRedirect($routeName, $message, $params = [])
    {
        return redirect()->route($routeName, $params)->with('success', $message)->send();
    }

}
