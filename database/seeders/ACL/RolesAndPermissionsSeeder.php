<?php

namespace Database\Seeders\ACL;

use App\Enums\RolesEnum;
use Database\Seeders\AbstractSeeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $this->progress('Syncing Roles & Permissions', function () {
            $staticPermissions = [
                'view dashboard',
                'manage users',
                'create invoices',
                'approve quotes',
            ];

            foreach ($staticPermissions as $permission) {
                Permission::query()->firstOrCreate(['name' => $permission]);
            }

            $models = [
                'franchise', 'user', 'business', 'contact',
                'invoice', 'quote', 'expense', 'payment',
                'product', 'department', 'creditor',
            ];

            $actions = [
                'view', 'read', 'create', 'update', 'delete',
                'restore', 'import', 'export', 'copy',
            ];

            $generatedPermissions = collect($models)
                ->flatMap(fn ($model) => collect($actions)->map(fn ($action) => "{$action} {$model}"))
                ->values();

            foreach ($generatedPermissions as $permission) {
                Permission::query()->firstOrCreate(['name' => $permission]);
            }

            $allPermissions = Permission::query()->pluck('name')->toArray();

            $rolePermissions = [
                RolesEnum::SUPERADMIN->value => $allPermissions,

                RolesEnum::ADMIN->value => $allPermissions,

                RolesEnum::ASSISTANCE->value => $allPermissions,

                RolesEnum::USERADMIN->value => $allPermissions,

                RolesEnum::USER->value => $allPermissions,
            ];

            foreach ($rolePermissions as $role => $permissions) {
                if ($roleModel = Role::query()->where('name', $role)->first()) {
                    $roleModel->syncPermissions($permissions);
                }
            }
        });
    }
}
