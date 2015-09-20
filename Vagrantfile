Vagrant.configure("2") do |config|

  config.vm.box = "precise32"
  config.vm.box_url = "http://files.vagrantup.com/precise32.box"
  config.vm.network "forwarded_port", guest: 4000, host: 4000
  config.vm.network "private_network", ip: "192.168.3.33"
  config.vm.provision :shell,
    :inline => "sudo apt-get -y install build-essential &&
                sudo apt-get -y install curl &&
                sudo apt-get install --yes nodejs &&
                gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3 &&
                curl -sSL https://get.rvm.io | bash -s stable --ruby &&
                source /home/vagrant/.rvm/scripts/rvm &&
                sudo gem install jekyll --no-ri --no-rdoc"
end
