  <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
             
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Users</a></li>
                      <li><a href="#">setting</a></li>
                      <li><a href="#">storage</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cloud-download"></i> Share users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/upload">upload your file</a></li>
                        @foreach($cats as $cat)
                      <li><a href="CAT_{{$cat->name}}"">{{$cat->name}}</a></li>
                        @endforeach
                            
                    </ul>
                  </li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>

            <!-- /sidebar menu -->
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
