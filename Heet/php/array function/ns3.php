<?php
// namespace Mobile;

// class User
// {

//     public static $name = 'mobile user<br>';
// }

// namespace TV ;

// class User
// {
//     public static $name = 'tv user<br>';
// }

// // $user = new \Mobile\User;
// // echo $user->name;

// echo \Mobile\User::$name;
// echo \TV\User::$name;
?>

<?php
// interface A
// {
//     const B = 'Interface constant<br>';
// }

// // Prints: Interface constant
// echo A::B;


// class B implements A
// {
//     const B = 'Class constant'; //not work
// }

// // Prints: Class constant
// // Prior to PHP 8.1.0, this will however not work because it was not
// // allowed to override constants.
// echo B::B;
?>

<?php

interface d
{
    const e = 'Interface constant<br>';
}

// Prints: Interface constant
echo d::e;

class e implements d
{

}

// This works!!!
class f extends e
{
    const e = 'Class constant';
}

echo f::e;
?>