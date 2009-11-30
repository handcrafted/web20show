ssh_user = "mt1" # for rsync deployment
remote_root = "~/domains/web20show.com/html/wp-content/themes/web20show/" # for rsync deployment

namespace :styles do
  desc "Clear styles"
  task :clear do
    puts "*** Clearing styles ***"
    system "rm -Rfv css/*"
  end
  desc "Generate styles"
  task :generate => [:clear] do
    puts "*** Generating styles ***"
    system "compass"
  end
end

desc "Clears the styles, generates new ones and then deploys the theme"
task :deploy => 'styles:generate' do
  puts "*** Deploying the site ***"
  system("rsync -avz --delete . #{ssh_user}:#{remote_root}")
end