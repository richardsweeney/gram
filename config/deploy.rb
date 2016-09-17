set :application, 'gram'
set :repo_url, 'https://github.com/richardsweeney/gram.git'

set :scm, :git
set :ssh_options, { :forward_agent => true, }

set :deploy_via, :remote_cache
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]

set :composer_install_flags, '--no-dev --prefer-dist --no-scripts --optimize-autoloader'
set :composer_roles, :all

namespace :deploy do

  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 2 do
      execute "sudo service php7.0-fpm restart"
    end
  end

  after :finished, :restart

end
