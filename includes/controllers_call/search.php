<?php

function controller_search($act, $d) {
    if ($act == 'plots') return Plot::plots_fetch($d);
    if ($act == 'phone') return User::users_fetch($d);
    if ($act == 'first_name') return User::users_fetch($d);
    if ($act == 'email') return User::users_fetch($d);
    return '';
}
