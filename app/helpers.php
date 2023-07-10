    <?php

function set_user_roles($user_id)
{
    $roles = [];

    // Retrieve the user modules for the given user_id
    $userModules = DB::table('user_modules')
        ->join('modules', 'user_modules.mod_id', '=', 'modules.mod_id')
        ->where('user_modules.user_id', $user_id)
        ->whereIn('user_modules.mod_id', [1, 2, 5])
        ->get();

    if ($userModules->isNotEmpty()) {
        $roles[] = 'Additional Role';
    }

    // Retrieve the user based on the provided user_id
    $user = DB::table('user_modules')->where('user_id', $user_id)->first();

    if (!$user) {
        return $roles; // Return roles with additional role if user modules exist
    }

    if ($user->mod_id == 1) {
        $roles[] = 'Admin';
    } elseif ($user->mod_id == 2) {
        $roles[] = 'User';
    }

    return $roles;
}



