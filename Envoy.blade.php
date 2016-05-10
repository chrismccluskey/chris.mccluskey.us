@setup
    $deploy_server_string = sprintf('%s@%s', $user, $server);
@endsetup

@servers(['web' => $deploy_server_string])

@task('deploy')
    cd /srv/www/chris.mccluskey.us
    git pull origin master
    php artisan migrate

    curl -X DELETE "https://api.cloudflare.com/client/v4/zones/{{ $cf_zoneid }}/purge_cache" \
    -H "X-Auth-Email: {{ $cf_email }}" \
    -H "X-Auth-Key: {{ $cf_key }}" \
    -H "Content-Type: application/json" \
    --data '{"purge_everything":true}'
@endtask

