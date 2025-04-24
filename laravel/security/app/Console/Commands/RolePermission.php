<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:permission {role} {permission} {--revoke}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign a permission to a role';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $role = Role::findByName($this->argument('role'));
        $permission = Permission::findByName($this->argument('permission'));

        if ($this->option('revoke')) {
            // Logic to revoke permission from role
            $role->revokePermissionTo($permission);
            $this->info("Permission '{$permission}' revoked from role '{$role}'.");
        } else {
            // Logic to assign permission to role
            $role->givePermissionTo($permission);
            $this->info("Permission '{$permission}' assigned to role '{$role}'.");
        }

        return Command::SUCCESS;
    }
}
