http_path = "/" #root level target path
css_dir = "." #targets our default style.css file at the root level of our theme
sass_dir = "sass" #targets our sass directory
images_dir = "images" #targets our pre existing image directory
javascripts_dir = "js" #targets our JavaScript directory

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions.
# note: this is important in wordpress themes for sprites
relative_assets = true

# Use ":development" for nice formatting of ":production" to compress
# If you use production, it will remove the comments, and Wordpress needs to have the comment
# of the beginning of the sass/style.sass, just copy and paste it to the resulting style.css
environment = :development
