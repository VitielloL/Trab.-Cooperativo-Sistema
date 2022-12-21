<?php

namespace App\Base\Http\Controllers;

use App\Base\Models\UserRepositoryInterface;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct
    (
        UserRepositoryInterface $userRepository,
    )
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('login.login');
    }

    public function landing()
    {
        return view('landing-page.index');
    }

    public function register()
    {
        return view('login.register');
    }

    public function forgotPass()
    {
        return view('login.forgotPass');
    }

    public function newPass($token)
    {
        return view('login.newPass', ['token' => $token]);
    }

    public function password(Request $request)
    {
        $email = $request->only('email');
        $checkEmailExist = $this->userRepository->findBy([
            'exact' => [
                'email' => $email
            ]
        ]);

        if ($checkEmailExist->all()) {
            $status = Password::sendResetLink($email);

            return $status === Password::RESET_LINK_SENT
                ? redirect()->route('login')
                : redirect()->route('login')->withErrors(['email' => __($status)]);
        } else {
            dd('email nao existe na base');
        }
    }

    public function passwordReset(Request $request)
    {
        dd($request->only('email', 'password', 'password_confirmation', 'token'));

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
            ? dd('status', __($status))
            : dd(['email' => [__($status)]]);

//        return $status === Password::PASSWORD_RESET
//            ? redirect()->route('login')->with('status', __($status))
//            : back()->withErrors(['email' => [__($status)]]);
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'O E-mail é obrigatório',
            'password.required' => 'A Senha é obrigatório'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('profile');
        }
        else{
            return redirect()->back()->with('danger','Email ou senha incorretos');
        }
    }

    public function store(Request $request)
    {
        $property = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        DB::table('users')->insert($property);
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
