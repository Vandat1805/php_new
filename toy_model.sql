-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2023 lúc 01:34 AM
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
  `cart_shipping` int(11) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`, `order_status`) VALUES
(137, 9, '9317', 1, '2023-12-28 19:42:54', 'chuyen khoan', 6, 3),
(138, 9, '850', 1, '2023-12-28 19:51:39', 'chuyen khoan', 6, 2),
(139, 9, '3324', 1, '2023-12-28 20:01:22', 'chuyen khoan', 6, 4),
(140, 9, '5057', 1, '2023-12-29 20:06:53', 'chuyen khoan', 6, 0),
(141, 9, '7375', 1, '2023-12-29 21:36:29', 'chuyen khoan', 6, 1);

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
(154, '9317', 11, 1),
(155, '850', 11, 2),
(156, '3324', 11, 1),
(157, '5057', 11, 2),
(158, '7375', 10, 1);

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
(2, 'ONE PIECE', 3),
(3, '7 DRAGON BALL', 1),
(4, 'KIMETSU NO YAIBA', 6),
(5, 'NARUTO', 2);

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
(4, 'MOMOBKUN20180529', 1699161057, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, '', '1220'),
(5, 'MOMOBKUN20180529', 1703329387, '200000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '8124'),
(6, 'MOMOBKUN20180529', 1703331821, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '8916'),
(7, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '5608'),
(8, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '7481'),
(9, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '1046'),
(10, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '9945'),
(11, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '1044'),
(12, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '2584'),
(13, 'MOMOBKUN20180529', 1703332020, '900000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '2128');

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
(23, 'Mô hình tanjiro diệt quỷ hàng mới siêu nét', 'KNY01', 100000, 10, '1703652796tanjiro.png', '<p>ĐỒ CHƠI TRƯNG BÀY, SẢN PHẨM ĐẸP</p>', '<p>Tên sản phẩm: Mô hình tanjiro diệt quỷ hàng mới siêu nét</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kích thước: cao 50 cm&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Trọng lượng: Khoảng 3 kg</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Đóng gói: Túi OPP&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Công dụng: Đồ chơi, đồ trang trí, sưu tầm, quà tặng.</p>', 1, 4, 2, 0),
(24, 'Mô hình đồ chơi nhân vật NEZUKO trong anime Kimetsu no Yaiba dễ thương cute demon slayer', 'KNY02', 95000, 10, '1703652902nezuko.png', '<p>ĐỒ CHƠI TRƯNG BÀY, RẺ ĐẸP&nbsp;</p>', '<p>Sản phẩm bằng nhựa PVC đặc, an toàn với sức khỏe con người</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Sản phẩm được sơn thủ công, nên ko tránh được 1 số chỗ lem sơn, các bạn có thể lau bằng bông với axitol nhé</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Kích thước : 18x7x5cm</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Trọng lượng 250g/1 em</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Sản phẩm có độ bền vững chắc</p>', 1, 4, 2, 0),
(25, 'Mô Hình Inosuke 16cm Cao Cấp Mô hình Kimetsu no Yaiba Cao Cấp, Figure Mô Hình Anmie Thanh Gươm Diệt Quỷ', 'KNY03', 150000, 10, '1703653056inosuke.png', '<p>ĐỒ CHƠI TRỪNG BÀY, BỀN RẺ ĐẸP</p>', '<p>&nbsp; Chiều Cao : 16cm</p><p>&nbsp; Trọng Lượng : 0,5 kg&nbsp;</p><p>&nbsp; Phụ kiện đi kèm : Đế + Kiếm</p><p>&nbsp; Chất liệu : Nhựa PVC + ABS cao cấp&nbsp;&nbsp;</p><p>&nbsp; Vỏ hộp kèm sản phẩm : Không BOX</p><p>&nbsp; Nhân vật : Inosuke Hashibira</p><p>&nbsp; FIGURE ANIME : Thanh Gươm Diệt Quỷ (Kimetsu no Yaiba)</p>', 1, 4, 2, 0),
(26, 'Mô hình Demon Slayer Character Zenitsu Enmu Tanjiro Sabito Túi may mắn Hộp bí ẩn Hộp mù', 'KNY04', 200000, 10, '1703653167zenitsu.png', '<p>ĐỒ CHƠI RẺ, ĐẸP, BỀN</p>', '<p>Về sản phẩm này:&nbsp;</p><p>&nbsp; Vật chất: Chất lượng cao thân thiện với môi trường PVC hoặc nhựa</p><p>&nbsp; Chiều cao: 12-35cm (tùy thuộc vào con số bạn nhận được)</p><p>&nbsp; Trọng lượng: 0,2 kg - 5 kg tùy thuộc vào số bạn nhận được)</p><p>&nbsp; Bao bì: thùng carton</p><p>&nbsp; Tất cả các đồ họa đều có chất lượng cao.</p><p>&nbsp; Chất lượng cao sẽ tinh xảo hơn.</p>', 1, 4, 2, 0),
(27, 'Mô hình khớp cử động Figma Goku Ultra2 cao 18cm', '7DRB1', 500000, 5, '1703654017goku.png', '<p>SẢN PHẨM HOT, ĐẸP VÀ ĐỘ BỀN CAO&nbsp;</p>', '<p>Chất liệu: Nhựa</p><p>Trọng lượng: 250g</p><p>Nhân vật: Goku Ultra2</p><p>Kích thước (dài x rộng x cao): 18</p><p>Gửi từ: Hà Nội</p>', 1, 3, 2, 0),
(28, 'Mô hình Vegeta 2 màu xanh vàng cực to và nét', '7DRB2', 800000, 5, '1703654142vegeta.png', '<p>SẢN PHẨM ĐẸP, MUA NGAY KẺO HẾT</p>', '<p>Tên nhân vật : Vegeta</p><p>Anime/Manga : DragonBall</p><p>Kích thước : Cao 29 cm - Cực đẹp</p><p>Cân nặng: ~ 1 kg</p><p>Chất liệu : Nhựa PVC cao cấp</p><p>Hộp màu: có</p>', 1, 3, 2, 0),
(29, 'Mô hình Dragon Ball + Nhân vật Broly 30cm', '7DRB4', 600000, 5, '1703654349broly.png', '<p>HÀNG CỰC CHOÁY MUA NGAY KẺO HẾT</p>', '<p>+ Nhân vật : Mô hình Nhân Vật Broly 30cm Dragon ball</p><p>+ Trọng lượng : 1,3kg</p><p>+ Chất liệu : PVC cao cấp</p><p>+ Chiều cao : 30cm</p><p>+ Phụ kiện đi kèm : 1 led tặng kèm</p><p>+Led: không</p><p>+ Tình trạng : new fullbox</p><p>+ Hình ảnh tự chụp 100%</p>', 1, 3, 2, 0),
(30, 'Mô hình Picolo da xanh người Namek mạnh nhất, phiên bản 31cm siêu sắc nét- nhân vật 7 viên ngọc rồng', '7DRB5', 400000, 5, '1703654451picolo.png', '<p>MÔ HÌNH ĐẸP,&nbsp; BỀN, AN TOÀN CHO NGƯỜI SỬ DỤNG&nbsp;&nbsp;</p>', '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space-collapse: preserve;\">Mô hình Picolo da xanh người Namek\r\nTHÔNG TIN SẢN PHẨM:\r\n- Chiều cao: 31 cm \r\n- Khối lượng: 0.7 kg \r\n- Chất liệu: PVC \r\n- Sản phẩm bao gồm: mô hình có box.\r\n=&gt; Cam kết sản phẩm shop tự chụp</span><br></p>', 1, 3, 2, 0),
(31, 'Mô hình luffy gear 5 siêu chất - mô hình one piece', 'OP1', 300000, 10, '1703655365luffy.png', '<p>MÔ HÌNH CỰC NGẦU, SẢN PHẨM ĐẸP, BỀN BỈ</p>', '<p>&nbsp;Tên sản phẩm: Mô hình luffy gear 5 siêu chất - mô hình one piece</p><p>&nbsp;Cao : 34 cm</p><p>&nbsp;Nặng : 3 kg</p><p>&nbsp;Đóng gói: hộp carton</p><p>&nbsp;Công dụng: Đồ chơi, đồ trang trí, sưu tầm, quà tặng.&nbsp;</p><p>&nbsp;(Xin cho phép sai số 1-3cm do đo lường thủ công!)</p><p>&nbsp;Sản phẩm mới 100%, chất lượng cao&nbsp;</p><p>&nbsp;Thích hợp cho trẻ em và người sưu tập. Hãy sưu tầm ngay bây giờ!&nbsp;</p><p>&nbsp;Tình trạng: Mới, chưa qua sử dụng</p>', 1, 2, 2, 0),
(32, 'Mô hình Marco Phượng Hoàng 21cm siêu nét - Mô hình onepice', 'OP2', 200000, 10, '1703655490marco.png', '<p>HÀNG ĐẸP, CÓ GIỚI HẠN, MUA NHANH KẺO HẾT&nbsp;</p>', '<p>Mô hình Marco Phượng Hoàng của Băng hải tặc Râu Trắng&nbsp;</p><p>Chất liệu: Nhựa PVC&nbsp;</p><p>Chiều cao: 21cm&nbsp;</p><p>New - No box - Có đế</p><p>USSOP</p><p>Chất liệu: PVC, Nhựa</p><p>Trọng lượng: 300g</p><p>Loại bảo hành: Bảo hành nhà cung cấp</p><p>Nhân vật: USSOP - ONE PIECE</p><p>Kích thước (dài x rộng x cao): 20*10*10</p><p>Gửi từ: Nam Định</p>', 1, 2, 2, 0),
(33, 'Mô Hình OnePiece Zoro Asura 3 đầu 6 tay siêu ngầu bản nhỏ - Cao 24cm nặng 360gram - Figure OnePiece - Hộp màu', 'OP3', 290000, 5, '1703655640zoro.png', 'SẢN PHẨM ĐẸP, BỀN, AN TOÀN VỚI NGƯỜI DÙNG', '<p>Mô Hình OnePiece Zoro Asura 3 đầu 6 tay siêu ngầu bản nhỏ - Cao 24cm nặng 360gram - Figure OnePiece - Hộp màu</p><p>&nbsp; Chiếu Cao : 24cm</p><p>&nbsp; Trọng Lượng : 360 Gram</p><p>&nbsp; Phụ kiện đi kèm :&nbsp; 9 Kiếm + 9 vòng Hắc Kiếm&nbsp;</p><p>&nbsp; Chất liệu : Nhựa PVC cao cấp</p><p>&nbsp; Vỏ hộp kèm sản phẩm : Có Hộp Màu&nbsp;</p><p>&nbsp; Nhân vật : RORONOA ZORO</p><p>&nbsp; FIGURE ANIME&nbsp; : ONE PIECE</p>', 1, 2, 2, 0),
(34, 'Mô hình One Piece Ussop ở wano quốc cao 17cm , figure one piece ussop , mô hình giá xưởng', 'OP4', 100000, 10, '1703655775ussop.png', '<p>SẢN PHẨM ĐẸP, BỀN ĐẶT LÀ CÓ NGAY&nbsp;</p>', '<p>Chất liệu: PVC, Nhựa</p><p>Trọng lượng: 300g</p><p>Loại bảo hành: Bảo hành nhà cung cấp</p><p>Nhân vật: USSOP - ONE PIECE</p><p>Kích thước (dài x rộng x cao): 20*10*10</p><p>Gửi từ: Nam Định</p>', 1, 2, 2, 0),
(35, 'Mô hình Chính Hãng One piece - FRANKY - DXF The Grandline Men Volume 13 Banpresto', 'OP5', 600000, 5, '1703655892franky.png', '<p>SẢN PHẨM BÁN CHẠ, MUA NHANH KẺO HẾT&nbsp;</p>', '<p>Nhân vật: FRANKY&nbsp;</p><p>&nbsp; Anime/Manga: One Piece</p><p>&nbsp; Hãng sản xuất: Banpretos/Bandai</p><p>&nbsp; Dòng: DXF THE GRANDLINE MEN vol 13</p><p>&nbsp; Cao khoảng 17cm</p><p>&nbsp; Nhựa PVC</p><p>&nbsp; Nặng 0.25kg</p><p>&nbsp; Tình trạng : Phụ kiện như hình</p>', 1, 2, 3, 0),
(36, 'HOT Mô hình nhân vật Sasuke Susano', 'NA02', 450000, 5, '1703679118sasuke.png', '<p>SẢN PHẨM ĐẸP, BỀN, AN TOÀN CHO NGƯỜI SỬ DỤNG&nbsp;</p>', '<p>Chất liệu: PVC hoặc nhựa chất lượng cao thân thiện với môi trường</p><p>&nbsp; Chiều cao: 15 - 35CM&nbsp;</p><p>&nbsp; Cân nặng: 0,2kg-5kg&nbsp;</p><p>&nbsp; Đóng gói: thùng</p><p>&nbsp; Tất cả các hình là chất lượng cao.</p><p>&nbsp; Chất lượng cao sẽ tinh tế hơn</p>', 1, 5, 2, 0),
(37, 'Mô Hình Cao Cấp Kakashi Trong Naruto Cao 23cm Có Hiệu Ứng Cực Đẹp', 'NA03', 300000, 10, '1703679211kakashi.png', '<p>MÔ HÌNH ĐẸP, SẢN PHẨM CÔNG NHẬN VỆ SINH AN TOÀN</p>', '<p>Mô Hình Cao Cấp Kakashi Trong Naruto Cao 23cm Có Hiệu Ứng Cực Đẹp - Mô Hình Naruto</p><p>- Chiều cao mô hình: 23cm</p><p>- Trọng lượng: khoảng 1kg</p><p>- Chất liệu: PVC</p><p>- Phiên bản: cao cấp nhất</p><p>- Hộp màu: Có</p><p>- Đèn Led: Không</p><p>- Kích thước hộp: 22x18x26 cm</p>', 1, 5, 3, 0),
(39, 'Mô hình uzumaki naruto cửu vĩ siêu nét', 'NA01', 500000, 5, '1703679787naruto.png', '<p>HÀNG ĐẸP MUA NGAY KẺO HẾT</p>', '<p>Tên sản phẩm: Mô hình uzumaki naruto cửu vĩ siêu nét</p><p>&nbsp; Kích thước: cao 40 cm&nbsp;</p><p>&nbsp; Đóng gói: Túi OPP&nbsp;</p><p>&nbsp; Công dụng: Đồ chơi, đồ trang trí, sưu tầm, quà tặng.&nbsp;</p>', 1, 5, 3, 0),
(42, 'Mô Hình Nhân Vật Uchiha Madara Susano 37CM, Figure Madara', 'NA04', 450000, 10, '1703687489madara.png', '<p>Sản phẩm đẹp mắt đẹp, an toàn cho người sử dụng</p>', '<p>Tên sản phẩm: Mô Hình Nhân Vật Uchiha Madara Susano 37CM, Figure Madara - Mô Hình Naruto</p><p>Chiều cao: ~37cm, có led.</p><p>Chất liệu: PVC Cao Cấp</p><p>Đóng gói: Hộp màu</p><p>Công dụng: Trang trí phòng game + PC, sưu tầm mô hình, quà tặng, đồ chơi mô hình, Decor bàn làm việc, ..</p>', 1, 5, 2, 0);

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
(10, '110000000', 'NCB', 'VNP14152535', 'ATM', 'Thanh toan don hang tai web', '20231023190253', '54I1BLY5', '14152535', '8036'),
(11, '70000000', 'NCB', 'VNP14257989', 'ATM', 'Thanh toan don hang tai web', '20231223173815', '54I1BLY5', '14257989', '605'),
(12, '70000000', 'NCB', 'VNP14257989', 'ATM', 'Thanh toan don hang tai web', '20231223173815', '54I1BLY5', '14257989', '605'),
(13, '70000000', 'NCB', 'VNP14257989', 'ATM', 'Thanh toan don hang tai web', '20231223173815', '54I1BLY5', '14257989', '605'),
(14, '70000000', 'NCB', 'VNP14257989', 'ATM', 'Thanh toan don hang tai web', '20231223173815', '54I1BLY5', '14257989', '605'),
(15, '70000000', 'NCB', 'VNP14257989', 'ATM', 'Thanh toan don hang tai web', '20231223173815', '54I1BLY5', '14257989', '605'),
(16, '20000000', 'NCB', 'VNP14258017', 'ATM', 'Thanh toan don hang tai web', '20231223181022', '54I1BLY5', '14258017', '8207'),
(17, '90000000', 'NCB', 'VNP14258020', 'ATM', 'Thanh toan don hang tai web', '20231223181930', '54I1BLY5', '14258020', '2018'),
(18, '90000000', 'NCB', 'VNP14258020', 'ATM', 'Thanh toan don hang tai web', '20231223181930', '54I1BLY5', '14258020', '2018'),
(19, '80000000', 'VNPAY', '', 'QRCODE', 'Thanh toan don hang tai web', '20231223182619', '54I1BLY5', '0', '6989'),
(20, '20000000', 'NCB', 'VNP14258028', 'ATM', 'Thanh toan don hang tai web', '20231223183351', '54I1BLY5', '14258028', '1487');

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
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

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
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_productlove`
--
ALTER TABLE `tbl_productlove`
  MODIFY `id_productlove` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
