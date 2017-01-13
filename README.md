eReuse Wordpress Theme
======================

Installation
------------
We use ruby's sass and compass to compile sass to the style.css. To do that in a Mac, 

    sudo gem update --system
    sudo gem install -n /usr/local/bin sass
    sudo gem install -n /usr/local/bin compass

And then go to this project's folder and execute

    compass watch
    
This will generate 'style.css' every time something changes in sass folder.

We only use composer to get wordpress, so the IDE can reference the functions –no needed for the theme.
