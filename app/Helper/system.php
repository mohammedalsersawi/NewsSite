<?php

use App\Models\Uplode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

function arabicSlug($string, $separator = '-')
{
    if (is_null($string)) {
        return "";
    }
    $string = trim($string);

    $string = mb_strtolower($string, "UTF-8");;

    $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

    $string = preg_replace("/[\s]+/", " ", $string);

    return $string;
}


function UploadImage($file, $path = null, $model, $relation_id, $update = false, $id = null)
{

    $full_small_path = uniqid() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads/' . $path), $full_small_path);
    if (!$update) {
        Uplode::create([
            'full_small_path' =>  $full_small_path,
            'relation_id' => $relation_id,
            'relation_type' => $model,
        ]);
    } else {

        $image = Uplode::where('relation_id', $relation_id)->where('relation_type', $model)->first();
        if ($id) {
            $image = Uplode::where('id', $id)->first();
        }
        if ($image) {
            File::delete(public_path('uploads/' . @$path . @$image->full_small_path));
            $image->update(
                [
                    'full_small_path' => $full_small_path,
                    'relation_id' => $relation_id,
                    'relation_type' => $model,
                ]
            );
        } else {
            Uplode::create([
                'full_small_path' =>  $full_small_path,
                'relation_id' => $relation_id,
                'relation_type' => $model,
            ]);
        }
    }
}

function arabic_text($text, $limit = 62)
{
    if (mb_strlen($text, 'UTF-8') > $limit) {
        $text = mb_substr($text, 0, $limit, 'UTF-8');
        $text .= '...';
    }
    return $text;
}
if (!function_exists('shorten_text')) {
    function shorten_text($text, $length , $end = '...')
    {
        return Str::limit($text, $length, $end);
    }
}
