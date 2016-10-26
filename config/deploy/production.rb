set :stage, :production

role :app, %w{root@46.101.223.151}

set :deploy_to, '/usr/share/nginx/gram'
set :linked_dirs, %w{content/uploads }
set :linked_files, %w{local-config.php}
set :branch, "master"
