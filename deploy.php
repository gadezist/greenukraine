<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

// Config

set('repository', 'git@github.com:gadezist/greenukraine.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('greenukraine.ch')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/greenukraine.ch');

// Hooks

after('deploy:update_code', 'npm:install');
after('npm:install', 'npm:build');
after('deploy:failed', 'deploy:unlock');


// Build assets webpack
task('npm:build', function () {
    run("cd {{release_path}} && {{bin/npm}} run build");
});
