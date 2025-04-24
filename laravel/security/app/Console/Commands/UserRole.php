<?php

namespace App\Console\Commands;

use App\Models\User;
use Error;
use Illuminate\Console\Command;
use Spatie\Permission\Exceptions\RoleDoesNotExist;

class UserRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:role {userEmail} {role} {--revoke}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign a role to a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userEmail = $this->argument('userEmail');
        $role = $this->argument('role');
        $user = User::where(['email' => $userEmail])->first();
        if (!$user) {
            $this->error("User with email '{$userEmail}' not found.");
            return Command::FAILURE;
        }

        if ($this->option('revoke')) {
            $user->removeRole($role);
            $this->info("Role '{$role}' revoked from user '{$user->name}'.");
            return Command::SUCCESS;
        }

        try {
            $user->assignRole($role);
            $this->info("Role '{$role}' assigned to user '{$user->name}'.");
        } catch (RoleDoesNotExist $e) {
            $this->error("Failed to assign role '{$role}' to user '{$user->name}': " . $e->getMessage());
            return Command::FAILURE;
        }
        return Command::SUCCESS;
    }
}
