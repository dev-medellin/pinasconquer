<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Services\VpsUserService;
use App\Services\VpsItemService;

class ProfileController extends Controller
{
    /**
     * Show profile page
     */
    public function show(VpsUserService $vps,VpsItemService $itemsService)
    {
        $user = Auth::user();

        $entityId = $user->EntityID;

        $userData = $vps->getUserByEntityId($entityId);
        $items = $itemsService->getItemsByEntityId($entityId);
        // dd($items);
        if ($userData && isset($userData['data'])) {

            foreach ($userData['data'] as $key => $value) {
                $user->{$key} = $value;
            }
        }

        return view('pages.profile', compact('user', 'items'));
    }

    /**
     * Change password
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully!');
    }

    /**
     * Change email
     */
    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Email changed successfully!');
    }
}