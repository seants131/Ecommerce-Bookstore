-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2025 lúc 06:18 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `anhbaiviet` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `chude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `slug`, `noidung`, `anhbaiviet`, `trangthai`, `created_at`, `updated_at`, `chude`) VALUES
(2, 'Review Sách tranh tô màu: Góc Nhỏ Có Nắng – mảnh ghép bình yên cho tâm hồn sau những mỏi mệt của cuộc sống', 'review-sach-tranh-to-mau-goc-nho-co-nang', 'Cuốn sách tranh tô màu “Góc Nhỏ Có Nắng” không chỉ là một cuốn sách tô màu thông thường mà còn là một tác phẩm giúp người đọc tìm thấy sự bình yên trong những khoảnh khắc giản dị của cuộc sống. Được thiết kế với bìa mềm, sách tranh tô màu này mang đến một không gian thư giãn cho người đọc qua những bức tranh tô màu nhẹ nhàng và thanh thoát.\r\n\r\nNội dung bài viết\r\n- Tác giả và hành trình sáng tạo\r\n- Góc nhỏ có nắng – chuyến du hành vào vùng đất sắc màu\r\n- Sự kết hợp hài hòa giữa nghệ thuật trong màu sắc và tranh vẽ\r\n- Đánh giá từ góc nhìn độc giả\r\n- Chúng ta – ai cũng cần những khoảng lặng để an ủi tâm hồn\r\n- Kết luận\r\n\r\nTác giả và hành trình sáng tạo\r\nLittle Rainbow là một tác giả và họa sĩ nổi tiếng trong cộng đồng nghệ thuật sáng tạo, đặc biệt là trong lĩnh vực sách tô màu thư giãn. Với phong cách nhẹ nhàng và tinh tế, các tác phẩm của Little Rainbow luôn mang đến cho người đọc cảm giác yên bình và dễ chịu.\r\n\r\nCảm hứng sáng tác Góc Nhỏ Có Nắng đến từ những khoảnh khắc giản dị trong cuộc sống hàng ngày, những buổi sáng bình minh, những góc nhỏ ấm áp, nơi ánh nắng chiếu qua cửa sổ. Tác giả mong muốn mang lại cho người đọc không gian thư giãn, giúp họ thoát khỏi những lo toan và tìm thấy sự bình yên qua màu sắc.\r\n\r\nGóc nhỏ có nắng – chuyến du hành vào vùng đất sắc màu\r\n\r\nCuốn sách là tập hợp những bức tranh tô màu, mỗi bức tranh là một góc nhìn nhỏ trong cuộc sống, từ những cảnh vật thiên nhiên cho đến những hình ảnh về các hoạt động gần gũi chúng ta vẫn thường làm hằng ngày như đi dạo, vẽ tranh chơi dưới tuyết,… Mỗi trang sách mang lại cho người đọc cảm giác nhẹ nhàng, như một khoảng không gian thư giãn giữa những ồn ào của cuộc sống.\r\n\r\nMở đầu sẽ bao gồm 30 chủ đề bạn đọc có thể lựa chọn tô màu, mỗi khi hoàn thành xong 1 bức tranh có thể tô màu vào trái tim để đánh dấu. Độc giả có thể tự do phối các màu sắc theo sở thích, các chi tiết nhỏ xinh cùng chất liệu giấy cao cấp phù hợp sử dụng các đầu bút từ bút lông tô màu, bút chì màu, bút sáp dầu,… Mỗi bức tranh sẽ có tên và chủ đề khác nhau, các hoạt động đó bao gồm: \r\n\r\n- Ngắm Tuyết \r\n- Đánh Đàn \r\n- Ngắm Sao \r\n- Vẽ Tranh \r\n- Làm Việc \r\n- Tập Yoga \r\n- Tưới Cây \r\n- Ăn Sáng \r\n- Làm Bánh \r\n- Chơi Came \r\n- Dắt Cún Đi Dạo \r\n- Đọc Sách \r\n- Trang Điểm \r\n- Thay Đồ \r\n- Đi Chơi \r\n- Tắm \r\n- Đan Len \r\n- Đánh Răng \r\n- Mua Bánh \r\n- Tiệc Bơi \r\n- Đạp Xe \r\n- Phơi Đồ \r\n- Picnic \r\n- Làm Vườn \r\n- Đi Dạo Dưới Mưa \r\n- Ngắm Lá Rơi \r\n- Đi Tàu Điện \r\n- Đắp Người Tuyết \r\n- Chơi Với Mèo \r\n- Cắm Trại \r\n- Nặn Gốm \r\n\r\nChủ đề của cuốn sách là sự tìm kiếm bình yên trong những khoảnh khắc nhỏ bé nhưng đầy ý nghĩa. Mỗi bức tranh là một lời nhắc nhở về việc tìm kiếm sự yên bình , thoải mái trong tâm hồn và kết nối lại với chính mình qua việc sáng tạo và tô vẽ sắc màu riêng cho từng bức tranh.\r\n\r\nSự kết hợp hài hòa giữa nghệ thuật trong màu sắc và tranh vẽ\r\n\r\nĐiểm đặc biệt của Góc Nhỏ Có Nắng chính là sự kết hợp hài hòa giữa nghệ thuật tô màu và triết lý sống giản dị. Các bức tranh được thiết kế một cách tinh tế, với nhiều chi tiết dễ thương và dễ tiếp cận, khiến người đọc cảm thấy như đang bước vào một không gian đầy ánh sáng và niềm vui.\r\n\r\nTác phẩm đã nhận được sự yêu thích lớn từ cộng đồng yêu thích nghệ thuật thư giãn. Đây là cuốn sách lý tưởng để giảm stress và tạo cảm hứng sáng tạo cho mọi lứa tuổi.\r\n\r\nĐánh giá từ góc nhìn độc giả\r\n\r\n- Các bức tranh dễ thương, dễ tiếp cận, phù hợp cho cả người mới bắt đầu và những người yêu thích tô màu.\r\n- Thiết kế bìa mềm nhẹ nhàng, chất lượng giấy tốt, dễ dàng tô vẽ mà không bị lem màu.\r\n- Cuốn sách mang đến không gian thư giãn tuyệt vời, rất thích hợp cho những lúc căng thẳng.\r\n\r\nChúng ta – ai cũng cần những khoảng lặng để an ủi tâm hồn\r\n\r\nSách tranh tô màu này phù hợp với tất cả mọi người, đặc biệt là những ai yêu thích nghệ thuật, tìm kiếm sự thư giãn hoặc muốn trải nghiệm sự sáng tạo qua màu sắc. Đây cũng là món quà tuyệt vời cho những người yêu thích sự nhẹ nhàng và bình yên.\r\n\r\nCuốn sách này không chỉ giúp bạn thư giãn mà còn kích thích sự sáng tạo, giúp bạn tĩnh lặng tâm hồn và tìm lại sự cân bằng trong cuộc sống. Thời điểm lý tưởng để thưởng thức cuốn sách là khi bạn muốn thoát khỏi sự ồn ào và tìm kiếm một không gian riêng để thư giãn.\r\n\r\nKết luận\r\n\r\nGóc Nhỏ Có Nắng là cuốn sách tô màu mang đến sự thư giãn tuyệt vời, giúp người đọc tìm thấy sự bình yên qua những bức tranh đầy cảm hứng. Đây là tác phẩm lý tưởng cho những ai cần một khoảng lặng trong cuộc sống bận rộn. Cuốn sách tạo ra một không gian thư giãn đầy sắc màu, giúp bạn trở về với bản thân và tìm thấy sự tĩnh lặng trong những khoảnh khắc giản dị.\r\n', 'goc-nho-co-nang.jpg', 1, '2024-12-22 17:00:00', '2024-12-22 17:00:00', 'Sách hay'),
(4, 'Review sách “Đắc Nhân Tâm”: Những nguyên tắc vàng để xây dựng mối quan hệ vững chắc', 'review-sach-dac-nhan-tam-nhung-nguyen-tac-vang-de-xay-dung-moi-quan-he-vung-chac', 'Đắc Nhân Tâm (tên gốc: How to Win Friends and Influence People) là một trong những cuốn sách kinh điển về nghệ thuật giao tiếp và xây dựng mối quan hệ của tác giả Dale Carnegie.\r\n\r\nĐược xuất bản lần đầu tiên vào năm 1936, cuốn sách đã nhanh chóng trở thành tác phẩm bán chạy, được dịch ra nhiều ngôn ngữ và vẫn duy trì sức ảnh hưởng lớn cho đến nay.\r\n\r\nTrong bài viết này, chúng ta sẽ cùng tìm hiểu về nội dung, giá trị và lý do vì sao “Đắc Nhân Tâm” vẫn được coi là một trong những cuốn sách self-help phải đọc dù bạn là ai và đang thuộc thế hệ nào.\r\nĐôi nét về tác giả Dale Carnegie\r\nDale Carnegie (1888–1955) là tác giả, giảng viên và nhà huấn luyện nổi tiếng người Mỹ, được biết đến chủ yếu với các tác phẩm về giao tiếp, kỹ năng lãnh đạo và phát triển bản thân.\r\n\r\nÔng là người sáng lập ra phương pháp huấn luyện giúp các cá nhân cải thiện khả năng giao tiếp, thuyết phục và xây dựng mối quan hệ tích cực trong công việc và cuộc sống.\r\n\r\nTác phẩm nổi tiếng nhất của Dale Carnegie là cuốn sách “Đắc Nhân Tâm” (How to Win Friends and Influence People), xuất bản lần đầu vào năm 1936. Cuốn sách đã trở thành một trong những tác phẩm bán chạy nhất mọi thời đại và được dịch ra hơn 30 ngôn ngữ.\r\n\r\nTrong đó, Carnegie chia sẻ các nguyên tắc và chiến lược để tạo dựng mối quan hệ bền vững, thuyết phục người khác một cách khéo léo và xây dựng ảnh hưởng tích cực trong xã hội.Trước khi trở thành một tác giả nổi tiếng, Dale Carnegie đã làm nhiều nghề khác nhau, từ giáo viên, diễn giả đến huấn luyện viên giao tiếp. Tuy nhiên, chính công việc giảng dạy kỹ năng giao tiếp đã giúp ông tìm ra những phương pháp mà sau này ông đã phát triển thành các khóa học và sách giúp cải thiện mối quan hệ xã hội.\r\n\r\nCarnegie tin rằng, kỹ năng giao tiếp tốt có thể giúp con người thành công trong mọi lĩnh vực, từ công việc, các mối quan hệ cá nhân cho đến ảnh hưởng xã hội.\r\n\r\nDale Carnegie còn viết nhiều cuốn sách khác như “Làm Chủ Nghệ Thuật Phát Biểu Trước Công Chúng” (The Quick and Easy Way to Effective Speaking) và “Những Điều Quan Trọng Cần Biết Để Thành Công” (How to Stop Worrying and Start Living).\r\n\r\nTất cả các tác phẩm của ông đều xoay quanh việc cải thiện bản thân, thúc đẩy sự tự tin và khả năng giao tiếp hiệu quả.\r\n\r\nDale Carnegie đã để lại di sản lớn về giáo dục và phát triển kỹ năng con người, và các nguyên tắc của ông vẫn được giảng dạy và ứng dụng rộng rãi trên toàn thế giới, trong các khóa học phát triển bản thân, huấn luyện lãnh đạo và kỹ năng giao tiếp.\r\n\r\nTổng quan về “Đắc Nhân Tâm”\r\n“Đắc Nhân Tâm” không phải là một cuốn sách chỉ dạy về các kỹ năng giao tiếp thông thường, mà là một hướng dẫn toàn diện về cách thức để xây dựng mối quan hệ bền vững và tạo ảnh hưởng tích cực đến người khác.\r\n\r\nCuốn sách được chia thành bốn phần chính, mỗi phần bao gồm các nguyên tắc và chiến lược khác nhau để làm quen, gây ấn tượng và thuyết phục người khác một cách hiệu quả.\r\n\r\ndac-nhan-tam-sach\r\n\r\nNội dung chính của cuốn sách “Đắc Nhân Tâm”\r\n1. Các nguyên tắc trong việc tạo ấn tượng tốt với người khác\r\nMột trong những nguyên tắc nổi bật mà Carnegie nhấn mạnh là “thể hiện sự quan tâm chân thành với người khác”. Điều này có thể hiểu là khi bạn thật sự chú ý và quan tâm đến người đối diện, họ sẽ cảm nhận được sự tôn trọng từ bạn và mở ra cơ hội giao tiếp dễ dàng và hiệu quả hơn.\r\n\r\nMột lời hỏi thăm đơn giản, một hành động quan tâm nhỏ nhưng chân thành có thể giúp bạn gây được ấn tượng mạnh mẽ với người khác, khiến họ cảm thấy được trân trọng và gắn kết hơn. Quan tâm không chỉ là lắng nghe mà còn là sự thấu hiểu, sẵn sàng chia sẻ và giúp đỡ khi cần thiết.\r\n\r\nNgoài việc quan tâm, “khen ngợi người khác một cách chân thành và đúng lúc” cũng là một nguyên tắc quan trọng mà Carnegie đề cập. Ông cho rằng, khi người khác cảm thấy được công nhận và khen ngợi đúng lúc, họ sẽ cảm thấy tự hào về bản thân và có xu hướng muốn phát triển mối quan hệ lâu dài với bạn.\r\n\r\nĐiều này không chỉ giúp tạo dựng lòng tin mà còn thúc đẩy sự hợp tác. Tuy nhiên, sự khen ngợi cần phải xuất phát từ lòng chân thành, nếu không, nó sẽ trở nên giả tạo và không mang lại tác dụng tốt như mong đợi.\r\n\r\nViệc khen ngợi không phải chỉ là lời khen sáo rỗng, mà là sự đánh giá đúng mực về những gì người khác đã làm được.\r\n\r\n2. Làm cho người khác cảm thấy họ quan trọng\r\nTrong phần tiếp theo của cuốn sách Đắc Nhân Tâm, Dale Carnegie tập trung vào những nguyên tắc giúp bạn tạo dựng sự ảnh hưởng mạnh mẽ trong các mối quan hệ xã hội.\r\n\r\nMột trong những nguyên tắc nổi bật mà ông chia sẻ là “Hãy để người khác nói về bản thân mình”. Điều này nghe có vẻ đơn giản nhưng lại rất hiệu quả. Khi bạn khuyến khích người khác chia sẻ về cuộc sống, suy nghĩ và cảm xúc của họ, bạn không chỉ giúp họ cảm thấy mình được quan tâm mà còn cho họ cơ hội thể hiện bản thân.\r\n\r\nHọ sẽ cảm thấy bản thân mình quan trọng, bởi ai cũng thích được lắng nghe và chia sẻ về mình. Hơn nữa, khi bạn dành thời gian để hiểu người khác qua câu chuyện của họ, bạn có thể xây dựng được mối quan hệ gắn bó hơn, dễ dàng hơn và có được cái nhìn sâu sắc về người đó, từ đó giúp bạn tương tác hiệu quả hơn.\r\n\r\nBên cạnh đó, Carnegie cũng nhấn mạnh “việc lắng nghe một cách chân thành”. Điều này không chỉ là nghe những gì người khác nói mà còn là việc thể hiện sự quan tâm thực sự tới họ.\r\n\r\nKhi bạn lắng nghe một cách chú tâm, không chỉ giúp người đối diện cảm thấy được tôn trọng mà còn tạo cơ hội để bạn hiểu rõ hơn về nhu cầu, mong muốn của họ.\r\n\r\nCarnegie khuyên bạn nên “khen ngợi những điểm mạnh của người khác”. Việc nhận diện và khen ngợi những phẩm chất tích cực hoặc thành tích của người khác giúp họ cảm thấy mình được đánh giá cao và có giá trị.\r\n\r\nKhông chỉ tạo cảm thấy vui vẻ mà còn khuyến khích họ duy trì những hành động và thái độ tích cực. Khi bạn biết cách công nhận những điều tốt đẹp ở người khác, bạn sẽ dễ dàng xây dựng một mối quan hệ hợp tác mạnh mẽ, vì ai cũng muốn được khen ngợi và công nhận những nỗ lực của mình.\r\n\r\n3. Làm thế nào để thay đổi người khác mà không gây phật lòng\r\nCarnegie nhấn mạnh rằng “thay vì chỉ trích, hãy khéo léo đặt câu hỏi để người khác tự nhận ra vấn đề của mình”.\r\n\r\nThay vì chỉ thẳng thắn chỉ ra sai sót của người khác, việc hỏi những câu hỏi giúp họ tự nhận thức được vấn đề sẽ khiến họ không cảm thấy bản thân bị chỉ trích. Họ không bị ép buộc phải thay đổi mà thay vào đó, họ tự giác nhận ra điều cần thay đổi.\r\n\r\nMột ví dụ có thể là thay vì nói “Bạn đã làm sai điều này”, bạn có thể hỏi “Bạn nghĩ sẽ thế nào nếu thử làm theo cách này?” Hoặc thay vì chỉ trích cách làm của ai đó, bạn có thể nhẹ nhàng đưa ra một gợi ý và để họ tự quyết định.\r\n\r\nCách này không chỉ giúp giảm sự phòng thủ mà còn tạo cơ hội cho người đối diện thấy được sự tôn trọng trong cách bạn giao tiếp.\r\n\r\nBên cạnh đó, Carnegie cũng “khuyến khích việc đưa ra lời khích lệ” thay vì chỉ tập trung vào sai lầm. Khi bạn nhận thấy nỗ lực của người khác, dù kết quả chưa hoàn hảo, việc khen ngợi và khích lệ sẽ giúp họ cảm thấy động lực để tiếp tục cải thiện.\r\n\r\nKhi người khác cảm thấy được khích lệ, họ sẽ dễ dàng tiếp nhận lời khuyên và cố gắng thay đổi theo hướng tích cực.\r\n\r\nĐồng thời, “thừa nhận những nỗ lực của người khác” cũng là một cách rất hiệu quả để thay đổi họ mà không gây cảm giác bị xúc phạm. Khi bạn thừa nhận những cố gắng của người khác, họ cảm thấy rằng công sức của họ được đánh giá cao và không vô nghĩa.\r\n\r\nChẳng hạn, thay vì chỉ chỉ ra sai sót, bạn có thể nói: “Tôi thực sự đánh giá cao nỗ lực của bạn trong việc giải quyết vấn đề này, và tôi nghĩ nếu chúng ta thử thêm cách này, bạn sẽ thấy kết quả tốt hơn.”\r\n\r\n4. Làm thế nào để tạo ảnh hưởng lâu dài\r\nMột trong những yếu tố quan trọng để tạo ảnh hưởng lâu dài mà Carnegie nhấn mạnh là “sự tôn trọng và sự đánh giá cao chân thành” đối với những người xung quanh.\r\n\r\nSự tôn trọng này giúp duy trì mối quan hệ trong dài hạn, khi cả hai bên đều cảm thấy được thấu hiểu và được coi trọng.\r\n\r\nCarnegie cho rằng “không nên tranh cãi với người khác, mà hãy luôn tìm cách hòa giải và tìm ra giải pháp chung”. Tranh cãi không bao giờ là cách giải quyết tốt, vì nó chỉ làm tổn hại đến mối quan hệ và gây ra sự căng thẳng không cần thiết.\r\n\r\nThay vì đối đầu, việc hòa giải và tìm kiếm những giải pháp có thể chấp nhận được cho cả hai bên sẽ giúp duy trì môi trường giao tiếp lành mạnh.\r\n\r\nBên cạnh đó, Carnegie cũng khuyến khích việc “làm gương” và thể hiện “sự tích cực trong mọi hành động và lời nói”. Khi bạn là người tích cực, làm gương trong công việc và cuộc sống, bạn sẽ tạo ra sức ảnh hưởng sâu rộng và lâu dài đối với những người xung quanh.\r\n\r\nNhững hành động tích cực này sẽ không chỉ giúp bạn thu hút sự chú ý của người khác mà còn tạo động lực cho họ học hỏi và thay đổi theo hướng tốt hơn.\r\n\r\nGiá trị cuốn sách “Đắc Nhân Tâm” mang lại\r\nTư duy thay đổi trong giao tiếp: Một trong những giá trị quan trọng mà “Đắc Nhân Tâm” mang lại là tư duy thay đổi trong giao tiếp. Cuốn sách không chỉ giúp bạn hiểu về cách thức giao tiếp hiệu quả mà còn giúp bạn nhận thức rõ ràng hơn về những nguyên tắc cơ bản của việc xây dựng mối quan hệ.\r\n\r\nDale Carnegie khuyến khích người đọc thay đổi cách nhìn nhận và hành động, từ việc đặt mình vào vị trí của người khác đến việc thể hiện sự quan tâm và tôn trọng.\r\n\r\nỨng dụng trong công việc và cuộc sống: “Đắc Nhân Tâm” không chỉ hữu ích trong các mối quan hệ xã hội mà còn trong môi trường công việc. Các nguyên tắc trong sách có thể được áp dụng để cải thiện khả năng lãnh đạo, thuyết phục khách hàng, xây dựng mối quan hệ với đồng nghiệp và đối tác.\r\n\r\nCuốn sách giúp bạn học cách giao tiếp với mọi người một cách khéo léo, tránh xung đột và đạt được kết quả tốt trong công việc.\r\n\r\nThực hành và tự cải thiện: Một trong những điều tuyệt vời của “Đắc Nhân Tâm” là sự dễ tiếp cận và dễ áp dụng. Mỗi nguyên tắc đều được minh họa bằng những câu chuyện thực tế, giúp người đọc dễ dàng hình dung và thực hành. \r\n\r\nVì sao đến bây giờ, “Đắc Nhân Tâm” vẫn có sức ảnh hưởng mạnh mẽ\r\nMặc dù “Đắc Nhân Tâm” đã được xuất bản hơn 80 năm, nhưng những nguyên tắc mà Dale Carnegie chia sẻ vẫn luôn là kim chỉ nam cho nhiều thế hệ người đọc. Lý do chính là bởi cuốn sách không chỉ dạy về kỹ năng giao tiếp mà còn nhấn mạnh sự quan trọng của việc xây dựng mối quan hệ với lòng chân thành và sự tôn trọng.\r\n\r\nNhững nguyên tắc này vượt thời gian và có thể áp dụng ở mọi lĩnh vực trong cuộc sống, từ công việc cho đến các mối quan hệ cá nhân.\r\n\r\nMột số trích dẫn hay trong “Đắc Nhân Tâm”\r\n“Hãy nhớ rằng tên của một người là âm thanh ngọt ngào nhất đối với họ.”\r\n\r\n“Không ai có thể làm bạn cảm thấy thấp kém nếu không có sự đồng ý của bạn.”\r\n\r\n“Hãy làm cho người khác cảm thấy họ quan trọng, và bạn sẽ có được trái tim của họ.”\r\n\r\n“Hãy cho người khác thấy họ quan trọng, và làm điều đó một cách chân thành.”\r\n\r\n“Những thứ bạn có, bạn là ai, bạn ở đâu hay bạn đang làm gì không phải những điều làm nên hạnh phúc, mà là ở cách suy nghĩ của bạn.”\r\n\r\n“Đừng sợ những kẻ thù tấn công bạn. Hãy cẩn thận những người nịnh hót bạn.”\r\n\r\n“Chúng ta không nên kết án người khác để chính mình không bị kết án.”\r\n\r\n“Sự quan tâm chân thành đến người khác sẽ tạo ra phép màu.”\r\n\r\n“Nếu như có một bí quyết nào để thành công, thì nó nằm ở khả năng hiểu và thông cảm với quan điểm của người khác.”\r\n\r\n“Bạn chỉ cần có thái độ vui vẻ khi tiếp xúc với mọi người nếu bạn muốn họ cũng có ý nghĩ tương tự.”\r\n\r\n“Để xua tan một nỗi buồn, cách tốt nhất là hãy mỉm cười.”\r\n\r\n“Chúng ta sẽ không bao giờ thuyết phục được ai làm điều gì mà họ không muốn, trừ khi chúng ta biết cách đặt mình vào vị trí của họ.”\r\n\r\nLời kết\r\n“Đắc Nhân Tâm” của Dale Carnegie là cuốn sách vượt thời gian với những nguyên tắc thiết thực và dễ áp dụng trong giao tiếp và xây dựng mối quan hệ. Những bài học trong sách không chỉ giúp bạn hiểu rõ hơn về cách làm việc với người khác mà còn tạo nền tảng cho những mối quan hệ bền vững và thành công. ', 'dac-nhan-tam.jpg', 1, '2025-01-01 16:07:09', '2025-01-02 16:07:09', 'Sách hay'),
(5, 'Review sách “Người Đàn Ông Mang Tên Ove” –  câu chuyện cảm động về tình yêu và sự thấu hiểu', 'review-sach-nguoi-dan-ong-mang-ten-ove-cau-chuyen-cam-dong-ve-tinh-yeu-va-su-thau-hieu', 'Cuốn sách “Người Đàn Ông Mang Tên Ove” của tác giả Fredrik Backman kể về Ove người đàn ông già nua, khó tính cộc cằn và không còn niềm vui nào trong cuộc sống. Sự xuất hiện của những người hàng xóm mới, cùng những sự kiện bất ngờ, dần dần khiến Ove thay đổi cách nhìn về thế giới xung quanh và bản thân. Tác phẩm không chỉ là câu chuyện về tình bạn, tình yêu mà còn phản ánh những giá trị về sự tha thứ và lòng kiên nhẫn trong cuộc sống.\r\n\r\nCuốn sách được viết bởi Fredrik Backman, một tác giả nổi tiếng người Thụy Điển, và đã nhanh chóng chiếm được cảm tình của độc giả trên toàn thế giới. Tác phẩm không chỉ thành công ở Thụy Điển mà còn được dịch ra nhiều ngôn ngữ và trở thành hiện tượng toàn cầu.Ove – người đàn ông cứng nhắc trong một thế giới đang thay đổi\r\n\r\nHình ảnh cuốn sách\r\n(nguồn: NetaBooks)\r\nOve xuất hiện từ những trang sách đầu, qua miêu tả là một người đàn ông 59 tuổi lúc nào cũng cứng nhắc, cộc cằn, khó chịu với mọi thứ xung quanh và vô cùng nguyên tắc.\r\n\r\nMọi thứ trong cuộc sống của ông đều phải theo một trật tự rõ ràng: từ giờ giấc, công việc cho đến những mối quan hệ xã hội. Cuộc sống của ông dường như bị giam cầm trong một lối mòn không thể thay đổi, với những thói quen cũ kỹ và một thế giới không còn chỗ cho sự mới mẻ. \r\n\r\nSau khi về hưu tại nơi mình đã làm việc gần như suốt cả cuộc đời cùng cái chết của người vợ yêu dấu Sonja – nguồn an ủi duy nhất trong cuộc sống của ông, Ove cảm thấy mất hết sinh lực và lý do để có thể tiếp tục sống.\r\n\r\nNhư một bản nhạc buồn buồn lướt qua cuộc đời ông, khiến ông thấy mình như một chiếc bóng, tẻ nhạt và vô nghĩa trên thế gian này .\r\n\r\nOve thấy rằng cái chết là lối thoát duy nhất mà ông có thể tìm đến bên người vợ trân quý của mình nhưng ông không biết rằng cuộc sống vẫn có những bất ngờ đợi chờ phía trước.\r\n\r\nTrong mắt Ove, thế giới dường như đã sụp đổ kể từ khi Internet và chủ nghĩa tiêu dùng xâm nhập và phát triển rộng rãi.\r\n\r\nÔng cho rằng, thời đại này khiến đám đàn ông trở nên “Ba hoa, tự cho mình là hiểu biết mà chẳng làm nên trò trống gì, chăm chút hình thức bề ngoài, thay đổi công việc, vợ con và ô tô như thay áo”, bởi lẽ đối với Ove “giá trị của một người đàn ông không nằm ở những lời nói, mà chính là hành động và việc làm thực tế của anh ta.”\r\n\r\nThế nên với những sự thay đổi của lối sống và phong cách sống của thế hệ mới, ông Ove không khỏi trăn trở và đặt ra câu hỏi khiến chúng ta – người đọc cũng phải dừng lại để suy ngẫm: “Nếu mọi thứ đều có thể mua bằng tiền, vậy thì cái gì mới thật sự có giá trị? Con người, rốt cuộc, có giá trị gì?”\r\n\r\nVà điều khiến ông càng bối rối hơn đó là sự bận tâm của những người trẻ, những người luôn trên hành trình khai phóng và tìm kiếm bản thân.\r\n\r\nNhững người đồng nghiệp ngoài ba mươi tuổi của ông suốt ngày mơ màng rằng họ cần “nhiều thời gian rảnh hơn”, như thể mục tiêu duy nhất trong công việc là đạt đến lúc không còn phải làm gì nữa.\r\n\r\nKế hoạch tự sát và những cuộc gặp gỡ bất ngờ\r\n\r\n(nguồn: Internet)\r\nTrước những đau buồn trước sự ra đi của người vợ yêu dấu của mình, Ove quyết tâm thực hiện kế hoạch kết thúc cuộc đời, nhưng ông không ngờ rằng mỗi lần ông định từ bỏ, lại có những con người và những sự trùng hợp trớ trêu làm gián đoạn những suy nghĩ bi quan của ông. \r\n\r\nOve đã chuẩn bị rất kỹ lưỡng cho cái chết của mình: từ việc chọn sợi dây thừng chắc chắn cho đến việc lên lịch cho chuyến tàu và mua sẵn mảnh đất bên cạnh mộ Sonja, ông còn viết di chúc và sắp xếp mọi thứ chu toàn.\r\n\r\nTuy nhiên, không có điều gì trong kế hoạch của ông là được thuận lợi, do sự xuất hiện của những hàng xóm mà ông cho là “không thể chấp nhận được”. Khi Ove treo cổ mình, sợi dây thừng lại bị đứt.\r\n\r\nKhi ông định nhảy vào đường ray tàu hỏa, một người đàn ông khác bất ngờ ngã xuống, buộc Ove phải cứu anh ta trước. Tiếp theo, khi Ove chuẩn bị tự sát bằng khói từ xe ô tô, một người khác lại xin đi nhờ đến bệnh viện cấp cứu. Cuối cùng, khi ông cầm súng kề vào thái dương, một người vô gia cư gõ cửa xin tá túc.\r\n\r\nCuộc sống của Ove trở nên phức tạp hơn khi những rắc rối từ hàng xóm ập đến, họ làm ông khó chịu chưa đủ mà còn liên tục làm thất bại các nỗ lực tự sát của Ove, cho đến khi lòng mong muốn được chết của ông phải thay đổi vì những mối quan hệ mới này.\r\n\r\nNhững người hàng xóm xung quanh ông đều mang một câu chuyện khác nhau có dí dỏm, hài hước, có đau khổ đẫm nước mắt.  Ông phải đối mặt với một cặp vợ chồng trẻ có hai cô con gái hay làm mọi chuyện rối tung lên, một người bạn già mất trí nhớ và là kẻ thù không đội trời chung với nhau và một thanh niên đồng tính bỏ nhà ra đi vì những định kiến và phản đối gay gắt từ gia đình mình. \r\n\r\nNhững phiền toái này không chỉ làm gián đoạn kế hoạch tự sát của Ove mà còn dần dần kéo ông ra khỏi sự cô đơn, làm ông mở lòng ra với họ, an ủi và giúp đỡ họ.\r\n\r\nĐặc biệt, một khoảnh khắc xúc động và đẹp đẽ nhất khiến trái tim khô cằn của Ove trở nên ấm áp khi cô bé hàng xóm gọi ông là “ông ngoại”, khiến ông như được an ủi bởi tình yêu thương của cô bé.\r\n\r\nHành trình tràn ngập tình yêu thương và cuộc hành trình khám phá bản thân của Ove \r\n\r\n(nguồn: Internet)\r\nOve không ngờ rằng những mối quan hệ bất ngờ rắc rối đến từ những người hàng xóm của mình lại có thể tác động mạnh mẽ đến cuộc sống của ông nhiều đến thế.\r\n\r\nTrong đó phải kể đến tình bạn hài hước, cảm động với Rune – người hàng xóm giàu có, ban đầu giữa họ là đối thủ, kẻ thù không đội trời chung với nhau, luôn có những cuộc đụng độ nảy lửa giữa hai người họ,  nhưng rồi từ những tình huống trớ trêu đó, cả hai lại trở thành bạn, một tình bạn kỳ lạ mà chính ông cũng không thể ngờ tới. \r\n\r\nHọ cùng nhau chia sẻ những ký ức đau thương, những nỗi buồn và những bất công của cuộc đời. Dần dần, Ove nhận ra rằng, trong thế giới này, có những điều không thể kiểm soát, nhưng có một thứ luôn ở lại – đó chính là tình người.\r\n\r\nNhững mối quan hệ này không chỉ làm cho Ove thay đổi, mà còn giúp ông nhận ra rằng, trong từng giây phút tẻ nhạt của cuộc sống, chính tình yêu và sự đồng cảm là những thứ có thể làm cho cuộc đời có ý nghĩa.\r\n\r\nTình yêu sẽ là liều thuốc ấm áp chữa lành chúng ta nhiều nhất \r\n\r\n(nguồn: Internet)\r\nNhư những đoạn giới thiệu trên đã đề cập, tình yêu của Ove dành cho Sonja không chỉ là một tình cảm đơn thuần, mà là nguồn sống và là động lực giúp ông vượt qua những thử thách của cuộc đời.\r\n\r\nSau khi Sonja qua đời, Ove cảm thấy như mình bị bỏ lại trong một thế giới lạnh lẽo và trống rỗng. Đối với mọi người, Ove là người cộc cằn, kỳ quặc, khó gần và vô cùng sắc bén, nhưng chỉ có Sonja mới nhìn thấy được nội tâm ấm áo, trái tim tràn đầy yêu thương cùng lòng tốt bụng ẩn sâu trong lớp gai xù xì của Ove. \r\n\r\nOve và Sonja là hai con người gần như đối lập hoàn toàn, cả về tính cách lẫn sở thích. Ove với tính cách cộc cằn, nghiêm khắc và khó gần, đại diện cho hình ảnh một người đàn ông khó chịu.\r\n\r\nTrái ngược với ông là Sonja – người luôn toát lên sự ấm áp, hiền dịu và thân thiện, dễ dàng chiếm được cảm tình của những người xung quanh. Sonja yêu thích động vật, đặc biệt là chó mèo, trong khi Ove lại sẵn sàng đuổi bất kỳ con mèo hoang nào bén mảng vào nhà.\r\n\r\nSonja thích sự nhẹ nhàng của sách vở, còn Ove lại thích tính toán và những con số. Sonja mong muốn được ra ngoài để trải nghiệm và khám phá thế giới, còn Ove không thể hiểu nổi lý do tại sao phải chi tiền để ăn ngoài hay ngủ ở khách sạn khi tất cả đều có thể làm ở nhà.\r\n\r\n\r\n(nguồn: Internet)\r\nTuy nhiên, sự khác biệt ấy lại không làm Sonja rời xa Ove. Bà hiểu rằng, dưới vẻ ngoài cứng rắn và khô khan của Ove là một trái tim chân thành, đầy tình nghĩa và luôn hướng về điều đúng đắn.\r\n\r\nVới Sonja, Ove không bao giờ là người nghiêm khắc hay lạnh lùng. Ông là hình ảnh của sự vững chãi, sự an toàn mà bà cần. Mặc dù Ove không thể làm thơ hay tặng bà những món quà đắt tiền, nhưng ông lại luôn ở đó, luôn làm cho bà những điều nhỏ nhặt như đóng những chiếc kệ sách, sơn lại căn phòng yêu thích của bà mỗi nửa năm.\r\n\r\nVà dù cho đôi khi có những cuộc cãi vã, Sonja luôn biết cách làm dịu mọi thứ, chỉ với một nụ cười hay một cử chỉ âu yếm. Mối quan hệ của họ, dù không thiếu những khoảnh khắc căng thẳng, lại luôn được hàn gắn bằng tình yêu thương, sự thấu hiểu và bao dung.\r\n\r\nNhiều năm sau khi Sonja qua đời, Ove vẫn nhớ bà trong những chi tiết nhỏ nhất mà bà để lại cho ông như nụ cười hay cách bà nằm ngủ  và điều đó đã chứng tỏ rằng tình yêu giữa họ không bao giờ phai nhạt, dù thời gian có trôi đi. Tình yêu, đối với Ove là điều kỳ diệu, là cầu nối giữa hai con người tưởng chừng không thể hòa hợp.\r\n\r\nTừ trang sách đến đề cử giải Oscar \r\n\r\n(nguồn: Internet)\r\nVới sức hút mạnh mẽ của mình tại quê nhà, bộ phim được chuyển thể cùng tên đã ra mắt khán giả Thụy Điển.\r\n\r\nTrước phiên bản Hollywood vào năm 2016, bộ phim gốc của đạo diễn Thụy Điển Hannes Holm, chuyển thể từ tiểu thuyết của Fredrik Backman, đã trở thành một cú hit tại đây.\r\n\r\nThành công đã giúp bộ phim trở thành phim nước ngoài có doanh thu cao nhất tại Mỹ, giành giải Phim hài châu Âu và nhận được hai đề cử Oscar vào năm 2017, cho hạng mục Phim quốc tế và Hóa trang xuất sắc nhất.\r\n\r\nVào đầu năm 2023, phiên bản làm lại của Hollywood với tên gọi “A Man Called Otto” do Tom Hanks đóng vai chính và sản xuất cũng đã đạt được thành công về doanh thu và được khán giả yêu mến.\r\n\r\nNhững sáng tạo và điều chỉnh trong bản Hollywood, đặc biệt qua diễn xuất của Tom Hanks, đã khiến nhân vật Otto trở nên gần gũi và thuyết phục hơn đối với công chúng, nhờ vào những giá trị sống vì cộng đồng và tình yêu sâu sắc dành cho vợ mà Hanks cũng chia sẻ với nhân vật của mình.\r\n\r\nTriết lý nổi bật và thông điệp ý nghĩa của tác phẩm:\r\nCuốn sách phản ánh thông điệp về lòng kiên nhẫn, tình yêu thương và sự tha thứ. Dù cuộc sống có khó khăn đến đâu, những mối quan hệ chân thành và tình cảm con người có thể giúp ta tìm thấy ý nghĩa và hy vọng.\r\n\r\nFredrik Backman sử dụng lối viết đơn giản nhưng sâu sắc, kết hợp giữa hài hước và cảm động. Ông tạo dựng một không gian sống động với những nhân vật đa dạng và những tình huống đầy kịch tính. Kể chuyện theo góc nhìn của Ove, Backman đã khéo léo xây dựng sự chuyển biến trong tâm lý nhân vật, từ một người đàn ông khó gần thành một người đầy lòng trắc ẩn.\r\n\r\nCuốn sách mang lại nhiều bài học nhân văn sâu sắc về cuộc sống, tình bạn, và tình yêu thương. Nó cũng chứng minh rằng dù cuộc sống có khó khăn, con người luôn có khả năng thay đổi và mở lòng với thế giới xung quanh.\r\n\r\nThành công của “Người đàn ông mang tên Ove” không chỉ đến từ câu chuyện xúc động mà còn từ việc tác phẩm được chuyển thể thành phim và nhận được nhiều giải thưởng danh giá.\r\n\r\nTrích dẫn ấn tượng\r\nVà thời gian cũng là một thứ kỳ lạ. Hầu hết chúng ta chỉ sống vì khoảng thời gian còn lại phía trước. Vài ngày, vài tuần, vài năm. Một trong những khoảnh khắc đau đớn nhất trong cuộc đời một con người là khi anh ta nhận ra mình đã đến cái tuổi có nhiều thứ ở sau lưng hơn là trước mặt. Và khi thời gian không còn nhiều phía trước, người ta sống vì những thứ khác. Những ký ức chẳng hạn…\r\nNgười ta tìm cách sống vì tương lai của ai đó khác. Không phải Ove cũng chết khi Sonja bỏ ông mà đi. Ông chỉ thôi không sống nữa. \r\nSự đau buồn là một thứ lạ lùng.\r\nYêu một người cũng giống như dọn tới một ngôi nhà. Lúc đầu ta phải lòng nó vì sự mới mẻ. Mỗi buổi sáng ta ngỡ ngàng tự hỏi liệu tất cả có thuộc về mình hay không như thể sợ ai đó sẽ đột nhiên xông vào nhà và bảo rằng đã có một sai sót nghiêm trọng và lẽ ra ta không được ở một nơi tuyệt vời như thế này. \r\nThế rồi năm tháng trôi qua, tường nhà bắt đầu xuống màu, lớp gồ rạn nứt dần và ta bắt đầu cảm thấy yêu ngôi nhà này bởi những khiếm khuyết của nó hơn là vì những điểm hoàn hảo. Ta thuộc tất cả mọi ngóc ngách xó xỉnh trong nhà. Ta biết làm thế nào để chìa khóa không kẹt lại trong ổ khi ngoài trời đang lạnh, tấm ván sàn nào bị võng xuống khi có người bước lên và cách mở tủ áo sao cho nó không kêu cọt kẹt. Chính những bí mật nho nhỏ ấy mới là thứ biến ngôi nhà thành một tổ ấm.\r\nĐối tượng phù hợp và lời khuyên đọc sách\r\nCuốn sách phù hợp với những người yêu thích những câu chuyện về cuộc sống, nhân văn và sự thay đổi bản thân. “Người Đàn Ông Mang Tên Ove” là một tác phẩm về lòng kiên nhẫn, tình bạn, và sự tha thứ.\r\n\r\nĐây là cuốn sách lý tưởng để bạn tìm lại niềm tin vào con người và sự thay đổi tích cực. Đặc biệt, cuốn sách này có thể là nguồn động lực cho những ai cảm thấy mệt mỏi và cần một chút ánh sáng trong cuộc sống.', 'ove.jpg', 1, '2025-01-03 16:07:57', '2025-01-07 16:07:57', 'Sách hay'),
(6, 'Cô đơn là môn học bắt buộc của cuộc đời, những trích đoạn chiêm nghiệm về sự trưởng thành qua sách “Trong cô đơn bất ngờ gặp phiên bản tốt hơn của chính mình”', 'co-don-la-mon-hoc-bat-buoc-cua-cuoc-doi-nhung-trich-doan-chiem-nghiem-ve-su-truong-thanh-qua-sach-trong-co-don-bat-ngo-gap-phien-ban-tot-hon-cua-chinh-minh', '“Trong Cô Đơn Bất Ngờ Gặp Phiên Bản Tốt Hơn Của Chính Mình” là một tác phẩm đầy cảm xúc của Tả Tiểu Kỳ, một nhà thơ và nhà văn trẻ thuộc thế hệ 9x đến từ Trung Quốc. Cuốn sách chạm đến một khía cạnh sâu kín trong tâm hồn mỗi người, đặc biệt là những người trẻ đang trên hành trình trưởng thành: sự cô đơn. Tác phẩm không chỉ đơn thuần nói về nỗi cô đơn, mà còn là một hành trình chữa lành, tự khám phá và tìm kiếm phiên bản tốt đẹp nhất của chính mình.Đặc trưng của tác phẩm:\r\nTập trung vào trải nghiệm cô đơn và quá trình vượt qua nó: Cuốn sách khai thác sâu sắc cảm giác cô đơn – một trạng thái phổ biến trong xã hội hiện đại, đặc biệt là ở giới trẻ. Nó không chỉ miêu tả những biểu hiện của cô đơn mà còn tập trung vào quá trình tự chữa lành và tìm kiếm phiên bản tốt hơn của chính mình trong chính sự cô đơn đó.\r\nKết hợp giữa tự sự, tản văn và yếu tố self-help: Sách mang đậm tính tự sự, chia sẻ những trải nghiệm cá nhân của tác giả hoặc những câu chuyện được quan sát. Đồng thời, nó cũng mang dáng dấp của tản văn, ghi lại những suy nghĩ, cảm xúc về cuộc sống. Yếu tố self-help được thể hiện qua những bài học, lời khuyên về cách đối diện và vượt qua cô đơn.\r\nNgôn ngữ gần gũi, chân thành, giàu cảm xúc: Tác giả sử dụng ngôn ngữ giản dị, gần gũi, dễ hiểu, như đang trò chuyện với người đọc. Đồng thời, giọng văn cũng giàu cảm xúc, chạm đến những góc khuất trong tâm hồn người đọc.\r\nGóc nhìn đa chiều về cô đơn: Cuốn sách không chỉ nhìn nhận cô đơn như một trạng thái tiêu cực mà còn khám phá những mặt tích cực của nó, chẳng hạn như khoảng thời gian để tự nhìn nhận, phát triển bản thân.\r\n\r\n\r\nTại sao nên đọc “Trong Cô Đơn Bất Ngờ Gặp Phiên Bản Tốt Hơn Của Chính Mình”?\r\nTìm thấy sự đồng cảm và thấu hiểu: Những câu chuyện, những trải nghiệm được chia sẻ trong sách sẽ giúp người đọc cảm thấy được đồng cảm và thấu hiểu.\r\nHiểu rõ hơn về bản chất của cô đơn: Cuốn sách giúp hiểu rõ hơn về nguồn gốc, những biểu hiện và ảnh hưởng của cô đơn đến cuộc sống.\r\nHọc được cách đối diện và vượt qua cô đơn: Sách cung cấp những lời khuyên, những bài học hữu ích về cách đối diện với cô đơn một cách tích cực, biến nó thành động lực để phát triển bản thân.\r\nKhám phá và phát triển bản thân: Khoảng thời gian cô đơn có thể là cơ hội để mỗi người nhìn lại chính mình, khám phá những tiềm năng và phát triển bản thân.\r\nTìm thấy sự bình yên và hạnh phúc trong chính mình: Cuốn sách hướng đến việc giúp người đọc tìm thấy sự bình yên và hạnh phúc từ bên trong, không phụ thuộc vào những yếu tố bên ngoài.\r\nNhững trích đoạn hay trong “Trong Cô Đơn Bất Ngờ Gặp Phiên Bản Tốt Hơn Của Chính Mình”\r\nCô đơn là môn học bắt buộc của cuộc đời, không ai có thể trải qua thay bạn cả. Mong rằng mỗi chúng ta đều sẽ trở thành ánh dương của chính mình, rực rỡ chẳng vương sầu bi.\r\nKỳ thực, có một trò chơi không bao giờ suy tàn, cho dù trải qua bao nhiêu biến cố thăng trầm, nó vẫn sẽ bầu bạn với bạn đến cùng, đó chính là cuộc đời bạn.\r\nKhi cần trưởng thành, tự khắc bạn sẽ biết cách đối mặt với cuộc sống hiện tại. Hãy cứ cười chân thành, khóc chân thành, sống thật với lòng mình. Mỗi chúng ta đều là những cá thể độc nhất, đến lúc cần lựa chọn sẽ tự khắc biết nắm chắc phương hướng cuộc đời của chính mình.\r\nCô đơn là trạng thái bình thường của cuộc sống, đồng thời cũng là con đường mà mọi người bắt buộc phải trải qua trong quá trình trưởng thành. Vì vậy, học cách ở một mình nên là năng lực không thể thiếu trên bước đường trưởng thành của mỗi người.\r\n\r\n\r\nTôi luôn cảm thấy rằng thà ở một mình còn hơn là giả vờ tươi cười, những cuộc xã giao chất lượng thấp không bao giờ tốt bằng nỗi cô độc chất lượng cao.\r\nBởi vì chỉ khi sống thật với chính mình, bạn mới có thể khiến bản thân trở nên độc nhất vô nhị, không thể thay thế.\r\nNhân sinh dài đằng đẵng, phiên bản tốt nhất của chính mình nên dành cho người hiểu mình mà thôi.\r\nThực ra, mỗi năm tháng thanh xuân đều có khoảnh khắc rực rỡ lẫn đau thương, cho dù từng thương tích đầy mình, song nỗi đau trưởng thành đó chính là trải nghiệm tuyệt vời nhất của bạn. \r\n\r\n\r\nNhân lúc bạn chưa già, nhân lúc dư dả thời gian, hãy làm những việc mình muốn làm, gặp người mình muốn gặp, tới nơi mình muốn tới, viết những gì mình muốn viết.\r\nTrong nỗi cô đơn ẩn chứa một sức mạnh bí ẩn, nó có thể khiến bạn thay da đổi thịt. Vì vậy học cách ở một mình nên là năng lực không thể thiếu trên bước đường trưởng thành của mỗi người. \r\nNhững người sở hữu tư duy độc lập chắc chắn đều cô đơn, song chắc chắn cũng hạnh phúc. Bởi, cô đơn là trạng thái mà những người hạnh phúc lấy làm tự hào. Họ không chạy theo đám đông, không ghen tị, không bị thế giới ồn ào quấy nhiễu nội tâm; thay vào đó, họ có thể khoan thai sắp xếp thời gian của bản thân và sống theo cách mình thích.', 'co-don.jpg', 1, '2025-01-02 16:08:09', '2025-01-06 16:08:09', 'Sách hay'),
(7, 'Bé vui chơi – Mẹ an tâm: Gợi ý đồ chơi cho bé tha hồ sáng tạo', 'be-vui-choi-me-an-tam-goi-y-do-choi-cho-be-tha-ho-sang-tao', 'Bé 0-12 tháng tuổi\r\nDành cho những nhóc 0-12 tháng tuổi, có một loạt đồ chơi hấp dẫn và phát triển, giúp bé khám phá thế giới xung quanh một cách an toàn và thú vị:\r\n\r\nBập bênh: Một chiếc bập bênh mềm mại với màu sắc sáng và âm thanh nhẹ nhàng sẽ là một điểm nhấn hoàn hảo trong phòng của bé. Khi bé chạm vào và chuyển động, âm thanh nhẹ nhàng từ bập bênh sẽ kích thích thị giác và thính giác của bé, giúp bé phát triển các giác quan một cách tự nhiên và vui vẻ.\r\nLục lạc: Các quả lục lạc sáng màu và vui nhộn sẽ khiến bé phấn khích không ngừng. Khi bé vỗ, lắc hoặc di chuyển quả lục lạc, âm thanh vui nhộn sẽ xuất hiện, kích thích bé tập trung và phát triển kỹ năng vận động thô. Đồ chơi này cũng giúp bé hiểu được quan hệ giữa hành động và phản ứng.\r\nThú nhồi bông: Một chú thú nhồi bông mềm mại và đáng yêu là bạn đồng hành lý tưởng của bé trong những giờ nghỉ ngơi. Bé có thể ôm, vuốt ve và khám phá các chi tiết trên thú nhồi bông, giúp bé cảm thấy an toàn và thoải mái. Đồ chơi này cũng có thể trở thành người bạn đồng hành đáng yêu trong giấc ngủ của bé.\r\nThảm chơi: Một chiếc thảm chơi màu sắc sáng tạo sẽ tạo ra không gian an toàn cho bé khám phá và vận động. Bé có thể nằm trên thảm, vỗ, chạm vào các hình vẽ và cảm nhận các cảm xúc khác nhau từ các hình ảnh. Thảm chơi cũng là nơi bé có thể tạo ra những trải nghiệm mới và phát triển các kỹ năng cơ bản một cách tự nhiên.\r\n\r\n\r\nBé 1-3 tuổi\r\nDành cho những bé từ 1 đến 3 tuổi, có một loạt đồ chơi thú vị và phát triển, giúp bé phát triển kỹ năng và khám phá thế giới xung quanh một cách sáng tạo:\r\n\r\nXe tập đi: Xe tập đi là một đồ chơi tuyệt vời để bé rèn luyện kỹ năng điều khiển cơ thể và cân bằng. Khi bé điều khiển xe, bé sẽ học cách duy trì sự cân bằng và điều khiển hành động của mình, từ đó phát triển cả kỹ năng vận động và tự tin.\r\nBóng tập gym: Bóng tập gym có những hình ảnh sáng tạo và âm nhạc vui nhộn, làm cho việc vận động trở nên thú vị hơn bao giờ hết. Khi bé chạm vào bóng, bé sẽ được kích thích vận động tinh, cải thiện khả năng tự tin và phát triển kỹ năng tư duy.\r\nKhối xếp hình: Khối xếp hình với đa dạng màu sắc và hình dáng giúp bé phát triển tư duy không gian và khả năng xếp hình. Bé có thể sáng tạo và xây dựng những công trình, từ những tháp cao tới những hình dạng độc đáo, giúp bé rèn luyện tư duy logic và sự sáng tạo.\r\nSách vải: Sách vải với hình ảnh sinh động và chất liệu an toàn là nguồn cảm hứng tuyệt vời cho bé khám phá thế giới xung quanh và phát triển ngôn ngữ. Bé có thể ngắm nhìn hình ảnh, nghe câu chuyện và thậm chí cảm nhận các chất liệu khác nhau trên sách, giúp bé phát triển ngôn ngữ và khám phá sở thích mới.\r\n\r\n\r\nBé 3-5 tuổi\r\nDành cho các bé từ 3 đến 5 tuổi, có một loạt đồ chơi phong phú và hấp dẫn, giúp bé phát triển tư duy và khám phá thế giới xung quanh một cách sáng tạo:\r\n\r\nBúp bê: Bé có thể sáng tạo câu chuyện và kịch bản mới với búp bê, từ việc tổ chức bữa tiệc cho đến việc thực hiện các cuộc phiêu lưu độc đáo. Đồ chơi này giúp bé phát triển trí tưởng tượng, kỹ năng giao tiếp và khả năng xây dựng các mối quan hệ xã hội.\r\nBộ đồ chơi nấu ăn: Bé có thể thể hiện sự sáng tạo thông qua việc chế biến và phục vụ các món ăn giả mạo. Việc chơi với bộ đồ chơi nấu ăn không chỉ giúp bé rèn luyện kỹ năng nấu nướng mà còn khuyến khích sự sáng tạo và trải nghiệm với các hương vị và nguyên liệu khác nhau.\r\nBộ dụng cụ bác sĩ: Bé có thể hóa thân thành bác sĩ, chăm sóc và điều trị cho các “bệnh nhân” của mình. Đồ chơi này giúp bé hiểu biết về sức khỏe và y tế, đồng thời phát triển kỹ năng xã hội thông qua việc tương tác với bạn bè và người chơi khác.\r\nĐồ chơi xây dựng: Bộ đồ chơi xây dựng là một công cụ tuyệt vời để bé thể hiện sự sáng tạo và kiên nhẫn. Bé có thể xây dựng các công trình từ những khối xếp hình, từ những ngôi nhà đơn giản đến những thành phố phức tạp. Qua việc chơi đồ chơi này, bé rèn luyện kỹ năng tư duy logic, khả năng giải quyết vấn đề và kiên nhẫn.\r\n\r\n\r\nBé trên 5 tuổi\r\nDành cho các bé từ 3 đến 5 tuổi, có một loạt đồ chơi phong phú và hấp dẫn, giúp bé phát triển tư duy và khám phá thế giới xung quanh một cách sáng tạo:\r\n\r\nLego: Lego không chỉ là một trò chơi vui nhộn mà còn là một công cụ giáo dục hữu ích. Bé có thể xây dựng những cấu trúc phức tạp từ những khối xếp hình Lego, từ những tòa nhà đến những con thú, giúp bé phát triển tư duy logic và sáng tạo.\r\nTrò chơi boardgame: Boardgame là cách tuyệt vời để cả gia đình tận hưởng những khoảnh khắc thú vị cùng nhau. Bé có thể tham gia vào các trò chơi như Cờ Caro, Monopoly, hoặc các trò chơi hợp tác khác, giúp bé rèn luyện kỹ năng tương tác xã hội, quản lý thời gian và khả năng giải quyết vấn đề.\r\nSách tranh: Sách tranh không chỉ là nguồn cảm hứng vô tận mà còn là cầu nối giữa bé và thế giới văn hóa. Bé có thể khám phá những câu chuyện kỳ thú, học hỏi về các giá trị đạo đức và phát triển khả năng ngôn ngữ cũng như tư duy logic thông qua việc đọc sách.\r\n\r\n\r\nNhư vậy, từ những đồ chơi dành cho các bé từ 0-12 tháng tuổi đến các bé trên 5 tuổi, chúng tôi hy vọng rằng bạn đã tìm thấy những gợi ý hữu ích để giúp bé vui chơi thỏa thích và phát triển toàn diện. Đừng quên rằng việc chọn lựa đồ chơi phù hợp không chỉ là để bé vui chơi mà còn là để hỗ trợ cho sự phát triển của bé một cách tự nhiên và toàn diện. Hãy dành thời gian để chơi cùng bé và tận hưởng những khoảnh khắc đáng nhớ cùng nhau!\r\n\r\nGhé nhà sách PHPCRAFT – thế giới của đồ chơi giáo dục để sắm cho bé yêu của bạn những món đồ chơi an toàn và chất lượng với giá ưu đãi nhất!', 'me-va-be.jpg', 1, '2025-01-01 16:08:22', '2025-01-05 16:08:22', 'Sách thiếu nhi'),
(8, 'Bí Quyết Giúp Bé Phát Triển Toàn Diện Nhờ Các Món Đồ Chơi Thông Minh', 'bi-quyet-giup-be-phat-trien-toan-dien-nho-cac-mon-do-choi-thong-minh', '1. Bộ bảng chữ cái tương tác\r\nBộ bảng chữ cái tương tác là món đồ chơi giáo dục hiện đại, tích hợp nhiều tính năng giúp bé học chữ một cách thú vị và hiệu quả. Bảng chữ cái được thiết kế với các chữ cái đầy màu sắc, âm thanh vui tai và các trò chơi tương tác, thu hút sự chú ý của bé ngay từ lần đầu tiên nhìn thấy.\r\n\r\nLợi ích:\r\n\r\nKích thích nhận thức và logic: Bé được khám phá và nhận biết các chữ cái, học cách phát âm và ghép từ một cách logic và hệ thống. Quá trình này không chỉ giúp bé nhớ chữ cái mà còn phát triển khả năng tư duy logic của trẻ.\r\nPhát triển kỹ năng vận động tinh: Thao tác các nút bấm, di chuyển các thanh trượt trên bảng chữ cái giúp bé rèn luyện kỹ năng vận động tinh và cải thiện sự phối hợp giữa tay và mắt của bé.\r\nKhuyến khích sự sáng tạo: Bé có thể tự do sáng tạo với các chữ cái, tạo ra từ mới, ghép các câu hoặc thậm chí hát những bài hát dựa trên bảng chữ cái. Điều này giúp kích thích trí tưởng tượng và sự sáng tạo của bé.\r\nTăng cường kỹ năng ngôn ngữ: Bé học cách phát âm chính xác, ghép từ thành câu và giao tiếp hiệu quả hơn thông qua việc tương tác với bảng chữ cái này, từ đó tăng cường kỹ năng ngôn ngữ của bé một cách tự nhiên và dễ dàng.\r\n\r\n\r\n2. Bộ Xếp Hình 3D\r\nBộ xếp hình 3D là món đồ chơi sáng tạo, giúp bé phát triển tư duy logic, khả năng giải quyết vấn đề và rèn luyện sự kiên nhẫn. Với nhiều hình dạng và kích thước khác nhau, bé có thể tự do sáng tạo và lắp ráp thành các mô hình độc đáo theo trí tưởng tượng của mình.\r\n\r\nLợi ích:\r\n\r\nPhát triển tư duy logic và khả năng giải quyết vấn đề: Bé học cách phân tích hình dạng, kích thước và vị trí của các mảnh ghép để lắp ráp thành mô hình hoàn chỉnh. Quá trình này giúp bé phát triển tư duy logic và khả năng giải quyết vấn đề một cách hiệu quả.\r\nRèn luyện sự kiên nhẫn và tập trung: Việc lắp ráp các mảnh ghép đòi hỏi sự kiên nhẫn và tập trung cao độ từ bé. Quá trình này giúp bé rèn luyện tính kiên trì và khả năng tập trung trong học tập và hoạt động.\r\nKhuyến khích sự sáng tạo: Bé có thể tự do sáng tạo và lắp ráp thành các mô hình độc đáo theo trí tưởng tượng của mình. Quá trình này giúp bé phát triển khả năng sáng tạo và tư duy độc lập.\r\nPhát triển kỹ năng vận động tinh: Việc thao tác các mảnh ghép nhỏ giúp bé rèn luyện kỹ năng vận động tinh và sự phối hợp tay – mắt.\r\n\r\n\r\n3. Robot Tương Tác\r\nRobot tương tác là món đồ chơi công nghệ cao, giúp bé học hỏi về lập trình, khoa học và công nghệ một cách thú vị và hấp dẫn. Bé có thể điều khiển robot di chuyển, thực hiện các hành động đơn giản và tương tác với robot thông qua giọng nói hoặc cử chỉ.\r\n\r\nLợi ích:\r\n\r\nKích thích trí tò mò và ham học hỏi: Bé học hỏi về khoa học, công nghệ và lập trình một cách trực quan và sinh động, giúp khơi dậy trí tò mò và ham học hỏi trong bé.\r\nPhát triển tư duy logic và khả năng giải quyết vấn đề: Bé học cách lập trình các hành động cho robot thực hiện, giúp bé phát triển tư duy logic và khả năng giải quyết vấn đề một cách hiệu quả.\r\nKhuyến khích sự sáng tạo: Bé có thể tự do sáng tạo các chương trình cho robot thực hiện, giúp bé phát triển khả năng sáng tạo và tư duy độc lập.\r\nRèn luyện kỹ năng ngôn ngữ: Bé có thể tương tác với robot thông qua giọng nói, giúp bé phát triển khả năng ngôn ngữ và giao tiếp hiệu quả.\r\n! Lưu ý nhỏ cho các mẹ: Lựa chọn đồ chơi phù hợp với độ tuổi và giai đoạn phát triển của bé.Ưu tiên đồ chơi được làm từ chất liệu an toàn, không độc hại. Tránh đồ chơi có kích thước nhỏ, sắc nhọn hoặc có thể gây nguy hiểm cho bé. Lựa chọn đồ chơi tại các cửa hàng uy tín!\r\n\r\n\r\n\r\nChúng tôi tin rằng, trong hành trình phát triển của trẻ nhỏ, đồ chơi là nguồn giải trí vô tận và  là công cụ quan trọng giúp bé khám phá thế giới và phát triển toàn diện. Những món đồ chơi tuy đơn giản nhưng hiệu quả rất lớn khi kích thích sự sáng tạo và tư duy logic mà còn rèn luyện kỹ năng vận động tinh và phát triển khả năng ngôn ngữ của bé. Chắc chắn rằng việc lựa chọn đúng những món đồ chơi sẽ là nền tảng quan trọng trong việc giúp bé phát triển toàn diện.\r\n\r\nNếu quý vị đang tìm kiếm những món đồ chơi an toàn, chất lượng và mang tính giáo dục cao cho các bé, hãy ghé thăm PHPCRAFT – một trong những địa chỉ uy tín hàng đầu trong lĩnh vực cung cấp đồ chơi trẻ em. PHPCRAFT không chỉ đa dạng về chủng loại sản phẩm mà còn đảm bảo nguồn gốc xuất xứ rõ ràng, an toàn cho sức khỏe của trẻ nhỏ. Tại đây, quý phụ huynh có thể dễ dàng tìm thấy các món đồ chơi từ các thương hiệu nổi tiếng, phù hợp với từng độ tuổi và sở thích của bé. Hãy đến PHPCRAFT để mang đến cho con em mình những giờ phút vui chơi bổ ích và phát triển toàn diện!', 'bo-sach-thieu-nhi.jpg', 1, '2025-01-06 16:08:43', '2025-01-08 16:08:43', 'Sách thiếu nhi');
INSERT INTO `baiviet` (`id`, `tieude`, `slug`, `noidung`, `anhbaiviet`, `trangthai`, `created_at`, `updated_at`, `chude`) VALUES
(9, 'Các món đồ chơi phù hợp cho bé gái từ 1 đến 3 tuổi', 'cac-mon-do-choi-phu-hop-cho-be-gai-tu-1-den-3-tuoi', 'Đồ chơi búp bê\r\nBúp bê luôn là một trong những món đồ chơi yêu thích của bé gái. Từ những con búp bê vải mềm mại đến những búp bê nhựa có thể cử động tay chân, mỗi loại búp bê đều mang lại niềm vui và sự thú vị riêng cho trẻ. Búp bê không chỉ là người bạn đồng hành trong các trò chơi tưởng tượng mà còn giúp bé phát triển kỹ năng giao tiếp và khả năng chăm sóc. Khi bé chơi búp bê, bé học cách quan tâm, chăm sóc và chia sẻ, từ đó phát triển các kỹ năng xã hội và tình cảm. Ngoài ra, việc mặc quần áo cho búp bê và tạo các kịch bản chơi khác nhau cũng giúp bé phát triển khả năng sáng tạo và kỹ năng vận động. Bên cạnh đó, việc chơi búp bê cũng giúp bé phát triển khả năng tư duy logic và trí tuệ. Bé sẽ học cách xây dựng các tình huống, giải quyết vấn đề và tìm ra cách thức để giải quyết một tình huống cụ thể. Qua việc tương tác với búp bê, bé cũng có cơ hội phát triển khả năng tự tin và sự độc lập trong việc ra quyết định. Chính vì vậy, không có gì ngạc nhiên khi búp bê luôn là một trong những món đồ chơi được các bé gái yêu thích và trân trọng.\r\n\r\nĐồ chơi nhà bếp\r\nĐồ chơi nhà bếp là một trong những lựa chọn tuyệt vời để kích thích sự tò mò và khả năng sáng tạo của bé gái từ 1 đến 3 tuổi. Với các bộ đồ chơi nhà bếp, bé có thể bắt chước những hoạt động nấu ăn hàng ngày của bố mẹ, từ việc chuẩn bị bữa ăn đến dọn dẹp sau khi nấu. Qua những trò chơi này, bé học được cách tổ chức, quản lý thời gian và phát triển khả năng vận động tinh khi sử dụng các dụng cụ nhà bếp nhỏ xinh. Đồ chơi nhà bếp cũng khuyến khích bé tham gia vào các trò chơi nhập vai, từ đó phát triển kỹ năng ngôn ngữ và khả năng tưởng tượng phong phú. Bé cũng có thể học được cách chia sẻ và làm việc nhóm thông qua việc chơi cùng bạn bè hoặc anh chị em. Việc tạo ra một môi trường giả tưởng trong căn phòng nhỏ của mình giúp bé phát triển trí óc sáng tạo và khả năng giải quyết vấn đề. Đồ chơi nhà bếp không chỉ là một phần vui chơi mà còn là công cụ giáo dục hữu ích giúp trẻ phát triển toàn diện từ mặt tinh thần đến thể chất.\r\n\r\nTranh vẽ tô màu\r\nTranh vẽ tô màu không chỉ giúp bé giải trí mà còn là công cụ giáo dục hiệu quả giúp bé phát triển kỹ năng vận động tay chân và vận động tinh thần, nhận thức màu sắc và khả năng sáng tạo. Với tranh vẽ tô màu cả bé gái và bé trai đều có thể sử dụng. Việc tô màu giúp bé rèn luyện sự kiên nhẫn và tập trung khi cẩn thận tô từng khu vực nhỏ của tranh. Bé cũng học cách phối hợp màu sắc và phát triển khả năng thẩm mỹ thông qua việc chọn và kết hợp các màu sắc khác nhau. Ngoài ra, tranh vẽ tô màu còn có thể giúp bé thư giãn và giảm căng thẳng, mang lại những giờ phút vui vẻ và bổ ích. Hơn nữa, việc tô màu còn giúp bé phát triển trí tuệ, khả năng tư duy logic và sáng tạo, từ đó tạo ra một cơ hội để bé thể hiện bản thân và phát triển tình cảm nghệ thuật của mình. Đồng thời, hoạt động này cũng khuyến khích sự sáng tạo và khám phá, giúp bé tự tin hơn trong việc thể hiện cá nhân và tạo ra những tác phẩm độc đáo và ấn tượng.\r\n\r\nĐồ chơi thú bông\r\nĐồ chơi thú bông là người bạn đồng hành đáng tin cậy và dễ thương của bé gái từ 1 đến 3 tuổi. Thú bông không chỉ mang lại cảm giác ấm áp và an toàn mà còn giúp bé phát triển các kỹ năng xã hội và tình cảm. Khi chơi với thú bông, bé thường ôm ấp, chăm sóc và trò chuyện, qua đó phát triển khả năng giao tiếp và tình cảm yêu thương. Thú bông cũng thường được sử dụng trong các trò chơi tưởng tượng, giúp bé tạo ra những câu chuyện và kịch bản phong phú. Ngoài ra, việc chơi với thú bông có thể giúp bé phát triển kỹ năng vận động thô khi bé mang theo và di chuyển thú bông. Thú bông cũng là một món đồ chơi an toàn và dễ giặt giũ, giúp bố mẹ yên tâm khi cho bé chơi. Với sự đa dạng về màu sắc, hình dáng và kích thước, thú bông không chỉ là một người bạn đồng hành mà còn là một phần không thể thiếu trong thế giới mơ mộng của trẻ nhỏ.\r\n\r\nViệc lựa chọn các món đồ chơi phù hợp cho bé gái từ 1 đến 3 tuổi không chỉ mang lại niềm vui mà còn đóng vai trò quan trọng trong việc phát triển toàn diện của trẻ. Đồ chơi búp bê, đồ chơi nhà bếp, tranh vẽ tô màu và đồ chơi thú bông đều là những lựa chọn tuyệt vời giúp bé phát triển các kỹ năng xã hội, vận động, ngôn ngữ và sáng tạo. Phụ huynh nên tạo điều kiện cho bé trải nghiệm và khám phá với các loại đồ chơi đa dạng, từ đó khuyến khích sự phát triển toàn diện và hạnh phúc của trẻ.\r\n\r\nNếu quý vị đang tìm kiếm những món đồ chơi an toàn, chất lượng và mang tính giáo dục cao cho các bé, hãy ghé thăm PHPCRAFT – một trong những địa chỉ uy tín hàng đầu trong lĩnh vực cung cấp đồ chơi trẻ em. PHPCRAFT không chỉ đa dạng về chủng loại sản phẩm mà còn đảm bảo nguồn gốc xuất xứ rõ ràng, an toàn cho sức khỏe của trẻ nhỏ. Tại đây, quý phụ huynh có thể dễ dàng tìm thấy các món đồ chơi từ các thương hiệu nổi tiếng, phù hợp với từng độ tuổi và sở thích của bé. Hãy đến PHPCRAFT để mang đến cho con em mình những giờ phút vui chơi bổ ích và phát triển toàn diện!', 'do-choi-tre-em.jpg', 1, '2025-01-06 16:08:59', '2025-01-07 16:08:59', 'Sách thiếu nhi'),
(11, 'Truyện Kiều của Nguyễn Du: Một tác phẩm văn học kinh điển của Việt Nam', 'truyen-kieu-nguyen-du', 'Truyện Kiều của Nguyễn Du là một tác phẩm nổi bật trong nền văn học cổ điển Việt Nam, được viết bằng thể thơ lục bát, kể về cuộc đời đầy bi thương của nàng Kiều. Tác phẩm không chỉ phản ánh được xã hội phong kiến mà còn gửi gắm nhiều giá trị nhân văn sâu sắc. Nguyễn Du, với tài năng và sự am hiểu sâu sắc về con người, đã khắc họa những cung bậc cảm xúc đa dạng của nhân vật Kiều, từ tình yêu đến những thử thách khắc nghiệt mà nàng phải đối mặt. Truyện Kiều không chỉ là câu chuyện về số phận mà còn là bài học về nhân cách, sự trung hiếu, và tình người trong xã hội phong kiến. Bên cạnh đó, tác phẩm còn phản ánh sự giao thoa giữa những giá trị văn hóa phương Đông và những triết lý sống sâu sắc, giúp người đọc hiểu thêm về những thăng trầm trong cuộc sống của con người, từ đó rút ra những bài học quý giá về đạo đức và nhân sinh quan.', 'image1.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC CỔ ĐIỂN'),
(12, 'Chinh Phục Con Đường Văn Học Cổ Điển: Những Tác Phẩm Để Đời', 'chinh-phuc-con-duong-van-hoc-co-dien', 'Văn học cổ điển không chỉ là một phần di sản văn hóa mà còn là cầu nối giữa quá khứ và hiện tại, giúp chúng ta hiểu thêm về những giá trị nhân văn trong xã hội phong kiến. Từ những bài thơ của Hồ Xuân Hương cho đến các tác phẩm nổi bật của Phan Bội Châu, văn học cổ điển mang trong mình những tinh hoa nghệ thuật đỉnh cao của dân tộc. Những tác phẩm này không chỉ phản ánh vẻ đẹp của ngôn ngữ mà còn gửi gắm những triết lý sống, những bài học đạo đức quý giá. Bên cạnh đó, mỗi tác phẩm cổ điển còn mang đậm dấu ấn lịch sử, phản ánh cuộc sống của người dân trong những thời kỳ khó khăn và gian khổ. Đọc các tác phẩm này, chúng ta không chỉ cảm nhận được vẻ đẹp của văn chương mà còn hiểu thêm về con người và thời đại mà họ sống.', 'image2.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC CỔ ĐIỂN'),
(13, 'Văn Học Cổ Điển Việt Nam: Những Tác Phẩm Gắn Liền Với Thời Gian', 'van-hoc-co-dien-viet-nam-tac-pham', 'Văn học cổ điển Việt Nam không chỉ là những tác phẩm văn học nổi tiếng mà còn là nền tảng vững chắc cho sự phát triển của nền văn học dân tộc. Từ những bài thơ lục bát của Nguyễn Du, Hồ Xuân Hương cho đến các tác phẩm văn xuôi của Phan Bội Châu, văn học cổ điển Việt Nam đã để lại một dấu ấn sâu đậm trong lòng người đọc. Những tác phẩm này không chỉ thể hiện được trí tuệ của dân tộc mà còn phản ánh sâu sắc đời sống tinh thần của con người Việt Nam thời xưa. Mỗi tác phẩm là một bài học quý giá về đạo lý, tình yêu quê hương, và sự trung hiếu. Qua những câu chuyện, những nhân vật trong văn học cổ điển, chúng ta có thể cảm nhận được sự mạnh mẽ của ý chí, sự kiên cường của con người Việt Nam trong suốt quá trình đấu tranh và xây dựng đất nước.', 'image3.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC CỔ ĐIỂN'),
(14, 'Sự Giao Thoa Giữa Văn Học Cổ Điển Và Hiện Đại Trong Văn Học Việt Nam', 'giao-thoa-van-hoc-co-dien-hien-dai', 'Văn học Việt Nam qua các thời kỳ luôn có sự giao thoa giữa các giá trị cổ điển và hiện đại. Từ những tác phẩm văn học cổ điển như Truyện Kiều của Nguyễn Du đến các tác phẩm văn học hiện đại như của Nguyễn Minh Châu, chúng ta có thể thấy rõ sự thay đổi trong cách nhìn nhận về con người, xã hội và vũ trụ. Văn học cổ điển mang đậm dấu ấn của truyền thống và những giá trị đạo đức xưa, trong khi đó văn học hiện đại lại tập trung vào những vấn đề xã hội đương đại, khắc họa rõ nét hơn sự phát triển của con người trong bối cảnh thay đổi nhanh chóng của xã hội. Tuy nhiên, dù ở bất kỳ thời kỳ nào, những tác phẩm văn học đều thể hiện một tầm nhìn sâu sắc về cuộc sống và con người, phản ánh những nỗi niềm, những cảm xúc chân thật nhất của mỗi cá nhân.', 'image4.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC CỔ ĐIỂN'),
(15, 'Văn Học Cổ Điển Và Những Giá Trị Vĩnh Cửu Của Văn Minh Nhân Loại', 'van-hoc-co-dien-gia-tri-vinh-cuu', 'Văn học cổ điển không chỉ là những tác phẩm nghệ thuật mà còn là một phần của di sản văn hóa nhân loại. Những tác phẩm này đã truyền lại những giá trị đạo đức, nhân văn qua nhiều thế kỷ và vẫn còn nguyên giá trị cho đến ngày nay. Từ những tác phẩm của các nhà văn nổi tiếng như Nguyễn Du, Phan Bội Châu, văn học cổ điển không chỉ phản ánh vẻ đẹp của ngôn ngữ mà còn thể hiện những triết lý sống, những bài học về tình yêu, lòng trung thành, và nghĩa vụ với đất nước. Đọc các tác phẩm cổ điển giúp chúng ta hiểu thêm về quá khứ, nhưng cũng là một cách để soi chiếu vào hiện tại, từ đó phát triển những giá trị sống bền vững trong cuộc sống hiện đại.', 'image5.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC CỔ ĐIỂN'),
(16, 'Văn Học Hiện Đại Việt Nam: Những Tác Phẩm Gây Chấn Động', 'van-hoc-hien-dai-viet-nam', 'Văn học hiện đại Việt Nam đã phát triển mạnh mẽ trong suốt những thập kỷ qua, với những tác phẩm không chỉ phản ánh hiện thực xã hội mà còn khắc họa những khía cạnh sâu sắc của tâm lý con người. Các tác giả đương đại như Nguyễn Minh Châu, Bảo Ninh, Dương Hướng đã tạo ra những tác phẩm gây chấn động, phản ánh cuộc sống trong thời kỳ đổi mới của đất nước. Những tác phẩm này không chỉ đề cập đến chiến tranh, mà còn khai thác các vấn đề xã hội như tình yêu, gia đình, và những mâu thuẫn nội tâm của con người trong xã hội hiện đại. Văn học hiện đại cũng thường xuyên làm mới mình với các thể loại mới, các hình thức nghệ thuật mới, nhằm đáp ứng nhu cầu và thị hiếu của độc giả đương đại.', 'image6.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC HIỆN ĐẠI'),
(17, 'Bước Chuyển Mình Của Văn Học Hiện Đại Việt Nam', 'buoc-chuyen-minh-van-hoc-hien-dai', 'Văn học hiện đại Việt Nam là sự phản ánh những thay đổi trong xã hội Việt Nam sau những biến động lớn. Những tác phẩm của các tác giả đương đại không chỉ tập trung vào các chủ đề lịch sử, mà còn khai thác sâu vào những vấn đề hiện đại như mối quan hệ giữa các thế hệ, sự đối mặt với thực tại và những thách thức trong thời kỳ hội nhập quốc tế. Các tác phẩm như của Nguyễn Quang Thân, Phan Hồn Nhiên đã đưa người đọc vào những câu chuyện đa chiều, đầy cảm xúc, giúp ta nhìn nhận lại những vấn đề trong xã hội và trong chính cuộc sống của chúng ta.', 'image7.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC HIỆN ĐẠI'),
(18, 'Những Tác Phẩm Văn Học Hiện Đại Việt Nam Và Sự Phát Triển Của Nền Văn Học Đương Đại', 'nhung-tac-pham-van-hoc-hien-dai', 'Văn học hiện đại Việt Nam đã và đang có những bước phát triển mạnh mẽ. Từ các tác phẩm nổi bật như của Nguyễn Minh Châu đến Bảo Ninh, văn học hiện đại không chỉ phản ánh cuộc sống xã hội mà còn phản ánh sự chuyển mình của con người Việt Nam trong thời kỳ đổi mới. Những tác phẩm này đề cập đến các chủ đề về tình yêu, gia đình, sự cô đơn và những mâu thuẫn nội tâm. Qua đó, tác phẩm giúp người đọc hiểu rõ hơn về những thay đổi trong xã hội, cách sống và tư duy của con người trong thời đại hiện đại.', 'image8.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC HIỆN ĐẠI'),
(19, 'Những Chân Trời Mới Của Văn Học Hiện Đại Việt Nam', 'chan-troi-moi-van-hoc-hien-dai', 'Văn học hiện đại Việt Nam có sự chuyển biến mạnh mẽ trong những năm qua, với những tác phẩm mang tính cách mạng về tư duy và nghệ thuật. Những tác phẩm này không chỉ phản ánh cuộc sống hiện thực mà còn mở ra những chân trời mới về tri thức, về cách sống và về tương lai. Các tác phẩm của các tác giả như Phan Hồn Nhiên hay Nguyễn Minh Châu đã khai thác sâu vào những vấn đề xã hội đương đại, đồng thời làm mới ngôn ngữ và hình thức văn học. Văn học hiện đại Việt Nam đang có những bước tiến vượt bậc, và những tác phẩm đương đại chính là dấu ấn không thể thiếu trong sự phát triển của nền văn học dân tộc.', 'image9.jpg', 1, '2025-01-09 15:59:02', '2025-01-09 15:59:02', 'VĂN HỌC HIỆN ĐẠI'),
(20, 'Chuyện Kể Của Những Con Vật Thông Minh', 'chuyen-ke-cua-nhung-con-vat-thong-minh', '“Chuyện Kể Của Những Con Vật Thông Minh” là một bộ sách thiếu nhi được viết với mục đích giáo dục trẻ em về các giá trị sống qua những câu chuyện đầy hấp dẫn và mang tính giáo dục cao. Bộ sách gồm những câu chuyện về những con vật thông minh, khéo léo và dũng cảm, chúng luôn sẵn sàng giúp đỡ những người bạn trong những tình huống khó khăn. Mỗi câu chuyện trong bộ sách đều mang một thông điệp về tình bạn, lòng trung thành, sự kiên nhẫn và trí tuệ. Trẻ em sẽ được học cách xử lý tình huống, phát triển khả năng suy nghĩ logic và cảm nhận được giá trị của tình bạn chân thành qua những nhân vật chính là các loài động vật. Với hình ảnh minh họa sinh động và ngôn ngữ dễ hiểu, bộ sách này hứa hẹn sẽ là người bạn đồng hành tuyệt vời cho trẻ em trong những năm tháng đầu đời.', 'imagea.jpg', 1, '2025-01-09 16:00:42', '2025-01-09 16:00:42', 'Sách thiếu nhi'),
(21, 'Cuộc Phiêu Lưu Của Cô Bé Mạnh Mẽ', 'cuoc-phieu-luu-cua-co-be-manh-me', '“Cuộc Phiêu Lưu Của Cô Bé Mạnh Mẽ” là câu chuyện về một cô bé dũng cảm, luôn sẵn sàng đối mặt với những thử thách để bảo vệ gia đình và bạn bè của mình. Mặc dù còn nhỏ, cô bé này không bao giờ ngần ngại bước vào những cuộc phiêu lưu mới, vượt qua mọi khó khăn mà không bỏ cuộc. Cô bé tìm thấy sự mạnh mẽ và khôn ngoan của mình qua những bài học cuộc sống đầy ý nghĩa. Câu chuyện không chỉ mang lại cho trẻ em những giây phút giải trí thú vị mà còn giúp trẻ nhận ra giá trị của lòng dũng cảm, sự quyết tâm và tinh thần vượt qua thử thách trong cuộc sống. Với những tình huống gay cấn và những bài học sâu sắc, đây sẽ là một cuốn sách lý tưởng để phát triển tinh thần mạnh mẽ cho trẻ em.', 'imageb.jpg', 1, '2025-01-09 16:00:42', '2025-01-09 16:00:42', 'Sách thiếu nhi'),
(22, 'Những Người Bạn Đặc Biệt Của Bé', 'nhung-nguoi-ban-dac-biet-cua-be', '“Những Người Bạn Đặc Biệt Của Bé” là một câu chuyện về tình bạn chân thành giữa một cô bé và những người bạn đặc biệt của mình, bao gồm cả một con chó, một con mèo, và một con thỏ. Những người bạn này cùng nhau khám phá thế giới và học hỏi từ nhau rất nhiều điều thú vị. Cuốn sách không chỉ mang lại những phút giây thư giãn mà còn giáo dục trẻ em về lòng yêu thương, sự sẻ chia và quan trọng hơn là cách sống hòa hợp với thiên nhiên và động vật. Câu chuyện dạy trẻ cách biết cảm thông, tôn trọng và giúp đỡ những người bạn xung quanh mình. Những hình ảnh minh họa đẹp mắt và nội dung dễ hiểu sẽ khiến trẻ em yêu thích và dễ dàng tiếp cận với cuốn sách này.', 'imagec.jpg', 1, '2025-01-09 16:00:42', '2025-01-09 16:00:42', 'Sách thiếu nhi'),
(23, 'Tâm lý học là gì? Những khái niệm cơ bản về tâm lý con người', 'tam-ly-hoc-la-gi-nhung-khai-niem-co-ban-ve-tam-ly-con-nguoi', 'Tâm lý học là một ngành khoa học nghiên cứu về các yếu tố tác động đến hành vi và cảm xúc của con người. Ngành này không chỉ nghiên cứu những lý thuyết, mô hình và phương pháp nghiên cứu tâm lý mà còn khám phá những yếu tố ảnh hưởng đến tư duy, cảm xúc, hành động, và các khía cạnh khác trong cuộc sống của con người. Một trong những khái niệm quan trọng nhất trong tâm lý học là tâm lý học nhận thức, nghiên cứu cách con người tiếp nhận và xử lý thông tin từ môi trường xung quanh. Những nhà tâm lý học nổi bật như Sigmund Freud, Carl Jung và Abraham Maslow đã đóng góp rất nhiều vào lĩnh vực này, giúp chúng ta hiểu rõ hơn về những động lực tiềm ẩn trong hành vi của con người. Tâm lý học còn có những ứng dụng trong các lĩnh vực như giáo dục, y tế, quản lý và phát triển nhân lực, điều này giúp các nhà nghiên cứu phát triển các phương pháp trị liệu tâm lý và can thiệp hành vi nhằm giúp cải thiện sức khỏe tâm thần. Chính vì vậy, tâm lý học không chỉ là một môn học lý thuyết mà còn là một công cụ quan trọng giúp nâng cao chất lượng sống của con người.', 'image11.jpg', 1, '2025-01-09 16:34:08', '2025-01-09 16:34:08', 'Tâm lý học'),
(24, 'Các phương pháp nghiên cứu trong tâm lý học', 'cac-phuong-phap-nghien-cuu-trong-tam-ly-hoc', 'Trong tâm lý học, có rất nhiều phương pháp nghiên cứu được sử dụng để thu thập dữ liệu và phân tích hành vi của con người. Các phương pháp này có thể được chia thành ba nhóm chính: phương pháp quan sát, phương pháp thực nghiệm và phương pháp khảo sát. Phương pháp quan sát được sử dụng để nghiên cứu hành vi con người trong các tình huống tự nhiên mà không cần can thiệp. Phương pháp thực nghiệm, ngược lại, yêu cầu nhà nghiên cứu tạo ra một môi trường kiểm soát, nơi các yếu tố khác nhau có thể được thay đổi và kết quả được đo lường. Cuối cùng, phương pháp khảo sát sử dụng các câu hỏi hoặc bảng hỏi để thu thập thông tin từ người tham gia nghiên cứu. Những phương pháp này giúp các nhà tâm lý học có thể xác định được nguyên nhân và hậu quả của các hành vi, cảm xúc hoặc suy nghĩ nhất định trong một nhóm người. Việc áp dụng đúng các phương pháp nghiên cứu sẽ giúp hiểu rõ hơn về các vấn đề tâm lý phức tạp và tìm ra giải pháp cải thiện tình trạng sức khỏe tinh thần cho cá nhân và cộng đồng.', 'image12.jpg', 1, '2025-01-09 16:34:08', '2025-01-09 16:34:08', 'Tâm lý học'),
(25, 'Tâm lý học hành vi: Khám phá và ứng dụng', 'tam-ly-hoc-hanh-vi-kham-pha-va-ung-dung', 'Tâm lý học hành vi là một lĩnh vực nghiên cứu trong tâm lý học tập trung vào việc quan sát, phân tích và giải thích các hành vi của con người thông qua các yếu tố môi trường và tình huống xung quanh. Trường phái hành vi, do John B. Watson và B.F. Skinner sáng lập, tin rằng hành vi con người có thể được định hướng, thay đổi và cải thiện thông qua các tác động từ bên ngoài, chẳng hạn như thưởng phạt và học hỏi. Tâm lý học hành vi đóng một vai trò quan trọng trong việc phát triển các phương pháp can thiệp hành vi như điều trị hành vi và tâm lý học ứng dụng. Các nghiên cứu trong lĩnh vực này đã chỉ ra rằng môi trường có thể tác động mạnh mẽ đến hành vi con người, từ đó giúp các chuyên gia tâm lý học đưa ra các chiến lược can thiệp phù hợp với từng cá nhân hoặc nhóm. Tâm lý học hành vi cũng được ứng dụng rộng rãi trong các lĩnh vực như giáo dục, trị liệu, quản lý và chăm sóc sức khỏe, mang lại những kết quả tích cực trong việc cải thiện chất lượng cuộc sống của con người.', 'image13.jpg', 1, '2025-01-09 16:34:08', '2025-01-09 16:34:08', 'Tâm lý học'),
(26, 'Tâm lý học phát triển: Sự thay đổi tâm lý theo từng giai đoạn', 'tam-ly-hoc-phat-trien-su-thay-doi-tam-ly-theo-tung-giai-doan', 'Tâm lý học phát triển là một nhánh của tâm lý học nghiên cứu sự thay đổi trong hành vi, tư duy và cảm xúc của con người qua các giai đoạn phát triển từ khi sinh ra đến khi trưởng thành. Mỗi giai đoạn phát triển đều có những đặc điểm và thách thức riêng biệt đối với con người, từ trẻ em, thanh thiếu niên đến người trưởng thành và người già. Ví dụ, trong giai đoạn sơ sinh và trẻ nhỏ, trẻ học các kỹ năng cơ bản như nói, đi lại và hình thành các mối quan hệ xã hội. Trong khi đó, thanh thiếu niên phải đối mặt với các vấn đề về bản sắc và sự phát triển cảm xúc, còn người trưởng thành phải giải quyết các vấn đề liên quan đến sự nghiệp, gia đình và mối quan hệ xã hội. Việc nghiên cứu tâm lý học phát triển giúp các chuyên gia hiểu rõ hơn về các yếu tố ảnh hưởng đến quá trình phát triển và từ đó đưa ra các chiến lược hỗ trợ phù hợp cho từng đối tượng. Từ đó, ta có thể áp dụng những kiến thức này để hỗ trợ các đối tượng trong các giai đoạn khác nhau của cuộc đời.', 'image14.jpg', 1, '2025-01-09 16:34:08', '2025-01-09 16:34:08', 'Tâm lý học'),
(27, 'Tâm lý học lâm sàng: Chẩn đoán và điều trị rối loạn tâm lý', 'tam-ly-hoc-lam-sang-chan-doan-va-dieu-tri-roi-loan-tam-ly', 'Tâm lý học lâm sàng là lĩnh vực nghiên cứu và ứng dụng trong việc chẩn đoán, điều trị và hỗ trợ những người gặp phải các vấn đề về tâm lý, từ các rối loạn tâm lý nhẹ như lo âu, trầm cảm đến các rối loạn nghiêm trọng như rối loạn tâm thần. Các chuyên gia tâm lý học lâm sàng sử dụng các phương pháp trị liệu khác nhau để giúp bệnh nhân giải quyết các vấn đề tâm lý, bao gồm liệu pháp nhận thức hành vi, liệu pháp tâm lý động lực, liệu pháp gia đình và liệu pháp nhóm. Tâm lý học lâm sàng không chỉ giúp bệnh nhân giảm bớt các triệu chứng rối loạn mà còn giúp họ phát triển những kỹ năng đối phó và tự chăm sóc bản thân để cải thiện chất lượng cuộc sống. Ngoài ra, tâm lý học lâm sàng còn giúp nâng cao nhận thức cộng đồng về các vấn đề sức khỏe tâm thần và giảm bớt sự kỳ thị đối với những người gặp khó khăn về tâm lý.', 'image15.jpg', 1, '2025-01-09 16:34:08', '2025-01-09 16:34:08', 'Tâm lý học'),
(28, 'PHPCRAFT: Web Bán Sách Của Nhóm', 'thong-tin-ve-phpcraft', 'Giới thiệu\r\nPHPCRAFT là nhóm gồm 5 người:\r\n\r\nDương Quang Lãm\r\nVõ Minh Quân\r\nVõ Quang Bảo\r\nNguyễn Hải Long\r\nVõ Thành Đăng Khoa\r\nNhóm đang làm một web bán sách bằng Laravel. Mục tiêu là tạo ra một website dễ dùng, đơn giản.\r\n\r\nCông việc của nhóm\r\nHoàn thiện các chức năng được yêu cầu.\r\nThiết kế giao diện: Làm trang web dễ nhìn và dễ dùng.\r\nKiểm tra lỗi: Đảm bảo mọi thứ chạy tốt.\r\nMục tiêu\r\nNhóm muốn làm một trang web bán sách sài được. Dù còn nhiều thử thách, nhóm sẽ cố gắng để hoàn thành.\r\nĐịa chỉ\r\nLocalhost\r\nLời kết\r\nPHPCRAFT là nhóm nhỏ, làm việc vì điểm. Nhóm hy vọng web bán sách sẽ sài được.', 'phpcraft.jpg', 1, '2025-01-01 04:53:49', '2025-01-03 04:53:49', 'Thông tin nhóm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaChiTietGioHang` bigint(20) NOT NULL,
  `MaGioHang` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) NOT NULL,
  `MaSach` bigint(20) DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`MaChiTietGioHang`, `MaGioHang`, `MaKhachHang`, `MaSach`, `TrangThai`) VALUES
