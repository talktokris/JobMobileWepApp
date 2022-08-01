<div class="topbar d-flex align-items-center">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
        </div>
        <div class="top-menu-left d-none d-lg-block">

        </div>
        <div class="search-bar flex-grow-1">

        </div>
        <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">


                <li class="nav-item dropdown dropdown-large">

                    <div class="dropdown-menu dropdown-menu-end">

                        <div class="header-notifications-list">

                        </div>

                    </div>
                </li>
                <li class="nav-item dropdown dropdown-large">

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <p class="msg-header-title">Messages</p>
                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                            </div>
                        </a>
                        <div class="header-message-list">

                        </div>

                    </div>
                </li>
            </ul>
        </div>
        <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                <div class="user-info ps-3">
                    <p class="user-name mb-0">{{ Auth::User()->name }}</p>
                    <?php if(Auth::User()->role==1){ $roleString ='Admin User';}
                    elseif(Auth::User()->role==2){ $roleString ='Staff User';}
                    elseif(Auth::User()->role==3){ $roleString ='Web User';}
                    else{ $roleString ='Pending User';}
                 ?>
                    <p class="designattion mb-0">{{ $roleString }}</p>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php /*
                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-lock"></i><span>Change Password</span></a>
                </li>
                */ ?>

                <li>
                    <div class="dropdown-divider mb-0"></div>
                </li>
                <li><form method="POST" id="log-form" action="{{ route('logout') }}">
                @csrf
                    <button class="dropdown-item" type="submit" ><i
                            class='bx bx-log-out-circle'></i><span>Logout</span></button>


                                       <!-- Authentication -->

                                         </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
