<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light City Int'l</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="h-44 md:h-72 bg-pink-900 relative bg-cover mb-4" style="background-image: url(<?php echo get_theme_file_uri('/images/lc_header.png'); ?>)">
        <nav class="flex justify-between p-2 bg-gray-800 absolute bottom-0 w-full max-h-12 ">
            <div class="h-24 border-gray-50 z-20 w-24 rounded-full bg-gray-100 relative bottom-8 flex justify-center items-center bg-gray-800">
                <a href="/">
                    <img src="<?php echo get_theme_file_uri('/images/lc_logo.png'); ?>" class="h-20 w-20" alt="logo" />
                </a>
            </div>
            <div class="relative">
                <span class="md:hidden">
                    <NavMenu />
                </span>
                <?php
                //save tailwind classes in variable to reduce typing
                $listStyleClass = "hover:bg-white text-left bg-gray-500 z-20 md:bg-gray-700 h-12 -mt-2 px-4 border-l border-gray-500 text-white hover:text-black ";
                $linkClass = "p-2 whitespace-nowrap flex hover:text-black justify-center items-center";
                ?>
                <ul class="md:flex md:mx-2 absolute md:block right-0 top-10 md:top-0">
                    <li class="<?php echo $listStyleClass ?>" style="border: none;">
                        <a href="/about" class="<?php echo $linkClass ?>">
                            About
                        </a>
                    </li>
                    <li class="<?php echo $listStyleClass ?>">
                        <a href="/contact" class="<?php echo $linkClass ?>">
                            Contact
                        </a>
                    </li>
                    <li class="<?php echo $listStyleClass ?>">
                        <a href="/support" class="<?php echo $linkClass ?>">
                            Support Us
                        </a>
                    </li>
                    <li class="<?php echo $listStyleClass ?>">
                        <a href="/our_belief" class="<?php echo $linkClass ?>">
                            Our Belief
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>