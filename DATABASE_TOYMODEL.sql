-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2023 lúc 12:44 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `toy_model`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'raikiphivan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tablienquan` varchar(100) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `date_baiviet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tablienquan`, `tomtat`, `noidung`, `id_baiviet`, `tinhtrang`, `hinhanh`, `date_baiviet`) VALUES
(7, 'HIEUTHUHAI dời lịch phát hành album để... thêm vào 1 ca khúc nói về bạn gái?', 'HIEUTHUHAI', '<p>Mới đây, HIEUTHUHAI bất ngờ công bố dời lịch ra album. Đây là điều tương đối hy hữu của nhạc Việt. Lý do được nam rapper đưa ra là vì muốn bổ sung thêm một bài hát vào trong album 12 bài, nâng tổng số track lên thành 13. Album sắp tới của rapper Ngủ Một Mình cũng chuyển ngày từ 12/10 sang 16/10.</p><p>Trong nhóm chat kín trên Instagram, nam rapper cũng giải thích rằng đây là bài hát anh vừa hoàn thành, rất muốn cho ra mắt trong album. Trước đó, HIEUTHUHAI từng lời nhắn tới khán giả yêu quý mình: <i>“Trong album còn mấy bài nhạc tình hay lắm, nghe nhìu nhìu bài hiphop này nhé để mình còn sớm ra mắt album. Bài này hơi nặng nên mọi người cày cũng vất vả, giờ thì chờ album thôi nha, sắp xong rồi”.</i></p>', '<p>Giữ đúng lời hứa, rapper Không Thể Say đã bổ sung thêm một ca khúc mới vào trong dự án âm nhạc này. Bài hát dường như là lời tâm sự của HIEUTHUHAI với người bạn gái hiện tại. Nam rapper thấu hiểu những vấn đề của cô gái này, khẳng định: <i>“Anh biết em vẫn hay hình dung ngày mình đứng chung một khung hình và ta công khai/ Mình luôn hiểu ý nhau vì có chung chữ cái đầu, ngoài em ra thì không ai”.</i></p><p>Đây cũng là lần đầu tiên HIEUTHUHAI nhắc đến tên bạn gái của mình trong một sản phẩm âm nhạc. Ngay sau khi lời bài hát lên sóng, nhiều khán giả đã đoán được ngay cô gái được nam rapper nhắc đến là ai. Cụm từ \"có chung chữ cái đầu\" là cách HIEUTHUHAI nói về người yêu: nếu tên thật của anh là Trần Minh Hiếu thì bạn gái tin đồn của anh có tên Tăng Mỹ Hàn - đều bắt đầu bằng 3 chữ cái \"T\", \"M\", \"H\".</p><p><br>Đồng thời, không ít người nhận ra rapper này đã lấy sample từ bài hát huyền thoại<i>&nbsp;No Love No Life (Nơi Anh Không Thuộc Về). </i>No Love No Life là ca khúc nằm trong album The Invasion của nhóm 365. Đây là bản nhạc được OnlyC và Jong- Kay sáng tác. Ngay khi ra mắt, bài hát đã nhận được sự ủng hộ rất lớn của cộng đồng yêu nhạc Việt Nam. Đây là một trong những bài hát đình đám nhất của nhóm nhạc này. Nhạc sĩ OnlyC cũng là người thực hiện phần mastering cho sản phẩm gần nhất của HIEUTHUHAI.</p><p>Đây là dự án HIEUTHUHAI đã ấp ủ lâu, từ lúc bắt tay vào thực hiện đến thời điểm ra mắt là hơn 2 năm. Producer Kewtiie sẽ đảm nhận vai trò sản xuất toàn bộ các bản phối cho các ca khúc nằm trong album. Album Ai Cũng Phải Bắt Đầu Từ Đâu Đó của HIEUTHUHAI sẽ bao gồm những ca khúc mô tả câu chuyện cùng trải nghiệm từ bản thân về cuộc sống.</p><p>Album Ai Cũng Phải Bắt Đầu Từ Đâu Đó sẽ bao gồm 13 ca khúc, lần lượt theo thứ tự là Ai Cũng Phải Bắt Đầu Từ Đâu Đó, Giờ Thì Ai Cười, Không Phải Gu, Siêu Sao, Đi Họp Lớp, Không Thể Say, Exit Sign, Visa Interlude, Sắp Nổi Tiếng, KPI, Everything Will Be Okay, Cho Em An Toàn và cuối cùng là No Love No Life.</p>', 4, 1, '1697510331hieuthuhai.jpg', '2023-10-17 09:38:51'),
(8, 'Chàng trai trẻ đến từ Quảng Nam \"gây bão\" với loạt hit triệu view là ai?', 'NB3 HOÀI BẢO', '<p>Thời gian qua, mạng xã hội TikTok trở thành một cơ hội để các nghệ sĩ trẻ đến gần hơn với khán giả. NB3 Hoài Bảo là một trong những giọng ca được khán giả biết đến nhờ loạt hit trên TikTok như <i>Khuất lối, Nguôi ngoai, Sợ lắm 2... </i>Đặc biệt ca khúc<i> Khuất lối</i> có hơn 200 triệu lượt xem trên TikTok</p>', '<p>Nam ca sĩ NB3 Hoài Bảo tên thật là Lương Nguyễn Hoài Bảo, sinh năm 1998, đang hoạt động tại một&nbsp;công ty giải trí ở TP.HCM. Mới đây, anh tham gia chương trình <i>Lạ lắm à nha</i>,&nbsp;song ca cùng đàn chị Lương Bích Hữu và nhanh chóng \"gây bão mạng\", lọt Top Trending trên YouTube.</p><p>Là một trong những “tân binh” của làng nhạc Việt, Hoài Bảo đã có những chia sẻ về công việc sáng tác âm nhạc và dự định trong tương lai.</p><p><i>- Chào Hoài Bảo, cơ duyên nào để bạn đến với âm nhạc?</i></p><p>Âm nhạc đến với Bảo nhờ các thành viên trong gia đình mình, mọi người đều rất yêu thích âm nhạc. Ngay từ nhỏ, Bảo rất thích hát hò, thích được đứng trên sân khấu và tham gia các hoạt động văn nghệ ở trường, thôn, xã... nên dần dần gắn bó lúc nào không hay.</p><p><i>- Các ca khúc của Hoài Bảo như Khuất lối, Nguôi ngoai... có ca từ khá đa dạng. Làm sao để Bảo đa dạng mà vẫn trau chuốt, khi nhạc Việt gần đây có những bài hát có ca từ thiếu đầu tư?</i></p><p>Trước khi viết 1 ca khúc nào đó Bảo thường sẽ tự đặt ra 1 câu chuyện và tiêu đề trước. Tiếp theo Bảo sẽ sáng tác xoay quanh chủ đề mình đặt ra và nội dung phải thật sự ý nghĩa, câu từ phải có sự liên kết.&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:500/400;\" src=\"https://icdn.24h.com.vn/upload/2-2023/images/2023-04-11/hoaibaoluongbichhuu7-1681181248-40-width740height566.jpg\" alt=\"Chàng trai trẻ đến từ Quảng Nam &quot;gây bão&quot; với loạt hit triệu view là ai? - 2\" width=\"500\" height=\"400\"><figcaption><i>Hoài Bảo sở hữu nhiều bài hit trên TikTok&nbsp;</i></figcaption></figure><p><i>- Có nghệ sĩ nói rằng khi bí ý tưởng thì đi ngủ, có người lại chọn về quê... với Hoài Bảo thì sao? Những ca khúc về chủ đề tình yêu buồn, bị “bồ đá”, liệu có xuất phát từ hoàn cảnh của chính Bảo?</i></p><p>Với riêng Bảo, cảm hứng đến từ trong cuộc sống xung quanh, có khi đang lướt Facebook bất chợt đọc được những dòng trạng thái hay hoặc xem được 1 thước phim buồn, cũng có thể là trời mưa chẳng hạn,...</p><p>Những bài hát về tình yêu buồn có thể xuất phát từ chính câu chuyện của mình hoặc những người xung quanh nhưng \"bồ đá\" thì chắc chắn Bảo chưa trải qua (cười).</p><p><i>- Trong số những bài hit của mình, Bảo thích nhất bài nào và kỳ vọng nhất?</i></p><p>Bảo yêu thích hết tất cả các ca khúc của mình nhưng nếu chọn ra ca khúc kỳ vọng nhất thì có lẽ là <i>Có duyên không nợ.</i></p><p><i>- Không thể phủ nhận Bảo là 1 hiện tượng mạng nổi tiếng từ MXH TikTok. Định hướng của bạn như thế nào để vượt qua cái mác hiện tượng mạng?</i></p><p>Trong thời đại mạng xã hội phát triển mạnh mẽ như hiện nay thì việc các bạn trẻ như Bảo bị ảnh hưởng từ nó là không tránh khỏi, nhưng tất cả các sản phẩm âm nhạc của Bảo đều là dự án tâm huyết và tích cực, không chứa những nội dung sai lệch về văn hóa nên dù là hiện tượng mạng hay không thì mình thấy mình đã và đang được làm điều yêu thích, đưa âm nhạc đến gần hơn với khán giả.</p>', 4, 1, '1697518022hoaibaoluongbichhuu8-1681181232-571-width740height503.jpg', '2023-10-17 11:47:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluanbaiviet`
--

CREATE TABLE `tbl_binhluanbaiviet` (
  `id_binhluanbaiviet` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `id_chitietbv` int(11) NOT NULL,
  `date_coment` varchar(50) NOT NULL,
  `noidung_binhluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluanbaiviet`
--

INSERT INTO `tbl_binhluanbaiviet` (`id_binhluanbaiviet`, `id_dangky`, `id_chitietbv`, `date_coment`, `noidung_binhluan`) VALUES
(7, 7, 7, '2023-10-17 10:20:22', 'hieu dep trai'),
(8, 7, 7, '2023-10-17 10:27:29', 'hieu mau ra bai moi di'),
(9, 9, 7, '2023-10-17 10:42:13', 'hieu doi toc'),
(10, 9, 7, '2023-10-17 11:02:54', 'hieu mai dinh'),
(11, 9, 8, '2023-10-17 11:36:56', 'giong chua day tinh cam'),
(12, 7, 8, '2023-10-18 17:32:29', 'hay ra that nhieu bai moi nhe'),
(13, 11, 8, '2023-10-23 19:13:29', 'hat dom vay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(19, 7, '5601', 1, '2023-10-15 16:21:19', 'tien mat', 4),
(22, 7, '2598', 1, '2023-10-15 16:37:57', 'momo', 4),
(26, 7, '9201', 0, '2023-10-15 20:19:09', 'vnpay', 4),
(27, 9, '8665', 0, '2023-10-16 11:19:29', 'tien mat', 6),
(28, 9, '5171', 0, '2023-10-17 17:57:24', 'vnpay', 6),
(29, 9, '7685', 0, '2023-10-22 17:48:55', 'vnpay', 6),
(30, 9, '7047', 1, '2023-10-23 12:04:43', 'tien mat', 6),
(31, 9, '249', 1, '2023-10-23 16:26:34', 'chuyen khoan', 6),
(32, 9, '4820', 1, '2023-10-23 16:47:10', 'chuyen khoan', 6),
(33, 9, '831', 1, '2023-10-23 18:03:24', 'tien mat', 6),
(34, 11, '468', 1, '2023-10-23 18:50:15', 'momo', 7),
(35, 11, '8036', 1, '2023-10-23 19:02:25', 'vnpay', 7),
(36, 9, '6689', 1, '2023-10-23 19:06:36', 'momo', 6),
(37, 9, '6207', 1, '2023-10-23 19:08:50', 'tien mat', 6),
(38, 11, '8836', 1, '2023-10-23 19:11:31', 'tien mat', 7),
(39, 11, '3544', 1, '2023-10-23 19:11:36', 'tien mat', 7),
(40, 9, '2084', 1, '2023-11-03 20:35:24', 'vnpay', 6),
(41, 9, '2164', 1, '2023-11-03 20:39:07', 'vnpay', 6),
(42, 7, '1220', 1, '2023-11-05 12:11:18', 'momo', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(24, '5601', 12, 2),
(28, '5081', 12, 1),
(29, '5081', 15, 1),
(30, '6123', 11, 1),
(31, '536', 12, 1),
(32, '536', 15, 1),
(33, '9201', 15, 1),
(34, '8665', 15, 1),
(35, '5171', 12, 1),
(36, '7685', 12, 2),
(37, '7047', 15, 1),
(38, '249', 15, 1),
(39, '4820', 11, 1),
(40, '831', 11, 5),
(41, '12', 468, 1),
(42, '15', 468, 1),
(43, '8036', 12, 1),
(44, '8036', 15, 1),
(45, '12', 6689, 1),
(46, '15', 6689, 1),
(47, '6207', 11, 4),
(48, '8836', 12, 1),
(49, '2084', 10, 1),
(50, '2164', 10, 1),
(51, '12', 1220, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coment`
--

CREATE TABLE `tbl_coment` (
  `id_coment` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `noidung_coment` text NOT NULL,
  `date_coment` varchar(50) NOT NULL,
  `id_chitietsanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coment`
--

INSERT INTO `tbl_coment` (`id_coment`, `id_dangky`, `noidung_coment`, `date_coment`, `id_chitietsanpham`) VALUES
(9, 9, 'san pham tot', '2023-10-17 10:43:08', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(150) NOT NULL,
  `coupon_time` int(50) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_number` int(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_condition`, `coupon_number`, `coupon_code`) VALUES
(2, 'Mung nam moi', 5, 2, 100000, 'KHAIXUAN'),
(3, 'Ngay nha giao', 5, 1, 30, 'NHAGIAO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(7, 'Van duc', 'duc@gmail.com', 'le van luong phuong tan phong', 'e10adc3949ba59abbe56e057f20f883e', '0798630125'),
(9, 'Van dat', 'raikiphivan@gmail.com', 'le van luong phuong tan phong', 'e10adc3949ba59abbe56e057f20f883e', '0798630125'),
(11, 'Duck', 'phivanduc8a7@gmail.com', 'ko co', '652e32640c667c3bb675666026b24d58', '0367242607');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten_danhmuc`, `thutu`) VALUES
(2, 'samsung', 3),
(3, 'laptop', 1),
(4, 'iphone', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(4, 'âm nhạc', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_even`
--

CREATE TABLE `tbl_even` (
  `id_even` int(11) NOT NULL,
  `title_even` varchar(200) NOT NULL,
  `even_number` int(11) NOT NULL,
  `even_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_even`
--

INSERT INTO `tbl_even` (`id_even`, `title_even`, `even_number`, `even_status`) VALUES
(1, 'Mung ngay le 20/11 shop giam gia 50%', 50, 0),
(2, 'Le 30/04 giam 30%', 30, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `Id_even` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyenmai`
--

INSERT INTO `tbl_khuyenmai` (`id_khuyenmai`, `Id_even`, `id_sanpham`) VALUES
(1, 1, 19),
(2, 2, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<h2>&nbsp;<img src=\"https://page.widget.zalo.me/static/images/2.0/Logo.svg\" width=\"50\" height=\"50\"> &nbsp;0789456423<br>&nbsp;</h2><h2>&nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png\" width=\"50\" height=\"50\"> &nbsp; https://raikiphivan@gmail.com</h2>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(1, 'MOMOBKUN20180529', 1697362566, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '2598'),
(2, 'MOMOBKUN20180529', 1698061682, '1100000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '468'),
(3, 'MOMOBKUN20180529', 1698062727, '1100000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '6689'),
(4, 'MOMOBKUN20180529', 1699161057, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, '', '1220');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_productlove`
--

CREATE TABLE `tbl_productlove` (
  `id_productlove` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `product_favor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_productlove`
--

INSERT INTO `tbl_productlove` (`id_productlove`, `id_dangky`, `id_sanpham`, `product_favor`) VALUES
(183, 9, 12, 1),
(184, 9, 11, 1),
(186, 11, 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` int(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_thuonghieu` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `id_thuonghieu`, `id_sale`) VALUES
(8, 'laptop asus zen', 'L02', 200000, 2, '1696830519momo.jpg', '<p>aksmfokasngoaing</p>', '<p><img src=\"https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/09/hinh-nen-may-tinh-4k-cong-nghe-4.jpg\" alt=\"Hình nền máy tính 4K công nghệ: Top các hình nền chất lượng cao\" width=\"800\" height=\"450\"></p>', 1, 2, 2, 0),
(9, 'iphone', 'IP01', 500000, 2, '1696831537momo.jpg', 'hjvjhvjh', 'bjhbjhv', 1, 2, 2, 0),
(10, 'iphone', 'IP02', 600000, 5, '1696837099momo.jpg', 'kdmgoakgmnao', 'laksfmlkasf', 1, 4, 2, 0),
(11, 'samsung', 'SS01', 700000, 5, '1696995435nak.jpg', '<p>Antoan,Tienloi,Desudung</p>', '<p><strong>Lorem ipsum</strong></p><figure class=\"image\"><img style=\"aspect-ratio:200/100;\" src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1274&amp;q=80\" width=\"200\" height=\"100\"></figure><figure class=\"image\"><img style=\"aspect-ratio:1470/980;\" src=\"https://plus.unsplash.com/premium_photo-1675826774815-35b8a48ddc2c?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80\" width=\"200\" height=\"100\"></figure>', 1, 3, 2, 0),
(12, 'tulen', 'TT01', 900000, 10, '1696996068hayate-demon-vanquisher-01.jpg', 'De su dung', 'Lorem ipsum', 1, 2, 2, 1),
(15, 'bright', 'BR01', 200000, 10, '1697024305maxresdefault.jpg', '<p>San pham moi</p>', '<p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:328/154;\" src=\"data:image/jpeg;base64,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\" alt=\"Backgrounds, 12230000+ Background Images, Wallpaper, Poster, Banners for  Free Download\" width=\"328\" height=\"154\"></figure><p>San pham sieu dep, ben bi gia thanh tot</p>', 1, 3, 2, 0);
INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `id_thuonghieu`, `id_sale`) VALUES
(19, 'yan', '20', 800000, 10, '1700519202tải xuống (1).jpg', 'lhong co tom tat', '<p><img src=\"data:image/jpeg;base64,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TB5GvfxLfknhvzrxXlPgvHlLfgvyl4gqKvFeYwmQujSFUGqvNJNgXGwLPNVIzRLAvzTSc5TDTk35yVkrdmQudvm4qa0TO9sDzWYdbqDVVB5jMDfGJmw2YsdfLYcrkslFzXaCgaDDymAAZkjL5T//2gAMAwEAAgADAAAAEGNPPPPCENPPPPKGNPPPPDKHPPPPHAFPPPPOPPCNPPIPPCNPPIHPDNPPIHPPPPPOHPPPPPPPPPPPNOPPPPDPJHPPPDOIHPPPPNNPPPPPNNPPPPPPDOHDXfQAFPKPfeGADTXPKPCPPPfaNCPPPPPNLHPfaYZYSdKPfcVEfaXPNYZXKPfdPHPPPOPHPPGfaTccYYIPZfTFefdAPfffbNZXPPPPPHPPPKMHHPbbedJJGVDMfdBKPfffbIHfPPPJDMPPPLDSGENfffIHALCvGfCKPfaUaDFfPPPHDPENPPPbbXHffYHAO+/rLmPOPffeJbfdPPOPPPPPPONcdQUebMNBBh5GHcApGNdfOffWMMPPPPPPDPPJOPALPFqGaMPa7SD3/wATzDDziASjzzzzyCwx331XGziRi3jcBKAwn8hCT3331SxzzzzyBzyzn30jliTlxzS9/wAWhV1Gwks599888Y88cc8849kYgck03f1OqR4L6f0LIY8sY10888YAQ888stEQU8UcRk9J3FOOmSR+8YswA1c888cMsQ884lcA8oo/TEYDexgoMys3YY08YZt8888M8s0wo9M845JFXT6346qVv20Rc0Ucs1w4wc8888sE4EE00c4M7vDvREcdzX1bYc4ck84A488888kcU9t0YV44su7B9/qVPWo4Mcp4J88I80888gc8oZ9kw9p8R6p6pn+F2VYc81dg95c88I08Uc88A9o4h9p8VEo6g1+NcUc8s9poA18888IMw888A98UV9p8VO9lmt48hp88o99kcx8888I88Q88A19M89p+gAHIF/vZnvFa99hA99888g888sUw49pc4RxZyUbejDEjQvJgwxwk99AwgE88888wo99EAEAsoTFSBBw9ovGksEUI5BEsw88888sIcBNoAEUIgOi61KimRogEEgIMoF04c08884888Z9Uo0NkY81Xuw82y0g4c8hYV9888I08Uc8889FU8FtIIgtEqsLY64gA0Y1pQh8888YAY8888t408V9td8goFqS7YIlx8sRME88888M8c08881dUwV9td9Ug99o4MdNU88otdg088g8M8sUwo99Usd1t191od90c99p44oI9tUc4sM8888sgwxxV0o8kx5co1IU8xxhok04xxU4c488888sAc8888soc8888o4c8888go808880oc0888888s088888sQ88488sQ88gc8s888kc88Y0888888sAU8888scc8888sQU888884U888888Mc888888c88888g888888gA88888Acc8888AA/8QAIxEBAAICAwADAAIDAAAAAAAAAQARITEQQEEgUWEwcGBxof/aAAgBAwEBPxD+mr/mv/JQvmu+fUKNy3B6i/E69cmI83XFY4TsiVwlS4t83xfkC5t21uBctA4UGfhfaTkhIqIipgp2is3dMrho7NwjfwzkxDCyJYSJU6jIjMa9KSJTXFY7PkTSGky1QXMWaMXAwEU4zJRl7L7HD+dclMcE3YQpMGZgLlXdynyA3c2VBTM9galImSzAVEaxHYlpaGgyr2OcF8Es12TDW4WB7KEgLmtTMzGMFA+5hLDs7yKzEreQGHVyHMEvIF2ooInUsx2wsry9gVvUwJmJ4T8pYxlwdRFb135nFblcKNsT24irzurpGISbiJfxn6ZTE0GZSdtXeBC6ZTyJ/wBMJrEzMRmUzGkR47I03AbJiBiJPqUP+kHmT6ECUZlIhB5Ll9pm4LDBjncw3gMJF2yqwSzJYFhHp3/Coywo+iBMkQr9yhizrsHduDAYVK1fYDrcUKR9EHxLAO8fssJqZRKRO2btlq7J+Q1qYLc9azPWqLbb2n+8/wD/xAAjEQEBAQACAgEEAwEAAAAAAAABABEhMUBRQRAgUGFxgLHB/9oACAECAQE/EP6Gv4J/Fb559zHmMFcPoI9fZnmqQ+rDppOYEgBp5uXLQHeSc5DIhOOEj1OIsDpb5gcm3QSZpyek6Tnl5bTysHl3CR4sVPK27kwLZXaBeCPTJdlx8ymTo7cg8pZi3UYNtg98wOBbaT3C/RGAWT6PKBhNkB8LQSfsPo9b6gelij5OjAY8ycm29U/QvfODYQQbsu+WobYg6vc6B7sWvUnBsOHnejwul+uR8EMzgQH9+b2+CfJtqIZDL9r+FyzjeODCaPlLkXyWe2YXbHW+YR3aXosDsPxLuQHoYd8gdllzNVsE88w/4bPoIPuerVrxa6J7JtDvlGci8w0hD9R8TYTRk/8AWQ893LouAfMXOWYxcw6J3YHGcg9WvFjywjfnzd1/Nv73bT+MgmMcnYLpPNgPnMJ0czdGLoCU4/gUPd9CDP6G/wD/xAAoEAEAAQMDAgYDAQEAAAAAAAABEQAhMUFRYXGBECCRobHwMMHR8eH/2gAIAQEAAT8QYgAs6ZdCdaM/jc0psFcUqsFmCzTBGJrijH4kvXGIzE4aULbuzNzemKYKpR+JpE5JADoz61AkNJLq4pnZSoPxbqvNdZQZQblBohAbr00qEQzAJ5C9H4nFXiyTqpkkcCzDtRoOzAEBQXpt+JKRZwOTI1PiMoCCg/Gm9SZFSVoLIAmgpI/ElEFRNSlkgHMAmg/HFqQkQYSlBIC5QBe9RNRb8dxkUdyt5TdC+PN6t6SM/g+23lGEZaNJDD+A1pfQpZZc+EeAiQujtSI3/AQJb7G9KrK+RWhx8UIfwdA0N6SpfCPBRZubVByaP4JLuClPTbwjyFsPQ70kZ82P1HnQkWbNIjDnzBYsToUsqufMMmho7UEYfMAPQN6VWXzLT/hQh40fMCJw+aVcx280Fm45Kg5N/NYmykjYMH4BjD0O/l+u34VyNGkhh8gQl6Clln8AJob7UFQ+QAegb0qsv4FaHFSPIDOG1NX8EFkkdKEYuOPIJu2CpOhg/HJwswU+CE4ofxrRAVWAosVJw6UP5AECrYCiywofyZYMu1MRgy7dan8i1LTCJ7UNT+NzU7QUAuu5UAMpbIiNnxBcZouWG8RStB1BS89hoQuHd/lGt7/8q/8A1/lfaf5SBm7v8o6JqmxBgUL1KtiQyDVimY6yeVCVqFff/ivv/wAV9/8Aivv/AMV9/wDil84VQn+UG5hErSS1PFRwgl5zX0H+UAR7n8r6j/K+o/yvqv8AK+o/ysqIHDxdUFgXFfXf5TEfN/KcjISstj0ojDyELncvUDCKZz/KIKzK63kPTAkJn4r7r/K+8/yvuv8AK/3n+VltQEzmNqaYwmxoSxoq14eJpGBAwjpR+PWoDWBk7Sv3ok7oPa09/AGyV1cBvR4cMsu03z53FCFOtAeMYLoLE9qhJnxUzF0y0CYgi4SlEth4Tc8n3OTzDPr8DRHhecbWXvTlJRYswfyklmSdKKDy/F+PH63D4DKndXgA2ZpCUJyIzfjamMW9+utGdI+lA9ch8cP2v5fYHw8GALrIyk39qdAqiO/BSsLILq/ISi0QrKJGuzQEFBahVy4A8xIkzMb01sbotFjkSvBAplKByJI03IrIYmlmWoEkSNmiCEAgO/j97k80IfsVJiHGM0QgTNiaSy+Z/Zt4/W4fC0UiqjvWWbcoDT3KCCpALno6Pjh+1/L7A+HgKCIlxKZpGtAmrpXOv4+fZt5VAdRfeojPl9z8Pm/FFo38EHNQeA4HfNCLcX/Pj97k8uCWrudfFOWrqMUNocfFImfJ93jx+tw1EEsxtvSyz4AGPAYzihbkoeSrgcrO5p4YftfykkUFvhSlxYx5FGSRzUFy44fwc/8Ajze7PipmznR8vuda0ZbGVu1R5cHWkDytPekRh8PvcnkiCX08DKOKcvWvq8PiNocfFJD4qX5+NzWPdZpu38wxZxUKdBGvgw/a/kC0uK9gfDzQWSR0qDk0fNh9x5xLoOAb7+BeznR8gGSEJTyAtBiO5TYlXkmnIe5Y8wjGMZVKsrmhAGWjSIw5r7nJ44u9vIYXWj9e3kHRx8UkPhl7vwLg0N6mm+ofwIFyUJTt8luVh+1/ENXFLNfU4eeCzc2qDkcPjJEtkoZ/A2BUiUIJ2Kz2oaeDG9QKhJFYCli4Ymp7OfECCGyTUvFd7Kku8UOnhG6sWTeJPXypBJXE6lIDIYmpmHwL0oZQoRSEaLyCtPNDihgPHlUJpagoFcXdofD7HH4Yk9Xqa1CwxdUhnupaF/D6nD8M7UEIDWkpEhmBoz+GKuMmabtu81AaQAxed6IrOZmhGzelyV0ko6enj58hIEWHhpEUSEsniDcWKFYGShxjbICsRrT4bSpAVDtSUoe4JywUErQBh3NZ3rKniXc3jazJhNa1lwD9iE9jWMhnusTLq07et4YO5E+9DByXA7fp9VSclL28r5w+KwqZItJVwUgJOAqzOngV9jjzQ1vEGW/ixuw5oJpeQWoy1tEJTtVxRIdqU+D6nD8GFIQSqWo2xk2JbVckGSfOneaPwJhSgIh4xiZFGBYZQtt3zWQcJM7NavvEFoKCKJtTAZm5Lb+YyV7n8+DmtE7ze0TRlZ8ouf5qdCDjFcNsxvfHWh8VVR3TBgLYyhaKF/QA3dXd8MzL5UO45HkhovJkXLD6HGrhvlqDi4RDts8eAsxL/oa6rtFZCNWQciahCOz4Cu1fVPE1O4FKBE50rQdyIoxX2OPN7X8tQCzfcmj4C41DkiW916yYYkDfiu8g7ovQt4fU4fhd6rM/YrG5FYGatzlwQUH4PYPjxzjNHsBWQkacv2QxPWmkapXz/jzGTrXufz4JVnSMESRvQjp+uIG4yjWkgQLrB94TvSlOAp0hivoq69AEjCFoGROPFsnJshRIusN2CKTHQoGGGtXiTDhZ9zwJoJJkFN5sdqBSFQCUYA1WtcGeqGE9KgqW5PUTYeM1cUFKL53qPD7HHmF3f9mpSb7PFCJIyOtEIaRUhNaie6ooRL70EEeH1OH4GkmkJhKZs6gXLx4kfLz+wfHhi+vgg6UAq3q6NFh0rWc/HmMnWvc/mgA7BvSyy0JsTd8lM9YH7yR9IFMcIE3J/sqYpBQq2HE8NzvT2NwJKWg2GBuZKNV47JJu2iihxDXMMn7D6q1/Ex25lXdURgfAvpQG3gIA2oKAlDYC60r06xzX1JV1pW9lGNl3JdJoIJgTUQDYKVEsvKpXujqrLUhpClGxuhO9vBEQ43oIn6jzZvP58BmdM5ovakmuKoihhvimvqcPPJLg3pjiweXFfbfzewfFYiM+XOSAqJMtkip1G+dGPMWZcUTSlIb3pVZfBYSC6RQWsCT2qVALPk3XlZaA3zGibWEoAuEr4JkYYVliW5npFAzLBsRO9JwcoQNRsQJCzoGnXyIDFz4lTHfHenG25obBHvmhIYigSJjmJqDbG3h7DDUihEYFpicjk4asv7cMoWzLuKdccCBaP918LWLYcWaCN/KIX6SVJewpQ2gm+qiUSEjv5Rizhq3lIejzSXbFaBYMH4LY/wDXli5hfDps1zvfzAIA9SgCwAcVsc6eRwBaqD1pz4kiQ7sG1X1r7MKxQiTvp7opMYXbsbxlVOAnGGmm9hlGW8ALcnMxpLpobo3TFErWCy7GvNSkYAZWgVmak2B7v9pBpQPogvxJSEACVW0US3RzOkAo5xUqSVoTHeoexJGTYJXT6XiagtctKEIpCHiAvHGOKxsOx0CCHECc1Cq1OwYahrOOSyywUgvZNaj2oUgUi3gFCsL0VC5uRZGmZB1yabVs2686I6jkdSg6yGDyAt+1TkbgIFkRuPDSR5JHcB+lSOwY8JhtTo27eZhsB8KkfvySXbGrWgWD8S70AAKuhekYKtkqamW9Cgesh0ofq+9fBXPxX+jr/Y1zfVXM9VfYqH0+qgJk9FV6IQzZy7V1xQXo/oK1mGcnOQdioNUTgYuroFAY8EPcwGEKyBUCclRDyxlvde1CZ7lnsX5S/oIL1CJklMQuNQLOW8xR4RrMZNpi1H8ai6xl9TtzQolqhNVTlu1goYm5e0oqbQp2LeAKYSWaNJYjA2qQhwXS5Le65XiAGzgLOxwnpwbAQAjkaZ0WcA49TkAYBXSnAU1DYkz6CelGBA3C7t53Ww4mmVRPU1TA9FoKQBdyLMakWdQjagotSS6l4Ho1DA3KisIPRpvey2MeOQ1Y3KGJs4hrg+jXB9GuD6NcH0aKHCgh3GptE2paSmLdFqmhYibfjc1IwbAJjrepiKhgzBFHlny4T06V5djlpRkXsy7brpbrTwbQOmkF/ioLNCIQa3m0rMTmz8Ci6MSjOiEoiRMYOaeiQuWmCOiX2KR1nUApvIJRhdAcXUQwxERTSGaG3xyESENXAZ0COJcusFCZQ29oX70OW27aphuJNy9my1JMofYhHrDSkiyGL80cGMl/8K/upcgrKFvehF4Mmd0mzHQo4gRCYk1KUIhsCbp6BDro/Or2U8AUcsFRClRBOYZBGBjRxQYEe8iVFgpyyhX0mkKYrBEy2fQKIqIRss2X0+aEw9GoIno09hWia/wanz+mVB2EKgaQOxaARJBlpKFWCd9LUYo/FhVoJkWoOYtTj6UkIcjQ/jw0yNtUy27vRNKZaRaLL3o8HQvwWO9Q6JtMvtVuu6f90a6ep/KB/k/lc326Vwqi9DrAK+MlqIrETD7rjZNuHNTQXMhe1u1PCUZTEOie1RQEkSHYF2lYcJCBuDHdKXIsnhJFOhp2zrlyyRqYr0ZSB2fuaZRDMVO6DdOxiJKJuY0FYAMBUW5UAzMS7C7bQoFmYAILqxpWZRF9gDvo4oBAE5KiCkI9qkGNyRtqLrWfh6NiLQbnenQ/YpsCSZIpBvNKLT3sYDsFSFEN0S1/dExAWALBTlX3qYFsRZbb3mg1FSLtoA1f9rIlIYnZ9wHKO9aAoC1iMWxRTQiqIDIyW7lNCaeGILosfuhqbdwwwfuafICQXqURoAiaiHioEBvflrTbvKXdUnAdn8pOH1BqxnfrrQahLV/qgpERNHwYobLIzE39qMbaLAw7jWQ5t1R+QlSjk9h42pnM2Qy9WgoWiJClCyHAeYioyMT/AMChQzeGf/EE2NPCJJmr1HNhbroGVo/EQwvff0dakQQyU6ss3FgLmCG09PDPL30Ci5uKucydrHahIjhoekKIiDIo7QdaWyxqB1JQq0zO3ZN18MRCuMHRy+1MFm7NiLTtT/BoPUl2k7CQXg2Fx2pBaTCEFuqn0UGMwmlKnDsYTCE3jJkaQsvC5qDQLmIOSmRqhjkNgWHB3moSDpkhTDO0q8rToSYJytAMrwVLqb4d4fCjQuNhaBwsXWJ2iopHgzKDTihpDAaBQNGb8vsjVKxcgeuHvT32EClDc2qRarrRYt4Q7PnlLAQ+mtZo2sJUBkDcTB2xSUirdfxhkl9Dyi0yPrbzuYxQrgnFSQnorOySaUJVsXWiyAYIxuHKu4igtiXYimfPuTGGzeOcUvwgEueB3wGotSiMduuT0S24jVyCTPcD2LRQXXFaBRggAMCE6mlNwpJQ4dvC4wcnTd8FEkmiis5uhn2FQiXMNZsvSVRO4NBEA6BWj6O4QgT7RejwWNwsPxRCSNQJSSfyUU03BGJwGENlRV2goQrgMciqAbS30q3wVEIQYRNEfAIICm6MDlYDrRwlbFtXNmvFA6tEghSMWFBzUBgOa6PJj1BbvS3VASTmBmkKrArxoxQ6xd1PqsIu0HmuFgH5UpbEHkRhw1A/gAAt1g2pVXy63n4awt/15rD5/NAHoDes7gpd0WDJBL0WjTFtgBB8eDtp50YCr2QOBJdpI3olC36PeDNTdhxKEUS1ybWk/vgTFiJ7lAyAF1dCr62L0E2TdrzrCLF5iJbi6wYrPaJxm9PZKxxFBJlom60ClYBTiEYnY7a5aMyIunsbFIxRZjvR1Q+tEaKISI4aunShhEAcwdP1aUElhbGFuIepFM9/j/ykhBgZBIJqKlKKBl32OmzQ3Q4Tco3hUAFSlguXKeNaEEdSJEboR9aCXLNKQGBqkxRKBJsJiSBaaPNgRJMNS43b7UxUquCCAN4J9asNaS5F+KhlPYEdbSGdHWjo7oFb5Fy1DYpG+IiXlydjRVebWd3o491cjMRsjBZ58oT0q6OwRbueaxofFQPHmLJbuhtSrnze0+D4fTfysD2LJnQL0bwomq947pRKUCIN9Rfij4yXKS8B7Kbs1OlkgKQsxOqKAeIRcErvA8ipqS91z7SgNIKiEy+gSQUqt826UaBmlF2wNWGhaGY2ApOK3MMhEaDBlzIo2wFTAb0LfufyNqHWnn9JwV1VK+XYZ4pBOyE8n5ejpTAnBDpRnTLBuZjndyO5Tl2LMd06UDiSxuwXfZ160jtF1EGyHRl76SEDdSSb9E9ulKqJe2MQDf8AZzQpjYBJrlEvpQEbbb9TVjhUCzpdnsdaK4h2zAdABJ60wovPg0Kmbz0MxtaoFWYAIi8AGovwjullOVlpHZEDw+ImpfUbclOiIg2RvpsasO9WFeQx7IaJ4hvYpZoz0D4edmMPipHw7+LIxITeilXPnH3NPGJLSyjDBnZKz0KJxPt4NacsBxUa8DggpsObC3rQ48AsvtRqn0X9pg6SAUCgtUXg3fAwwYOQNY4b3Kl3UFNFCe9SIZIFrMzLJYSXRxLMHFr/AEirVdR37JMPSjExAb6JDBZZUoS3CcMvYXexrUD8wZyX1aYRZKiocrgGT60LYjmPfv8ARqRhpcDdNPZyYokrh74DdhH5CgSQ0iYnTpU6K+0OnTj4pAhGBsFgshve9ylOrsBWNSNT3xUYIJaJwNhw/wDKe2bnThkDGgeqgGZHdzQCw1KJAuNIrOi1iJV7pIh8AtuKj29KYJciybjsjIm5UfBBxEPzop0gGNEn91D0nf04aES3i0LY5pByXDAHGxh1LOlJt0KR2eauw+P1OT8E2iloJKDgqTN1IM20vR+MSl7UVZDYrRenyhpJQzbvYvQ23BIA+61Hdl2P7QEADAYPEESAJWkorYGxj+0MOLKvsf2kvcEY6tDJdVhYpEBJuiegbrxGrGCptNj3qQl1hp4T1jvRrH1EbEL8qk7MlbKg3d23apuJnBuuEYC0Rag8/U1jX/jNHB2TO5fjsorcHESVwJsERaOZoH2OQEQ0LWCwrvUB1o1LCXOQSgg5clZ6hRSgborXGwM0OQoFOvA8HWVEkwIlkNQIkdaB1SJ3xAITRnio9LuxmLnDZ9Kiry4rPBxhXFWkAMAOHk5KU1zF+tRHlAYjcmYzfrUD2sOILZxJTrL24CYO4veifFsOyj90YylkiEe2O9WQ2tubdKiQ81jo6VBokvk/74LIdc1qcQqLciYiBRDQJ6Hfwc+AT+DtGFuhUXFsQSDpSBAlEIJMPFFHn+T+vEwjmjNslYVi/AXeCjDUkMFbqbr+iiPcLbikYyW8hGdSIzGv3mmp9egd37rRfMctNyF2XTLSoLnSDWAwAUA8iU2diSnVHipGMNZDJINYedRpMzW9IkMxrSB6L6aleICibiN4itT5A3A57stMAbWq3iNE8I/dMw0mVHYxHSKg3Jca4iyUywEnFYDdgbvK0iMzCIN3JonDgi1CxVU4MKnWyZETJSiBFKDgXWIian5TCXWQ2t0q1Socuy1fuiZoCFrIzATHerRTIiyupcHo0h4mKksujFz/AJSEsOTccNXvj2ggObrKkNFCELwi0DXPdpTB6WTIDzl7xpUMiedWILlQHWg6sjxJ7pqVhme7wbgqRMlTyRiG5SCaXPeagJMNk7C3q4KwriuTuApr6IvY+hoeAT1f4Vgcl6qeNyGW93pGFvCvU0H4BPGvk8WWSoagxaCk3cI7mtDolWXQJaBGgXB+aEEeQrciRAEq6f8AKthPuF1mNshwFzatO+bixNwqXoNa0qYmMH35oSyBFPF6SixTvfY8hhuChapDKEIeUCDNqRSsB1rVZSWaWvBaXsXak1NClwKa8S0lMzGDWNMgdx4tWe+FES5Eaa0SEcgkNC6ghU3ViETHe/tRE9liAFcMinWJpVsNnImTarFts88AuJxfHKMSCy96BFEitmMsP0OjmFOaNVFn/tBkYUeaRDISJKJDBcMGw6SfSkSz0Ir9AqWkdNugYGqHoe1TmtJbxeKw5tm7UBkZddgYHvBSDvs9YT4SbEyGtPdg2V+kVceFVQdnASJ+vBSGy+CgbehwycQ3EqAEQYlIPBSAoP2sHRvWhB4Y/wBI/CKeBhoBg4UPSo8EhJnU8+Xz+TwxnXSgy8PsUIhBeM3M+odqKYhYry0AtQkIbysU4egUum718ARUBlaQSTksrfVi26+ApwOp0kD5UUnzhb9lEiajB6FGOEggigC8t9e1IkFYx2APaaFYIafR+6OxdSMrkoeVxZYhLQRAQU1LpnZRgTl69VRek6YPIZEclHI2fAsBxVqDoJ/la32jWhUL1g7dPAuhc4O8beh1aiBkWgCW29yj3aRggvBs0x0waOmJIcuN6Hch2rJIaeVW9AXeB+1MN3DutHBGWxCrKXZYtxQua6ZYiCsHSc70GygW2QNkaCzig2iDo1HbUTSn4mceAeSJgx/3R2wVOrBU86tNqGgWoJx9KhWzwoA+vq0JEOKSG9Xfes+fsN6QxBb58IPEYZKbZMMm/m+hyUWuldc1Aes9Bn2GjHAEAGl6AAEBYoYApVwVG4lgcvSaS4VtHwn+KWhxC6DnbqoQgoDAbViYeeiAdbWTWClpKLEDqXGpQt2Waa+XUQ8T5dqYoMGLJVX1a+ii7+qAfAPYniQSGk2rbRpmQZVAUdoUKi2YMd4owssIL8/Uplp2Jwtqu0Dmx+jX0oEbWMj0jLtQjRouPaiHCNJC1zIinrTxEZIm5G1HtkBiBAwcR4ORhtUgYRDaKKcbbo3P1S8JEcrm1KdrAP2pCbQpFKZu7lNIKjYESXD2OGB5honkLN+ioDBkaAXpXAK2x/f98mHXmNpm9lWLUNocfFCw/QrTyyOK0LPl5xhtSBk6jfywkxLab3rr4TXdMdce6UxmUJSYV4wJltUJbbIPu7tPkLlzg9Kx+Vrvg0Oad4Y1v7IMvA0Of6nIlf4aEVFa0XRurBuuvRtU2A+PgUboaENRoXsCQRi8E2qR1onMFx6hRYk3piO2N7lqCWKRdgutJQjVFEYTYkHYQ7pUQf7cWv1a4Bk4eI2TqFF62AwcB5EoFIkTNSd1CxvUUkRfDB7V70lGx2vWStExWmkYVteiWMmvWijFNIsEhM9GhF1hWQsbJChuTSxNc4UQ7K0EnxSeyxQmTEbrTbNHQglVWVOVdVqYYQblQ1ajXa3W1cnNLqlF9nf9Ui6mnFWuxx9kZpSGInxIiYnr+kpZV38HZRPfa1BUJ5JHirEMfP4RhkzTUsxSowl6GaRTram1GiGo3w6+ASdFPQ/fiECi8+MtSXrAY/tQ6hwBSW0htix3kg7cqFEsZWiMazDkHWlQSQ3GmUJUDsxZoIhJ8LS5TLWZoycBoDiexN4M1PRaE3kwC4KiNGaAcCB3whmN7LRCIyB4H6VGGPAkT5I0oyJDPrFAQA4I8D+TBgbq4pZ54Vkfpq0YJGCD3gtTQvQ9whQG561ACVrMUaL4fhcQ7UgP7j1Mudyo8BDw7J33FEtYW9E8wiRshthIMztIpDZpMFss2RKWZtOaMtaQXC6RU7UjaRo5Ju9lutXEHvSeVoCVJONusFnJSJiAOEuPcpcQQQvOPLC5j9FYOlOhBqsFCoUs7ilWDQpYq8TFqmhYjT8a1FewAdr3ph8ljcRRnxAgbaZPRqU7IeJsckD2p0symRsoPVWAiWZ4dGE96cGohpO37MNFCX+w0qVj5huhZ7j1So+DAGKV9flSJotbNaCmEGoG+KCZ95/aGCyyerF+HJpUKYsiLBdxcEWybUUMRnKdUFmTDwm0pwiqMRlQjqZTsil/FlSwpOUv3rRlJrIAiI3E8LOlkNBx/wBA6FJb6Hu2gt3ll5q5Bg0pwwFBQ5i1LFwCWYZqJUpVtNgqYk/pw2aSCjWJGjU3MbWpWNiI15XFLcAi4LEBgqYpEOZWLFDtHPAUJpLsHlKSK8R4rBEcOtTpxEZmYOsqCA6YYBgtg92naI3E/wCUIHSMaUxpShe/z/lTN09ZZl6oZ9FKNcsnk/6VDSjWuxr6RQgW+HiU/CV1/fUu3jYBS8r8j4NTdhB71CMnOCxp4GPxtOcEXWJNaMKA7GsZ4o0r0r09a7nrSMxNtatM2nrTUQAQ4O56INNWv8VJYoQbKhfa3crvSk5KUrCJymCgFZ9iEvpWSMTUz71qMOdxCUKoNrein4yTAnDKGIAzvaHRyIaDMOkgxpeom+0bi76SA6UDgqB1kSjuCsi0ZkJMVpwQO6wWF1cNMOKlKsrRR0c0nEZgJi1KsdABCcJrUQMIJf8AKvRrtrTS0xQXWEAsj9nrUYjEsiOCCkm7nxKOyVYzeAZynSDVFtQDvgA1T0lSXcyt4XE7CttLUHx8LlCLzdhsngCeZLXYc0xBZrHrvQACCcbV+lIlXaDQbejmClQdgOtT/TRkSRq4rBncVpSJyqF0Z/cC31z5VsewdpbtRxAYOXWjtA9Rz+QlRSgZQw9DUYYwkA2mgq4Us6c1/kFf5BX+QUqIsPBT6AMrjSlNrBeijqJy9KXwYosgnuKHeryyUoVKj3Wv8Ap1z0CgEgsxhHcaMiCUvGOKCotFB9lBgC430tzpSFlEVgaHCGTYQ6UExO6gkk5iChE0KwJYh1JlwNaYEiEo86VwbYIHBfVp8gCG4oyKpe4WCXekxLEkANT+UgPtAN10KMwU2ezV3oyBeRg7bUmkiNgPYVc5TeFelgKHsNgJPRb/ADVu2ijFLHxBJFEwgxlpgAjEV5QT/dI3LvES2jQiKAM0VAtSSNBvF6ZjsY7qFKrdY5wpF8UyWr7xletJvKxKsrTSrAIIVhqFIN12dlKhWFPVoVxIhkGH1CpBDdxIAXqqR8Rsm7M+p7FQCuQVi7Y+aJfMZBIVeLUP+U+i3kYDqE5NKl6ywslkR0UA3KAEQLDo+LVtm0OE2pshDRNHamKys0W/EEE9hvWtJUeEYdmG3fyuZA9Q3dbOvFCUYfYFgKBQAI2hi9SnsHxRGXG2/gtko4Rq+ABbD3o1SAcFcTIjrTooMqUcQ/AlrFXplC84EDsoci3JRjcQiRhuOKY4bAW0OHJwlH6+sjJCahJDa7QU9cErvAx6BRBRCFSODldWmAbkC7tLQ3o0lS8JXVafkHrpQTMKiWKQYBDhpAt6TVOIArZngduGnyNZBGRoaWELlP0I6oVGIGFAWAzuoKWYFb+mUC90xbEUBGlQnXZebOGmDVVLZVctSdNWkLYgqKirtvI+1DvneoTvSISB3VNMQ+X+j7lTFQWjCQZDoiDUKIx4BMu5N1pda6W42OlBBBaoRlkXU8BL8tQ0013pqPCGPVtQlD+AAQdDelVlz5fZPzWevz4l2KC7BV0WA4ZKKNn1DB+6Zk36+u/R9agI7Lb2qVz4+4fHj2M72pBEEjZHWn6JZZfWk9laX6P2O3tTXyFrNlYAZ2MVLUotQhPSgkbdpXD1PeTSgCkCzpD0FoCACAwGxUSGrQxGwMvZaTg2iY9ChpJ3M+KXGC1hHxSUHvhOGAULCXCR0eShpUhgsj3HuUhcAJfOHCruIqOhqFoM5oGXKbULJmj3TmpqS7YKksEB5LsLAH58JR4ezDD0phkWtol9pqe0WrRD+qjQFpoYPl474B+n7qRsGeKCP9HmBNDfakVD5gB6BvSqlz5vbvz4Z6/PhymvoUK0B3Yl7quWoPaplQT6getGrOYfHk9w+PH2b4oh6/NTU1DGMHFKQsZsQYHBYa5oqVAmxnU9x0eGmJA1mQyTiGtjTWT+jZwoGSa9sSSKGUDmYL1ZaJCDAWCoqKc55ETs09G75R6xdYHkq2YbgtI0IswhZBzBpXSwmBHjA1eCrGsq7KmVNVZVqTKf92shsGamACA8tvLpX3t4jg093VNJnU9BUbl06h8A8RawozTiwgM9fwATQ0dqRGHxmhpVZWXz+3fnxAu0mjp6irLmTMQ3ykjrgz0p02Yp4Yq9g+PJ7h8ePt3x4KLtLpQDel+oJCTCOjVvrgLdQ/4Na0GQ7FOJxolElBExQ1QPWEN1XA2EC9M1NTU0PLyiR71GmnyPZE7nFa8LVUOWOhc2rTq6OBI0O+ulawC3LY2DAUhWLKNDVoqbRp5QUBlYKALBHt46z7DSStyDgCWmpKkkYgdSUKtTJHShc0LHFbH2Ojf8KqBoUtX2qB5VG0SUZ/B7Z+fFFG1Jr5SJvNGJCTJDhOw96gHBDfRpAmUbPK5r2D48nuHx4+zfHhiVOIIgk3ptjQVEVi6f3SBglaUsARxRmIltDZ9SmsU8s8TZ7MUvUMl6973pEgtBeitBEdWGKrRZXkGgDHr2BT70YkNMHprU+c7EX9jrZUV30hK3X9UYTJmN6mNNcBY+B5ZowSdC9OfHmI+zRjykqQRbSUJzQfAgQLBQEwyGyMeCk1AuInqfhcUJBotCCYYAGKJahd6ZG1HnK9u/Pjk60EsmWREpiOlS95pVnPUi5yFARdT1Em/JERvTCApTozepA0A8nuHx4+3fFNZaO6ZAzBpUwDeJWGNdaXexnEObLgnilMdkc9APemmFdJIRKpltpRySLnIezSyyzC8O2KgQRGpF9Siyn7sfCVidT+3RuFTR075qBpKAyS1cdqWrhyMDFgYvUEySkoOsj0GgAkc2kojcoD/EhkwkShwqAox5ZjLRHV8gsSeNwJ9hqeIO1bU7A9ZpXO0F2lhaQRGACyvO9MIQIQ2koWqxC4PZt/PxLNa4nejSahUS0YDcMrjgoPOV7d+fG/JUd1BKUKnSp8MYllloUbQUyWfBqtHcpmmZkyCw9yPL7h8ePs3x4HFhkI9GDYy6UoFIod+Hq1HIxEqT396ixWQt8Zy7xPLSZ9bql3ERzV0icQje72xzU58Jd3wKxrTTXo1CaEkcxDKxIelPwWUJtUhQ3C5R8akHGP3UIe4BZNMJeHNNZCuK570FvLJQuj2Lf3yFazlkSlNALysa095OUZlWlNEBI1G9MYgjE/8A6pquJK0IBRs6odfwtEugjqbUEEewg9aiikEnuPP7d+fCIu4+azRtvXUx5vYaVn1KYyjI1i1Z4RBI6oWHTHl9w+PEbbDAKkYAuvSrt/nQNwvfTSZoKwpfalfHKrDImIvOFYndcUpKzkSdHulHoiynRdjf3pUnFJe3/akRHLJYh6F1WrgMilzo69KUK0IQld/j61HQdyhdZiUvwNioBlbrJHVGStFlEsd6n1vJyBywWdGmgMSADgUW2mgrW6QPKbcknNQR6ozrnZww8UkMIjsmPJvoE9dfGJtQW9gJuZVh1akh4HubG0m04pEnISnW9aAYo59aiM1tUNOjfzgqCoWDTXfwjxSMlIJ6ht5vbPzUQC3NqWc+AnqvikoLIk9KB9HAsCq9VXeoGxYRA8DjRNSaXMSyED1v38nuHx4CfdlJ6I921KR2XPj7R607FcSgU0HLLjrWRiCunVgDQ2wUdokMwlD5omOfEwfqmCGaAqLlMUrkgMQGQHeHpLtU91k2rnUJJ02B3p1ftwcVHEG6IoERl8Pc5axkmCAognFNLiiKBZJcWyenWpNgRS95zH2KbpG41uAwlySGc0amxLwAaDs4rMRRE00wFw/uCCVSyXQ1TJOkvFJxEoq3QZc6muStUyLx0eRyOvhZ6YZ6U58Vwpj1GB3UKjMixL7XsBpFJ3wYSFae9NZwJl1hSfbyDo9mlitN6nmBWClAgxq7+cUZKAnqG3lgI7Nu9N8+Nw/SK1274qdIJ+48CHeAkwWE2iDsakJBkm2Hk8RABVBq1czVJPSE0wvc0sFheV5eKUiRk3QkYVEaBGSMk2hNoUm7doWeZM1e8F2+WpMIMlnMDTpUeiGSwPXjiowrsa2RaZTKW6KiGUsjLnR3fJhCCgiEIaCouNGnwShwpCRqRnLQ2qM4gQkLJFdTEp/CdYFybYu7QJhxU6jsJNqgTO4GlZvDXRKBY7MUdImBgbE3uZigBpckh78eRhMOtSiDCgHgGGH0NL8qLfdRbpldtaGMTssNT2hXu28bXVgMrUctCTFbq0N3pRU/qButyP7RcNRJlgz5TSzbdhpEYc+QJYKQGhvv+EUZM0tTtQ0Uld2fnyfYbUghgl6gTb2XVnY/NUgV99zkoyADPhGyI1aq2s4tDKlhaNqhaWCQOiJdxNMM+LGnD4OdtpqLb7ob6XQgrOufShiZu1pMsvWoDSswgUhLrkvTOMjnGamVhmb0prUWEwWQmUMWuVe5Bml0gejJTBYkABsBpSC/hxR/p5YS9I6KGXw4dI7UExQMHuVI160ywO+lCbg9JqwtnmlgTBJaXAGq7F3Sj0Tz6EC97FoqYv2WmV1d4lnN0qxu+WDYQBxNT03KUQkAijmHEVClYzUJJ7KazgW4DLKxeNKwKYFB2KUgU5EpoHOrPqlaGgocSpXSCiYxmw2nHZFAMfJ4MAg9Wkt7UrD+LQwUbe0EBYApyCRdPl/lEMEKyKA9V6FIYOJPt5dfpY6lylAnSlqaGiBBT+Ju1YLGgk5phu9YSRRmvbvzUVFRQn71qesVc/29BMAyHC5J48MWtNp/7SqYi6qYIrSNXKh327PWo5SO1TktBFx/yDptRgaaVBM2qKNmGZRvxQ9uXvKme/8AwbXqf1y4x7xrgORqe5LHqAoEeGGoFNZIfZX2qGEvEeoJpHOXTs3OE7NOw2Y75drZOyVoDooxqi/VjrUqKLBkjCXHhBpskNIG9BJ8gRJ7QuuC9aEciwk1ku5V7vV0BUK0kW6bvK10UzHtluQSgpH/AOuAKZRz9SSroZkJE1VbWCdwa0GXISNFIHXXvUHY56Ce6Whs6hRUyHei1KFXjY9LjWmbMsi40WOkFGBiP9HWlF/ctWttaNEPfu21JTU/hhAtmyLlsHeokHCM0uED7eTrXPBHTShDcIKFUk0OnmaxRj8hOhsBhXXYo1Qi2bMgmSihC3AV/vV/vV/vUgEjZKKAyiUkCynCCXoKRAgCG/gJA2oN7erpErkFooO8xgEvCZBkrQ6EZlbmBXPKkAyg8DSyFAVkIdKn+BueHKn62jFL/AXYzBpBNhraGmmDEWk7vVJOaN6MihOHDWUMF1XlhPeShAxbQC3AjcgJs0UGJBIxaVkS+LnFXQVIIJHBlNlRinaXEhe9mE36il01gtZ7D096gIsBow6GX6G8VMsEIEe/9x5aXHoUIwBIuEr4EkrwZSjkMB0Mcp0dVjltQ3eJIHZOA41brVjEg3uIT3g3TiiEHlsCKWMs2KLKALKC+LB6icpSqngK9cnVZnmi3dHcdRXKqDaiieX9eBQ5R7qDLjkUHQgUiy23FCAQICv9av8AWr/Wr/WpYpcrrRBsSSTusTULhKE7vJtRBERR2msPxpUcieQOOSnIZUMdjYDFBWGJmK+8V94r7xX3iiIhITkqPzMVlyHwOvkYRW1qDDAZShVClxLQA6A1qUIBqqDpMnUiUpQ0FwYkUpOSgQAJBcTc8Ei9egcBu2bVrURAWBiiXdjXwCZxrMkYZAwIZiZLUDNL1g61OJVoH5qeMYARbrZeSOVPcSFBFiM6nfW96Zd5MASttmo8oAoOBBBO/e+0D0hgoAwbpz4I2U8ZCzKuhlWOqFPZHMjQ3kAF0tVaSqhoCbQ2DQWPeg4t5CJWC24RyGqOv4BBYh2nLHFW4QcFABOhddqf9IHBdUNi2tQvNIyUjsISvKcVJAktgpRd1CAO8ZoUcpK7URQ8Z7kqWFldlE9DnwWRgmJ0r7RX1ivuFZuaWFJNLPAiQrUpUzAzj0XMUwzPtRb8QZw058IqPAjPQ5PIaV9hu1l7yC6Rq3pQ3sDvD208IViVwU3MsOAJbtDBJhsaJ5CEf2UBvfqzQMADpRM9lnFSrTK23aUC7cuGr62PWghWQf369LqpNC7JEFHKCd6hIMWTLRAyyINV5rSKCFHdlHaZpMzGxAMA0RslA0FKOz8RUTyRla3cGTqJDmzMlCNoSLAxuQOHrT8Dg2pkuFSRwxkxZtapD4M6mKsl7eoVK5iOENF3atQi2CjMsqXoC6QKoTJpNMulAgxlAGOLGbs0beWMJdXjAYAqBISShaFAIA2ClQ0LxQ64CKBwqw4utCrvXlHDIZOX2o9Q0jgkELKEe1GAkBQAwVpJNEEMc0CxrGq6A0tUoBBS51GyN6WELtdqyUdwmI3BYcGV0Cg/Snwg2FgNjw9sPz/PJu2z6FAeCDwA2bO9JDH4LGhob0pZ8soxU3udzyfabvgIwv5zj250b0rKEj05ttg1eklfYo2BdfX7APel04AW+5BZHJZKhByCgt0s+juUdZS4MbwOKlZGHCO5SazF1k89aBDJWkMAwZEiKjljVnb1BkMTE61lAceB0HQ4YwSr2PuS4ih1dgAB80onpdyFh3JzSO6WhyMjtbu0Swfjp0AidxJpFaqCkGEjsE1bQmZkpLPDygsnEVLlHcSyie7cDgq3IqkDmFwamKsMGjVsl5d8BkFqLkwcSRs9ec0CioXu/wAtqllZETm+V6g+DTzYV1mNKUxJZi1TsFvJ3LcjlqarHln/ALRVzri67tE2gkE03u0NR6zq4LHlq3z04moD1TE5PS1X0nYRX0RYOApBEdaUEJzun1y+hrUfBilMvDddx4re5cdazUp1b/HiEtq0oWDuHmEsy0aSFPMFtDbelXPmw1FmSsknc8ftN3wku2pbhzcDqRZNmhoUhV++p4uc0qbYJkvogHWrVtMA+ENoYCRw6UGwlEEyi40QOUwtNQC2TdCiW1lR2VGUTRGoV6m5YzANTpOJ0qMJQDIWQwNklBhFq7KYcGwTpBpUmxZRR4FEHA2oZUE7xrdyq3VzQP8AZ6/70xdg2ozCwhtLdbcUwhKIJN5NighSeyWqQwWbhJwhrLypAiWWUN1jeW0FFhGIaUV03lvvFMkUoLMCfffpR+FErKm5B9Y+maO7JMxNLkPEq0oMd/B1agQnpKhuMTMmAK6rq3u1AkRpJ4TqDMWmY3UQMRg2oxMBoGpll6m0Wqa7wQBYitGotTvxpArABdamJW5KMjeUxeAO+BnIT7iwBGSLaPrWlGZjt2fQC+5R5eguGtuhd1ouXb0mR70puVCjCIhPAvU5YDrL+AYRlo0iMPjM0Uq58+HwsMlLBLTeRSy/RaGakA0PC2L7JSrlWhxnSS/Q5KDKjQYYMDLcp00CZBJMcDK3trQii2YgGS0GyeAINC/4KYTDCFoejI1fWISM2wNkTGKR7mAhzGgE6ZPeoc3S6AlXsUwigjkZfeCji1CxXBke37nim2BSwZB2prUkQPfyfb0eIGwMATCadKORBQRme7QQUcpD3oCYAG7y0kVjMWGau52DaQegpOBxVm4wATK1rxd7ULhVApBiQncI3Cgskyh1BuXgCmUnsbeErEf2DY3XAF1pdKt7d8+9bEFa4OquhMU3TLeQq6rdotip5rMdmPGd6MIEL+nxU50oFt4TgsZdX8KqE6VNdlAoLqARPNH4MPjMwoGUuZCRVoxSNgRJLR4/fbnlCDgu2lJeDAv1op6AKjPoHo8FFK+TgbiWaiVgmeIzftUKWlYRJTID1ptWECLohZqGmKCRcYG5Zs2WnjTJ3oCBEOHHNMwSzccAbjw06TDMTFaqVXZhZc2b0JdGSQS1l/iitdcr8wioH99pRIUkFsGTwTQqHIUBuCnaokT2xwklGWbF4x1aTpbRgYNiVKThZAXRSxGlM6YbFEidRqSmICAayuCr1AQrnB7j61ezARTc99xoFS0kRRslvFw4SSiwKbwgIM0SmJLvH/aCxigXEc1ipBoCWkkUs/haLg3tScq0LOeZqBZJBSs52oo8+HwmsnWrgKmhu3gKizYtwoW40eP125T5Be+rtOiDkJG5pT1dM+pflyiiOtQcpCrr1YqT/QaKZA1W8ZNJxU8E0zjF9RNmgFCS7KjQAQIf+1EMfFHVLDgNRVQwjOYx+qhDmYB0Ah0Wi3klPqxAHtUFBYj065Ff92q6oB3aOuXBHOGO8sVCQvbiMcPQVM3Cusf7TkiQay0Y3SHJiVJ1q9BJNQyLd9XLwUZYFmD1RCCyYq/lJPTAv3mg53gAPAzXvXz5NXD7DnwwVtEgS0VzT4kFIOEU7LEANpJipgML6NfxiXhIA71AiUJRB6UACCFEQbBQfgw+NckoilFqknSNShu4eKQEuCg8frtynyG79Xr6XJ4ahQCyB1BUCNa49zuyu60wB7AL3KFwDe+FUwmCl12rABPt0mUcTXGXz9ExQskUgedlikuezNdZUOHFGXdQaYrVRTHMnJw1CFdwfFT05r50ouAkWJ6FN+bg5d8A9CoYrC4iF53pVldWWjFSimDJDNf53+V/nf5XJjPk5SR0NFyaiWqWgpQKdHUUAvC0pWVwVCDZj+/xNY4CQrUohIQGAkcTUUWoWnD48+HwtJcUg0iaH1NXwgSe7w+u3KfJ7z81lfVyi87U3xQN6sOceAQ3GSvbPnyGSvfPnxRWqEBihbSo70GBRfr+EsbQU9GJq2lBSO9OCXb0FN6V7Mrmkhv+AJYKAWO7SVHioaEmhrx5sNRGXFLLL4Ga+k3fAUZKiEnc2r77cp8nvHzRv6f2Uvj7BowUKYqKDRk7+QyV7p8+CKrGh819Rv5dPhY3z50XdUATHqXfJ9htTmhDD0O9JGfMCsGaYEKXV86VJQRoa8eUZMhOlnxM19Zu+IoyZoCpbMdynPkEtgCT6VJBY/vye5Vp4ex/Ne7xMle6fNIu1MjQ+fD6zfy2W0WuOo38oVBSkjD5r6zfyfYbU58MYejmuvkBUClhBnV/ClSU1PFT4JkYLR5DNfYbvkcIfZKUNMcE10UAtQXo/ivY/nye4fFGPD2P58Fq0I2ocklKeo+acB4/Ub+YBhtSlLmpqampQTfw+s38n1G3kRic0sVNDRAQsuv41qBuMBYloAiQgw2mhilb5ZAgrKuXg464kJhc8EzhCUGBi5s6lQijclQECFpuNSKLBekJoJJvMI8ixQCPH2P58L0UZDIFTeCmYQECDcnFe8fPk+o38uDwFomcKKwmiBM28Dw+s38n1G3kaPMIVYDIi+Z38DH49aiF0KZdgqcjZqUE96MUNkrdQV/kK/wFf5Cv8BX+Ar/AUELNgFW54zwBmVfqhpmihMBoUS8uqAdEavpqxhUf8Gv8x/aRJfR1nl6S0ZeuxD3p4QOkPy+KuWmECb1/nqmfg0UAwrGyJaGzcOE3ybVdGYU73o8QWAAqsBX+Yr/MV/mK/wAxViBSUJ4oJERE2i60EDQDIP6ocGMUeBJxYEc1/hK/wlf4ShsdWAHbygSxKRDiVgoBGlGEuIoSmBE2nSsPxtGBDQQkTZKCUscEIDgoT4QVaoKgqCreRomClIkxORNqJCBTAgLr1ou1FR+CKSiF0JgMreoMpQwgl3aVZbqy0eSKioq3ilFedaMjo0lX7MF6mnzpT5IKgqCreRJqQsKDikxVRCEUbLSNCDAbFFvxSEthTUVHg5LjXj8MkrYZaeKio8LpHf8ACJaYm2KioqIxRBbJp+EKgqEwX5qKioq4jO34QltQDDfWkmooIoFkw6UkMP4Ab2CpOAweVI2oEaG23nE5sGWlNgg28qDagJ6ht50XFBGAPfyijJSQnLU84KwUoIMa8+UYxVsbfLzgrBmlBBd1fMQYbaHeuvmkJUUkjQMHnUpoEThqbeUJlbBrSGxY284oyUgnqG3l7DVqx/o84w2qIyZ1PKFQUoEYb7/gxn/XlCWClBuZfwSWvQ71hv4zQ0nANPwqGSnO1SaVPgyAwH4RRkpZdqU71PhKxY/CWxSlmpKmhmtA/FqM1IVPgIII6/ikCc70oVNLuWVKSSjP4/ZSxQTcrxVx8SAyNGfxrWYiEFpihZOMMiNH41oJ9DmKjEoGV9fyNS2wIJoschultvRR+JsUEobtFAYpGWjPcCnN96PxuaubCm8G1FDUCXI+Bj8TmuDO/ZpErasxJHgfiyqzMS7limCiyGMcRQhBo0fjAtyvWKUJq4UEXo8iAfkDMku+hSGi0Qj4r//Z\" data-filename=\"onepiece.jpg\" style=\"width: 564px;\"><br></p>', 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(4, 'nak', '0798630189', 'le van luong phuong tan phong', 'van chuyen nhanh', 7),
(5, 'nak', '0798630189', 'le van luong phuong tan phong', 'van chuyen nhanh', 7),
(6, 'van dat', '0798630125', 'le van luong phuong tan phong', 'giao hang nhanh', 9),
(7, 'gghv', '089775664', 'con dao', 'me may beo', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(50) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(2, '2023-09-22', 8, '500000', 25),
(3, '2023-08-25', 9, '600000', 10),
(4, '2023-07-23', 10, '500000', 25),
(5, '2023-06-24', 11, '600000', 10),
(6, '2023-05-26', 12, '500000', 25),
(7, '2023-04-27', 13, '600000', 10),
(15, '2023-10-12', 2, '8700000', 11),
(16, '2023-10-15', 1, '200000', 1),
(18, '2023-10-18', 2, '1100000', 2),
(19, '2023-10-22', 1, '1800000', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thuonghieu`
--

CREATE TABLE `tbl_thuonghieu` (
  `id_thuonghieu` int(11) NOT NULL,
  `ten_thuonghieu` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thuonghieu`
--

INSERT INTO `tbl_thuonghieu` (`id_thuonghieu`, `ten_thuonghieu`, `thutu`) VALUES
(2, 'Việt Nam', 1),
(3, 'Mỹ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankcode` varchar(50) NOT NULL,
  `vnp_banktran` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transac` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktran`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transac`, `code_cart`) VALUES
(7, '20000000', 'NCB', 'VNP14143047', 'ATM', 'Thanh toan don hang tai web', '20231015202042', '54I1BLY5', '14143047', '9201'),
(8, '90000000', 'NCB', 'VNP14145747', 'ATM', 'Thanh toan don hang tai web', '20231017175806', '54I1BLY5', '14145747', '5171'),
(9, '180000000', 'NCB', 'VNP14151192', 'ATM', 'Thanh toan don hang tai web', '20231022174951', '54I1BLY5', '14151192', '7685'),
(10, '110000000', 'NCB', 'VNP14152535', 'ATM', 'Thanh toan don hang tai web', '20231023190253', '54I1BLY5', '14152535', '8036');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_binhluanbaiviet`
--
ALTER TABLE `tbl_binhluanbaiviet`
  ADD PRIMARY KEY (`id_binhluanbaiviet`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_coment`
--
ALTER TABLE `tbl_coment`
  ADD PRIMARY KEY (`id_coment`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_even`
--
ALTER TABLE `tbl_even`
  ADD PRIMARY KEY (`id_even`);

--
-- Chỉ mục cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Chỉ mục cho bảng `tbl_productlove`
--
ALTER TABLE `tbl_productlove`
  ADD PRIMARY KEY (`id_productlove`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  ADD PRIMARY KEY (`id_thuonghieu`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluanbaiviet`
--
ALTER TABLE `tbl_binhluanbaiviet`
  MODIFY `id_binhluanbaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tbl_coment`
--
ALTER TABLE `tbl_coment`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_even`
--
ALTER TABLE `tbl_even`
  MODIFY `id_even` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_productlove`
--
ALTER TABLE `tbl_productlove`
  MODIFY `id_productlove` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  MODIFY `id_thuonghieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
