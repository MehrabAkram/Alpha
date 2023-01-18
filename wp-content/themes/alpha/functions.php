<?php

function alpha_bootstrapping(){
    load_theme_textdomain("alpha");
    add_theme_support("post_thumbnail");
    add_theme_support("title-tag");
}

add_action("after_setup_theme","alpha_bootstrapping");