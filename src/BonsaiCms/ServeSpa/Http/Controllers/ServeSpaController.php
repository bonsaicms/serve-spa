<?php

namespace BonsaiCms\ServeSpa\Http\Controllers;

use Illuminate\Routing\Controller;

class ServeSpaController extends Controller
{
    public function serve()
    {
        return view(config('serve-spa.view'));
    }
}
