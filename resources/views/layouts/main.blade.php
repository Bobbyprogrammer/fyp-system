
<div class="header" >
    <div class="header-left">
        <a href="#" class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp5C3WNWamGxfda2llgAxiqN2AhD8PCEKE3g&usqp=CAU" alt="Logo">
        </a>
        <a href="" class="logo logo-small">
            <img src="{{ url('admin-assets/assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item dropdown noti-dropdown me-2">
            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                <img src="{{ url('admin-assets/assets/img/icons/header-icon-05.svg') }}" alt="">
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                            approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">International Software
                                                Inc</span> has sent you a invoice in the amount of <span
                                                class="noti-title">$218</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                            a cancellation request <span class="noti-title">Apple iPhone
                                                XR</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Mercury Software
                                                Inc</span> added a new product <span class="noti-title">Apple
                                                MacBook Pro</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="{{ url('log') }}">View all Notifications</a>
                </div>
            </div>
        </li>



        <li class="nav-item dropdown has-arrow new-user-menus">

            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ url('admin-assets/assets/img/profiles/avatar-01.jpg') }}" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            <ul>
                @if (Auth::user()->user_type == 1)

                            <li class="">
                                <a href="{{ url('admin/dashboard') }}" aria-expanded="false" class="active">
                                <span class="mybtn ">Dashboard</span>
                                </a>
                                </li>

                    <li><a href="{{ url('admin/admin/list') }}" aria-expanded="false">
                            <span class="mybtn">Admins</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/teacher/list') }}" aria-expanded="false">

                            <span class="mybtn">Teachers</span>
                        </a>

                    </li>
                    <li><a href="{{ url('admin/student/list') }}" aria-expanded="false">

                            <span class="mybtn">Students</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/class/list') }}" aria-expanded="false">

                            <span class="mybtn">Classes</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/notice_board') }}" aria-expanded="false">

                        <span class="mybtn">Notice Board</span>
                    </a>
                </li>
                    <li><a href="{{ url('admin/change_password') }}" aria-expanded="false">

                        <span class="mybtn">Change password</span>
                    </a>
                </li>
                @elseif(Auth::user()->user_type == 2)
                    <li><a href="{{ url('teacher/dashboard') }}" aria-expanded="false">

                            <span class="mybtn">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ url('teacher/my_student') }}" aria-expanded="false">

                            <span class="mybtn">My Students</span>
                        </a>
                    </li>
                    <li><a href="{{ url('teacher/task') }}" aria-expanded="false">

                        <span class="mybtn">Task</span>
                    </a>
                </li>
            </li>
                    <li><a href="{{ url('teacher/notice_board') }}" aria-expanded="false">

                        <span class="mybtn">Notice Board</span>
                    </a>
                </li>
                    <li><a href="{{ url('teacher/my_student/proposal') }}" aria-expanded="false">

                        <span class="mybtn">Students Proposals</span>
                    </a>
                </li>
                <li><a href="{{ url('teacher/change_password') }}" aria-expanded="false">

                    <span class="mybtn">Change password</span>
                </a>
            </li>
                @elseif(Auth::user()->user_type == 3)
                    <li><a href="{{ url('student/dashboard') }}" aria-expanded="false">

                            <span class="mybtn">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ url('student/proposal/list') }}" aria-expanded="false">

                            <span class="mybtn">Proposal</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('student/my_task') }}" >
                            <span class="mybtn">MY Tasks</span></a>
                </li>
                <li>
                    <a href="{{ url('student/my_task/submitted') }}" >
                        <span class="mybtn">MY Submitted Tasks</span></a>
            </li>
                    <li><a href="{{ url('student/notice_board') }}" aria-expanded="false">

                        <span class="mybtn">Notice Board</span>
                    </a>
                </li>
                    <li><a href="{{ url('student/change_password') }}" aria-expanded="false">

                        <span class="mybtn">Change password</span>
                    </a>
                </li>
                @endif
                <li><a href="{{ url('logout') }}" aria-expanded="false">

                        <span class="mybtnd">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
