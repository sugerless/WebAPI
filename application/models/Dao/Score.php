<?php


class Dao_Score_Model extends Dao_Base_Model
{
    protected $table='cords';
    protected $primaryKey='record_id';
    protected $guarded=['record_id','created_at','updated_at'];

    
}