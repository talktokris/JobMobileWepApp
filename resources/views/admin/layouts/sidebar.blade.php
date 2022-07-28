<div class="sidebar-header">
    <div>
        <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
        <h4 class="logo-text"> Job Agency</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
    </div>
</div>
<!--navigation-->
<ul class="metismenu" id="menu">

<li>
        <a href="{{ url('/admin/dashboard') }}" >
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-news'></i>
            </div>
            <div class="menu-title">Resumes</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/resumes/search') }}"><i class="bx bx-right-arrow-alt"></i>Resumes Search</a>
                <li> <a href="{{ url('/admin/resumes/recent') }}"><i class="bx bx-right-arrow-alt"></i>Resumes Recent</a>
            </li>
            </li>
        </ul>
    </li>



    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-search'></i>
            </div>
            <div class="menu-title">Jobs</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/jobs/jobs-search') }}"><i class="bx bx-right-arrow-alt"></i>Job Search</a>
            </li>
            <li> <a href="{{ url('/admin/jobs/create-job') }}"><i class="bx bx-right-arrow-alt"></i>Create Job</a>
            </li>


        </ul>
    </li>
<?php /*
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-message-rounded'></i>
            </div>
            <div class="menu-title">Messages</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/message/send') }}"><i class="bx bx-right-arrow-alt"></i>Send Message</a>
            </li>
            <li> <a href="{{ url('/admin/message/list') }}"><i class="bx bx-right-arrow-alt"></i>View Message List</a>
            </li>
            <li> <a href="{{ url('/admin/track-messages') }}"><i class="bx bx-right-arrow-alt"></i>Track Send Messages</a>
            </li>

        </ul>
    </li>
    */ ?>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-user'></i>
            </div>
            <div class="menu-title">Users</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/users/search') }}"><i class="bx bx-right-arrow-alt"></i>Serach Users</a>
            </li>
            <li> <a href="{{ url('/admin/create-user') }}"><i class="bx bx-right-arrow-alt"></i>Create New User</a>
            </li>


        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cog'></i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/setting/countries') }}"><i class="bx bx-right-arrow-alt"></i>Countries</a></li>
            <li> <a href="{{ url('/admin/setting/education-level') }}"><i class="bx bx-right-arrow-alt"></i>Education Level</a></li>
            <li> <a href="{{ url('/admin/setting/experience-level') }}"><i class="bx bx-right-arrow-alt"></i>Experience Level</a></li>
            <li> <a href="{{ url('/admin/setting/skill-level') }}"><i class="bx bx-right-arrow-alt"></i>Skill Level</a></li>
            <li> <a href="{{ url('/admin/setting/language') }}"><i class="bx bx-right-arrow-alt"></i>Language</a></li>
            <li> <a href="{{ url('/admin/setting/language-level') }}"><i class="bx bx-right-arrow-alt"></i>Language Level</a></li>

        </ul>
    </li>

    <li>
        <a href="#" onclick="document.getElementById('log-form').submit(); return false; ">
            <div class="parent-icon"><i class="bx bx-log-out"></i>
            </div>

            <div class="menu-title" >Logout</div>
        </a>
    </li>

<!-- Nav Real End -->




</ul>
<!--end navigation-->
