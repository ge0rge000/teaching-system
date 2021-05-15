<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Unituser;

use App\Models\Studen_exam;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number'=>['required','string','max:20'],
            'year_type'=>['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $data= User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone_number'=>$input['phone_number'],
            'year_type'=>$input['year_type'],
            'password' => Hash::make($input['password']),

        ]

    );

    $data->save();

        $iduser=$data->id;
    dd($iduser);
        $userunit= Unituser::create([
            'user_id'=>$iduser,
        ],



    );


       return $data;
    }
}
