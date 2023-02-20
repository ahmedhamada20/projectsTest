<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\CustomerLoginRequest;
use App\Models\SubcripeCorses;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{

    public function subsripeCousrse(Request $request)
    {
        // dd($request->all());
        $data = SubcripeCorses::where('course_id', $request->course_id)->where('customer_id', auth('customer')->user()->id)->first();
        if ($data) {
            return redirect()->back()->withErrors(['error' => 'انت مشترك في الكورس بالفعل']);
        } else {
            SubcripeCorses::create([
                'customer_id' => auth('customer')->user()->id,
                'course_id' => $request->course_id
            ]);

            return redirect()->route('my_account')->with(['success' => 'لقد تم الاشتراك في الكورس']);
        }
    }

    public function dashborad()
    {


        return view('front.my_account.index');
    }

    public function create()
    {
        return view('front.user.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerLoginRequest $request)
    {

        if (auth('customer')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'active'])) {

            $request->authenticate();

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::CUSTOMER);
        } else {
            return redirect()->back()->with(['error' => 'هناك خطأ في البيانات برجاء التواصل مع المسئول']);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
