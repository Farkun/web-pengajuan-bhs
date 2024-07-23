<?php

namespace App;

enum UserRole
{
    const Admin = 'admin';
    const Pengaju = 'pengaju';
    const Approval = 'approval';
    const Accountant = 'accountant';
    const Bendahara = 'bendahara';

    public static function getValues()
    {
        return [
            self::Admin,
            self::Pengaju,
            self::Approval,
            self::Accountant,
            self::Bendahara,
        ];
    }
}
