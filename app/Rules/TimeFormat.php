<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class TimeFormat implements Rule
{
    public function passes($attribute, $value)
    {
        // Memeriksa apakah waktu sesuai format HH:MM
        return preg_match('/^(2[0-3]|[01]?[0-9]):([0-5]?[0-9])$/', $value);
    }

    public function message()
    {
        return 'Waktu harus dalam format HH:MM yang valid.';
    }
}
