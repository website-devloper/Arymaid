<header class="header header-14">
<div class="header-top" style="background-color: var(--primary-color); color: #fff;">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#" style="color: #fff;"><i class="icon-phone"></i>Call: +212 600 000 000</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li style="display: flex; align-items: center; gap: 20px;">
                                <div class="header-dropdown">
                                    <a href="#" style="color: #fff;">MAD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">MAD</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->

                                <div class="header-dropdown">
                                    <a href="#" style="color: #fff;">English</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->

                                @if(session()->has('name'))
                                    <div class="header-dropdown">
                                        <a href="#" style="color: #fff; font-weight: 600;"><i class="icon-user"></i> {{ session('name') }}</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="{{route('LogOut')}}">Log Out</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                @else
                                    <a href="/login" style="color: #fff; font-weight: 600;"><i class="icon-user"></i> Sign in / Sign up</a>
                                @endif
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div>
</header>