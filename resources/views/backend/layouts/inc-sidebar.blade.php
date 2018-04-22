<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}"><i class="icon-speedometer"></i> Dashboard </a>
          </li>

        <li class="nav-title">
            UI Elements
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('backend/category') }}"><i class="icon-layers"></i> CATEGORY</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('backend/playlist') }}"><i class="icon-layers"></i> PLAYLIST</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('backend/content') }}"><i class="icon-notebook"></i> CONTENTS</a>
        </li>

        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-folder-alt"></i> OFFICAIL PAGE</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('#') }}"><i class="icon-arrow-right"></i> WHY LOCALRY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('#') }}"><i class="icon-arrow-right"></i> ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('#') }}" ><i class="icon-arrow-right"></i> CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('#') }}"><i class="icon-arrow-right"></i> พันธมิตร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('#') }}"><i class="icon-arrow-right"></i> ร่วมงานกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('#') }}"><i class="icon-arrow-right"></i> นโยบายการใช้งาน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('#') }}"><i class="icon-arrow-right"></i> ข้อมูลและความเป็นส่วนตัว</a>
            </li>
          </ul>
        </li>
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-settings"></i> SETTING</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('backend/setting/language') }}"><i class="icon-arrow-right"></i> LANGUAGE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('backend/setting/user') }}"><i class="icon-arrow-right"></i> ADMINISTRATORS</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="{{ url('backend/logout') }}"><i class="icon-logout"></i> LOGOUT</a>
        </li>        
      </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>