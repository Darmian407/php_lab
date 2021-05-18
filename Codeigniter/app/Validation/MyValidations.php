<?php

namespace App\Validation;

class MyValidations
{

    public function validate_password(): bool
    {
        // Bring model to the Validation
        $userModel = new \App\Models\UserModel();

        $request = \Config\Services::request();

        $email = $request->getVar('email');
        $password = $request->getVar('password');

        $user = $userModel->find($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                return TRUE;
            }
        }

        return FALSE;
    }

    public function validate_birthDate(): bool
    {
        $request = \Config\Services::request();

        $birthDateInput = date_create($request->getVar('birthDate'));
        $birthDate =  strtotime(date_format($birthDateInput, 'Y-m-d'));
        $current = strtotime(date('Y-m-d'));

        if ($birthDate < $current) {
            return TRUE;
        }

        return FALSE;
    }
}
