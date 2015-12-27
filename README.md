# Personal website
Source code for my personal website. Lives here [http://www.jonathantorres.com](http://www.jonathantorres.com) using [jekyll](jekyllrb.com) and GitHub [pages](https://pages.github.com/).

## Installation
Clone the project
```bash
git clone https://github.com/jonathantorres/jonathantorres.github.io jonathantorres.com
```

Initialize the Vagrant VM. If something goes wrong (it will for sure) just ssh in the machine and install RVM, Ruby and Jekyll manually. I must create a better provisioning script, but this will do for now.
```bash
vagrant up
```

Install RVM.
```bash
gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3
```
```bash
curl -sSL https://get.rvm.io | bash -s stable
```

Once the installation is done, to start using it run
```bash
source /home/vagrant/.rvm/scripts/rvm
```

Now, use RVM to install ruby `2.1.1`
```bash
rvm install 2.1.1
```

Once that is done, install jekyll
```bash
sudo gem install jekyll --no-ri --no-rdoc && sudo gem install listen
```

## Run the jekyll server
Once the installation is done move to the project root folder
```bash
cd /vagrant
```

And run the jekyll server
```bash
jekyll serve
```

The website should be running locally on `http://0.0.0.0:4000`
