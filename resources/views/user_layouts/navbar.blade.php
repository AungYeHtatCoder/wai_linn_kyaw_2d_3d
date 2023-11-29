
                <!-- navbar section -->
                <div id="navbar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3 col-12 py-3 nav-border-purple" id="top-nav">
                            <div class="d-flex justify-content-between px-3">
                                <!-- before login -->
                                <a href="{{ url('/') }}" class="text-decoration-none">
                                    <h5 class="text-white mt-2">Delight 2D | 3D</h5>
                                </a>
                                @guest
                                <div>
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-purple text-white me-2">
                                        <i class="fas fa-unlock me-2"></i>
                                        LOGIN
                                    </a>
                                </div>
                                @endguest
                                @auth
                                <div>
                                    <i class="fas text-white fa-bell me-1"></i>
                                    <button class="btn sidebarToggle">
                                        <i class="fas fa-bars text-white"></i>
                                    </button>
                                </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                <!-- offcanvas start -->
                @auth
                <div class="sidebar" id="sidebar" style="padding-top: 70px;">
                    <div class="container-fluid py-3 rounded-4 shadow">
                        <!-- after login view -->
                        <div class="d-flex justify-content-between">
                            @if (Auth::user()->profile)
                                <img src="{{ Auth::user()->profile }}" alt="">
                            @else
                                <i class="fa-regular fa-user-circle text-purple fa-2x"></i>
                            @endif

                            <div>
                                <a href="{{ url('/home') }}" class="login-btn">
                                    {{ Auth::user()->name }}
                                </a>
                                <small class="text-purple">
                                    <i class="fas fa-wallet text-purple"></i> : {{ Auth::user()->balance }} MMK
                                </small>
                            </div>
                        </div>
                        <!-- after login -->
                    </div>
                    <!-- nav-links -->
                    <div class="nav-links" id="sideLink">
                        <a href="./sidebar/winner.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-list d-block me-2"></i>
                                <p class="py-0">ကံထူးရှင်များ</p>
                            </div>
                        </a>
                        <a href="./sidebar/twoDthreeDhistory.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-calendar d-block me-2"></i>
                                <p class="py-0">ထွက်ဂဏန်းများ</p>
                            </div>
                        </a>
                        <a href="./pages/2d_history.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-list d-block me-2"></i>
                                <p class="py-0">မနက်ပိုင်းထီထိုးမှတ်တမ်း</p>
                            </div>
                        </a>
                        <a href="./pages/2d_history.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-list d-block me-2"></i>
                                <p class="py-0">ညနေပိုင်းထီထိုးမှတ်တမ်း</p>
                            </div>
                        </a>
                        <a href="./pages/2d_result.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-list d-block me-2"></i>
                                <p class="py-0">မနက်ပိုင်းထီထွက်မှတ်တမ်း</p>
                            </div>
                        </a>
                        <a href="./pages/2d_result.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-list d-block me-2"></i>
                                <p class="py-0">ညနေပိုင်းထီထွက်မှတ်တမ်း</p>
                            </div>
                        </a>
                        <a href="" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-star d-block me-2"></i>
                                <p class="py-0">အမှတ် 0 (ကျပ်)</p>
                            </div>
                        </a>
                        <a href="" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-wallet d-block me-2"></i>
                                <p class="py-0">ဘဏ်အကောင့်များ</p>
                            </div>
                        </a>
                        <a href="./pages/change_password.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-key d-block me-2"></i>
                                <p class="py-0">လျို့ဝှက်နံပါတ်ပြောင်းရန်</p>
                            </div>
                        </a>
                        <a href="./pages/promo_code.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-users d-block me-2"></i>
                                <p class="py-0">မိတ်ဆက်ကုဒ်</p>
                            </div>
                        </a>
                        <a href="./pages/feedback.html" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-comment-dots d-block me-2"></i>
                                <p class="py-0">အကြံပြုရန်</p>
                            </div>
                        </a>
                        <a href="" class="link shadow">
                            <div class="d-flex">
                                <i class="fas fa-code-compare d-block me-2"></i>
                                <p class="py-0">ဗားရှင်း - 1.0.0</p>
                            </div>
                        </a>
                        <a href="" class="link shadow" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <div class="d-flex">
                                <i class="fas fa-right-from-bracket d-block me-2"></i>
                                <p class="py-0">အကောင့်ထွက်ရန်</p>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                    <!-- nav-links -->
                </div>
                @endauth
                <!-- offcanvas end -->
                <!-- navbar section -->
