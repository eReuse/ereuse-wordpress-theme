eReuse Wordpress Theme
======================

Just a small theme for the website of eReuse.org. 

This is a child theme of the *bootstrap-basic* Wordpress theme and really customized for our needs. 
We extend Bootswatch's SuperHero theme. 

Installation
------------
We use ruby's sass and compass to compile sass to the style.css. To do that in a Mac, 

    sudo gem update --system
    sudo gem install -n /usr/local/bin sass
    sudo gem install -n /usr/local/bin compass

And then go to this project's folder and execute

    compass watch
    
This will generate 'style.css' every time something changes in sass folder. Refer to the config.rb file for more info about this.

Only the code is Open-Source; ensure you have the proper rights if you use any image or any other material (including SVG).

Note that we use composer only to get a Wordpress that helps our IDE getting context of functions
and similar stuff; install Wordpress as better it fits you.
