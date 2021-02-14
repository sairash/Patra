<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $userId = DB::table('users')->orderBy('id','DESC')->first();
        $dataToAddAtDiary=array('user_id' => $userId->id+1,'page_id' => 1, 'date'=>'New Begining','context'=>'<span style="font-size: 24px;">Dear <span style="color: rgb(255, 0, 0);">Diary</span>,</span><br><br><div>These are my first words written in this valuable diary. I hope I write about my eventful days everyday to be able to read it in the future.</div><div><br></div><div><br></div><div style="text-align: center;"><span style="color: rgb(255, 255, 255); background-color: rgba(35, 16, 213, 0.55);">Memories aren\'t supposed to be forgotten, they are supposed to be written in Patra.</span></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div>Signed by <font face="Shadows Into Light">Cyrus</font>.</div>','imagesAndEmbeds'=>"null",'audio'=>"https://audio.jukehost.co.uk/fJXuWkK51ET0W5Wt6Rbo5wcFoGszcvJ6");
        DB::table('diary')->Insert($dataToAddAtDiary);
        $dataToAddAtDates=array('user_id'=>$userId->id+1,'dates'=>'New Begining');
        DB::table('dates')->Insert($dataToAddAtDates);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'notebookFrontCover' => '/image/noteBook/NoteBook_1.png',
            'notebookFrontCoverColor' => '#fff',
            'notebookBackCoverColor' => '#FBF056',
        ]);
    }
}
