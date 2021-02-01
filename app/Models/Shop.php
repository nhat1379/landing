<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';
    public $fillable = ['name','sort_name','foreign_name','avatar','banner','email','phone','province_id','district_id','ward_id','address','desc','status','active','type','facebook','zalo','latitude','longitude','tax_code','business_registration','fouded_year','experience_year','specialize','branches','current_employee','working_time'];
    public $timestamp = true;

    public static function fields() {

        $provinces = Province::all()->toArray();

        $provinces = array_map(function($item) {
            return [
                'id' => $item['matp'],
                'label' => $item['name']
            ];
        }, $provinces);

        array_unshift($provinces, ['id' => '', 'label' => 'Chọn']);

        return [
            'name' => [
                'type' => 'text',
                'label' => 'Tên công ty',
                'required' => true
            ],
            'sort_name' => [
                'type' => 'text',
                'label' => 'Tên viết tắt',
            ],
            'foreign_name' => [
                'type' => 'text',
                'label' => 'Tên nước ngoài',
            ],
            'avatar' => [
                'type' => 'image',
                'label' => 'Ảnh đại diện',
            ],
            'banner' => [
                'type' => 'image',
                'label' => 'Banner',
            ],
            'email' => [
                'type' => 'email',
                'label' => 'Địa chỉ E-mail',
                'required' => true
            ],
            'phone' => [
                'type' => 'text',
                'label' => 'Số điện thoại',
                'required' => true
            ],
            'province_id' => [
                'type' => 'select',
                'label' => 'Tỉnh/TP',
                'required' => true,
                'items' => $provinces
            ],
            'district_id' => [
                'type' => 'select',
                'label' => 'Quận/Huyện',
                'required' => true,
                'items' => []
            ],
            'ward_id' => [
                'type' => 'select',
                'label' => 'Phường/Xã',
                'required' => true,
                'items' => []
            ],
            'address' => [
                'type' => 'text',
                'label' => 'Địa chỉ cụ thể',
                'required' => true
            ],
            'desc' => [
                'type' => 'textarea',
                'label' => 'Mô tả về công ty'
            ],
            'facebook' => [
                'type' => 'text',
                'label' => 'Đường dẫn Facebook'
            ],
            'zalo' => [
                'type' => 'text',
                'label' => 'Zalo'
            ],
            'tax_code' => [
                'type' => 'text',
                'label' => 'Mã số thuế'
            ],
            'business_registration' => [
                'type' => 'image',
                'label' => 'Photo đăng ký kinh doanh'
            ],
            'fouded_year' => [
                'type' => 'text',
                'label' => 'Năm thành lập'
            ],
            'experience_year' => [
                'type' => 'text',
                'label' => 'Thời gian hoạt động'
            ],
            'specialize' => [
                'type' => 'text',
                'label' => 'Lĩnh vực chuyên môn'
            ],
            'branches' => [
                'type' => 'textarea',
                'label' => 'Chi nhánh'
            ],
            'current_employee' => [
                'type' => 'text',
                'label' => 'Số lượng nhân viên'
            ],
            'working_time' => [
                'type' => 'text',
                'label' => 'Thời gian làm việc'
            ]
        ];
    }
}
