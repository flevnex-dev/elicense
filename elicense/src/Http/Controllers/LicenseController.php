<?php

namespace Flevnex\Elicense\Http\Controllers;

use Flevnex\Elicense\Models\License;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::paginate(10);
        return view('elicense::licenses.index', compact('licenses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'expires_at' => 'required|date'
        ]);

        $license = License::create([
            'user_id' => $validated['user_id'],
            'license_key' => $this->generateLicenseKey(),
            'expires_at' => $validated['expires_at']
        ]);

        return response()->json($license);
    }

    private function generateLicenseKey()
    {
        return strtoupper(substr(md5(uniqid()), 0, 16));
    }
}