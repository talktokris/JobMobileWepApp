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
            <div class="menu-title">News</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/create-news-post') }}"><i class="bx bx-right-arrow-alt"></i>Create News Post</a>
            </li>
            <li> <a href="{{ url('/admin/search-news-posts') }}"><i class="bx bx-right-arrow-alt"></i>Search News Post</a>
            </li>
        </ul>
    </li>

	<li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-photo-album'></i>
            </div>
            <div class="menu-title">Gallery</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/upload-images') }}"><i class="bx bx-right-arrow-alt"></i>Upload Images</a>
            </li>
            <li> <a href="{{ url('/admin/manage-gallery-images') }}"><i class="bx bx-right-arrow-alt"></i>Manage Gallery Images</a>
            </li>
			<li> <a href="{{ url('/admin/manage-gallery-categories') }}"><i class="bx bx-right-arrow-alt"></i>Gallery Category Setup</a>
            </li>
        </ul>
    </li>

	<li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-network-chart'></i>
            </div>
            <div class="menu-title">Shree Team</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/create-team-member') }}"><i class="bx bx-right-arrow-alt"></i>Create Team Member</a>
            </li>
            <li> <a href="{{ url('/admin/manage-team-members') }}"><i class="bx bx-right-arrow-alt"></i>Manage Team</a>
            </li>

        </ul>
    </li>


	<li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-phone'></i>
            </div>
            <div class="menu-title">Contact Setup</div>
        </a>
        <ul>
            <li> <a href="{{ url('/admin/create-contact') }}"><i class="bx bx-right-arrow-alt"></i>New Contact</a>
            </li>
            <li> <a href="{{ url('/admin/manage-contacts') }}"><i class="bx bx-right-arrow-alt"></i>Manage Contact</a>
            </li>

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
