<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(\Auth::User()->img) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li><a href="{{ url('admin/user') }}"><i class="fa fa-users"></i> <span> Users Management</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa fa-cubes"></i> <span>Products Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li style="margin-right: 10%;"><a href="{{url('admin/manufacturer')}}"> <i class="fa fa-users"></i>
                            <span style="font-size: 15px;">Manufacturer</span></a></li>

                    <li style="margin-right: 10%;"><a href="{{url('admin/partner')}}"> <i class="fa fa-users"></i> <span
                                    style="font-size: 15px;"> Partners </span></a></li>

                    <li style="margin-right: 10%;"><a href="{{url('admin/productcategory/0')}}"> <i
                                    class="fa fa fa-sitemap"></i> <span style="font-size: 15px;"> Categories </span>
                        </a></li>

                    <li style="margin-right: 10%;"><a href="{{url('admin/currency')}}"> <i class="fa fa-usd"></i> <span
                                    style="font-size: 15px;"> Currency </span> </a></li>

                    <li style="margin-right: 10%;"><a href="{{url('admin/product')}}"> <i class="fa fa fa-cubes"></i>
                            <span style="font-size: 15px;"> Products </span> </a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-industry"></i> <span style="font-size: 15px;">Media & Blog </span> <i
                            class="fa fa-angle-left pull-left"></i></a>
                <ul class="treeview-menu">


                    <li style="margin-right: 10%;"><a href="{{ url('admin/blog') }}"><i class="fa fa-edit"></i> <span
                                    style="font-size: 15px;">Blogs</span></a></li>


                    <li style="margin-right: 10%;"><a href="{{ url('admin/album') }}"><i class="fa fa-file-video-o"></i>
                            <span style="font-size: 15px;">albums</span></a></li>


                    <li style="margin-right: 10%;"><a href="{{ url('admin/media') }}"><i class="fa fa-file-audio-o"></i>
                            <span style="font-size: 15px;">media</span></a></li>


                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-industry"></i> <span style="font-size: 15px;">Events Management</span> <i
                            class="fa fa-angle-left pull-left"></i></a>
                <ul class="treeview-menu">

                    {{--<li style="margin-right: 10%;"><a href="{{ url('admin/eventcategory') }}"><i--}}
                                    {{--class="fa fa-sitemap"></i> <span style="font-size: 15px;">Categories</span></a></li>--}}

                    <li style="margin-right: 10%;"><a href="{{ url('admin/event') }}"><i class="fa fa-magic"></i> <span
                                    style="font-size: 15px;">Events</span></a></li>

                </ul>
            </li>


            <li class="treeview ">
                <a href="#"><i class="fa fa-shopping-bag"></i> <span style="font-size: 15px;">Careers Management</span>
                    <i class="fa fa-angle-left pull-left"></i></a>
                <ul class="treeview-menu">

                    {{--<li style="margin-right: 10%;"><a href="{{ url('admin/job_category') }}"><i--}}
                                    {{--class="fa fa-sitemap"></i> <span style="font-size: 15px;">Category</span></a></li>--}}

                    <li style="margin-right: 10%;"><a href="{{ url('admin/job') }}"><i class="fa fa-shopping-bag"></i>
                            <span style="font-size: 15px;">Job</span></a></li>

                    <li style="margin-right: 10%;"><a href="{{ url('admin/applicant') }}"><i class="fa fa-users"></i>
                            <span style="font-size: 15px;">Applicant</span></a></li>

                </ul>
            </li>


            <li class="treeview ">
                <a href="#"><i class="fa fa-users"></i> <span style="font-size: 15px;">Contact Page</span> <i
                            class="fa fa-angle-left pull-left"></i></a>
                <ul class="treeview-menu">

                    <li style="margin-right: 10%;"><a href="{{ url('admin/teams') }}"><i class="fa fa-users"></i> <span
                                    style="font-size: 15px;">Teams</span></a></li>

                    <li style="margin-right: 10%;"><a href="{{ url('admin/contact') }}"><i class="fa fa-users"></i>
                            <span style="font-size: 15px;">Members</span></a></li>

                    <li style="margin-right: 10%;"><a href="{{ url('admin/branch') }}"><i class="fa fa-magic"></i> <span
                                    style="font-size: 15px;">Branches</span></a></li>

                </ul>
            </li>

            <li style="margin-right: 10%;"><a href="{{ url('admin/slider') }}"><i class="fa fa-magic"></i> <span
                            style="font-size: 15px;">Slider</span></a></li>

            <li style="margin-right: 10%;"><a href="{{ route('contactusadmin') }}"><i class="fa fa-users"></i> <span
                            style="font-size: 15px;">Contact us</span></a></li>

            <li style="margin-right: 10%;"><a href="{{ url('admin/aboutus') }}"><i class="fa fa-edit"></i> <span
                            style="font-size: 15px;">About Us</span></a></li>

            <li style="margin-right: 10%;"><a href="{{ url('admin/service') }}"><i class="fa fa-edit"></i> <span
            style="font-size: 15px;">Services</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>