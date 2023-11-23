  <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
      data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
      data-kt-drawer-toggle="#kt_aside_mobile_toggle">
      <!--begin::Brand-->
      <div class="aside-logo flex-column-auto" id="kt_aside_logo">
          <!--begin::Logo-->
          <a href="index.html">
              <img alt="Logo" src="{{ asset('admin-page/') }}/assets/media/logos/logo-demo13.svg"
                  class="h-15px logo" />
          </a>
          <!--end::Logo-->
          <!--begin::Aside toggler-->
          <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
              data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
              data-kt-toggle-name="aside-minimize">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
              <span class="svg-icon svg-icon-1 rotate-180">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path
                          d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                          fill="black" />
                  </svg>
              </span>
              <!--end::Svg Icon-->
          </div>
          <!--end::Aside toggler-->
      </div>
      <!--end::Brand-->
      <!--begin::Aside menu-->
      <div class="aside-menu flex-column-fluid">
          <!--begin::Aside Menu-->
          <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
              data-kt-scroll-offset="0">
              <!--begin::Menu-->
              <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                  id="#kt_aside_menu" data-kt-menu="true">
                  <div class="menu-item">
                      <div class="menu-content pb-2">
                          <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                      </div>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link active" href="index.html">
                          <span class="menu-icon">
                              <i class="bi bi-grid fs-3"></i>
                          </span>
                          <span class="menu-title">Dashboard</span>
                      </a>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="dashboards/only-header.html">
                          <span class="menu-icon">
                              <i class="bi bi-window fs-3"></i>
                          </span>
                          <span class="menu-title">Only Header</span>
                      </a>
                  </div>
                  <div class="menu-item">
                      <a class="menu-link" href="landing.html">
                          <span class="menu-icon">
                              <i class="bi bi-app-indicator fs-3"></i>
                          </span>
                          <span class="menu-title">Landing Page</span>
                      </a>
                  </div>

                  <div class="menu-item">
                      <div class="menu-content pt-8 pb-2">
                          <span class="menu-section text-muted text-uppercase fs-8 ls-1">Setting</span>
                      </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                      <span class="menu-link">
                          <span class="menu-icon">
                              <i class="bi bi-printer fs-3"></i>
                          </span>
                          <span class="menu-title">Customers</span>
                          <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                              <a class="menu-link" href="apps/customers/getting-started.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Getting Started</span>
                              </a>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/customers/list.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Customer Listing</span>
                              </a>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/customers/view.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Customer Details</span>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                      <span class="menu-link">
                          <span class="menu-icon">
                              <i class="bi bi-hr fs-3"></i>
                          </span>
                          <span class="menu-title">Invoice Manager</span>
                          <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion">
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                              <span class="menu-link">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">View Invoices</span>
                                  <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion menu-active-bg">
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/invoices/view/invoice-1.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Invoice 1</span>
                                      </a>
                                  </div>
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/invoices/view/invoice-2.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Invoice 2</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/invoices/create.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Create Invoice</span>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                      <span class="menu-link">
                          <span class="menu-icon">
                              <i class="bi bi-people fs-3"></i>
                          </span>
                          <span class="menu-title">User Management</span>
                          <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion">
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                              <span class="menu-link">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Users</span>
                                  <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion">
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/user-management/users/list.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Users List</span>
                                      </a>
                                  </div>
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/user-management/users/view.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">View User</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                              <span class="menu-link">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Roles</span>
                                  <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion">
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/user-management/roles/list.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Roles List</span>
                                      </a>
                                  </div>
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/user-management/roles/view.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">View Role</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/user-management/permissions.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Permissions</span>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                      <span class="menu-link">
                          <span class="menu-icon">
                              <i class="bi bi-people fs-3"></i>
                          </span>
                          <span class="menu-title">Support Center</span>
                          <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/overview.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Overview</span>
                              </a>
                          </div>
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                              <span class="menu-link">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Tickets</span>
                                  <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion">
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/support-center/tickets/list.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Tickets List</span>
                                      </a>
                                  </div>
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/support-center/tickets/view.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">View Ticket</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                              <span class="menu-link">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Tutorials</span>
                                  <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion">
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/support-center/tutorials/list.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Tutorials List</span>
                                      </a>
                                  </div>
                                  <div class="menu-item">
                                      <a class="menu-link" href="apps/support-center/tutorials/post.html">
                                          <span class="menu-bullet">
                                              <span class="bullet bullet-dot"></span>
                                          </span>
                                          <span class="menu-title">Tutorial Post</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/faq.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">FAQ</span>
                              </a>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/licenses.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Licenses</span>
                              </a>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/contact.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Contact Us</span>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                      <span class="menu-link">
                          <span class="menu-icon">
                              <i class="bi bi-window fs-3"></i>
                          </span>
                          <span class="menu-title">Website</span>
                          <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion">
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/overview.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Menu Web</span>
                              </a>
                          </div>
                          <div class="menu-item">
                              <a class="menu-link" href="apps/support-center/overview.html">
                                  <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Section Web</span>
                              </a>
                          </div>
                      </div>
                  </div>

              </div>
              <!--end::Menu-->
          </div>
      </div>
      <!--end::Aside menu-->
      <!--begin::Footer-->
      <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
          <a href="documentation/getting-started.html" class="btn btn-custom btn-primary w-100"
              data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
              title="200+ in-house components and 3rd-party plugins">
              <span class="btn-label">Docs &amp; Components</span>
              <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
              <span class="svg-icon btn-icon svg-icon-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none">
                      <path opacity="0.3"
                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                          fill="black" />
                      <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                  </svg>
              </span>
              <!--end::Svg Icon-->
          </a>
      </div>
      <!--end::Footer-->
  </div>
