class Theme < Thor
  
  # SSH user information
  SSH_USER = "mt1"
  
  # Remote file location that rsync will deploy to
  REMOTE_ROOT = "~/domains/web20show.com/html/wp-content/themes/web20show/"
  
  desc "deploy --delete", "Deploys the site"
  method_options :delete => :bolean
  def deploy
    if options.delete?
      puts "*** Deleting mis-matches and Deploying the site ***"
      system "rsync -avz --delete . #{SSH_USER}:#{REMOTE_ROOT}"
    else
      puts "*** Deploying the site ***"
      system "rsync -avz . #{SSH_USER}:#{REMOTE_ROOT}"
    end
  end
  
  desc "clear_styles", "Clears the themes styles"
  def clear_styles
    puts "*** Clearing styles ***"
    system "rm -Rfv css/*"
  end

  desc "generate_styles", "Generates the themes styles"
  def generate_styles
    puts "*** Generating styles ***"
    system "compass"
  end

end