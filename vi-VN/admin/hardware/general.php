<?php

return [
    'about_assets_title'           => 'Giới thiệu về Tài sản',
    'about_assets_text'            => 'Tài sản là các mục được theo dõi bằng số sê-ri hoặc thẻ nội dung. Chúng thường có giá trị cao hơn khi xác định một mục cụ thể.',
    'archived'  				=> 'Đã lưu trữ',
    'asset'  					=> 'Tài sản',
    'bulk_checkout'             => 'Thanh toán hàng loạt',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> 'Checkin tài sản',
    'checkout'  				=> 'Tài sản thanh toán',
    'clone'  					=> 'Nhân đôi tài sản',
    'deployable'  				=> 'Cho phép cấp phát',
    'deleted'  					=> 'Tài sản này đã bị xóa.',
    'delete_confirm'            => 'Bạn có chắc chắn muốn xóa tài sản này không?',
    'edit'  					=> 'Sửa tài sản',
    'model_deleted'  			=> 'Model tài sản này đã bị xóa. Vui lòng khôi phục lại model trước khi khôi phục tài sản.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Cho phép đề xuất',
    'requested'				    => 'Yêu cầu',
    'not_requestable'           => 'Không cho phép đề xuất',
    'requestable_status_warning' => 'Không thay đổi trạng thái yêu cầu',
    'restore'  					=> 'Phục hồi tài sản',
    'pending'  					=> 'Đang chờ',
    'undeployable'  			=> 'Không cho phép cấp phát',
    'undeployable_tooltip'  	=> 'Tài sản này có nhãn trạng thái không thể triển khai và không thể kiểm tra vào lúc này.',
    'view'  					=> 'Xem tài sản',
    'csv_error' => 'Có lỗi trong file CSV của bạn:',
    'import_text' => '<p>Tải lên một file CSV chứa lịch sử tài sản. Tài sản và người dùng PHẢI đã tồn tại trong hệ thống, nếu không chúng sẽ bị bỏ qua. Việc so khớp tài sản để nhập lịch sử được thực hiện dựa trên mã tài sản. Hệ thống sẽ cố gắng tìm người dùng phù hợp dựa trên tên người dùng bạn cung cấp và tiêu chí bạn chọn bên dưới. Nếu bạn không chọn bất kỳ tiêu chí nào, hệ thống sẽ tự động khớp theo định dạng tên người dùng bạn đã cấu hình trong <code>Quản trị &gt; Cài đặt chung</code>.</p><p>Các trường trong CSV phải khớp với tiêu đề: <strong>Mã Tài Sản, Tên, Ngày Xuất, Ngày Nhập</strong>. Bất kỳ trường bổ sung nào sẽ bị bỏ qua. </p><p>Ngày Nhập: để trống hoặc ngày nhập trong tương lai sẽ xuất tài sản cho người dùng liên quan. Nếu không có cột Ngày Nhập, hệ thống sẽ tạo ngày nhập là ngày hôm nay.</p>
    ',
    'csv_import_match_f-l' => 'Thử khớp người dùng theo định dạng <strong>họ.tên</strong> (<code>nguyen.van</code>)',
    'csv_import_match_initial_last' => 'Thử khớp người dùng theo định dạng <strong>chữ cái đầu của tên và họ</strong> (<code>vnguyen</code>)',
    'csv_import_match_first' => 'Thử khớp người dùng theo <strong>tên</strong> (<code>van</code>)',
    'csv_import_match_email' => 'Thử khớp người dùng theo <strong>email</strong> như tên đăng nhập',
    'csv_import_match_username' => 'Thử khớp người dùng theo <strong>tên người dùng</strong>',
    'error_messages' => 'Thông báo lỗi:',
    'success_messages' => 'Thông báo thành công:',
    'alert_details' => 'Xem bên dưới để biết thêm chi tiết.',
    'custom_export' => 'Lựa chọn xuất',
    'mfg_warranty_lookup' => ':manufacturer Tra cứu tình trạng bảo hành',
    'user_department' => 'Bộ phận người dùng',
];
