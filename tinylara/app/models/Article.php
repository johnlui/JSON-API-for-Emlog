<?php
/**
* Article Model
*/
class Article extends Illuminate\Database\Eloquent\Model {
  public $timestamps = false;
  protected $table = 'blog';
  protected $primaryKey = 'gid';
}