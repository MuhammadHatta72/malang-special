<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\StoreUserRequest;
use App\Models\Market;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function login()
    {
        $data = [];
        return view('admin.pages.auth.login', $data);
    }

    public function loginProcess(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',
        ];

        $messages = [
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'password.required' => 'Password wajib diisi!',
            'password.string' => 'Password harus berupa string!',
        ];

        $request->validate($rules, $messages);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (auth()->attempt($data)) {
            $guards = empty($guards) ? [null] : $guards;
            foreach ($guards as $guard) {
                if (Auth::guard($guard)->check()) {
                    // dd(Auth::guard($guard)->user()->role);
                    if (Auth::guard($guard)->user()->role == 3) {
                        // dd('user', auth()->user()->role);
                        return redirect('/shop')->with('success', 'Anda berhasil login!');
                    } else {
                        // dd('admin', auth()->user()->role);
                        return redirect('/dashboard')->with('success', 'Anda berhasil login!');
                    }
                }
            }
            // return redirect('/dashboard')->with('success', 'Anda berhasil login!');
        } else {
            return redirect('/login')->with('error', 'Email atau password salah!');
        }
    }

    public function register()
    {
        $data = [];
        return view('admin.pages.auth.register', $data);
    }

    public function registerProcess(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = 'User';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = 'not_found';
        $user->address = 'not_found';
        $user->phone = $request->phone;
        $user->role = '3';
        $user->image = 'not_found';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Anda berhasil register!');
    }


    public function logout()
    {
        $routeRedirect = Auth::user()->role == 3 ? '/' : '/login';
        auth()->logout();
        return redirect($routeRedirect)->with('success', 'Anda berhasil logout!');
    }

    public function dashboard()
    {
        $data = [
            'user' => auth()->user(),
        ];
        return view('admin.pages.dashboard', $data);
    }

    // Page User
    public function home()
    {
        $data = [
            'title_page' => 'home',
            'products' => Product::all(),
            'transactions' => Transaction::all()
        ];
        return view('user.pages.home', $data);
    }

    public function shop()
    {
        $data = [
            'title_page' => 'shop',
            'product_foods' => Product::where('category', 'Makanan')->limit(8)->get(),
            'product_drinks' => Product::where('category', 'Minuman')->limit(8)->get(),
            'product_shirts' => Product::where('category', 'Baju')->limit(8)->get(),
            'product_souvernirs' => Product::where('category', 'Souvenir')->limit(8)->get(),
        ];
        return view('user.pages.shop', $data);
    }

    public function food()
    {
        $data = [
            'title_page' => 'foods',
            'product_foods' => Product::where('category', 'Makanan')->paginate(8),
        ];
        return view('user.pages.foods', $data);
    }

    public function drink()
    {
        $data = [
            'title_page' => 'drinks',
            'product_drinks' => Product::where('category', 'Minuman')->paginate(8),
        ];
        return view('user.pages.drinks', $data);
    }

    public function shirt()
    {
        $data = [
            'title_page' => 'shirts',
            'product_shirts' => Product::where('category', 'Baju')->paginate(8),
        ];
        return view('user.pages.shirts', $data);
    }

    public function souvenir()
    {
        $data = [
            'title_page' => 'souvenirs',
            'product_souvenirs' => Product::where('category', 'Souvenir')->paginate(8),
        ];
        return view('user.pages.souvenirs', $data);
    }

    public function checkout()
    {
        return view('user.pages.checkout');
    }

    public function forgot_password()
    {
        return view('admin.pages.auth.forgot-password');
    }

    public function forgot_proses(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function reset_password(string $token)
    {
        return view('admin.pages.auth.reset-password', ['token' => $token]);
    }

    public function reset_proses(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);

                $user->save();

                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
    public function detail($id)
    {
        $data = [
            'title_page' => 'detail',
            
            'products' => Product::where('id', $id)->first()
        ];
        return view('user.pages.detail', $data);
    }

}
