<?php

return array(

    'does_not_exist' => 'Địa điểm không tồn tại.',
    'assoc_users'    => 'Địa điểm này không thể xóa vì hiện đang là địa điểm ghi nhận cho ít nhất một tài sản hoặc người dùng, có tài sản được gán cho nó, hoặc là địa điểm cha của một địa điểm khác. Vui lòng cập nhật dữ liệu của bạn để không còn tham chiếu đến địa điểm này và thử lại.',
    'assoc_assets'	 => 'Địa điểm này hiện tại đã được liên kết với ít nhất một tài sản và không thể xóa. Xin vui lòng cập nhật tài sản của bạn để không còn liên kết với địa điểm này nữa và thử lại. ',
    'assoc_child_loc'	 => 'Địa điểm này hiện tại là cấp parent của ít nhật một địa điểm con và không thể xóa. Xin vui lòng cập nhật địa điểm của bạn để không liên kết đến địa điểm này và thử lại. ',
    'assigned_assets' => 'Tài sản được giao',
    'current_location' => 'Vị trí hiện tại',
    'open_map' => 'Open in :map_provider_icon Maps',


    'create' => array(
        'error'   => 'Địa điểm chưa tạo, xin vui lòng thử lại.',
        'success' => 'Địa điểm đã tạo thành công.'
    ),

    'update' => array(
        'error'   => 'Địa điểm chưa cập nhật, xin vui lòng thử lại',
        'success' => 'Địa điểm đã cập nhật thành công.'
    ),

    'restore' => array(
        'error'   => 'Location was not restored, please try again',
        'success' => 'Location restored successfully.'
    ),

    'delete' => array(
        'confirm'   	=> 'Bạn có chắc muốn xóa địa điểm này?',
        'error'   => 'Có vấn đề xảy ra khi xóa địa điểm. Xin vui lòng thử lại.',
        'success' => 'Địa điểm đã xóa thành công.'
    )

);
