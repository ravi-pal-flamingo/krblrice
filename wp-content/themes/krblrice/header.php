<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
    
<header>
    <div class="container">
        <div class="shadow-bg"></div>
        <div class="header-row">
            <div class="burger-menu">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.33398 28.3334H31.6673M8.33398 20H31.6673M8.33398 11.6667H31.6673" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </div>
            <div class="brand-colm">
                <a href="#" class="brand-link">
                    <img src="<?= get_template_directory_uri();?>/assets/images/logo.png" alt="icon" width="102" height="40" class="w-100">
                </a>
            </div>
            <div class="header-nav-colm">
                <div class="close-nav">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.40002 13.6538L0.346191 12.6L5.94619 7.00002L0.346191 1.40002L1.40002 0.346191L7.00002 5.94619L12.6 0.346191L13.6538 1.40002L8.05384 7.00002L13.6538 12.6L12.6 13.6538L7.00002 8.05384L1.40002 13.6538Z" fill="#1C1B1F"/>
                    </svg>
                </div>
                <nav>
                    <ul class="navbar-list">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Us 
                                <div class="dropdowen-icon">
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L6 6L11 1" stroke="#73513A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                </div>
                            </a>
                            <div class="dropdowen-wraper">
                                <ul class="dropdowen-list">
                                    <li>
                                        <a href="#">About Us 1</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us 2</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us 3</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us 4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Our Portfolio
                                <div class="dropdowen-icon">
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L6 6L11 1" stroke="#73513A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                </div>
                            </a>
                            <div class="dropdowen-wraper">
                                <ul class="dropdowen-list">
                                    <li>
                                        <a href="#">Our Portfolio 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Portfolio 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Portfolio 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Portfolio 4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Explore Rice 
                                <div class="dropdowen-icon">
                                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L6 6L11 1" stroke="#73513A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                </div>
                            </a>
                            <div class="dropdowen-wraper">
                                <ul class="dropdowen-list">
                                    <li>
                                        <a href="#">Explore Rice 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Explore Rice 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Explore Rice 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Explore Rice 4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">News & Media</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Investor Relations</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Life at KRBL</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sustainability</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="search-colm">
                <button type="button" class="searchbtn">
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.77777 13.0555C9.96874 13.0555 12.5555 10.4687 12.5555 7.27777C12.5555 4.0868 9.96874 1.5 6.77777 1.5C3.5868 1.5 1 4.0868 1 7.27777C1 10.4687 3.5868 13.0555 6.77777 13.0555Z" stroke="#FFF9F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.9991 14.5L10.8574 11.3583" stroke="#FFF9F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                </button>

                <div class="search-bg-layer"><div class="noto-serif close-search">Close</div></div>
                <div class="search-nav">
                    <div class="search-form">
                        <form action="">
                            <input type="text" placeholder="Search">
                            <button class="button-search" type="submit">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.0358 17.3867L24.0327 22.3823L22.3818 24.0332L17.3862 19.0363C15.5274 20.5264 13.2153 21.3369 10.833 21.3335C5.03701 21.3335 0.333008 16.6295 0.333008 10.8335C0.333008 5.0375 5.03701 0.333496 10.833 0.333496C16.629 0.333496 21.333 5.0375 21.333 10.8335C21.3364 13.2158 20.5259 15.5279 19.0358 17.3867ZM16.6955 16.521C18.1761 14.9984 19.003 12.9573 18.9997 10.8335C18.9997 6.32083 15.3445 2.66683 10.833 2.66683C6.32034 2.66683 2.66634 6.32083 2.66634 10.8335C2.66634 15.345 6.32034 19.0002 10.833 19.0002C12.9568 19.0035 14.9979 18.1766 16.5205 16.696L16.6955 16.521Z" fill="white"/>
                                </svg>  
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>