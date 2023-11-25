 <div class="page-sidebar">
     <div class="main-header-left d-none d-lg-block">
         <div class="logo-wrapper">
             <a href="index.html">
                 <img class="d-none d-lg-block blur-up lazyloaded"
                     src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/images/dashboard/multikart-logo.png"
                     alt="" />
             </a>
         </div>
     </div>
     <div class="sidebar custom-scrollbar">
         <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                 aria-hidden="true"></i></a>
         <div class="sidebar-user">
             <img class="img-60" src="{{ asset('/multikart_all_in_one/back-end/') }}/assets/images/dashboard/user3.jpg"
                 alt="#" />
             <div>
                 <h6 class="f-14">JOHN</h6>
                 <p>general manager.</p>
             </div>
         </div>
         <ul class="sidebar-menu">
             <li>
                 <a class="sidebar-header {{ request()->is('dashboard') ? 'active' : '' }}"
                     href="{{ route('dashboard') }}">
                     <i data-feather="home"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             <li>
                 <a class="sidebar-header" href="javascript:void(0)">
                     <i data-feather="box"></i>
                     <span>Products</span>
                     <i class="fa fa-angle-right pull-right"></i>
                 </a>

                 <ul class="sidebar-submenu">
                     <li>
                         <a href="javascript:void(0)">
                             <i class="fa fa-circle"></i>
                             <span>Product</span>
                             <i class="fa fa-angle-right pull-right"></i>
                         </a>

                         <ul class="sidebar-submenu">
                             <li>
                                 <a href="category.html">
                                     <i class="fa fa-circle"></i>Category
                                 </a>
                             </li>

                             <li>
                                 <a href="category-sub.html">
                                     <i class="fa fa-circle"></i>Sub Category</a>
                             </li>

                             <li>
                                 <a href="product-list.html">
                                     <i class="fa fa-circle"></i>Product List</a>
                             </li>

                             <li>
                                 <a href="product-detail.html">
                                     <i class="fa fa-circle"></i>Product Detail</a>
                             </li>

                             <li>
                                 <a href="add-product.html">
                                     <i class="fa fa-circle"></i>Add Product
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li>
                         <a href="product-review.html">
                             <i class="fa fa-circle"></i>
                             <span>product Review</span>
                         </a>
                     </li>
                 </ul>
             </li>

             <li>
                 <a class="sidebar-header" href="javascript:void(0)">
                     <i data-feather="archive"></i>
                     <span>Orders</span>
                     <i class="fa fa-angle-right pull-right"></i>
                 </a>

                 <ul class="sidebar-submenu">
                     <li>
                         <a href="order-list.html">
                             <i class="fa fa-circle"></i>
                             <span>Order List</span>
                         </a>
                     </li>

                     <li>
                         <a href="order-tracking.html">
                             <i class="fa fa-circle"></i>
                             <span>Order Tracking</span>
                         </a>
                     </li>

                     <li>
                         <a href="order-detail.html">
                             <i class="fa fa-circle"></i>
                             <span>Order Details</span>
                         </a>
                     </li>
                 </ul>
             </li>

             <li>
                 <a class="sidebar-header" href="media.html">
                     <i data-feather="camera"></i>
                     <span>Media</span>
                 </a>
             </li>

             {{-- @can('menu-user') --}}
             <li>
                 <a class="sidebar-header" href="javascript:void(0)">
                     <i data-feather="user-plus"></i>
                     <span>Users Management</span>
                     <i class="fa fa-angle-right pull-right"></i>
                 </a>
                 <ul class="sidebar-submenu">
                     <li>
                         <a href="{{ route('user') }}">
                             <i class="fa fa-circle"></i>User
                             List
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('permission') }}">
                             <i class="fa fa-circle"></i>Role
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('permission') }}">
                             <i class="fa fa-circle"></i>Permission
                         </a>
                     </li>
                 </ul>
             </li>
             {{-- @endcan --}}

             <li>
                 <a class="sidebar-header" href="javascript:void(0)"><i
                         data-feather="settings"></i><span>Settings</span><i
                         class="fa fa-angle-right pull-right"></i></a>
                 <ul class="sidebar-submenu">
                     <li>
                         <a href="profile.html"><i class="fa fa-circle"></i>Profile
                         </a>
                     </li>
                 </ul>
             </li>

             <li>
                 <a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
             </li>

             <li>
                 <a class="sidebar-header" href="forgot-password.html">
                     <i data-feather="key"></i>
                     <span>Forgot Password</span>
                 </a>
             </li>

             <li>
                 <a class="sidebar-header" href="login.html">
                     <i data-feather="log-in"></i>
                     <span>Login</span>
                 </a>
             </li>
         </ul>
     </div>
 </div>
