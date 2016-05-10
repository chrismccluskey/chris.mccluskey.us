@setup
    $deploy_user = $user;
    $deploy_server = $server;
    $deploy_server_string = sprintf('%s@%s', $deploy_user, $deploy_server);
@endsetup

@servers(['web' => $deploy_server_string])

@task('deploy')
    cd /srv/www/chris.mccluskey.us
    git pull origin master
    npm install
    gulp
    php artisan migrate
@endtask
