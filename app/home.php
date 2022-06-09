<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{

    protected  $fillable=['id','home_title','image_alt','group_id','home_title_desc','slider_text_1','slider_text_2','slider_text_3','services_heading','services_desc','services_icon_1','services_heading_1','services_desc_1','services_icon_2','services_heading_2','services_desc_2','services_icon_3','services_heading_3','services_desc_3','services_icon_4','services_heading_4','services_desc_4','services_icon_5','services_heading_5','services_desc_5','services_icon_6','services_heading_6','services_desc_6','company_heading','company_heading_desc','company_image','company_desc','company_item_1','company_item_per_1','company_item_2','company_item_per_2','success_heading','success_heading_desc','success_head_1','success_head_desc_1','success_head_2','success_head_desc_2','success_head_3','success_head_desc_3','success_head_4','success_head_desc_4','success_head_5','success_head_desc_5','success_head_6','success_head_desc_6'];
    protected $primaryKey = 'id';
    protected $hidden = ['_token'];

}
