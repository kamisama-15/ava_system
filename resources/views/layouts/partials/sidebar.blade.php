<aside class="main-sidebar sidebar-light-primary elevation-4"> 
    <a href="#" target="_BLANK" class="brand-link">
        <img src="{{ asset('image/ava1.jpg') }}" alt="School Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AVA LMS</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image"> 
                <img src="{{ asset('image/ava1.jpg') }}" class="img-circle elevation-2" style="width:30px;height:30px;" alt="User Image"> 
            </div> 
            <div class="info">
                <a href="{{action('UserController@main')}}" class="d-block">{{Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

               
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item">
                    <a href="{{route('home')}}" id="home-link" class="nav-link">
                      <i class="fas fa-home nav-icon"></i>
                      <p>Home</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{action('DashboardController@main')}}" id="dashboard-link" class="nav-link">
                      <i class="fas fa-dashboard nav-icon"></i>
                      <p>DashBoard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{action('AnnouncementController@view_announcements')}}" id="notifications-link" class="nav-link">
                      <i class="fas fa-bell nav-icon"></i>
                      <p>Announcements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{action('FullCalendarController@index')}}" id="calendar-link" class="nav-link">
                      <i class="fas fa-calendar nav-icon"></i>
                      <p>Calendar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" id="staffs-link" class="nav-link">
                      <i class="fas fa-users nav-icon"></i>
                      <p>Staffs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" id="subjects-link" class="nav-link">
                      <i class="fas fa-book nav-icon"></i>
                      <p>Subjects</p>
                    </a>
                  </li>
                  <li class="nav-item menu-is-opening menu-open">
                    <a href="#" id="student-management-link" class="nav-link">
                      <i class="nav-icon fas fa-school"></i>
                      <p>
                        Student Management
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                      <li class="nav-item menu-is-opening menu-open">
                        <a href="#" id="elementary-link" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Elementary
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeOne')}}" id="grade-one-link" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 1</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeTwo')}}" id="grade-two-link" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 2</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeThree')}}" id="grade-three-link" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 3</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeFour')}}" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 4</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeFive')}}" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 5</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{action('ElementaryController@gradeSix')}}" class="nav-link grade-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 6</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            High School
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 7</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 8</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 9</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 10</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Senior High School
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 11</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Grade 12</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
              
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fas fa-file nav-icon"></i>
                      <p>Events</p>
                    </a>
                  </li>
                </ul>
              </nav>
              
            </ul>
        </nav>
    </div>
</aside>



