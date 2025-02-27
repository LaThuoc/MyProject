# SportX-Trang web bán hàng thể thao

## 1. Giới Thiệu
SportX là một trang web bán hàng thể thao trực tuyến được xây dựng bằng Laravel và Bootstrap. Mục đích của dự án là cung cấp một nền tảng mà người dùng có thể mua hàng thể thao một cách dễ dàng và thuận tiện.

## 2. Tính Năng
### 2.1. Dành cho khách hàng
- Xem danh sách sản phảm
- Xem chi tiết sản phẩm (tên, giá, hình ảnh).


### 2.2. Dành cho Quản Trị Viên
- Quản lý sách:
 + Thêm sản phẩm vào trang chủ
 + Chỉnh sửa thông tin sách
 + Xóa sản phẩm khỏi trang chủ
- Quản lý danh mục sản phẩm.

## 3. Cài Đặt & Chạy Dự Án
### 3.1. Clone Repository
```bash
git clone 
cd MyProject https://github.com/LaThuoc/MyProject
```

### 3.2. Cài Đặt Package
```bash
composer install
npm install
```

### 3.3. Cấu Hình Môi Trường
- Sao chép file `.env.example` thành `.env`.
- Thiết lập cấu hình database trong file `.env`.

### 3.4. Tạo Database
```bash
php artisan migrate --seed
```

### 3.5. Chạy Dự Án
```bash
php artisan serve
```

## 4. Công Nghệ Sử Dụng
- **Backend:** Laravel 10 (PHP)
- **Frontend:** Bootstrap 5, Blade Template
- **Database:** MySQL
- **Hỗ Trợ:** Vite, Laravel UI

## 5. Hướng Dẫn Sử Dụng
- **Người dùng mới:** Đăng ký tài khoản và bắt đầu mua sách.
- **Quản trị viên:** Quản lý sách và đơn hàng.
    + Tài khoản quản trị viên: admin@gmail.com
    + Mật khẩu: 123456789

## 6. Tính Năng Dự Kiến Nâng Cấp
- **Thanh toán online**: Tích hợp VNPay, PayPal.
- **Tìm kiếm nâng cao**: Tìm kiếm theo tên sản phẩm, danh mục.
- **Hệ thống review**: Cho phép người dùng đánh giá sản phẩm.

## 7. Liên Hệ
- **GitHub:** [LaThuoc](https://github.com/LaThuoc)

