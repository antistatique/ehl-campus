
require 'capistrano/ext/multistage'

set :application, "campusdevforum"
# Relative path to thedrupal path
set :app_path,    "drupal"
set :shared_children, ['drupal/sites/default/files']
set :shared_files, ['drupal/sites/default/settings.php'] 
set :stages, %w(dev prod)
set :scm, "git"
set :repository, "git@github.com:antistatique/ehl-campus.git"
set :branch, "master"
set :port, 22
set :domain,      "ehl-campusdev.alwaysdata.net"
set :deploy_to, "/home/aists/www/#{application}"
set :user, "ehl-campusdev"
set :group, "ehl-campusdev"
set :runner_group, "ehl-campusdev"
set :use_sudo,    false
ssh_options[:forward_agent] = true
# role :app, "www.example.com"

role :app, domain
role :db, domain

# Be more verbose by uncommenting the following line
#logger.level = Logger::MAX_LEVEL