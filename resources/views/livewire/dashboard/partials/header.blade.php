<div class="header-area header-style-three">
    <div class="container-fluid">
        <div class="header-content-wrapper">
            <div class="header-content d-flex justify-content-between align-items-center">
                <div class="header-left-content d-flex">
                    <div class="responsive-burger-menu d-block d-lg-none">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>

                    <div class="main-logo">
                        <a href="/">
                            <img src="{{ asset('assets/dash/images/logo.png') }}" alt="main-logo" width="100" height="100">
                        </a>
                    </div>

                    <form class="search-bar d-flex">
                        <img src="{{ asset('assets/dash/images/icon/search-normal.svg') }}" alt="search-normal">

                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>

                    <div class="option-item for-mobile-devices d-block d-lg-none">
                        <i class="search-btn ri-search-line"></i>
                        <i class="close-btn ri-close-line"></i>

                        <div class="search-overlay search-popup">
                            <div class='search-box'>
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">

                                    <button class="search-button" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-right-content d-flex align-items-center">
                    <div class="header-right-option">
                        <a href="lms-academy.html#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                            <img src="{{ asset('assets/dash/images/icon/maximize.svg') }}" alt="maximize">
                        </a>
                    </div>

                    <div class="header-right-option dropdown apps-option">
                        <button class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/dash/images/icon/app.svg') }}" alt="apps">
                        </button>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                <span class="title d-inline-block">Web Apps</span>
                                <span class="edit-btn d-inline-block">Edit</span>
                            </div>

                            <div class="dropdown-wrap" data-simplebar>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="{{ asset('assets/dash/images/apps/icon-account.png') }}" alt="icon-account">
                                        <span class="d-block mb-0">Account</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="{{ asset('assets/dash/images/apps/icon-google.png') }}" alt="icon-google">
                                        <span class="d-block mb-0">Search</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="{{ asset('assets/dash/images/apps/icon-map.png') }}" alt="icon-map">
                                        <span class="d-block mb-0">Maps</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="{{ asset('assets/dash/images/apps/icon-youtube.png') }}" alt="icon-youtube">
                                        <span class="d-block mb-0">YouTube</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-playstore.png" alt="icon-playstore">
                                        <span class="d-block mb-0">Play</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-gmail.png" alt="icon-gmail">
                                        <span class="d-block mb-0">Gmail</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-drive.png" alt="icon-drive">
                                        <span class="d-block mb-0">Drive</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-calendar.png" alt="icon-calendar">
                                        <span class="d-block mb-0">Calendar</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-bitbucket.png" alt="icon-bitbucket">
                                        <span class="d-block mb-0">Bitbucket</span>
                                    </a>
                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-github.png" alt="icon-github">
                                        <span class="d-block mb-0">Github</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-dribbble.png" alt="icon-dribbble">
                                        <span class="d-block mb-0">Dribbble</span>
                                    </a>

                                    <a href="lms-academy.html#" class="dropdown-item">
                                        <img src="assets/dash/images/apps/icon-mail-chimp.png" alt="icon-mail-chimp">
                                        <span class="d-block mb-0">Mailchimp</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-footer">
                                <a href="lms-academy.html#" class="dropdown-item">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-option notification-option messenger-option dropdown">
                        <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="messages-btn">
                                <img src="assets/dash/images/icon/message.svg" alt="message">
                                <span class="badge">3</span>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                <span class="title d-inline-block">5 New Message</span>
                                <span class="mark-all-btn d-inline-block">Clear All</span>
                            </div>

                            <div class="dropdown-wrap" data-simplebar>
                                <a href="chat.html" class="dropdown-item d-flex">
                                    <div class="icon">
                                        <img src="assets/dash/images/user/user-1.png" alt="user-1">
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Alex Dew</span>
                                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                        <p class="sub-text mb-0">2 sec ago</p>
                                    </div>
                                </a>

                                <a href="chat.html" class="dropdown-item d-flex">
                                    <div class="icon">
                                        <img src="assets/dash/images/user/user-2.png" alt="user-2">
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Anne Kew</span>
                                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                        <p class="sub-text mb-0">5 sec ago</p>
                                    </div>
                                </a>

                                <a href="chat.html" class="dropdown-item d-flex">
                                    <div class="icon">
                                        <img src="assets/dash/images/user/user-3.png" alt="user-3">
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Huhon Smith</span>
                                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                        <p class="sub-text mb-0">3 min ago</p>
                                    </div>
                                </a>

                                <a href="chat.html" class="dropdown-item d-flex">
                                    <div class="icon">
                                        <img src="assets/dash/images/user/user-4.png" alt="user-4">
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Yelax Spin</span>
                                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                        <p class="sub-text mb-0">7 min ago</p>
                                    </div>
                                </a>

                                <a href="chat.html" class="dropdown-item d-flex">
                                    <div class="icon">
                                        <img src="assets/dash/images/user/user-5.png" alt="user-5">
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Steven</span>
                                        <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                        <p class="sub-text mb-0">1 sec ago</p>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-footer">
                                <a href="chat.html" class="dropdown-item">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-option notification-option dropdown">
                        <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="notification-btn">
                                <img src="assets/dash/images/icon/notification.svg" alt="notification">
                                <span class="badge">4</span>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                <span class="title d-inline-block">6 New Notifications</span>
                                <span class="mark-all-btn d-inline-block">Mark all as read</span>
                            </div>

                            <div class="dropdown-wrap" data-simplebar>
                                <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-message-rounded-dots'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Just sent a new message!</span>
                                        <p class="sub-text mb-0">2 sec ago</p>
                                    </div>
                                </a>

                                <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-user'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">New customer registered</span>
                                        <p class="sub-text mb-0">5 sec ago</p>
                                    </div>
                                </a>

                                <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-layer'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Apps are ready for update</span>
                                        <p class="sub-text mb-0">3 min ago</p>
                                    </div>
                                </a>

                                <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-hourglass'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Your item is shipped</span>
                                        <p class="sub-text mb-0">7 min ago</p>
                                    </div>
                                </a>

                                <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                    <div class="icon">
                                        <i class='bx bx-comment-dots'></i>
                                    </div>

                                    <div class="content">
                                        <span class="d-block">Steven commented on your post</span>
                                        <p class="sub-text mb-0">1 sec ago</p>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-footer">
                                <a href="inbox.html" class="dropdown-item">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                        <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="lms-academy.html#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/dash/images/avatar.png') }}" alt="avatar">
                            <div class="d-none d-lg-block d-md-block">

                                <h3> John Smilga</h3>
                                <span>Super Admin</span>
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="{{ asset('assets/dash/images/avatar.png') }}" class="rounded-circle" alt="avatar">
                                </div>

                                <div class="info text-center">
                                    <span class="name">John Smilga</span>
                                    <p class="mb-3 email">
                                        <a href="../../cdn-cgi/l/email-protection.html#3f555057514c525653585e7f575a535350115c5052"><span class="__cf_email__" data-cfemail="d1bbbeb9bfa2bcb8bdb6b091b9b4bdbdbeffb2bebc">[email&#160;protected]</span></a>
                                    </p>
                                </div>
                            </div>

                            <div class="dropdown-wrap">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="profile.html" class="nav-link">
                                            <i class="ri-user-line"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="inbox.html" class="nav-link">
                                            <i class="ri-mail-send-line"></i>
                                            <span>My Inbox</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="edit-profile.html" class="nav-link">
                                            <i class="ri-edit-box-line"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="edit-profile.html" class="nav-link">
                                            <i class="ri-settings-5-line"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown-footer">
                                <ul class="profile-nav">
                                    <li class="nav-item">
                                        <a href="login.html" class="nav-link">
                                            <i class="ri-login-circle-line"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header-right-option template-option">
                        <a class="dropdown-item" href="lms-academy.html#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <img src="{{ asset('assets/dash/images/icon/setting.svg') }}" alt="setting">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
