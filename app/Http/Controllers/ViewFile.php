<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Streams\Core\Support\Facades\Streams;

class ViewFile extends Controller
{
    public function __invoke($id)
    {
        $file = Streams::repository(Config::get("filesystems.disks.public.stream"))
            ->find($id);

        if (!$file) {
            abort(404);
        }

        return Response::make(Storage::disk($file->disk)->get("$file->path"), 200, [
            'Content-Type' => $file->mime_type,
        ]);
    }
}
