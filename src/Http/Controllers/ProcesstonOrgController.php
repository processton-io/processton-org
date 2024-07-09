<?php

namespace Processton\ProcesstonOrg\Http\Controllers;

use App\Http\Controllers\Controller;
use Processton\ProcesstonCard\ProcesstonCard;

class ProcesstonOrgController extends Controller
{
    public function index($type)
    {
        if(config('module-org.resolvers.'.$type) !== null) {
            $resolver = config('module-org.resolvers.' . $type);
        }else{
            $resolver = null;
            abort(404, 'Resolver not defined in config file.');
        }
        
        return response()->json([
            'data' => $resolver::handle(),
        ]);
    }
}
