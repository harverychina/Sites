<?php
namespace Home\Model;
use Think\Model;
class ContentModel extends Model{
   protected $_validate = array( 
       array('title','require','标题必须填写！'), 
       array('author','require','作者必须填写！'),        
       array('content','require','内容必须填写！'),
    );
}