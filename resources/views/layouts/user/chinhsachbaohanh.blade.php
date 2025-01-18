@extends('layouts.user.layout')

@section('title', 'Chính sách bảo hàng')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Chính Sách Trả Hàng Sách</h1>

    <div class="policy-section">
        <h2>1. Điều kiện chấp nhận trả hàng</h2>
        <ul type="none">
            <li>Sách bị lỗi in ấn như thiếu trang, sai nội dung, mờ chữ.</li>
            <li>Sách bị hư hỏng trong quá trình vận chuyển, ví dụ: bìa sách bị rách, bong gáy.</li>
            <li>Yêu cầu trả hàng trong vòng 7 ngày kể từ ngày nhận được sản phẩm (dựa trên thông tin vận chuyển).</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>2. Trường hợp không chấp nhận trả hàng</h2>
        <ul type="none">
            <li>Sách đã qua sử dụng hoặc có dấu hiệu bị hư hỏng do người dùng.</li>
            <li>Sách không còn nguyên trạng ban đầu, ví dụ: mất phụ kiện đi kèm, rách hoặc mất bìa.</li>
            <li>Sách bị yêu cầu trả quá thời hạn quy định (sau 7 ngày).</li>
            <li>Sách thuộc danh mục không áp dụng trả hàng (sách khuyến mãi, sách điện tử, v.v.).</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>3. Quy trình trả hàng</h2>
        <ul type="none">
            <li>Liên hệ với chúng tôi qua hotline hoặc email để thông báo về sản phẩm cần trả.</li>
            <li>Cung cấp thông tin đơn hàng và hình ảnh hoặc video mô tả tình trạng sách.</li>
            <li>Đóng gói sách cẩn thận và gửi về địa chỉ của chúng tôi theo hướng dẫn.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>4. Chi phí trả hàng</h2>
        <ul type="none">
            <li>Chúng tôi sẽ chịu phí vận chuyển trả hàng trong trường hợp lỗi do nhà sản xuất hoặc vận chuyển.</li>
            <li>Trong các trường hợp khác, khách hàng sẽ chịu phí vận chuyển trả hàng.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>5. Hoàn tiền hoặc đổi sách</h2>
        <ul type="none">
            <li>Khách hàng có thể chọn hoàn tiền hoặc đổi sách tương đương.</li>
            <li>Quá trình hoàn tiền hoặc đổi sách sẽ được xử lý trong vòng 7-14 ngày làm việc sau khi nhận lại sản phẩm.</li>
        </ul>
    </div>

    <div class="policy-section">
        <h2>6. Lưu ý</h2>
        <p>Vui lòng giữ lại hóa đơn mua hàng và các phụ kiện đi kèm (nếu có) để đảm bảo quá trình trả hàng được thuận lợi.</p>
    </div>

    <p class="text-center">Chính sách này có hiệu lực từ ngày ....</p>
</div>
@endsection
