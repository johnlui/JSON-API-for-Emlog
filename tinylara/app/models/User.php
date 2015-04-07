<?php
/**
* User Model
*/
class User extends Illuminate\Database\Eloquent\Model {
  public $timestamps = false;
  protected $table = 'user';
  protected $primaryKey = 'uid';
}