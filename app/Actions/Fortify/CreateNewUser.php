<?php

namespace App\Actions\Fortify;

use App\Models\Type_document;
use App\Models\User;
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
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        //$type_documents = Type_document::all();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'lastnames' => $input['lastnames'],
            'number_document' => $input['number_document'],
            'date_of_bird' => $input['date_of_bird'],
            'number_cell' => $input['number_cell'],
            'type_document_id' => $input['type_document_id'],
            'roles_id' => $input['roles_id'],

        ]);
        $user->assignRole($input['roles_id']);

        return $user;
    }

}
