<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div>
        <nav class="bg-green-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="text-white text-xl font-bold">
                            SportX
                        </div>
                    </div>
                    <div class="md:hidden flex items-center">
                        <button @click="open = !open" class="text-white focus:outline-none" x-data="{ open: false }">
                            <i class="bi bi-list text-2xl"></i>
                        </button>
                        
                    </div>

                    <div class="hidden md:flex space-x-4">
                        <a href="{{ url('/home') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                            Home
                        </a>
                    </div>
                    <div class="hidden md:block">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md mt-3">
                                Sign Out
                            </button>
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="text-white px-3 py-2">Log in</a>
                        <a href="{{ route('register') }}" class="text-white px-3 py-2">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
            <div x-show="open" class="md:hidden bg-green-900 px-4 py-2 space-y-2">
                <a href="{{ url('/home') }}" class="block text-white">Home</a>
                @auth
                <form method="POST" action="{{ route('logout') }}" class="mt-2">
                    @csrf
                    <button type="submit" class="text-white w-full text-left">Sign Out</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="block text-white">Log in</a>
                <a href="{{ route('register') }}" class="block text-white">Register</a>
                @endauth
            </div>
        </nav>
        <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @yield('contents')
        </main>

        <footer class="bg-gray-900 text-white py-8">
            <div class="containerr mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 px-6 mt-10">
                <div>
                    <h2 class="text-xl font-bold">SportX</h2>
                    <p class="text-sm mt-2">CAM KẾT CHÍNH HÃNG – UY TÍN HÀNG ĐẦU</p>
                    <p class="text-sm mt-2"><i class="bi bi-check2"></i>Sản phẩm 100% chính hãng, chất lượng cao.</p>
                    <p class="text-sm mt-2"><i class="bi bi-check2"></i>Đa dạng mẫu mã, cập nhật xu hướng thể thao mới nhất.</p>
                    <p class="text-sm mt-2"><i class="bi bi-check2"></i>Hỗ trợ đổi trả linh hoạt trong vòng 7 ngày.</p>
                    <p class="text-sm mt-2"><i class="bi bi-check2"></i>Giao hàng nhanh chóng – Thanh toán an toàn.</p>


                </div>

                <div>
                    <h3 class="text-lg font-semibold">Liên kết nhanh</h3>
                    <ul class="mt-2 space-y-1">
                        <li><a href="/" class="hover:text-gray-400">Trang chủ</a></li>
                        <li><a href="/about" class="hover:text-gray-400">Giới thiệu</a></li>
                        <li><a href="/services" class="hover:text-gray-400">Dịch vụ</a></li>
                        <li><a href="/contact" class="hover:text-gray-400">Liên hệ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold">Liên hệ</h3>
                    <p class="mt-2"><i class="bi bi-geo-alt-fill"></i>Địa chỉ: Thành phố hà nội</p>
                    <p><a href="#" class="hover:text-gray-400"><i class="bi bi-telephone"></i> 0123456789</a></p>
                    <p><i class="bi bi-envelope"></i>Email: contact@abc.com</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold">Theo dõi chúng tôi</h3>
                    <div class="mt-2 flex space-x-3">
                        <a href="#" class="hover:text-gray-400"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                © 2025 Cửa hàng Sports.
            </div>
        </footer>
    </div>
</body>

</html>

