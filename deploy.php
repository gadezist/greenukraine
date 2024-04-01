<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:gadezist/greenukraine.git');
set('nvm', 'source $HOME/.nvm/nvm.sh &&');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('greenukraine.ch')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/greenukraine.ch');

// Hooks

desc('Installs npm packages');
task('npm:install', function () {
    run("cd {{release_path}} && {{nvm}} npm ci");
});

// Build assets webpack
task('npm:build', function () {
    run("cd {{release_path}} && {{nvm}} npm run build");
});

after('deploy:update_code', 'npm:install');
after('npm:install', 'npm:build');
after('deploy:failed', 'deploy:unlock');