(1, 1, 1, 5, 1),
(2, 1, 1, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaChiTietHoaDon` bigint(20) NOT NULL,
  `MaHoaDon` bigint(20) DEFAULT NULL,
  `MaSach` bigint(20) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` decimal(15,2) DEFAULT NULL,
  `TongTien` decimal(15,2) GENERATED ALWAYS AS (`SoLuong` * `DonGia`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaChiTietHoaDon`, `MaHoaDon`, `MaSach`, `SoLuong`, `DonGia`) VALUES
(1, 5, 7, 1, 300000.00),
(2, 5, 8, 1, 30000.00),
(3, 6, 9, 1, 300000.00),
(4, 7, 1, 1, 117000.00),
(5, 8, 9, 1, 30000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasanpham`
--

CREATE TABLE `danhgiasanpham` (
  `MaDanhGia` bigint(20) UNSIGNED NOT NULL,
  `MaHoaDon` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) NOT NULL,
  `MaSach` bigint(20) NOT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayDanhGia` datetime DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgiasanpham`
--

INSERT INTO `danhgiasanpham` (`MaDanhGia`, `MaHoaDon`, `MaKhachHang`, `MaSach`, `NoiDung`, `NgayDanhGia`, `TrangThai`) VALUES
(1, 7, 1, 1, 'Đã nhận hàng', '2025-01-08 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Văn học', NULL, NULL, NULL),
(2, 'Tiểu thuyết', 1, NULL, NULL),
(3, 'Truyện ngắn', 1, NULL, NULL),
(4, 'Trinh thám', 1, NULL, NULL),
(5, 'Kinh tế', NULL, NULL, NULL),
(6, 'Quản trị - lãnh đạo', 5, NULL, NULL),
(7, 'Marketing', 5, NULL, NULL),
(8, 'Phân tích kinh tế', 5, NULL, NULL),
(9, 'Sách thiếu nhi', NULL, NULL, NULL),
(10, 'Truyện tranh', 9, NULL, NULL),
(11, 'Kiến thức bách khoa', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachyeuthich`
--

CREATE TABLE `danhsachyeuthich` (
  `MaKH` bigint(20) DEFAULT NULL,
  `MaSP` bigint(20) DEFAULT NULL,
  `TrangThai` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachyeuthich`
--

INSERT INTO `danhsachyeuthich` (`MaKH`, `MaSP`, `TrangThai`) VALUES
(1, 2, 0x01),
(1, 8, 0x01);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) DEFAULT NULL,
  `TongTien` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGioHang`, `MaKhachHang`, `TongTien`) VALUES
(1, 1, 320000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` bigint(20) NOT NULL,
  `MaKhachHang` bigint(20) DEFAULT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongTien` decimal(15,2) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `PT_ThanhToan` bigint(20) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `MaKhachHang`, `NgayLap`, `TongTien`, `TrangThai`, `PT_ThanhToan`, `DiaChi`) VALUES
(5, 1, '2025-01-08 17:50:41', 330000.00, 'Đang chờ ', 1, '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000'),
(6, 1, '2025-01-08 17:50:41', 30000.00, 'đang giao hàng', 1, '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000'),
(7, 1, '2025-01-08 17:53:34', 117000.00, 'Hoàn thành', 1, '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000'),
(8, 1, '2025-01-08 17:53:34', 30000.00, 'đã hủy', 1, '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` bigint(20) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(12) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT 1,
  `TenDangNhap` varchar(255) DEFAULT NULL,
  `MatKhau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `HoTen`, `GioiTinh`, `Email`, `SoDienThoai`, `DiaChi`, `TrangThai`, `TenDangNhap`, `MatKhau`) VALUES
(1, 'Nguyễn Văn A', 'Nam', 'email0@gmail.com', '0123456789', '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000', 1, 'user1', '123'),
(2, 'Nguyễn Văn Hùng', 'Nam', 'email1@gmail.com', '0123456789', '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000', 1, 'user2', '123123'),
(3, 'Nguyễn Thị Trâm', 'Nữ', 'email2@gmail.com', '0123456789', '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000', 1, 'user3', '123123'),
(4, 'Nguyễn Văn Đạt', 'Nam', 'email4@gmail.com', '0123456789', '65 Huỳnh Thúc Kháng, Bến Nghé, Quận 1, Hồ Chí Minh 700000', 1, 'user4', '123123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKhuyenMai` bigint(20) NOT NULL,
  `TenKhuyenMai` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `NgayBatDau` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `PhanTramGiamGia` int(11) NOT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKhuyenMai`, `TenKhuyenMai`, `MoTa`, `NgayBatDau`, `NgayKetThuc`, `PhanTramGiamGia`, `TrangThai`) VALUES
(1, 'GIAMGIA10', 'Giảm giá 10%', '2025-01-08 17:05:23', '2025-01-31 17:05:23', 10, 1),
(2, 'GIAMGIA15', 'Giảm giá 15%', '2025-01-08 17:05:23', '2025-01-31 17:05:23', 15, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `chu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id`, `ho_ten`, `email`, `chu_de`, `noi_dung`, `created_at`, `updated_at`) VALUES
(1, 'Trần An', 'tranan@gmail.com', 'khuyến mãi ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ligula risus, condimentum vitae purus id, tempor efficitur mi. Sed dictum, ante eget fringilla interdum, urna est sollicitudin neque, eu tincidunt nulla orci eget ante. Ut in semper dolor. Praesent maximus elit rutrum dui condimentum convallis. Donec consequat consequat tellus, eu laoreet erat pharetra ac. Curabitur mattis, tortor eu hendrerit dapibus, tortor ante posuere quam, a fringilla justo purus ac tortor. Pellentesque enim libero, varius vitae sapien ac, eleifend consequat lacus. Maecenas imperdiet sem risus, et tincidunt mauris facilisis et. In cursus enim interdum nulla pharetra lobortis. Nam magna dui, iaculis ac lorem id, feugiat sagittis magna. Vestibulum volutpat ex at eros aliquet aliquet. Vestibulum in sollicitudin nisl. Mauris iaculis fringilla ante. Curabitur consectetur venenatis vestibulum.', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(2, 'Sang Trần ', 'SangTran@gmail.com', 'Khuyến mãi mua hàng', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ligula risus, condimentum vitae purus id, tempor efficitur mi. Sed dictum, ante eget fringilla interdum, urna est sollicitudin neque, eu tincidunt nulla orci eget ante. Ut in semper dolor. Praesent maximus elit rutrum dui condimentum convallis. Donec consequat consequat tellus, eu laoreet erat pharetra ac. Curabitur mattis, tortor eu hendrerit dapibus, tortor ante posuere quam, a fringilla justo purus ac tortor. Pellentesque enim libero, varius vitae sapien ac, eleifend consequat lacus. Maecenas imperdiet sem risus, et tincidunt mauris facilisis et. In cursus enim interdum nulla pharetra lobortis. Nam magna dui, iaculis ac lorem id, feugiat sagittis magna. Vestibulum volutpat ex at eros aliquet aliquet. Vestibulum in sollicitudin nisl. Mauris iaculis fringilla ante. Curabitur consectetur venenatis vestibulum.', '2025-01-07 17:00:00', '2025-01-07 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_07_120151_rename_categories_to_danhmuc', 2),
(5, '2025_01_01_080230_create_lien_he_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPhuongThuc` bigint(20) NOT NULL,
  `TenPhuongThuc` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `TrangThai` binary(1) DEFAULT NULL,
  `PhiGiaoDich` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`MaPhuongThuc`, `TenPhuongThuc`, `MoTa`, `TrangThai`, `PhiGiaoDich`) VALUES
(1, 'PT1', 'Tien mat', 0x01, 100000.00),
(2, 'PT2', 'Chuyen khoan', 0x01, 20000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `MaSach` bigint(20) NOT NULL,
  `TenSach` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `GiaNhap` decimal(15,2) DEFAULT NULL,
  `GiaBan` decimal(15,2) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `NamXuatBan` int(11) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `TrangThai` tinyint(4) DEFAULT NULL,
  `MaNXB` varchar(255) DEFAULT NULL,
  `HinhAnh` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`MaSach`, `TenSach`, `category_id`, `GiaNhap`, `GiaBan`, `SoLuong`, `NamXuatBan`, `MoTa`, `TrangThai`, `MaNXB`, `HinhAnh`, `created_at`, `updated_at`) VALUES
(1, 'Trường Ca Achilles', 2, 70000.00, 117000.00, 5000, 2012, 'HUYỀN THOẠI BẮT ĐẦU…\r\n\r\nHy Lạp vào thời hoàng kim của các anh hùng. Patroclus là một hoàng tử trẻ vụng về, bị trục xuất tới vương quốc Phthia và được nuôi dạy dưới sự che chở của vua Peleus cùng cậu con trai hoàng kim của ngài, Achilles. “Người Hy Lạp vĩ đại nhất” – mạnh mẽ, đẹp đẽ, và mang nửa dòng máu của một nữ thần – Achilles là tất cả những gì mà Patroclus không bao giờ có được. Nhưng bất chấp sự khác biệt giữa họ, hai cậu bé trở thành chiến hữu trung thành của nhau. Tình cảm giữa họ càng đậm sâu khi cả hai lớn lên thành những chàng trai trẻ, thành thạo trong kĩ nghệ chiến đấu và y dược.\r\n\r\nKhi tin tức truyền tới rằng nàng Helen xứ Sparta đã bị bắt cóc, những chiến binh Hy Lạp, bị trói buộc bởi lời thề máu, phải nhân danh nàng mà vây hãm thành Troy. Bị cám dỗ bởi lời hứa hẹn về một số mệnh huy hoàng, Achilles tham gia hàng ngũ của họ. Bị giằng xé giữa tình yêu và nỗi lo sợ dành cho người bạn của mình, Patroclus ra trận theo Achilles. Họ không hay biết rằng các nữ thần Số Phận sẽ thử thách cả hai người họ hơn bao giờ hết và đòi hỏi một sự hi sinh khủng khiếp.\r\n\r\nDựa trên nền tảng của sử thi Iliad, câu chuyện về cuộc chiến thành Troy vĩ đại đã được Madeline Miller kể lại với tiết tấu dồn dập, lôi cuốn, và không kém phần xúc động, đánh dấu sự khởi đầu của một sự nghiệp rực rỡ.\r\n\r\nTrường Ca Achilles đã đoạt giải Orange năm 2012 và luôn nằm trong top các sách bán chạy của tờ New York Times.', 1, '1', '1736334720_TruongngCaAchilles.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(2, 'Nhà Giả Kim (Tái Bản 2020)', 2, 80000.00, 120000.00, 5000, 2020, 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. \r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”\r\n\r\n- Trích Nhà giả kim', 1, '1', '1736334731_NhaGiaKim.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(3, 'Trốn Lên Mái Nhà Để Khóc', 3, 50000.00, 95000.00, 5000, 2020, 'Những cơn gió heo may len lỏi vào từng góc phố nhỏ, mùa thu về gợi nhớ bao yêu thương đong đầy, bao xúc cảm dịu dàng của ký ức. Đó là nỗi nhớ đau đáu những hương vị quen thuộc của đồng nội, là hoài niệm bất chợt khi đi trên con đường cũ in dấu bao kỷ niệm... để rồi ta ước có một chuyến tàu kỳ diệu trở về những năm tháng ấy, trở về nơi nương náu bình yên sau những tháng ngày loay hoay để học cách trở thành một người lớn. Bạn sẽ được đắm mình trong những cảm xúc đẹp đẽ xen lẫn những tiếc nuối đầy lắng đọng trong “Trốn lên mái nhà đẻ khóc” của Lam.\r\n\r\n“Trốn lên mái nhà để khóc” là cuốn nhật ký nhỏ ghi lại những hoài niệm đẹp đẽ cất giữ vào góc nhỏ nơi sâu thẳm của trái tim của mỗi người, đồng thời cũng là người bạn đồng hành để chúng ta tiếp tục bước đi đến tương lai. Sau khi “Trốn lên mái nhà và khóc” khép lại, hãy mạnh mẽ để sống hết mình và để lại “những tháng năm rực rỡ”.', 1, '1', '1736334951_TronLenMaiNhaDeKhoc.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(4, 'Quản Trị Bằng Văn Hóa - Cách Thức Kiến Tạo Và Tái Tạo Văn Hóa Tổ Chức', 6, 80000.00, 200000.00, 5000, 2020, 'Thông qua cuốn sách, TS Giản Tư Trung cũng mong muốn góp phần cổ vũ và thúc đẩy cho sự phát triển của một phương cách quản trị mới, vừa nhân văn, vừa hiệu quả, đó là “Quản trị bằng Văn hóa / Quản trị bằng Tự trị” (Management by Culture /\r\n\r\nManagement by Self-Mangement). Bởi lẽ tác giả tin rằng, bên cạnh các phương cách quản trị truyền thống như Quản trị bằng Luật lệ (Mangement by Polices) hay Quản trị bằng Mục tiêu (Management by Objectives) thì Quản trị bằng Văn hóa (Management by Culture) chính là tương lai của quản trị và tương lai của lãnh đạo trong một thế giới đầy biến động và trong một thời đại mà con người ngày càng trở nên độc lập và tự do hơn. Cuốn sách này có sự tích hợp xuyên suốt từ tinh thần, tư tưởng và triết lý cho đến phương pháp và giải pháp, cũng như có sự kết nối 5 chủ thể văn hóa là cá nhân, bộ phận, tổ chức, kinh thương, và quốc gia. Đặc biệt, những tư duy và phương pháp cốt lõi về xây dựng và chuyển đổi văn hóa được chia sẻ trong cuốn sách này có tính nguyên lý, nên không chỉ áp dụng cho các doanh nghiệp, mà còn có thể áp dụng cho mọi loại hình tổ chức khác, bao gồm cả trường học, bệnh viện, báo chí, các tổ chức xã hội, cơ quan nhà nước, hay các tổ chức phi chính phủ.\r\n\r\nVề tác giả Giản Tư Trung:\r\n\r\nTác giả Giản Tư Trung hiện là Chủ tịch sáng lập Học viện Quản Lý PACE, Hiệu trưởng Trường Doanh Nhân PACE, Viện trưởng Viện Giáo Dục IRED, Phó Chủ tịch Quỹ Văn hóa Phan Châu Trinh, Trưởng Ban Tổ chức Giải thưởng Sách Hay và Chủ nhiệm IPL Scholarship. Ông nhận bằng Thạc sĩ về Nghiên cứu Phát triển tại Học viện Sau Đại học Geneva; Tu nghiệp về Chính sách Giáo dục Quốc tế tại Đại học Harvard; Tốt nghiệp Tiến sĩ về Giáo dục tại Học viện Giáo dục Quốc gia Singapore; và tốt nghiệp Tiến sĩ về Giáo dục tại Đại học London (UCL). Với những cống hiến của Ông cho giáo dục, Diễn Đàn Kinh Tế Thế Giới đã vinh danh Ông là một Nhà lãnh đạo toàn cầu trong vai trò là một Nhà hoạt động giáo dục.', 1, '1', '1736334864_QuanTriVanHoa.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(5, 'Hồ Sơ Tâm Lí Tội Phạm - Tập 1', 4, 80000.00, 120000.00, 5000, 2020, 'BỘ SÁCH CHẤN ĐỘNG NHẤT VỀ TÂM LÍ TỘI PHẠM. PHƠI BÀY TRỌN VẸN NHỮNG GÓC KHUẤT NỘI TÂM CỦA KẺ THỦ ÁC.\r\n\r\nKể từ khi nghiên cứu tâm lí học tội phạm đến nay, tôi đã chứng kiến rất nhiều tội ác muôn hình vạn trạng, nhưng hầu hết tất cả những hành vi biến thái đó đều ẩn chứa đằng sau một động cơ chung: Khát vọng được quan tâm và yêu thương.\"\r\n\r\nTrước đây, trên thế giới từng có những vụ trọng án đi vào ngõ cụt, bởi tất cả các bằng chứng và dấu vết đã bị kẻ thủ ác khôn ngoan xóa sạch. Trong lịch sử, không hề hiếm những vụ án mà cảnh sát phải bó tay, không thể bắt hung thủ hiện nguyên hình.\r\nNgày nay, ngoài các kĩ thuật hình sự hỗ trợ điều tra tội phạm, thì tâm lí học tội phạm chính là một trong những “kĩ thuật bóc tách” hung thủ từ các nghi can. Những kẻ giết người hàng loạt thực hiện hành vi tàn nhẫn hết lần này đến lần khác mà không để lại chút sơ hở nào, vậy giữa biển người mênh mông làm sao có thể khoanh vùng và tìm được kẻ thủ ác? Những nhà tâm lí học tội phạm dựa vào các hành vi gây án hay còn gọi là chứng cứ hành vi để phân tích tâm lí của kẻ thủ ác và bước đầu phác họa hồ sơ tội phạm, giúp thu hẹp phạm vi điều tra.\r\n\r\nTừ sự nắm bắt và quan sát tinh vi dựa trên tâm lí, các cảnh sát hình sự phải mò mẫm trong con đường hầm mờ tối để lần ra manh mối và dấu vết. Con đường ấy vô cùng vất vả và gian truân, sẽ có những vấp ngã, sẽ có đau đớn và hiểm nguy, nhưng cuối đường hầm luôn là ánh sáng. Bởi vì công lí cuối cùng sẽ đánh bại cái ác, kể cả khi công lí tới sau. Cuốn sách mà các bạn đang cầm trên tay sẽ đưa chúng ta đến với những trải nghiệm của các điều tra viên, thấu hiểu sự hi sinh và mất mát của lực lượng cảnh sát, đào sâu tìm hiểu những kiến thức tâm lí học tội phạm ứng dụng. Các tình tiết truyện đan xen, hấp dẫn nhưng cũng chất chứa trong đó giá trị nhân văn sâu sắc. Có lẽ khi đọc cuốn tiểu thuyết này, chúng ta càng thấm thía câu nói: “Hiền dữ phải đâu là tính sẵn. Phần nhiều do giáo dục mà nên.”\r\n\r\nTác giả Cương Tuyết Ấn là người thành phố Đại Liên, tỉnh Liêu Ninh. Những năm trở lại đây, ông kiên trì sáng tác những tác phẩm trinh thám về điều tra hình sự có liên quan tới tâm lí tội phạm.\r\n\r\nMỗi câu chuyện dưới ngòi bút của ông đều dẫn dắt người đọc vào thế giới suy luận hồi hộp, gay cấn đến nghẹt thở. Tác phẩm tiêu biểu – bộ tiểu thuyết Hồ sơ tâm lí tội phạm – bán chạy ở thị trường Trung Quốc đại lục, Hồng Kông, Đài Loan… Năm 2016 tác phẩm được xuất bản bằng tiếng Anh, bán ở thị trường nước ngoài.', 1, '1', '1736334872_HoSoTamLyToiPham.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(6, '5 Nguyên Tắc Thép, 15 Thuật Bán Hàng Thành Công', 7, 30000.00, 60000.00, 5000, 2020, '5 nguyên tắc thép, 15 thuật bán hàng thành công\r\n\r\nKhách hàng có mua sản phẩm của bạn hay không, điều này không chỉ phụ thuộc vào chất lượng sản phẩm ưu việt bạn mang lại, mà còn phụ thuộc vào kĩ năng bán hàng tuyệt vời của bạn. Trong quá trình mua hàng và bán hàng tồn tại rất nhiều hoạt động tâm lí có thể ảnh hưởng đến hành vi của khách hàng. Cuốn sách này sẽ lí giải trong quá trình bán hàng, người bán hàng cần có kĩ năng gì, nên áp dụng các thuật tâm lí như thế nào để tác động tích cực đến khách hàng và khiến khách hàng nảy sinh hành vi mua hàng.\r\n\r\nNếu như bạn là một người tiêu dùng, sau khi đọc cuốn sách này rồi, tôi hi vọng trước khi mở hầu bao, bạn nên thử nghiêm túc nghĩ xem: Thứ mà mình định mua có thực sự cần thiết hay không? Nếu bạn là một người bán hàng, tôi hi vọng rằng bạn, với nhân cách cao đẹp của mình, có thể sử dụng tốt những kĩ năng bán hàng mà tất cả mọi người đều có thể chấp nhận đã được mô tả cuốn sách này để phát triển được một thị trường rộng lớn hơn, và tạo ra doanh số bán hàng tuyệt vời hơn.', 1, '1', '1736334880_5NguyenTacThep.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(7, 'Chính Sách Tiền Tệ Thế Kỷ 21', 8, 80000.00, 300000.00, 5000, 2020, 'Cuốn sách đầu tiên bàn về lịch sử chống lạm phát & khủng hoảng của Cục Dự trữ Liên bang Hoa Kỳ\r\n\r\nChính sách tiền tệ thế kỷ 21 xem xét Fed – cơ quan quản lý chính sách tiền tệ Mỹ của hiện tại và tương lai chủ yếu thông qua lăng kính lịch sử, nhằm giúp người đọc hiểu được Fed đã làm thế nào để đạt được vị trí như ngày nay, học được gì từ những thách thức đa dạng phải đối mặt, và có thể phát triển như thế nào trong tương lai.\r\n\r\nĐược viết bởi Ben S. Bernanke – người giữ chức Chủ tịch Fed từ năm 2006 đến năm 2014, cuốn sách mang đến cái nhìn tổng quan về quá trình hoạch định chính sách của Fed trong 70 năm qua, cho thấy những thay đổi trong nền kinh tế đã thúc đẩy những đổi mới của Fed như thế nào cũng như những thách thức mới mà Fed phải đối mặt, bao gồm: lạm phát quay trở lại, tiền điện tử, rủi ro bất ổn tài chính gia tăng và các mối đe dọa đối với tính độc lập của tổ chức này.\r\n\r\nNgoài việc giải thích các công cụ hoạch định chính sách mới của hệ thống ngân hàng trung ương, cuốn sách còn kể về những khoảnh khắc kịch tính mà với đó, các quyết định của Fed dưới triết lý của những người từng chèo lái tổ chức này - đã tạo nên nhiều tác động đáng kể. Sách gồm 4 phần:\r\n\r\n1. Sự tăng giảm của lạm phát: bàn về các chiến lược ứng phó của Fed trước Đại Lạm Phát (thập niên 60-80 thế kỷ 20) và giai đoạn bùng nổ 1990.\r\n\r\n2. Khủng hoảng tài chính toàn cầu và Đại Suy thoái: bàn về những thách thức của thiên niên kỷ mới, trong đó có suy thoái 2001, giảm phát 2003, Khủng hoảng tài chính toàn cầu (2007-2008) và Đại Suy thoái (2009).\r\n\r\n3. Từ nâng lãi suất đến đại dịch Covid-19: bàn về chiến lược của Fed từ sau thời Bernanke (2014) đến đại dịch Covid-19, gồm các chính sách nâng lãi suất, chính sách tiền tệ trung lập, nỗ lực đảm bảo tính độc lập của Fed và các biến động dưới thời Jay Powell, và chiến lược ứng phó khủng hoảng trong thời kỳ đại dịch Covid-19.\r\n\r\n4. Tương lai phía trước: đánh giá lại các công cụ mà Fed đã áp dụng, bàn về các phương án & công cụ mới để xây dựng chính sách hiệu quả, mạnh mẽ hơn, vai trò của chính sách tiền tệ trong việc duy trì ổn định tài chính, về tính độc lập và vai trò của Fed trong xã hội.\r\n\r\nNhững đánh giá thành công hay thất bại và những bài học trong chính sách tiền tệ của Mỹ trong 70 năm qua từ một chuyên gia như Bernanke chắc chắn là những kiến thức quý báu cho các nhà hoạch định chính sách và các nhà nghiên cứu kinh tế trên thế giới. Hơn thế, người đọc còn học được từ trong cuốn sách này những bài học về lãnh đạo trong những tình huống khó khăn, về các lựa chọn mà những nhà làm chính sách phải đưa ra trong bối cảnh thông tin không đầy đủ.', 1, '1', '1736334887_ChinhSachTienTeTheKy21.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(8, 'Thám Tử Lừng Danh Conan - Tập 105', 10, 10000.00, 30000.00, 5000, 2020, 'Thám Tử Lừng Danh Conan - Tập 105\r\n\r\nOoka Momiji bị đe doạ đến tính mạng trên tàu shinkansen. Liệu quản gia Iori Muga và mọi người có thể giải cứu cô an toàn!?\r\n\r\nRan dẫn Heiji và các bạn tới một thắng cảnh tuyệt đẹp… Nhưng khi ở trên núi, họ tình cờ gặp một vụ án mạng kì bí! Kaito Kid và Conan sẽ bắt tay hợp tác!? Đối thủ của họ là… Hakuba Saguru!!', 1, '1', '1736334904_ThamTuLungDanhConan105.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00'),
(9, 'Danh Nhân Thế Giới - Marie Curie (Tái Bản 2022)', 11, 8000.00, 30000.00, 5000, 2022, 'Marie Curie là nhà khoa học nữ đầu tiên được nhận hai giải Nobel. Bà đã dành trọn cuộc đời để nghiên cứu khoa học, và cống hiến trọn vẹn những thành tựu to lớn cho nhân loại. Từ nhỏ, Marie Curie là một cô bé thông minh, ham học và rất yêu thích khoa học tự nhiên. Nhưng vì gia đình quá nghèo nên bà phải lao động để kiếm sống. Sau bao nhiêu vất vả gian nan cuối cùng bà đã thực hiện được mơ ước: Bước chân vào giảng đường đại học. Nhờ tài năng, trí thông minh và sự cần cù, Marie Curie đã lần lượt nhận được bằng cử nhân về Vật lí và Toán học.\r\n\r\nBà đã cùng chồng là Pierre Curie nghiên cứu và phát hiện ra nguyên tố mang tính phóng xạ radium và được trao giải Nobel Vật lí. Sau khi ông Pierre qua đời, bà vẫn tiếp tục nghiên cứu, và một lần nữa bà lại được nhận giải thưởng Nobel Hóa học.\r\n\r\nSuốt cuộc đời, cho đến khi trút hơi thở cuối cùng vào năm 1934, bà đã không ngừng nghiên cứu, đóng góp công sức cho khoa học và cho hạnh phúc nhân loại. Cuộc đời của Marie Curie là một tấm gương sáng ngời về nhân cách của một nhà khoa học luôn dành tình yêu cho đất nước, cho khoa học chân chính.', 1, '1', '1736334897_NhanDanhTheGioiMarieCurie.png', '2025-01-07 17:00:00', '2025-01-07 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gcxETUZOOMchfwL4TTmkLMV1woX0FZV64OcE0I4t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDh5YmJDMjFGdktjYzJiV01ETHlXQjh0UWs3VlUyUjNoQzR2d3AybCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dD9wYWdlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736486114);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`MaChiTietGioHang`),
  ADD KEY `MaSach` (`MaSach`),
  ADD KEY `fk_giohang` (`MaGioHang`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaChiTietHoaDon`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD PRIMARY KEY (`MaDanhGia`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `MaSach` (`MaSach`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`),
  ADD KEY `PT_ThanhToan` (`PT_ThanhToan`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKhuyenMai`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPhuongThuc`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaChiTietHoaDon` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKhuyenMai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `MaPhuongThuc` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `MaSach` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGioHang`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`),
  ADD CONSTRAINT `fk_giohang` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGioHang`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `danhgiasanpham`
--
ALTER TABLE `danhgiasanpham`
  ADD CONSTRAINT `danhgiasanpham_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `danhgiasanpham_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `danhgiasanpham_ibfk_3` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `danhsachyeuthich`
--
ALTER TABLE `danhsachyeuthich`
  ADD CONSTRAINT `danhsachyeuthich_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `danhsachyeuthich_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`PT_ThanhToan`) REFERENCES `phuongthucthanhtoan` (`MaPhuongThuc`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
