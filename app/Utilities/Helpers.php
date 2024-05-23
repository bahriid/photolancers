<?php

namespace App\Utilities;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

    public static function uploadToStorage($image, $name, $dir, $delete = false, $old_image = null)
    {
        if ($delete) {
            self::deleteFromStorage($old_image, $dir);
        }
        $name = Str::slug($name, '_').'_'.now()->timestamp.'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/'.$dir, $name);
        return url('storage/'.$dir.'/'.$name);
    }

    public static function deleteFromStorage($old_image, $dir)
    {
        try {
            $explode_url = explode("//", $old_image, 2)[1];
            $remove_protocol = explode("/", $explode_url);
            $old_image = Arr::last($remove_protocol);
            Storage::delete('public/'.$dir.'/'.$old_image);
        } catch (\Throwable $th) {
        }
    }

    public static function getAvatar($name)
    {
        $param = [
            'background' => 'EBF4FF',
            'color' => '7F9CF4',
            'name' => Str::upper($name),
        ];
        $url = 'https://ui-avatars.com/api/?' . http_build_query($param);
        return $url;
    }
}
