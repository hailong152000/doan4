<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //fillable những trường nào được thêm dử liệu ...sử dụng 1 trong 2 khi sử dụng hàm create đến insert dữ liệu vào db-chỉ định cột được thêm
    protected $guarded = [];//trừ những bản ghi nào không được thêm dữ liệu...còn khi nài dùng hàm insert để thêm thì không cần 2 thằng này-thêm tất cả các cột             
   // relationship->quan hệ giữa 2 bảng
   //trong laravel có relationship thể hiện quan hệ giữa các bảng tương tự foreign key
   // trong relationship thể hiện tương tác 1-1 giữa 2 bảng
    //Lên kế 2 bản bằng quan hệ nhiều nhiều phải dùng bảng trung gian để liên kết 2 bảng,quy tắc tạo:Tên bảng số ít sắp xếp a->z 
        // có 2 cột khóa ngoại có tên bảng +_id thể hiện nó tham chiếu đến id của bảng nào
        // ví dụ: Product-Shop(products-shops)
        //tên bảng trung gian:product_shop có 2 khóa ngoại
        //1-1 hasone
        //1-n hasMany
        //n-1 Belong To
        //n-n Belong ToMany
        //các hàm thể hiện quan hệ có 3 đối số truyền vào:thể hiện tới bảng nào,khóa ngoại của bảng,khóa chính của bảng
        //cấp thứ nhất đại diện cho thương hiệu
        //cấp thứ 2 đại diện cho danh mục sản phẩm theo thương hiệu
        //thể hiện khi tạo csdl bằng cách thương hiệu thì có parent_id bằng 0
        //danh mục theo thương hiệu thì có partent_id=với id của thương hiệu->parent id là thằng tham chiếu,id là bị tham chiếu
        //thằng đi tham chiếu là khóa ngoại
        //bảng category đang thể hiện quan hệ 1-n với chính nó vì 1 thằng thương hiệu có nhiều danh mục sản phẩm(mà 2 thằng này cùng sản phẩm)
    //đặt tên biến hoặc đặt tên function thì nên đặt tên gợi nhớ đến chức năng hoặc nhiệm vụ của nó
    //return là trả về dữ liệu

    //vơi trường hợp này bảng category đang tham chiếu đến chính nó + với khóa chính có tên là id thì mình k cần truyền tham số thứ 3
   //từ 1 bản ghi category n sẽ tìm kiếm trong bảng category có bản ghi nào có parent_id tham chiếu đến ai đi nếu k có thì return thông tin bản ghi đấy
    //khi làm việc với hàm children thì chúng ta có 2 hàm để tương tác với children\
    // hàm has() để kiểm tra xem nó có tồn tại không?,hàm get() để lấy ra điều kiện nào đó
    //hàm with() để hiện thêm thông tin đó theo 1 cái gì đó
    //bây giờ lấy tất cả bản ghi có children has('children')->get()
    //bây giờ lấy thông tin những children theo những thằng có children:has('children') with('children')->get()
    //category-product
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id') ;
    }
}
