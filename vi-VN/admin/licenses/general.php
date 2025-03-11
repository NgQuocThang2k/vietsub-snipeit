<?php

return array(
    'about_licenses_title'      => 'Về Bản quyền',
    'about_licenses'            => 'Bản quyền được sử dụng để theo dõi phần mềm. Họ có một số lượng ghế xác định mà có thể được kiểm tra ra cho cá nhân',
    'checkin'  					=> 'Checkin bản quyền đặt vào',
    'checkout_history'  		=> 'Lịch sử Checkout',
    'checkout'  				=> 'Checkout bản quyền đặt vào',
    'edit'  					=> 'Sửa bản quyền',
    'filetype_info'				=> 'Cho phép các loại tập tin png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, and rar.',
    'clone'  					=> 'Nhân đôi bản quyền',
    'history_for'  				=> 'Lịch sử cho ',
    'in_out'  					=> 'Nhập/Xuất',
    'info'  					=> 'Thông tin bản quyền',
    'license_seats'  			=> 'Số lượng chỗ cấp phép',
    'seat'  					=> 'Seat',
    'seat_count'  				=> 'Seat :count',
    'seats'  					=> 'Seats',
    'software_licenses'  		=> 'Bản quyền phần mềm',
    'user'  					=> 'Người dùng',
    'view'  					=> 'Xem bản quyền',
    'delete_disabled'           => 'This license cannot be deleted yet because some seats are still checked out.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Thu hồi tất cả bản quyền',
                'modal'             => 'Hành động này sẽ thu hồi một bản quyền. | Hành động này sẽ thu hồi tất cả :checkedout_seats_count Bản quyền đang sử dụng.',
                'enabled_tooltip'   => 'Thu hồi TẤT CẢ bản quyền này từ cả người dùng và tài sản',
                'disabled_tooltip'  => 'Tính năng này bị vô hiệu hóa vì không có bản quyền nào đang được sử dụng',
                'disabled_tooltip_reassignable'  => 'Tính năng này bị vô hiệu hóa vì bản quyền không thể sử dụng lại',
                'success'           => 'Bản quyền đã được thu hồi thành công! | Tất cả bản quyền đã được thu hồi thành công!',
                'log_msg'           => 'Đã thu hồi thông qua tính năng thu hồi hàng loạt trong giao diện quản lý bản quyền',
            ],

            'checkout_all'              => [
                'button'                => 'Cấp phát tất cả bản quyền',
                'modal'                 => 'Hành động này sẽ cấp phát một bản quyền cho người dùng khả dụng đầu tiên. | Hành động này sẽ cấp phát tất cả :available_seats_count Bản quyền cho những người dùng khả dụng đầu tiên. Người dùng được coi là khả dụng nếu họ chưa được cấp Bản quyền này và tùy chọn Tự động gán Bản quyền được bật trong tài khoản của họ.',
                'enabled_tooltip'   => 'Cấp phát TẤT CẢ bản quyền (hoặc nhiều nhất có thể) cho TẤT CẢ người dùng',
                'disabled_tooltip'  => 'Tính năng này bị vô hiệu hóa vì không có bản quyền nào khả dụng',
                'success'           => 'Bản quyền đã được cấp phát thành công! | :count bản quyền đã được cấp phát thành công!',
                'error_no_seats'    => 'Không còn bản quyền nào khả dụng.',
                'warn_not_enough_seats'    => ':count người dùng đã được gán bản quyền này, nhưng chúng tôi đã hết bản quyền khả dụng.',
                'warn_no_avail_users'    => 'Nothing to do. Không có người dùng nào chưa được gán bản quyền này.',
                'log_msg'           => 'Đã cấp phát thông qua tính năng cấp phát hàng loạt trong giao diện quản lý Bản quyền',

            ],
    ],

    'below_threshold' => 'Chỉ còn :remaining_count chỗ ngồi cho bản quyền này với số lượng tối thiểu là :min_amt. Bạn nên cân nhắc mua thêm chỗ ngồi sử dụng bản quyền.',
    'below_threshold_short' => 'Mục này dưới số lượng tối thiểu yêu cầu.',
);

