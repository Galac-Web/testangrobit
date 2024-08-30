<?php


// Определение классов

class Role
{
    private $id;
    private $name;
    private $permissions;

    public function __construct($id, $name, array $permissions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->permissions = $permissions;
    }

    public function hasPermission($permission)
    {
        return in_array($permission, $this->permissions);
    }
}

class User
{
    private $id;
    private $name;
    private $role;
    private $assignedProjects;

    public function __construct($id, $name, Role $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
        $this->assignedProjects = [];
    }

    public function assignProject(Project $project)
    {
        $this->assignedProjects[] = $project;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getAssignedProjects()
    {
        return $this->assignedProjects;
    }
}

class Project
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class PermissionManager
{
    public static function checkAccess(User $user, $permission)
    {
        return $user->getRole()->hasPermission($permission);
    }
}

// Создание ролей
$adminRole = new Role(1, "Administrator", ["view_all_projects", "edit_project"]);
$managerRole = new Role(2, "Project Manager", ["view_project", "edit_project"]);
$executorRole = new Role(3, "Executor", ["view_project"]);

// Создание пользователей
$admin = new User(1, "John Doe", $adminRole);
$manager = new User(2, "Jane Smith", $managerRole);
$executor = new User(3, "Tom Brown", $executorRole);

// Создание проектов
$project1 = new Project(1, "Company Website");
$project2 = new Project(2, "Mobile App");

// Назначение проектов пользователям
$admin->assignProject($project1);
$admin->assignProject($project2);

$manager->assignProject($project1);

$executor->assignProject($project2);

// Пример использования
echo "Projects accessible by John (Admin):\n";
foreach ($admin->getAssignedProjects() as $project) {
    echo $project->getName() . "\n";
}

echo "\nProjects accessible by Jane (Manager):\n";
foreach ($manager->getAssignedProjects() as $project) {
    echo $project->getName() . "\n";
}

echo "\nProjects accessible by Tom (Executor):\n";
foreach ($executor->getAssignedProjects() as $project) {
    echo $project->getName() . "\n";
}

// Проверка доступа
if (PermissionManager::checkAccess($manager, "edit_project")) {
    echo "\nJane (Manager) can edit projects.\n";
} else {
    echo "\nJane (Manager) cannot edit projects.\n";
}

if (PermissionManager::checkAccess($executor, "edit_project")) {
    echo "Tom (Executor) can edit projects.\n";
} else {
    echo "Tom (Executor) cannot edit projects.\n";
}
