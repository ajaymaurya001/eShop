      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
          <!--begin::Sidebar Brand-->
          <div class="sidebar-brand">
              <!--begin::Brand Link-->
              {{-- <a href="{{ route('admin.dashboard') }}" class="brand-link"> --}}
                <a href="#" class="brand-link">
                  <!--begin::Brand Image-->
                  <img src="{{ asset('asset/assets/img/white-logo.png') }}" alt="AdminLTE Logo"
                      class="brand-image opacity-75 shadow" />
                  <!--end::Brand Image-->
                  <!--begin::Brand Text-->
                  <span class="brand-text fw-light">E Shop</span>
                  <!--end::Brand Text-->
              </a>
              <!--end::Brand Link-->
          </div>
          <!--end::Sidebar Brand-->
          <!--begin::Sidebar Wrapper-->
          <div class="sidebar-wrapper">
              <nav class="mt-2">
                  <!--begin::Sidebar Menu-->
                  <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                      aria-label="Main navigation" data-accordion="false" id="navigation">
                      
                      <li class="nav-item menu-open">
                          {{-- <a href="{{ route('admin.dashboard') }}" class="nav-link active"> --}}
                            <a href="#" class="nav-link active">
                              <i class="nav-icon bi bi-speedometer"></i>
                              <p>
                                  Dashboard

                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-box-seam-fill"></i>
                              <p>
                                  Products
                                  <i class="nav-arrow bi bi-chevron-right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./widgets/small-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Add Product</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./widgets/info-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>All Product</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-receipt-cutoff"></i>
                              <p>
                                  Orders
                                  <i class="nav-arrow bi bi-chevron-right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./widgets/small-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Add Order</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./widgets/info-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>All Order</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-people-fill"></i>
                              <p>
                                  Users
                                  <i class="nav-arrow bi bi-chevron-right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="./widgets/small-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Add User</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="./widgets/info-box.html" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>All User</p>
                                  </a>
                              </li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-person-circle"></i>
                              <p>
                                  My Profile
                              </p>
                          </a>
                      </li>

                  </ul>
                  <!--end::Sidebar Menu-->
              </nav>
          </div>
          <!--end::Sidebar Wrapper-->
      </aside>
